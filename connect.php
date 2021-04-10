<?php 
session_start();
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "youtube";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO account (username, password)
    values ('$username', '$password')";
    if ($conn->query($sql)){
        echo "Connect Succesfly";
    }
    else{
        echo "Error:". $sql ."<br>" . $conn->error;
    }
    $conn->close();
}
}
else{
    echo "Connect Error";
    die();
}
?>

<!DOCTYPE html>
<head>
    <title>Welcome</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url(https://wp-modula.com/wp-content/uploads/2018/12/gifgif.gif);
            background-color: #34495e;
            text-align: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            transition: .6s;
        }
        @import url(https://fonts.googleapis.com/css?family=Oswald:400);

.navigation {
  width: 100%;
  background-color: black;
}

img {
  width: 25px;
  border-radius: 50px;
  float: left;
}

.logout {
  font-size: .8em;
  font-family: 'Oswald', sans-serif;
	position: relative;
  right: -18px;
  bottom: -4px;
  overflow: hidden;
  letter-spacing: 3px;
  opacity: 0;
  transition: opacity .45s;
  -webkit-transition: opacity .35s;
  
}

.button {
	text-decoration: none;
	float: right;
  padding: 12px;
  margin: 15px;
  color: white;
  width: 25px;
  background-color: black;
  transition: width .35s;
  -webkit-transition: width .35s;
  overflow: hidden
}

a:hover {
  width: 100px;
}

a:hover .logout{
  opacity: .9;
}

a {
  text-decoration: none;
}
    </style>
</head>
<body>
    <a class="button" href="form.html">
        <div class="logout">Logout</div>
    </a>
</body>
</html>