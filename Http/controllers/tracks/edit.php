<?php
use Core\Database;
use Core\App;
error_reporting(E_ALL);
ini_set('display_errors', 1);
require base_path('Core/Validator.php');
$db = App::resolve(Database::class);
$currentUserId = 1;
$track = $db->query('select * from artistes where id = :id', [
    'id' => $_GET['id'],
])->fetch();
authorize($track['user_id'] === $currentUserId);
view('tracks/edit.view.php', [
    'heading' => 'Edit Track',
    'errors' => [],
    'track' => $track
]);

