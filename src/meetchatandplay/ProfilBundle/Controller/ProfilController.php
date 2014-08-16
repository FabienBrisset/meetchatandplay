<?php

namespace meetchatandplay\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller {
    public function monProfilAction() {
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
						return $this->render('meetchatandplayProfilBundle:Profil:mon_profil.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_inscrits' => $derniers_inscrits,
								'derniers_vip' => $derniers_vip,
								'derniers_donateurs' => $donateurs,
								'date' => $date));
					}
					else {
						return $this->render('meetchatandplayProfilBundle:Profil:mon_profil.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_vip' => $derniers_vip,
								'derniers_donateurs' => $donateurs,
								'date' => $date));
					}
				}
				else {
					if ($derniers_inscrits != NULL) {
						return $this->render('meetchatandplayProfilBundle:Profil:mon_profil.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_inscrits' => $derniers_inscrits,
								'derniers_donateurs' => $donateurs,
								'date' => $date));
					}
					else {
						return $this->render('meetchatandplayProfilBundle:Profil:mon_profil.html.twig', array(
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
						return $this->render('meetchatandplayProfilBundle:Profil:mon_profil.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_inscrits' => $derniers_inscrits,
								'derniers_vip' => $derniers_vip,
								'date' => $date));
					}
					else {
						return $this->render('meetchatandplayProfilBundle:Profil:mon_profil.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_vip' => $derniers_vip,
								'date' => $date));
					}
				}
				else {
					if ($derniers_inscrits != NULL) {
						return $this->render('meetchatandplayProfilBundle:Profil:mon_profil.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'derniers_inscrits' => $derniers_inscrits,
								'date' => $date));
					}
					else {
						return $this->render('meetchatandplayProfilBundle:Profil:mon_profil.html.twig', array(
								'connecte' => true,
								'user' => $user,
								'date' => $date));
					}
				}
			}
		}
		else {
			return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
		}
    }
	
	 public function autreProfilAction($pseudo = NULL) {
		$req = $this->get('request');
		$session = $req->getSession();
	
		$connecte = $session->get('pseudo');
		
		$date = date_create(date('Y-m-d H:i:s'));

		if ($connecte != NULL) {
			$user = $this->getDoctrine()
					->getRepository('meetchatandplayHomeHomeBundle:User')
					->findOneByPseudo($connecte);
			
			$profil = $this->getDoctrine()
					->getRepository('meetchatandplayHomeHomeBundle:User')
					->findOneByPseudo($pseudo);
	
			if ($profil != NULL) {
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
							return $this->render('meetchatandplayProfilBundle:Profil:autre_profil.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_inscrits' => $derniers_inscrits,
									'profil' => $profil,
									'derniers_vip' => $derniers_vip,
									'derniers_donateurs' => $donateurs,
									'date' => $date));
						}
						else {
							return $this->render('meetchatandplayProfilBundle:Profil:autre_profil.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'profil' => $profil,
									'derniers_vip' => $derniers_vip,
									'derniers_donateurs' => $donateurs,
									'date' => $date));
						}
					}
					else {
						if ($derniers_inscrits != NULL) {
							return $this->render('meetchatandplayProfilBundle:Profil:autre_profil.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_inscrits' => $derniers_inscrits,
									'profil' => $profil,
									'derniers_donateurs' => $donateurs,
									'date' => $date));
						}
						else {
							return $this->render('meetchatandplayProfilBundle:Profil:autre_profil.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'profil' => $profil,
									'derniers_donateurs' => $donateurs,
									'date' => $date));
						}
					}
				}
				else {
					if ($derniers_vip != NULL) {
						if ($derniers_inscrits != NULL) {
							return $this->render('meetchatandplayProfilBundle:Profil:autre_profil.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_inscrits' => $derniers_inscrits,
									'profil' => $profil,
									'derniers_vip' => $derniers_vip,
									'date' => $date));
						}
						else {
							return $this->render('meetchatandplayProfilBundle:Profil:autre_profil.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'profil' => $profil,
									'derniers_vip' => $derniers_vip,
									'date' => $date));
						}
					}
					else {
						if ($derniers_inscrits != NULL) {
							return $this->render('meetchatandplayProfilBundle:Profil:autre_profil.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'derniers_inscrits' => $derniers_inscrits,
									'profil' => $profil,
									'date' => $date));
						}
						else {
							return $this->render('meetchatandplayProfilBundle:Profil:autre_profil.html.twig', array(
									'connecte' => true,
									'user' => $user,
									'profil' => $profil,
									'date' => $date));
						}
					}
				}
			}
			else {
				return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
			}
		}
		else {
			return $this->redirect($this->generateUrl('meetchatandplay_meet_homepage'));
		}
    }
}
