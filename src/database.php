<html>
  <head>
    <title>PHP Linken aan database</title>
  </head>
  <body>
    <?php 
    $servername = "127.0.0.1";
$username = "u392629804_usergroep3";
$password = "E&=9HA31";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
    ?> 
  </body>
</html>