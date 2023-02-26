<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | By Code Info</title>
    <style>
      body {
  background-color: #344a72;
  font-family: "Roboto", sans-serif;
}

.signup-box {
  width: 360px;
  height: 620px;
  margin: auto;
  background-color: white;
  border-radius: 3px;
}

.login-box {
  width: 360px;
  height: 280px;
  margin: auto;
  border-radius: 3px;
  background-color: white;
}

h1 {
  text-align: center;
  padding-top: 15px;
}

h4 {
  text-align: center;
}

form {
  width: 300px;
  margin-left: 20px;
}

form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
}

form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
}
input[type="button"] {
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #49c1a2;
  color: white;
  font-size: 18px;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.para-2 {
  text-align: center;
  color: white;
  font-size: 15px;
  margin-top: -10px;
}
.para-2 a {
  color: #49c1a2;
}

     </style>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="POST">
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <input type="button" value="Submit" />
      <closeform></closeform></form>
    </div>
    <p class="para-2">
      Not have an account? <a href="index.html">Sign Up Here</a>
    </p>
  </body>
</html>

<?php
$name =$_POST['name'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$hidden=$_POST['hdn'];
echo "$hidden";
echo "$name";
$myfile=fopen('data.txt','w');
fwrite($myfile,$name);
fwrite($myfile,$lname);
fwrite($myfile,$email);
fwrite($myfile,$pass);
fwrite($myfile,$cpass);
?>