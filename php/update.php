<?php
include 'db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$sql = "UPDATE pacientes SET nome = '$nome', idade = $idade WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Cadastro atualizado com sucesso!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
