<?php
include 'db.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$sql = "INSERT INTO pacientes (id, nome, idade) VALUES (null, '$nome', $idade)";

if ($conn->query($sql) === TRUE) {
  echo "Paciente cadastrado com sucesso!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
