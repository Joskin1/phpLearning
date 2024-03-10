<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php'); ?>
<p>Create New Track</p>
  <form method="POST" action="/delete" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px;">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $track['id'] ?>">
    <label for="tracks" style="display: block; margin-bottom: 8px; font-weight: bold;">Track</label>
    <textarea type="text" name="tracks" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" placeholder="Enter a Track"><?= $track['tracks'] ?></textarea>
    <?php if (isset($errors['tracks'])) : ?>
      <p><?= $errors['tracks']; ?></p>~
    <?php endif; ?>

    <button type="submit" style="background-color: #cca8e9; color: #fff; padding: 10px; border: none; border-radius: 4px; cursor: pointer;" onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4caf50'">Submit</button>
    <a href="/tracks">Cancel</a>
  </form>


  <?php require base_path('views/partials/footer.php'); ?>