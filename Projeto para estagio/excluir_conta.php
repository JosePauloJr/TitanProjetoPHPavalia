<?php
// excluir_conta.php

// Conexão com o banco de dados
include 'conexao.php'; // Inclui a conexão com o banco de dados

$id_conta_pagar = $_POST['id_conta_pagar'];

// Exclui os dados da tabela `tbl_conta_pagar`
$sql = "DELETE FROM tbl_conta_pagar WHERE id_conta_pagar='$id_conta_pagar'";

if ($conn->query($sql) === TRUE) {
    echo "Conta a pagar excluída com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
