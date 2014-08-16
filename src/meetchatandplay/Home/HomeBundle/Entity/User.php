<?php

namespace meetchatandplay\Home\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="meetchatandplay\Home\HomeBundle\Entity\UserRepository")
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=60)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=60)
     */
    private $motDePasse;
	
	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="meet", type="boolean")
	 *
	 */
	private $meet;
	
	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="chat", type="boolean")
	 *
	 */
	private $chat;
	
	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="play", type="boolean")
	 *
	 */
	private $play;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_nom", type="string", length=60, nullable=true)
     */
    private $meet_nom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_prenom", type="string", length=60, nullable=true)
     */
    private $meet_prenom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_mail", type="string", length=60, nullable=true)
     */
    private $meet_mail;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="meet_age", type="integer", nullable=true)
     */
    private $meet_age;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="meet_tel", type="integer", nullable=true)
     */
    private $meet_tel;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_photo_profil", type="string", length=100, nullable=true)
     */
    private $meet_photo_profil;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_ville", type="string", length=100, nullable=true)
     */
    private $meet_ville;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_departement", type="string", length=100, nullable=true)
     */
    private $meet_departement;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="meet_taille", type="integer", nullable=true)
     */
    private $meet_taille;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="meet_poids", type="integer", nullable=true)
     */
    private $meet_poids;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="meet_points", type="integer")
     */
    private $meet_points;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_photo_couverture", type="string", length=100, nullable=true)
     */
    private $meet_photo_couverture;
	
	/**
     * @var array
     *
     * @ORM\Column(name="meet_photos", type="array", nullable=true)
     */
    private $meet_photos;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_grade", type="string", length=80)
     */
    private $meet_grade;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_grade_lien_image", type="string", length=80)
     */
    private $meet_grade_lien_image;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_description", type="string", length=255, nullable=true)
     */
    private $meet_description;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="meet_fumeur", type="boolean", nullable=true)
     */
    private $meet_fumeur;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="meet_alcool", type="boolean", nullable=true)
     */
    private $meet_alcool;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_style", type="string", length=25, nullable=true)
     */
    private $meet_style;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_yeux", type="string", length=10, nullable=true)
     */
    private $meet_yeux;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="meet_voiture", type="boolean", nullable=true)
     */
    private $meet_voiture;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_situation_professionnelle", type="string", length=30, nullable=true)
     */
    private $meet_situation_professionnelle;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_precisions", type="string", length=40, nullable=true)
     */
    private $meet_precisions;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_regularite_connexion", type="string", length=25, nullable=true)
     */
    private $meet_regularite_connexion;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_qualite", type="string", length=30, nullable=true)
     */
    private $meet_qualite;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_defaut", type="string", length=30, nullable=true)
     */
    private $meet_defaut;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_discotheque_preferee", type="string", length=80, nullable=true)
     */
    private $meet_discotheque_preferee;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_bar_prefere", type="string", length=80, nullable=true)
     */
    private $meet_bar_prefere;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_restaurant_prefere", type="string", length=80, nullable=true)
     */
    private $meet_restaurant_prefere;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_etablissements_frequentes", type="string", length=255, nullable=true)
     */
    private $meet_etablissements_frequentes;
	
	/**
     * @var array
     *
     * @ORM\Column(name="meet_videos", type="array", nullable=true)
     */
    private $meet_videos;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_site_web", type="string", length=150, nullable=true)
     */
    private $meet_site_web;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_type_rencontre", type="string", length=60, nullable=true)
     */
    private $meet_type_rencontre;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_atout", type="string", length=80, nullable=true)
     */
    private $meet_atout;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_activite_hobbie", type="string", length=150, nullable=true)
     */
    private $meet_activite_hobbie;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="meet_lecture", type="boolean", nullable=true)
     */
    private $meet_lecture;
	
	/**
     * @var string
     *
     * @ORM\Column(name="meet_mer_montagne", type="string", length=10, nullable=true)
     */
    private $meet_mer_montagne;
	
	/**
     * @var array
     *
     * @ORM\Column(name="meet_musiques_preferees", type="array", nullable=true)
     */
    private $meet_musiques_preferees;
	
	/**
     * @var array
     *
     * @ORM\Column(name="meet_aime", type="array", nullable=true)
     */
    private $meet_aime;
	
	/**
     * @var array
     *
     * @ORM\Column(name="meet_aime_pas", type="array", nullable=true)
     */
    private $meet_aime_pas;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="meet_derniere_connexion", type="datetime")
     */
    private $meet_derniere_connexion;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="meet_don", type="integer", nullable=true)
     */
    private $meet_don;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="meet_date_don", type="datetime", nullable=true)
     */
    private $meet_date_don;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="meet_vip", type="boolean")
     */
    private $meet_vip;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="meet_vip_date", type="datetime", nullable=true)
     */
    private $meet_vip_date;
	
	public function __construct() {
		$this->setMeet(false);
		$this->setChat(false);
		$this->setPlay(false);
		$this->setMeetNom(NULL);
		$this->setMeetPrenom(NULL);
		$this->setMeetMail(NULL);
		$this->setMeetAge(NULL);
		$this->setMeetTel(NULL);
		$this->setMeetPhotoProfil(NULL);
		$this->setMeetPhotoCouverture(NULL);
		$this->setMeetPhotos(NULL);
		$this->setMeetGrade("Meeter Novice");
		$this->setMeetGradeLienImage("Meeter_Novice");
		$this->setMeetDescription(NULL);
		$this->setMeetFumeur(NULL);
		$this->setMeetAlcool(NULL);
		$this->setMeetStyle(NULL);
		$this->setMeetYeux(NULL);
		$this->setMeetVoiture(NULL);
		$this->setMeetSituationProfessionnelle(NULL);
		$this->setMeetPrecisions(NULL);
		$this->setMeetRegulariteConnexion(NULL);
		$this->setMeetQualite(NULL);
		$this->setMeetDefaut(NULL);
		$this->setMeetDiscothequePreferee(NULL);
		$this->setMeetBarPrefere(NULL);
		$this->setMeetRestaurantPrefere(NULL);
		$this->setMeetEtablissementsFrequentes(NULL);
		$this->setMeetVideos(NULL);
		$this->setMeetSiteWeb(NULL);
		$this->setMeetTypeRencontre(NULL);
		$this->setMeetAtout(NULL);
		$this->setMeetActiviteHobbie(NULL);
		$this->setMeetLecture(NULL);
		$this->setMeetMerMontagne(NULL);
		$this->setMeetMusiquesPreferees(NULL);
		$this->setMeetAime(NULL);
		$this->setMeetAimePas(NULL);
		$this->setMeetDerniereConnexion(date_create(date('Y-m-d H:i:s')));
		$this->setMeetVille(NULL);
		$this->setMeetDepartement(NULL);
		$this->setMeetPoids(NULL);
		$this->setMeetTaille(NULL);
		$this->setMeetPoints(0);
		$this->setMeetDon(NULL);
		$this->setMeetDateDon(NULL);
		$this->setMeetVip(false);
		$this->setMeetVipDate(NULL);
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return User
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set meet
     *
     * @param boolean $meet
     * @return User
     */
    public function setMeet($meet)
    {
        $this->meet = $meet;

        return $this;
    }

    /**
     * Get meet
     *
     * @return boolean 
     */
    public function getMeet()
    {
        return $this->meet;
    }

    /**
     * Set chat
     *
     * @param boolean $chat
     * @return User
     */
    public function setChat($chat)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return boolean 
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * Set play
     *
     * @param boolean $play
     * @return User
     */
    public function setPlay($play)
    {
        $this->play = $play;

        return $this;
    }

    /**
     * Get play
     *
     * @return boolean 
     */
    public function getPlay()
    {
        return $this->play;
    }

    /**
     * Set meet_nom
     *
     * @param string $meetNom
     * @return User
     */
    public function setMeetNom($meetNom)
    {
        $this->meet_nom = $meetNom;

        return $this;
    }

    /**
     * Get meet_nom
     *
     * @return string 
     */
    public function getMeetNom()
    {
        return $this->meet_nom;
    }

    /**
     * Set meet_prenom
     *
     * @param string $meetPrenom
     * @return User
     */
    public function setMeetPrenom($meetPrenom)
    {
        $this->meet_prenom = $meetPrenom;

        return $this;
    }

    /**
     * Get meet_prenom
     *
     * @return string 
     */
    public function getMeetPrenom()
    {
        return $this->meet_prenom;
    }

    /**
     * Set meet_mail
     *
     * @param string $meetMail
     * @return User
     */
    public function setMeetMail($meetMail)
    {
        $this->meet_mail = $meetMail;

        return $this;
    }

    /**
     * Get meet_mail
     *
     * @return string 
     */
    public function getMeetMail()
    {
        return $this->meet_mail;
    }

    /**
     * Set meet_age
     *
     * @param integer $meetAge
     * @return User
     */
    public function setMeetAge($meetAge)
    {
        $this->meet_age = $meetAge;

        return $this;
    }

    /**
     * Get meet_age
     *
     * @return integer 
     */
    public function getMeetAge()
    {
        return $this->meet_age;
    }

    /**
     * Set meet_photo_profil
     *
     * @param string $meetPhotoProfil
     * @return User
     */
    public function setMeetPhotoProfil($meetPhotoProfil)
    {
        $this->meet_photo_profil = $meetPhotoProfil;

        return $this;
    }

    /**
     * Get meet_photo_profil
     *
     * @return string 
     */
    public function getMeetPhotoProfil()
    {
        return $this->meet_photo_profil;
    }

    /**
     * Set meet_photo_couverture
     *
     * @param string $meetPhotoCouverture
     * @return User
     */
    public function setMeetPhotoCouverture($meetPhotoCouverture)
    {
        $this->meet_photo_couverture = $meetPhotoCouverture;

        return $this;
    }

    /**
     * Get meet_photo_couverture
     *
     * @return string 
     */
    public function getMeetPhotoCouverture()
    {
        return $this->meet_photo_couverture;
    }

    /**
     * Set meet_photos
     *
     * @param array $meetPhotos
     * @return User
     */
    public function setMeetPhotos($meetPhotos)
    {
        $this->meet_photos = $meetPhotos;

        return $this;
    }

    /**
     * Get meet_photos
     *
     * @return array 
     */
    public function getMeetPhotos()
    {
        return $this->meet_photos;
    }

    /**
     * Set meet_grade
     *
     * @param string $meetGrade
     * @return User
     */
    public function setMeetGrade($meetGrade)
    {
        $this->meet_grade = $meetGrade;

        return $this;
    }

    /**
     * Get meet_grade
     *
     * @return string 
     */
    public function getMeetGrade()
    {
        return $this->meet_grade;
    }

    /**
     * Set meet_description
     *
     * @param string $meetDescription
     * @return User
     */
    public function setMeetDescription($meetDescription)
    {
        $this->meet_description = $meetDescription;

        return $this;
    }

    /**
     * Get meet_description
     *
     * @return string 
     */
    public function getMeetDescription()
    {
        return $this->meet_description;
    }

    /**
     * Set meet_fumeur
     *
     * @param boolean $meetFumeur
     * @return User
     */
    public function setMeetFumeur($meetFumeur)
    {
        $this->meet_fumeur = $meetFumeur;

        return $this;
    }

    /**
     * Get meet_fumeur
     *
     * @return boolean 
     */
    public function getMeetFumeur()
    {
        return $this->meet_fumeur;
    }

    /**
     * Set meet_alcool
     *
     * @param boolean $meetAlcool
     * @return User
     */
    public function setMeetAlcool($meetAlcool)
    {
        $this->meet_alcool = $meetAlcool;

        return $this;
    }

    /**
     * Get meet_alcool
     *
     * @return boolean 
     */
    public function getMeetAlcool()
    {
        return $this->meet_alcool;
    }

    /**
     * Set meet_style
     *
     * @param string $meetStyle
     * @return User
     */
    public function setMeetStyle($meetStyle)
    {
        $this->meet_style = $meetStyle;

        return $this;
    }

    /**
     * Get meet_style
     *
     * @return string 
     */
    public function getMeetStyle()
    {
        return $this->meet_style;
    }

    /**
     * Set meet_yeux
     *
     * @param string $meetYeux
     * @return User
     */
    public function setMeetYeux($meetYeux)
    {
        $this->meet_yeux = $meetYeux;

        return $this;
    }

    /**
     * Get meet_yeux
     *
     * @return string 
     */
    public function getMeetYeux()
    {
        return $this->meet_yeux;
    }

    /**
     * Set meet_voiture
     *
     * @param boolean $meetVoiture
     * @return User
     */
    public function setMeetVoiture($meetVoiture)
    {
        $this->meet_voiture = $meetVoiture;

        return $this;
    }

    /**
     * Get meet_voiture
     *
     * @return boolean 
     */
    public function getMeetVoiture()
    {
        return $this->meet_voiture;
    }

    /**
     * Set meet_situation_professionnelle
     *
     * @param string $meetSituationProfessionnelle
     * @return User
     */
    public function setMeetSituationProfessionnelle($meetSituationProfessionnelle)
    {
        $this->meet_situation_professionnelle = $meetSituationProfessionnelle;

        return $this;
    }

    /**
     * Get meet_situation_professionnelle
     *
     * @return string 
     */
    public function getMeetSituationProfessionnelle()
    {
        return $this->meet_situation_professionnelle;
    }

    /**
     * Set meet_precisions
     *
     * @param string $meetPrecisions
     * @return User
     */
    public function setMeetPrecisions($meetPrecisions)
    {
        $this->meet_precisions = $meetPrecisions;

        return $this;
    }

    /**
     * Get meet_precisions
     *
     * @return string 
     */
    public function getMeetPrecisions()
    {
        return $this->meet_precisions;
    }

    /**
     * Set meet_regularite_connexion
     *
     * @param string $meetRegulariteConnexion
     * @return User
     */
    public function setMeetRegulariteConnexion($meetRegulariteConnexion)
    {
        $this->meet_regularite_connexion = $meetRegulariteConnexion;

        return $this;
    }

    /**
     * Get meet_regularite_connexion
     *
     * @return string 
     */
    public function getMeetRegulariteConnexion()
    {
        return $this->meet_regularite_connexion;
    }

    /**
     * Set meet_qualite
     *
     * @param string $meetQualite
     * @return User
     */
    public function setMeetQualite($meetQualite)
    {
        $this->meet_qualite = $meetQualite;

        return $this;
    }

    /**
     * Get meet_qualite
     *
     * @return string 
     */
    public function getMeetQualite()
    {
        return $this->meet_qualite;
    }

    /**
     * Set meet_defaut
     *
     * @param string $meetDefaut
     * @return User
     */
    public function setMeetDefaut($meetDefaut)
    {
        $this->meet_defaut = $meetDefaut;

        return $this;
    }

    /**
     * Get meet_defaut
     *
     * @return string 
     */
    public function getMeetDefaut()
    {
        return $this->meet_defaut;
    }

    /**
     * Set meet_discotheque_preferee
     *
     * @param string $meetDiscothequePreferee
     * @return User
     */
    public function setMeetDiscothequePreferee($meetDiscothequePreferee)
    {
        $this->meet_discotheque_preferee = $meetDiscothequePreferee;

        return $this;
    }

    /**
     * Get meet_discotheque_preferee
     *
     * @return string 
     */
    public function getMeetDiscothequePreferee()
    {
        return $this->meet_discotheque_preferee;
    }

    /**
     * Set meet_bar_prefere
     *
     * @param string $meetBarPrefere
     * @return User
     */
    public function setMeetBarPrefere($meetBarPrefere)
    {
        $this->meet_bar_prefere = $meetBarPrefere;

        return $this;
    }

    /**
     * Get meet_bar_prefere
     *
     * @return string 
     */
    public function getMeetBarPrefere()
    {
        return $this->meet_bar_prefere;
    }

    /**
     * Set meet_restaurant_prefere
     *
     * @param string $meetRestaurantPrefere
     * @return User
     */
    public function setMeetRestaurantPrefere($meetRestaurantPrefere)
    {
        $this->meet_restaurant_prefere = $meetRestaurantPrefere;

        return $this;
    }

    /**
     * Get meet_restaurant_prefere
     *
     * @return string 
     */
    public function getMeetRestaurantPrefere()
    {
        return $this->meet_restaurant_prefere;
    }

    /**
     * Set meet_etablissements_frequentes
     *
     * @param string $meetEtablissementsFrequentes
     * @return User
     */
    public function setMeetEtablissementsFrequentes($meetEtablissementsFrequentes)
    {
        $this->meet_etablissements_frequentes = $meetEtablissementsFrequentes;

        return $this;
    }

    /**
     * Get meet_etablissements_frequentes
     *
     * @return string 
     */
    public function getMeetEtablissementsFrequentes()
    {
        return $this->meet_etablissements_frequentes;
    }

    /**
     * Set meet_videos
     *
     * @param array $meetVideos
     * @return User
     */
    public function setMeetVideos($meetVideos)
    {
        $this->meet_videos = $meetVideos;

        return $this;
    }

    /**
     * Get meet_videos
     *
     * @return array 
     */
    public function getMeetVideos()
    {
        return $this->meet_videos;
    }

    /**
     * Set meet_site_web
     *
     * @param string $meetSiteWeb
     * @return User
     */
    public function setMeetSiteWeb($meetSiteWeb)
    {
        $this->meet_site_web = $meetSiteWeb;

        return $this;
    }

    /**
     * Get meet_site_web
     *
     * @return string 
     */
    public function getMeetSiteWeb()
    {
        return $this->meet_site_web;
    }

    /**
     * Set meet_type_rencontre
     *
     * @param string $meetTypeRencontre
     * @return User
     */
    public function setMeetTypeRencontre($meetTypeRencontre)
    {
        $this->meet_type_rencontre = $meetTypeRencontre;

        return $this;
    }

    /**
     * Get meet_type_rencontre
     *
     * @return string 
     */
    public function getMeetTypeRencontre()
    {
        return $this->meet_type_rencontre;
    }

    /**
     * Set meet_atout
     *
     * @param string $meetAtout
     * @return User
     */
    public function setMeetAtout($meetAtout)
    {
        $this->meet_atout = $meetAtout;

        return $this;
    }

    /**
     * Get meet_atout
     *
     * @return string 
     */
    public function getMeetAtout()
    {
        return $this->meet_atout;
    }

    /**
     * Set meet_activite_hobbie
     *
     * @param string $meetActiviteHobbie
     * @return User
     */
    public function setMeetActiviteHobbie($meetActiviteHobbie)
    {
        $this->meet_activite_hobbie = $meetActiviteHobbie;

        return $this;
    }

    /**
     * Get meet_activite_hobbie
     *
     * @return string 
     */
    public function getMeetActiviteHobbie()
    {
        return $this->meet_activite_hobbie;
    }

    /**
     * Set meet_lecture
     *
     * @param boolean $meetLecture
     * @return User
     */
    public function setMeetLecture($meetLecture)
    {
        $this->meet_lecture = $meetLecture;

        return $this;
    }

    /**
     * Get meet_lecture
     *
     * @return boolean 
     */
    public function getMeetLecture()
    {
        return $this->meet_lecture;
    }

    /**
     * Set meet_mer_montagne
     *
     * @param string $meetMerMontagne
     * @return User
     */
    public function setMeetMerMontagne($meetMerMontagne)
    {
        $this->meet_mer_montagne = $meetMerMontagne;

        return $this;
    }

    /**
     * Get meet_mer_montagne
     *
     * @return string 
     */
    public function getMeetMerMontagne()
    {
        return $this->meet_mer_montagne;
    }

    /**
     * Set meet_musiques_preferees
     *
     * @param array $meetMusiquesPreferees
     * @return User
     */
    public function setMeetMusiquesPreferees($meetMusiquesPreferees)
    {
        $this->meet_musiques_preferees = $meetMusiquesPreferees;

        return $this;
    }

    /**
     * Get meet_musiques_preferees
     *
     * @return array 
     */
    public function getMeetMusiquesPreferees()
    {
        return $this->meet_musiques_preferees;
    }

    /**
     * Set meet_aime
     *
     * @param array $meetAime
     * @return User
     */
    public function setMeetAime($meetAime)
    {
        $this->meet_aime = $meetAime;

        return $this;
    }

    /**
     * Get meet_aime
     *
     * @return array 
     */
    public function getMeetAime()
    {
        return $this->meet_aime;
    }

    /**
     * Set meet_aime_pas
     *
     * @param array $meetAimePas
     * @return User
     */
    public function setMeetAimePas($meetAimePas)
    {
        $this->meet_aime_pas = $meetAimePas;

        return $this;
    }

    /**
     * Get meet_aime_pas
     *
     * @return array 
     */
    public function getMeetAimePas()
    {
        return $this->meet_aime_pas;
    }

    /**
     * Set meet_derniere_connexion
     *
     * @param \DateTime $meetDerniereConnexion
     * @return User
     */
    public function setMeetDerniereConnexion($meetDerniereConnexion)
    {
        $this->meet_derniere_connexion = $meetDerniereConnexion;

        return $this;
    }

    /**
     * Get meet_derniere_connexion
     *
     * @return \DateTime 
     */
    public function getMeetDerniereConnexion()
    {
        return $this->meet_derniere_connexion;
    }

    /**
     * Set meet_grade_lien_image
     *
     * @param string $meetGradeLienImage
     * @return User
     */
    public function setMeetGradeLienImage($meetGradeLienImage)
    {
        $this->meet_grade_lien_image = $meetGradeLienImage;

        return $this;
    }

    /**
     * Get meet_grade_lien_image
     *
     * @return string 
     */
    public function getMeetGradeLienImage()
    {
        return $this->meet_grade_lien_image;
    }

    /**
     * Set meet_ville
     *
     * @param string $meetVille
     * @return User
     */
    public function setMeetVille($meetVille)
    {
        $this->meet_ville = $meetVille;

        return $this;
    }

    /**
     * Get meet_ville
     *
     * @return string 
     */
    public function getMeetVille()
    {
        return $this->meet_ville;
    }

    /**
     * Set meet_departement
     *
     * @param string $meetDepartement
     * @return User
     */
    public function setMeetDepartement($meetDepartement)
    {
        $this->meet_departement = $meetDepartement;

        return $this;
    }

    /**
     * Get meet_departement
     *
     * @return string 
     */
    public function getMeetDepartement()
    {
        return $this->meet_departement;
    }

    /**
     * Set meet_taille
     *
     * @param integer $meetTaille
     * @return User
     */
    public function setMeetTaille($meetTaille)
    {
        $this->meet_taille = $meetTaille;

        return $this;
    }

    /**
     * Get meet_taille
     *
     * @return integer 
     */
    public function getMeetTaille()
    {
        return $this->meet_taille;
    }

    /**
     * Set meet_poids
     *
     * @param integer $meetPoids
     * @return User
     */
    public function setMeetPoids($meetPoids)
    {
        $this->meet_poids = $meetPoids;

        return $this;
    }

    /**
     * Get meet_poids
     *
     * @return integer 
     */
    public function getMeetPoids()
    {
        return $this->meet_poids;
    }

    /**
     * Set meet_points
     *
     * @param integer $meetPoints
     * @return User
     */
    public function setMeetPoints($meetPoints)
    {
        $this->meet_points = $meetPoints;

        return $this;
    }

    /**
     * Get meet_points
     *
     * @return integer 
     */
    public function getMeetPoints()
    {
        return $this->meet_points;
    }

    /**
     * Set meet_tel
     *
     * @param integer $meetTel
     * @return User
     */
    public function setMeetTel($meetTel)
    {
        $this->meet_tel = $meetTel;

        return $this;
    }

    /**
     * Get meet_tel
     *
     * @return integer 
     */
    public function getMeetTel()
    {
        return $this->meet_tel;
    }

    /**
     * Set meet_don
     *
     * @param integer $meetDon
     * @return User
     */
    public function setMeetDon($meetDon)
    {
        $this->meet_don = $meetDon;

        return $this;
    }

    /**
     * Get meet_don
     *
     * @return integer 
     */
    public function getMeetDon()
    {
        return $this->meet_don;
    }

    /**
     * Set meet_vip
     *
     * @param boolean $meetVip
     * @return User
     */
    public function setMeetVip($meetVip)
    {
        $this->meet_vip = $meetVip;

        return $this;
    }

    /**
     * Get meet_vip
     *
     * @return boolean 
     */
    public function getMeetVip()
    {
        return $this->meet_vip;
    }

    /**
     * Set meet_vip_date
     *
     * @param \DateTime $meetVipDate
     * @return User
     */
    public function setMeetVipDate($meetVipDate)
    {
        $this->meet_vip_date = $meetVipDate;

        return $this;
    }

    /**
     * Get meet_vip_date
     *
     * @return \DateTime 
     */
    public function getMeetVipDate()
    {
        return $this->meet_vip_date;
    }

    /**
     * Set meet_date_don
     *
     * @param \DateTime $meetDateDon
     * @return User
     */
    public function setMeetDateDon($meetDateDon)
    {
        $this->meet_date_don = $meetDateDon;

        return $this;
    }

    /**
     * Get meet_date_don
     *
     * @return \DateTime 
     */
    public function getMeetDateDon()
    {
        return $this->meet_date_don;
    }
}
