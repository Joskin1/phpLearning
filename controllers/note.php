<?php

$config = require 'config.php';

$db = new Database($config['database']);

$heading = 'Notes'; 

$note = $db->querry('select * from notes where id = :id',['id' => $_GET['id']])->fetch();



require "views/note.view.php";
