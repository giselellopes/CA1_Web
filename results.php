<!DOCTYPE html>
<html lang="en">
<head>
  <title>CA1 - 2018076 - Gisele de Lima Lopes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div class="menu">
<?php include 'menu.php';?>
</div>

<div id=results class="Results">
<h3>Welcome <?php echo $_POST["name"]; ?></h3><br>
<h5>We received your data and will contact you soon.</h5></p> 

<table>
  <tr>
    <th>E-mail</th>
    <th>counties</th>
    <th>Gender</th>
    <th>Comment</th>
  </tr>
  <tr>
    <td><?php echo $_POST["email"]; ?></td>
    <td><?php echo $_POST["counties"]; ?></td>
    <td><?php echo $_POST["gender"]; ?></td>
    <td><?php echo $_POST["comment"]; ?></td>
  </tr>
  </table>


<br><br>  
</div>

<div id=footer class="footer">
<?php include 'footer.php';?>
</div>

</body>
</html>



 