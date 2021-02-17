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
        <label for="fname"><?php echo "$user"; ?>:</label><br>
        <input type="text" id="user" name="fname"><br>
        <label for="lname"><?php echo "$passwd"; ?>:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <input type="submit" value="<?php echo "$login"; ?>">
      </form>
      <br>
      <a href="register.php" class="a1"><?php echo "$register"; ?></a>
      <br><br>
    </div>
    <?php require_once("compossitor/bottom.php") ?>
</html>
