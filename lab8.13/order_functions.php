<?php

session_start();

function order() {
   $dessert = (isset($_POST["dessert"]) && $_POST["dessert"] != "none") ? $_POST["dessert"] : "(not selected)";
   $drink = (isset($_POST["drink"]) && $_POST["drink"] != "none") ? $_POST["drink"] : "(not selected)";
   $drinkSize = isset($_POST["drinkSize"]) ? $_POST["drinkSize"] : "(not selected)";

   $_SESSION["dessert"] = $dessert;
   $_SESSION["drink"] = $drink;
   $_SESSION["drinkSize"] = $drinkSize;

   return "Dessert: $dessert<br>\nDrink: $drink<br>\nDrink size: $drinkSize";
}

function dessertSelected($dessert) {
   return (isset($_SESSION["dessert"]) && $_SESSION["dessert"] == $dessert) ? "selected" : "";
}

function drinkSelected($drink) {
   return (isset($_SESSION["drink"]) && $_SESSION["drink"] == $drink) ? "selected" : "";
}

function drinkSizeSelected($drinkSize) {
   return (isset($_SESSION["drinkSize"]) && $_SESSION["drinkSize"] == $drinkSize) ? "checked" : "";
}

?>