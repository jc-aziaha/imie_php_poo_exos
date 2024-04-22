<?php


// -----------------------------------Les interfaces-----------------------------------------------

    // interface Animal
    // {
    //     public function manger();
    //     public function seDeplacer();
    // }
    
    // class Chien implements Animal
    // {
    //     public function manger()
    //     {

    //     }

    //     public function seDeplacer()
    //     {

    //     }
    // }



// -----------------------------------Les classes abstraites-----------------------------------------------


    // abstract class Vehicule
    // {

    //     private string $marque; 

    //     public function rouler()
    //     {

    //     }

    //     abstract public function freiner();

    // }

    // new Vehicule(); Impossible

    // abstract class AbstractController
    // {
    //     public function afficher(string $data) :void
    //     {
    //         echo $data;
    //     }
    // }

    // class WelcomeController extends AbstractController
    // {
    //     public function index()
    //     {
    //         $this->afficher("Page d'accueil");
    //     }
    // }

    // class ContactController extends AbstractController
    // {
    //     public function index()
    //     {
    //         $this->afficher("Page de contact");
    //     }
    // }

    // $welcomeController = new WelcomeController();
    // $contactController = new ContactController();
    // $welcomeController->index();
    // echo "<br/>";
    // $contactController->index();


    // abstract class Vehicule
    // {
    // }

    // class Voiture extends Vehicule
    // {
    // }

    // class Camion extends Vehicule
    // {
    // }

    // new Vehicule;



    // class Vehicule
    // {

    // }



// ----------------------------------------------------------------------------------

    // class Robot
    // {
    //     private int $autonomie = 100;

    //     public function parler() : string
    //     {
    //         return "Je suis un robot";
    //     }
    // }

    // class Alexa extends Robot
    // {
    //     private string $proprietary;

    //     public function parler() : string
    //     {
    //         $parentText = parent::parler();

    //         $parentText .= "et je suis Alexa";

    //         return $parentText;
    //     }
    // }

    // class Roborock extends Robot
    // {
    //     private int $distance = 0;
    // }


    // $alexa = new Alexa();
    // echo $alexa->parler();

    // ---------------------------------------------------------------------------------------

    // class Vehicule
    // {
    //     private string $marque = "Tesla";
    //     private string $couleur = "blanche";

    //     public function getMarque() : string
    //     {
    //         return $this->marque;
    //     }

    //     public function setMarque(string $marque) : void
    //     {
    //         $this->marque = $marque;
    //     }
        
    //     public function getCouleur() : string
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(string $couleur) : void
    //     {
    //         $this->couleur = $couleur;
    //     }
    // }


    // class Voiture extends Vehicule
    // {
    //     private ?int $nbreDeRoues = null;

    //     public function getNbreDeRoues() : string
    //     {
    //         return $this->nbreDeRoues;
    //     }

    //     public function setNbreDeRoues(string $nbreDeRoues) : void
    //     {
    //         $this->nbreDeRoues = $nbreDeRoues;
    //     } 
    // }

    // class Moto extends Vehicule
    // {
    // }

    // class Camion extends Vehicule
    // {
    // }

    // $v0 = new Voiture();
    // echo $v0->getMarque();
    // $v0->getNbreDeRoues();



    // class Vehicule
    // {
    //     private ?string $marque = null;

    //     private static int $nbreInstances = 0;

    //     public function __construct()
    //     {
    //         self::$nbreInstances++;
    //     }

    //     public static function getNbreInstances()
    //     {
    //         return self::$nbreInstances;
    //     }

    //     public function getMarque() : ?string
    //     {
    //         return $this->marque;
    //     }

    //     public function setMarque(string $marque) : void
    //     {
    //         $this->marque = $marque;
    //     }
    // }

    // $vehicule0 = new Vehicule();
    // $vehicule1 = new Vehicule();
    // $vehicule1 = new Vehicule();

    // echo Vehicule::getNbreInstances();


// -------------------------------------------------------------------------------------------------



    // class User
    // {
    //     private null|string $firstName = null;
    //     private null|string $lastName = null;
    //     private null|string $email = null;
    //     private null|string $password = null;

    //     public function __construct(string $firstName, string $lastName, string $email, string $password)
    //     {
    //         $this->firstName = $firstName;
    //         $this->lastName  = $lastName;
    //         $this->email     = $email;
    //         $this->password  = $password;
    //     }

    //     public function getFirstName() : null|string
    //     {
    //         return $this->firstName;
    //     }

    //     public function setFirstName(string $firstName) : void
    //     {
    //         $this->firstName = $firstName;
    //     }

    //     public function getLastName() : null|string
    //     {
    //         return $this->lastName;
    //     }

    //     public function setLastName(string $lastName) : void
    //     {
    //         $this->lastName = $lastName;
    //     }

    //     public function getEmail() : null|string
    //     {
    //         return $this->email;
    //     }

    //     public function setEmail(string $email) : void
    //     {
    //         $this->email = $email;
    //     }

    //     public function getPassword() : null|string
    //     {
    //         return $this->password;
    //     }

    //     public function setPassword(string $password) : void
    //     {
    //         $this->password = $password;
    //     }

    //     public function toGreat() : string
    //     {
    //         // return "L'utilisateur " . $this->getFirstName() . " " . $this->getLastName() . " possède l'email: " . $this->getEmail();

    //         return "L'utilisateur {$this->getFirstName()} {$this->getLastName()} possède l'email: {$this->getEmail()}";
    //     }
    // }

    // $user  = new User("jc", "AZIAHA", "jc@gmail.com", "1234");

    // $user->setFirstName("jp");
    // $user->setLastName("AZIAHA");
    // $user->setEmail("aziaha.formations@gmail.com");
    // $user->setPassword("1234");

    // echo $user->toGreat();
    // echo "<br/>";


    // ---------------------------------------------------------------------------------

    // class Voiture
    // {
    //     private $couleur = null;

    //     public function getCouleur()
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur($nouvelleCouleur)
    //     {
    //         $this->couleur = $nouvelleCouleur;
    //     }
    // }

    // $v0 = new Voiture();
    // $v1 = new Voiture();

    // $v0->setCouleur("rouge");
    // $v1->setCouleur("blanche");

    // echo $v0->getCouleur();
    // echo "<br/>";
    // echo $v1->getCouleur();

    // class Basket
    // {
    //     public $marque = "Nike";
    //     protected $semelle = "moelleux";
    //     private $couleur = "jaune";

    //     public function montrer()
    //     {
    //         echo "Je montre";
    //     }
        
    //     public function marcher()
    //     {
    //         echo "Je marche";
    //     }

    //     public function getMarque()
    //     {
    //         return $this->marque;
    //     }

    //     public function setMarque($nouvelleMarque)
    //     {
    //         $this->marque = $nouvelleMarque;
    //     }

    //     public function getSemelle()
    //     {
    //         return $this->semelle;
    //     }

    //     public function setSemelle($nouvelleSemmelle)
    //     {
    //         $this->semelle = $nouvelleSemmelle;
    //     }

    //     public function getCouleur()
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur($nouvelleCouleur)
    //     {
    //         $this->couleur = $nouvelleCouleur;
    //     }

    // }

    // $basket0 = new Basket;
    // $basket0->setCouleur("bleue");
    // // $basket0->couleur;
    // echo $basket0->getCouleur();

    // echo "\n";

    // $basket1 = new Basket;
    // echo $basket1->getCouleur();


    // echo $basket0->marcher();


    // class Robot
    // {
    //     // Propriétés (Variables)

    //     // Méthodes (Functions)
    // }

    // $robot0 = new Robot;
    // $robot1 = new Robot;
    // $robot2 = new Robot;


?>