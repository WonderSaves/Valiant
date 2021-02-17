<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once("compossitor/header.php") ?>
  <body class="body">
    <?php require_once("compossitor/navbar.php") ?>
    <div class="div0">
      <h1><?php echo "$login"; ?></h1>
    </div>
    <div class="div2">
      <br>
      <form action="index.php">
        <label for="user"><?php echo "$user"; ?>:</label><br>
        <input type="text" id="user" name="user"><br>
        <label for="mail">E-mail:</label><br>
        <input type="text" id="mail" name="mail"><br>
        <label for="passwd"><?php echo "$passwd"; ?>:</label><br>
        <input type="text" id="passwd" name="passwd"><br>
        <label for="passwd2"><?php echo "$passwd2"; ?>:</label><br>
        <input type="text" id="passwd2" name="passwd2"><br><br>
        <input type="submit" value="<?php echo "$register"; ?>">
      </form>
      <br>
      <a href="register.php" class="a1"><?php echo "$login"; ?></a>
      <br><br>
    </div>
    <?php require_once("compossitor/bottom.php") ?>
</html>
