<?php

// ------------------------------------------Exercice 1---------------------------------------------
    class Person
    {
        public ?string $firstName = null;
        public ?string $lastName = null;
        public ?string $favoriteMeal = null;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal)
        {
            $this->firstName     = $firstName;
            $this->lastName      = $lastName;
            $this->favoriteMeal  = $favoriteMeal;
        }

    }

    $person1 = new Person("riri",   "Duck", "une simple feuille de salade");
    $person2 = new Person("fifi",   "Duck", "légumes frais râpés");
    $person3 = new Person("loulou", "Duck", "blé orge");

    echo "L'utilisateur du nom complet: {$person1->firstName} {$person1->lastName} aime bien {$person1->favoriteMeal}";
    echo "<br/>";
    echo "L'utilisateur du nom complet: {$person2->firstName} {$person2->lastName} aime bien {$person2->favoriteMeal}";
    echo "<br/>";
    echo "L'utilisateur du nom complet: {$person3->firstName} {$person3->lastName} aime bien {$person3->favoriteMeal}";
?>
