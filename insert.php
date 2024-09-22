<?php
$servername = "sql.freedb.tech";
$username = "freedb_getto";
$password = "YxZbJrn*jeU2z5D"; 
$dbname = "freedb_piesfrescos";

// Crear conexión 
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión 
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos de Unity 
$user = $_POST['username'];
$score = $_POST['score'];

// Insertar datos en la base de datos 
$sql = "INSERT INTO piescore (Nombre, Score) VALUES ('$user', '$score')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente (Spanish for 'New record created successfully')";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>