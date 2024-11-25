<?php
include 'db.php';

$id = $_POST['id'];

$sql = "DELETE FROM pacientes WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Paciente excluído com sucesso!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
