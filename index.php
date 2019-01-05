<?php

require __DIR__. '/autoload.php';

$data = App\Models\User::findAll(); // вызов статики не создавая обьект

var_dump($data);