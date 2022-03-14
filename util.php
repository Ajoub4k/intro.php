<?php
    function printFavAniImageTag(){


        $favoriteAnimal = $_SESSION["favoriteAnimal"];

        echo $favoriteAnimal;

        echo "<div>";

        switch ($favoriteAnimal) {
            case "cat":
                echo "<img src='/images/cat.jpg' width='200px' height='200px'>";
            break;

            case "dog":
                echo "<img src='/images/dog.jpg' width='200px' height='200px'>";
            break;

            case "elephant":
                echo "<img src='/images/elephant.jpg' width='200px' height='200px'>";
            break;

            case "mouse":
                echo "<img src='/images/mouse.jpg' width='200px' height='200px'>";
            break;

            case "tiger":
                echo "<img src='/images/tiger.jpg' width='200px' height='200px'>";
            break;

        }
    }
?>