<?php

// ------------------------------------------Exercice 2---------------------------------------------

    class Person
    {
        private ?string $firstName = null;
        private ?string $lastName = null;
        private ?string $favoriteMeal = null;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal)
        {
            $this->firstName     = $firstName;
            $this->lastName      = $lastName;
            $this->favoriteMeal  = $favoriteMeal;
        }

        public function getFirstName() : string
        {
            return $this->firstName;
        }

        public function setFirstName(string $firstName) : void
        {
            $this->firstName = $firstName;
        }

        public function getLastName() : string
        {
            return $this->lastName;
        }

        public function setLastName(string $lastName) : void
        {
            $this->lastName = $lastName;
        }

        public function getFavoriteMeal() : string
        {
            return $this->favoriteMeal;
        }

        public function setFavoriteMeal(string $favoriteMeal) : void
        {
            $this->favoriteMeal = $favoriteMeal;
        }

        public function presentation() : string
        {
            return "Je m'appelle {$this->firstName} {$this->lastName} et j'adore {$this->favoriteMeal}.";
        }
    }

    $person1 = new Person("picsou", "Balthazar", "une simple feuille de salade");
    $person2 = new Person("donald", "Duck", "les légumes frais râpés");

    echo $person1->presentation();
    echo "<br/>";
    echo $person2->presentation();




// ------------------------------------------Exercice 1---------------------------------------------
    // class Person
    // {
    //     public ?string $firstName = null;
    //     public ?string $lastName = null;
    //     public ?string $favoriteMeal = null;

    //     public function __construct(string $firstName, string $lastName, string $favoriteMeal)
    //     {
    //         $this->firstName     = $firstName;
    //         $this->lastName      = $lastName;
    //         $this->favoriteMeal  = $favoriteMeal;
    //     }

    // }

    // $person1 = new Person("riri",   "Duck", "une simple feuille de salade");
    // $person2 = new Person("fifi",   "Duck", "légumes frais râpés");
    // $person3 = new Person("loulou", "Duck", "blé orge");

    // echo "L'utilisateur du nom complet: {$person1->firstName} {$person1->lastName} aime bien {$person1->favoriteMeal}";
    // echo "<br/>";
    // echo "L'utilisateur du nom complet: {$person2->firstName} {$person2->lastName} aime bien {$person2->favoriteMeal}";
    // echo "<br/>";
    // echo "L'utilisateur du nom complet: {$person3->firstName} {$person3->lastName} aime bien {$person3->favoriteMeal}";
?>
