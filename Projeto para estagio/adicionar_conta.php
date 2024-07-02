<?php
// adicionar_conta.php

// Conexão com o banco de dados
include 'conexao.php'; // Inclui a conexão com o banco de dados

// Captura os dados do formulário
$id_empresa = $_POST['empresa'];
$data_pagar = $_POST['data_pagar'];
$valor = $_POST['valor'];

// Insere os dados na tabela `tbl_conta_pagar`
$sql = "INSERT INTO tbl_conta_pagar (id_empresa, data_pagar, valor, pago) VALUES ('$id_empresa', '$data_pagar', '$valor', 0)";

if ($conn->query($sql) === TRUE) {
    echo "Nova conta a pagar adicionada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
