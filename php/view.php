<?php
include 'db.php';

$sql = "SELECT * FROM pacientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="paciente">';
    echo '<p>Nome: ' . $row['nome'] . ', Idade: ' . $row['idade'] . '</p>';
    echo '<button class="btn btn-primary edit-btn" data-id="' . $row['id'] . '">Editar</button> ';
    echo '<button class="btn btn-danger delete-btn" data-id="' . $row['id'] . '">Excluir</button>';
    echo '</div>';
  }
} else {
  echo "0 Resultados.";
}

$conn->close();
?>
