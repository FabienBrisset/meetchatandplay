<?php

namespace meetchatandplay\Home\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use meetchatandplay\Home\HomeBundle\Entity\User;

class HomeController extends Controller
{
    public function indexAction() {
		$req = $this->get('request');
		$session = $req->getSession();
		if ($session != NULL) {
			// Deconnexion -> redirection vers la page d'accueil 
			$session->invalidate();
		}
	
        return $this->render('meetchatandplayHomeHomeBundle:Home:index.html.twig');
    }
	
	public function indexMeetAction() {
		$req = $this->get('request');
		$session = $req->getSession();
		
		$connecte = $session->get('pseudo');
		
		$date = date_create(date('Y-m-d H:i:s'));

		if ($connecte != NULL) {
			$user = $this->getDoctrine()
					->getRepository('meetchatandplayHomeHomeBundle:User')
					->findOneByPseudo($connecte);
			
			$derniers_inscrits = $this->getDoctrine()
				   ->getManager()
				   ->getRepository('meetchatandplayHomeHomeBundle:User')
				   ->findBy(array(), array("id" => 'desc'), 21);
				  
			/* A modifier */
			$derniers_vip = $this->getDoctrine()
			   ->getManager()
			   ->getRepository('meetchatandplayHomeHomeBundle:User')
			   ->findBy(array('meet_vip' => true), array("meet_vip_date" => 'desc'), 5);
			   
			$em = $this->getDoctrine()->getManager();
			$req_derniers_donateurs = $em->createQuery(
				'SELECT u
				FROM meetchatandplayHomeHomeBundle:User u
				WHERE u.meet_don IS NOT NULL
				ORDER BY u.meet_date_don');

			$derniers_donateurs = $req_derniers_donateurs->getResult();
			
			$donateurs = NULL;
			
			if ($derniers_donateurs != NULL) {
				if (sizeof($derniers_donateurs) > 5) {
					for ($i = (sizeof($derniers_donateurs) - 1); $i >= (sizeof($derniers_donateurs) - 5); $i--) {
						$donateurs[] = $derniers_donateurs[$i];
					}
				}
				else {
					$donateurs = $derniers_donateurs;
				}
			}
			   
			$user->setMeetDerniereConnexion(date_create(date('Y-m-d H:i:s')));
			
			$em->persist($user);
			$em->flush();
				   
			if ($donateurs != NULL) {
				if ($derniers_vip != NULL) {
					if ($derniers_inscrits != NULL) {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_inscrits' => $derniers_inscrits,
								'derniers_vip' => $derniers_vip,
								'derniers_donateurs' => $donateurs,
								'date' => $date));
					}
					else {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_vip' => $derniers_vip,
								'derniers_donateurs' => $donateurs,
								'date' => $date));
					}
				}
				else {
					if ($derniers_inscrits != NULL) {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_inscrits' => $derniers_inscrits,
								'derniers_donateurs' => $donateurs,
								'date' => $date));
					}
					else {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_donateurs' => $donateurs,
								'date' => $date));
					}
				}
			}
			else {
				if ($derniers_vip != NULL) {
					if ($derniers_inscrits != NULL) {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_inscrits' => $derniers_inscrits,
								'derniers_vip' => $derniers_vip,
								'date' => $date));
					}
					else {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_vip' => $derniers_vip,
								'date' => $date));
					}
				}
				else {
					if ($derniers_inscrits != NULL) {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_inscrits' => $derniers_inscrits,
								'date' => $date));
					}
					else {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'date' => $date));
					}
				}
			}
		}
		
		$deco = $session->get('deco');
		
		if ($req->getMethod() != 'POST' && ((!isset($_COOKIE['pseudo'])) || $deco != NULL)) { 
			return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig');
		}
		else {
			// Si il existe un cookie et que l'utilisateur vient de se déconnecter (changement de compte)
			if (isset($_COOKIE['pseudo']) && $deco != NULL && (!isset($_POST['inscription']))) {
				if (!isset($_SESSION)) {
					$session = new Session();
					$session->start();
				}
				
				$pass = md5($req->request->get('mot_de_passe'));
			
				$user = $this->getDoctrine()
					->getRepository('meetchatandplayHomeHomeBundle:User')
					->findOneBy(array(
								'pseudo' => $req->request->get('pseudo'),
								'motDePasse' => $pass));
								
				/* login+password OK -> redirection vers notre page */
				
				if ($user != NULL) {
					$pseudo = $user->getPseudo();
					
					if (isset($_POST['rester_connecte'])) {
						setcookie("pseudo", $pseudo, time()+(365*24*3600*3));
					}
					
					if (!isset($_SESSION)) {
						$session = new Session();
						$session->start();
					}
					
					$session->invalidate();
					$session->set('pseudo', $req->request->get('pseudo'));
					
					return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
				}
				else { /* login+password FAIL -> redirection inscription */
					return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
						'erreur' => "Le pseudo saisi n'existe pas dans nos registres ou le mot de passe est incorrect !"));
				}
			}
			else if (isset($_COOKIE['pseudo']) && $deco == NULL && (!isset($_POST['inscription']))) {
				if (!isset($_SESSION)) {
					$session = new Session();
					$session->start();
				}
		
				$session->set('pseudo', $_COOKIE['pseudo']); 
				
				$user = $this->getDoctrine()
					->getRepository('meetchatandplayHomeHomeBundle:User')
					->findOneByPseudo($_COOKIE['pseudo']);
				
				$derniers_inscrits = $this->getDoctrine()
					   ->getManager()
					   ->getRepository('meetchatandplayHomeHomeBundle:User')
					   ->findBy(array(), array("id" => 'desc'), 21);
					 
				/* A modifier */
				$derniers_vip = $this->getDoctrine()
				   ->getManager()
				   ->getRepository('meetchatandplayHomeHomeBundle:User')
				   ->findBy(array('meet_vip' => true), array("meet_vip_date" => 'desc'), 5);

				$em = $this->getDoctrine()->getManager();
			    $req_derniers_donateurs = $em->createQuery(
					'SELECT u
					FROM meetchatandplayHomeHomeBundle:User u
					WHERE u.meet_don IS NOT NULL
					ORDER BY u.meet_date_don');

				$derniers_donateurs = $req_derniers_donateurs->getResult();
			
				$donateurs = NULL;
				
				if ($derniers_donateurs != NULL) {
					if (sizeof($derniers_donateurs) > 5) {
						for ($i = (sizeof($derniers_donateurs) - 1); $i >= (sizeof($derniers_donateurs) - 5); $i--) {
							$donateurs[] = $derniers_donateurs[$i];
						}
					}
					else {
						$donateurs = $derniers_donateurs;
					}
				}
				   
				$user->setMeetDerniereConnexion(date_create(date('Y-m-d H:i:s')));
				
				$em->persist($user);
				$em->flush();
					   
				if ($donateurs != NULL) {
					if ($derniers_vip != NULL) {
						if ($derniers_inscrits != NULL) {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_inscrits' => $derniers_inscrits,
									'derniers_vip' => $derniers_vip,
									'derniers_donateurs' => $donateurs,
									'date' => $date));
						}
						else {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_vip' => $derniers_vip,
									'derniers_donateurs' => $donateurs,
									'date' => $date));
						}
					}
					else {
						if ($derniers_inscrits != NULL) {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_inscrits' => $derniers_inscrits,
									'derniers_donateurs' => $donateurs,
									'date' => $date));
						}
						else {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_donateurs' => $donateurs,
									'date' => $date));
						}
					}
				}
				else {
					if ($derniers_vip != NULL) {
						if ($derniers_inscrits != NULL) {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_inscrits' => $derniers_inscrits,
									'derniers_vip' => $derniers_vip,
									'date' => $date));
						}
						else {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_vip' => $derniers_vip,
									'date' => $date));
						}
					}
					else {
						if ($derniers_inscrits != NULL) {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_inscrits' => $derniers_inscrits,
									'date' => $date));
						}
						else {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'date' => $date));
						}
					}
				}
			}
			else if (isset($_POST['connexion'])) {
			// Connexion
			
				$pass = md5($req->request->get('mot_de_passe'));
			
				$user = $this->getDoctrine()
					->getRepository('meetchatandplayHomeHomeBundle:User')
					->findOneBy(array(
								'pseudo' => $req->request->get('pseudo'),
								'motDePasse' => $pass));
								
				/* login+password OK -> redirection vers notre page */
				
				if ($user != NULL) {
					$pseudo = $user->getPseudo();
					
					if ($_POST['rester_connecte'] != NULL) {
						setcookie("pseudo", $pseudo, time()+(365*24*3600*3));
					}
					
					if (!isset($_SESSION)) {
						$session = new Session();
						$session->start();
					}
			
					$session->set('pseudo', $req->request->get('pseudo')); 
					
					return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
				}
				else { /* login+password FAIL -> redirection inscription */
					return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
						'erreur' => "Le pseudo saisi n'existe pas dans nos registres ou le mot de passe est incorrect !"));
				}
			}
			else {
			// Inscription
			
				if ($_POST['mot_de_passe'] != $_POST['mot_de_passe2']) {
					return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
						  'erreur' => "Les deux mots de passe saisis sont différents, veuillez retenter votre inscription ou vous connecter !"));
				}
	
				/* Création d'un nouvel utilisateur */	
				$user = new User;
				
				$userExisteDeja = $this->getDoctrine()
				->getRepository('meetchatandplayHomeHomeBundle:User')
				->findOneByPseudo($this->getRequest()->request->get('pseudo'));

				/* Doublon -> inscription impossible */
				if ($userExisteDeja != NULL) {
					$userExisteDejaMaisBonMotDePasse = $this->getDoctrine()
						->getRepository('meetchatandplayHomeHomeBundle:User')
						->findOneBy(array(
							"pseudo" => $this->getRequest()->request->get('pseudo'),
							"motDePasse" => md5($this->getRequest()->request->get('mot_de_passe'))));
					
					if ($userExisteDejaMaisBonMotDePasse == NULL) {
						return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
						  'erreur' => "Le pseudo saisi est déjà pris, veuillez en choisir un autre !"));
					}
				}
				if ($userExisteDeja == NULL) {
					$user->setPseudo($this->getRequest()->request->get('pseudo'));
				
					$pass = $this->getRequest()->request->get('mot_de_passe');
					$crypted_pass = md5($pass);
				
					$user->setMotDePasse($crypted_pass);
					
					$user->setMeet(true);
					
					if (isset($_POST['chat'])) {
						$chat = $_POST['chat'];
						$user->setChat(true);
					}
					else {
						$user->setChat(false);
					}
					
					if (isset($_POST['play'])) {
						$play = $_POST['play'];
						$user->setPlay(true);
					}
					else {
						$user->setPlay(false);
					}
				}
				
				if (isset($userExisteDejaMaisBonMotDePasse)) {
					if ($userExisteDejaMaisBonMotDePasse != NULL) {
						if ($userExisteDejaMaisBonMotDePasse->getMeet() == false) {
							$userExisteDejaMaisBonMotDePasse->setMeet(true);
						}
						else {
							return $this->render('meetchatandplayHomeHomeBundle:Home:index_meet.html.twig', array(
								  'erreur' => "Vous êtes déjà inscrit sur la partie 'Rencontre' du site, veuillez vous connecter !"));
						}
						
						if ($userExisteDejaMaisBonMotDePasse->getChat() == false) {
							if (isset($_POST['chat'])) {
								$chat = $_POST['chat'];
								$userExisteDejaMaisBonMotDePasse->setChat(true);
							}
						}
						else {
							$userExisteDejaMaisBonMotDePasse->setChat(true);
						}
						
						if ($userExisteDejaMaisBonMotDePasse->getPlay() == false) {
							if (isset($_POST['play'])) {
								$play = $_POST['play'];
								$userExisteDejaMaisBonMotDePasse->setPlay(true);
							}
						}
						else {
							$userExisteDejaMaisBonMotDePasse->setPlay(true);
						}
						
						$em = $this->getDoctrine()->getManager();
						$em->persist($userExisteDejaMaisBonMotDePasse);
						$em->flush();
						
						if (!isset($_SESSION)) {
							$session = new Session();
							$session->start();
						}
			
						$session->set('pseudo', $req->request->get('pseudo')); 
						setcookie("pseudo", $req->request->get('pseudo'), time()+(365*24*3600*3));

						return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
					}
				}

				/* Aucun doublon -> inscription possible. */

				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();
				
				if (!isset($_SESSION)) {
					$session = new Session();
					$session->start();
				}
		
				$session->set('pseudo', $req->request->get('pseudo')); 
				setcookie("pseudo", $req->request->get('pseudo'), time()+(365*24*3600*3));

				return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
			}
		}
	}
	
	public function disconnectionMeetAction($pseudo = NULL, $mot_de_passe = NULL) {
		// On récupère la requête
		$request = $this->get('request');
		
		$session = $request->getSession();
		
		$user = $this->getDoctrine()
					->getRepository('meetchatandplayHomeHomeBundle:User')
					->findOneBy(array('pseudo' => $pseudo, 'motDePasse' => $mot_de_passe));
					
		if ($user != NULL) {		
			if ($session != NULL) {
				/* Deconnexion -> redirection vers la page d'accueil */			
				$session->invalidate();
			}
			
			$session->set('deco', 'deco'); 
			
			return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
		}
		else {			
			return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
		}
	}
}
