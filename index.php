<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <hr>
    <h3>fill your details as required</h3>
    <hr>
<div class="container">
    <form action="connect.php" method="POST">
<div>
<label>Name</label>
<input type="text"name="Name"placeholder="Enter Name here">

</div>

<div>
<label>Registration</label>
<input type="text"name="Registration"placeholder="Enter reg no here">
</div>
<div>
<label>Birthdate </label>
<input type="date"name="Birthdate"placeholder="Enter birth date here">
</div>

<div>
<label>Email</label>
<input type="email"name="Email"placeholder="Enter Email here">

</div>
<div>
<label>Mobile </label>
<input type="text"name="Mobile"placeholder="Enter Mobile here">
</div>

<div>
<label>Password</label>
<input type="password"name="Password"placeholder="Enter password here">

</div>
<div class="gendercontainer">
<label>Gender</label>
<input class="gender1" type="radio"name="Gender" value="male">male
<input  class="gender1" type="radio"name="Gender"value="female">female
<input  class="gender1" type="radio"name="Gender"value="other">other
</div>

<div class="btn">
    <button type="submit">submit</button>

</div>


    </form>
</div>
    
</body>
</html>