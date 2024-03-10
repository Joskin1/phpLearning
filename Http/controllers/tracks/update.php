<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

// Find the corresponding track
$track = $db->query('select * from artistes where id = :id', [
    'id' => $_POST['id']
])->fetch(); // Use fetch() instead of find()

// Authorize that the current user can edit the track
authorize($track['user_id'] === $currentUserId);

// Validate the form
$errors = [];

if (!Validator::string($_POST['tracks'], 1, 1000)) { 
    $errors['tracks'] = 'A track of no more than 1,000 characters is required.';
}

if (count($errors) === 0) {
    $db->query('update artistes set tracks = :tracks where id = :id', [
        'id' => $_POST['id'],
        'tracks' => $_POST['tracks']
    ]);

    // Redirect the user
    header('location: /tracks');
    exit();
}

view('tracks/edit.view.php', [
    'heading' => 'Edit Tracks',
    'errors' => $errors,
    'track' => $track
]);
