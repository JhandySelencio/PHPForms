<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php echo "Hello World";?>
<!-- http://localhost/selencio/home-page.html -->
    <div>
        <h2>Student Registration Forms</h2>

        <form action="display.php" method="POST">
          <label for="fname">First name:</label><br>
          <input type="text" id="fname" name="fname" value="Kiervy">
          <br>
          <label for="lname">Last name:</label><br>
          <input type="text" id="lname" name="lname" value="Hernani">
          <br>
          <label for="idnum">Id number:</label><br>
          <input type="text" id="idNum" name="idNum">
          <br>
          <label for="dept">Department:</label><br>
          <input type="text" id="dept" name="dept">
          <br><br>
          <input type="submit" value="Submit">
        </form> 
    </div>
</body>
</html>