<!DOCTYPE html>
<html>
<head>
<title>Create New Entity</title>
</head>

<body>
  <?php
if(!empty($errors))
{
  echo "<ul>";
  foreach($errors as $error)
  {
     echo "<li>".$error."</li>";
  }
  echo "</ul>";
}

?>
<form action="/test/store" method="post">
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title">
  <br><br>
  <input type="text" name="csrf_token" value="<?= csrf_token(); ?>">
  <input type="submit" value="Submit">
</form> 
</body>
 
</html> 