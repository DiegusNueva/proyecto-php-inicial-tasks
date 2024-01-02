<?php

Task::create([
    'title' => $_POST['title'],
    'completed' => 0,
    'color' =>$_POST['color']
]);


header('Location: /');