<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragistration form</title>
    <link rel="stylesheet" href="ragister2.css">
</head>
<body>
    <h1 class="rts">Ragistration form</h1>
<form method="POST" action="ragister_submit2.php" style="display:block;">

<input type="text" name="fname" placeholder="First Name"><br>
<input type="text" name="mname" placeholder="Middle Name"><br>
<input type="text" name="lname" placeholder="Last Name"><br>
<input type="email" name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>


<select name="gender" id="gender" placeholder="Select">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>

  <input type="checkbox" name="interest" value="cricket" />Cricket 
  <input type="checkbox" name="interest" value="football" />Football
  <input type="checkbox" name="interest" value="Chess" />Chess<br>

  <select name="city" id="city" placeholder="Select">
            <option value="uttar pradesh">Uttar pradesh</option>
            <option value="bihar">Bihar</option>
            <option value="goa">goa</option>
            <option value="kolkatta">Kolkatta</option>
            <option value="delhi">Delhi</option>
            <option value="mumbai">Mumbai</option>
            <option value="bangalore">bangalore</option>
            <option value="outstation">Outstation</option>

        </select>
        <br>

<input class="btn" type="submit" name="submit" value="Ragister"><br>
<a href="login_form2.php">Login Here</a>

</form>


</body>
</html>