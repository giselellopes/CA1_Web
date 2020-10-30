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

<div id=container_form class="col-sm-8 text-left">
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $countiesErr = "";
$name = $email = $gender = $comment = $counties = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["county"])) {
    $countyErr = "county is required";
  } else {
    $county = test_input($_POST["county"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Contact Form</h2>
<p><span class="error">* required field</span></p>
<form action="results.php" method="post"?>
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  County: <select name="counties" id="counties">
  <option value="" selected="selected">Select subject</option>
      <?php
        $counties = array("Antrim"=>"Ulster", "Armagh"=>"Ulster", "Cavan"=>"Ulster", "Derry"=>"Ulster", "Donegal"=>"Ulster", "Down"=>"Ulster", "Fermanagh"=>"Ulster", "Monaghan"=>"Ulster", "Tyrone"=>"Ulster", "Galway"=>"Connaught", "Leitrim"=>"Connaught", "Mayo"=>"Connaught", "Roscommon"=>"Connaught", "Sligo"=>"Connaught", "Carlow"=>"Leinster", "Dublin"=>"Leinster", "Kildare"=>"Leinster", "Kilkenny"=>"Leinster", "Laois/Leix"=>"Leinster", "Longford"=>"Leinster", "Louth"=>"Leinster", "Meath"=>"Leinster", "Offaly"=>"Leinster", "Westmeath"=>"Leinster", "Wexford"=>"Leinster", "Wicklow"=>"Leinster", "Clare"=>"Munster", "Cork"=>"Munster", "Kerry"=>"Munster", "Limerick"=>"Munster", "Tipperary"=>"Munster", "Waterford"=>"Munster");
        foreach($counties as $county => $area){
            echo '<option value="' . strtolower($county) . '">' . $county . '</option>';
        }
      ?>
  </select>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <br><br> 
</form>
</div>

<div id=footer class="footer">
<?php include 'footer.php';?>
</div>

  
</body>
</html>




