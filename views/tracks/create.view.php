<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php'); ?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 400px;
        margin: 20px auto;
    }

    form {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    p {
        font-size: 28px;
        color: #3498db;
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }

    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    button {
        background-color: #3498db;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
        font-size: 16px;
    }

    button:hover {
        background-color: #1d6fa5;
    }

    .error-message {
        color: #e74c3c;
        margin-top: 8px;
    }
</style>

<div class="container">
    <p>Create New Track</p>
    <form method="post" action="/tracks">
        <label for="tracks">Track</label>
        <textarea
            type="text"
            name="tracks"
            placeholder="Enter a Track"><?= $_POST['tracks'] ?? ''?></textarea>

        <?php if (isset($errors['tracks'])): ?>
            <p class="error-message"><?= $errors['tracks']; ?></p>
        <?php endif; ?>

        <button type="submit">Submit</button>
    </form>
</div>

<?php require base_path('views/partials/footer.php'); ?>
