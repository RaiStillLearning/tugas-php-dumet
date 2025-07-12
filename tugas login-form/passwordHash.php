<?php
$hashPassword = password_hash("admin123", PASSWORD_DEFAULT);
echo $hashPassword . "<br>";

$password = 'admin123';
// password_verify() -> digunakan untuk mencocokan password yang sudah di hash 
if(password_verify($password, $hashPassword)) {
    echo "Password cocok!";
} else {
    echo "Password tidak cocok!";
}



?>