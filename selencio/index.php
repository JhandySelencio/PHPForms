<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- http://localhost/selencio/home-page.html -->
    <div class="mainCon">
        <div>
            <h1>Student Registration Form</h1>
        </div>
        <div>
            <form action="display.php" method="POST">
                <div>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname">
                </div>
                <br>
                <div>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname">
                </div>
                <br>
                <div>
                    <label for="idnum">ID number:</label><br>
                    <input type="text" id="idNum" name="idNum">
                </div>
                <br>
                <div>
                    <label for="course">Course:</label><br>
                    <input type="text" id="course" name="course">
                </div>
                <br><br>
                <div>
                    <input type="submit" value="Submit">
                </div>
              </form> 
        </div>
    </div>
</body>
</html>