<?php
use Core\App;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;
$email = $_POST['email'];
$password = $_POST['password'];

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$db = App::resolve(Database::class);
$user = $db->query('select * from user where email = :email', [
    'email' => $email
])->fetch();

if ($user) {
    // User with the given email already exists
    // Redirect or display an error message
    header('location: /');
    exit();
} else {
    // Insert the new user into the database
    $db->query('INSERT INTO user (email, password) VALUES (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    
    // Redirect the user after successful registration
    login($user);
    header('location: /');
    exit();
}


