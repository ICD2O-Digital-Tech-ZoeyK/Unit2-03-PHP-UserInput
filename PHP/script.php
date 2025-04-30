// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Mr. Coxall
// Created on: Sep 2020
// This file contains the JS functions for index.html
<?php
  // Safely retrieve and process the user input
  if (isset($_POST["street-number"]) && isset($_POST["street-name"])) {
    $streetNumber = htmlspecialchars($_POST["street-number"]);
    $streetName = htmlspecialchars($_POST["street-name"]);

    echo "You live on " . $streetNumber . " " . $streetName . ".";
  }
?>
