<?php

$users = User::findBy(['email' => 'diegusnueva@gmail.com']);

require 'Views/about.view.php';