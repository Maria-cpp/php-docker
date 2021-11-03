<?php
echo "*****PHP****** <br>";
echo "Hello from Docker";




$mysqli = new mysqli("db", "root", "example", "company");

$sql = "INSERT INTO users (name, fav_color) VALUES ('JOHN', 'YELLOW');";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES ('DOE', 'BLUE');";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if( $result = $mysqli->query($sql)){
    while($data = $result->fetch_object()){
        $users[] = $data;
    }
}

foreach($users as $user){
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}