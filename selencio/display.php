<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="displayCon">
    <form action="index.php">
        <div>
          Welcome <b><?php echo $_POST["fname"]; ?></b>,<br>
          Your family name is <b><?php echo $_POST["lname"]; ?></b><br>
          Your ID Number is <b><?php echo $_POST["idNum"]; ?></b><br>
          Your Course is <b><?php echo $_POST["course"]; ?></b>
        </div>
        <br>
        <div>
             <input type="Submit" value="Return">
        </div>  
    </form>
</div>
</body>
</html>