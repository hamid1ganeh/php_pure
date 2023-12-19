<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
 Name: <?php echo $name ?><br>
 Books:
<table>
  <tr>
    <th>Row</th>
    <th>Title</th>
  </tr>
  <?php foreach($books as $index=>$book){ ?>
  <tr>
    <td><?php echo ++$index; ?></td>
    <td><?php echo $book ?></td>
  </tr>
  <?php } ?>
</table> <br>

Freinds:
<table>
  <tr>
    <th>Row</th>
    <th>Title</th>
  </tr>
  <?php foreach($freinds as $index=>$freind){ ?>
  <tr>
    <td><?php echo ++$index; ?></td>
    <td><?php echo $freind['title'] ?></td>
  </tr>
  <?php } ?>
</table> <br>

</body>
 
</html> 