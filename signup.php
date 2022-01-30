<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap');
 
* {
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
}
 
html,
body {
  margin: 0;
}
 
.full-screen-container {
  background-image: url('https://images.unsplash.com/photo-1573496782646-e8d943a4bdd1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80');
  height: 100vh;
  width: 100vw;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
}
 
.login-container {
  background-color: hsla(201, 100%, 6%, 0.6);
  padding: 50px 30px;
  min-width: 400px;
  width: 50%;
  max-width: 600px;
}
 
.login-title {
  color: #fff;
  text-align: center;
  margin: 0;
  margin-bottom: 40px;
  font-size: 2.5em;
  font-weight: normal;
}
 
.input-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}
 
.input-group label {
  color: #fff;
  font-weight: lighter;
  font-size: 1.5em;
  margin-bottom: 7px;
}
 
.input-group input {
  font-size: 1.5em;
  padding: 0.1em 0.25em;
  background-color: hsla(201, 100%, 91%, 0.3);
  border: 1px solid hsl(201, 100%, 6%);
  outline: none;
  border-radius: 5px;
  color: #fff;
  font-weight: lighter;
}
 
.input-group input:focus {
  border: 1px solid hsl(201, 100%, 50%);
}
 
.login-button {
  padding: 10px 30px;
  width: 100%;
  border-radius: 5px;
  background: hsla(201, 100%, 50%, 0.1);
  border: 1px solid hsl(201, 100%, 50%);
  outline: none;
  font-size: 1.5em;
  color: #fff;
  font-weight: lighter;
  margin-top: 20px;
  cursor: pointer;
}
 
.login-button:hover {
  background-color: hsla(201, 100%, 50%, 0.3);
}
 
.login-button:focus {
  background-color: hsla(201, 100%, 50%, 0.5);
}
 
</style>
<body>
    <div class="full-screen-container">
      <div class="login-container">
        <h3 class="login-title">Registration Form</h3>
        <form  action="#" method="Post">
          <div class="input-group">
            <label>Username</label>
            <input type="text" name="username"/>
          </div>
          <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required />
          </div>
         <button type="submit" name="submit" class="login-button">Register</button>
        </form>
      </div>
     </div>
     <?php

$conn = mysqli_connect("localhost","root","","logain");
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
    $q="insert into form values('','$username','$password')";
    $result = mysqli_query($conn,$q);	
    if($result)
	{         
     header("location:index.php");

	}
	else{
		echo "failed:";
	}
}
?>
      </body>
</html>