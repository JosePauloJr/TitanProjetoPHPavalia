<?php
// marcar_pago.php

// Conexão com o banco de dados
include 'conexao.php'; // Inclui a conexão com o banco de dados


$id_conta_pagar = $_POST['id_conta_pagar'];

// Atualiza o status de pagamento da conta
$sql = "UPDATE tbl_conta_pagar SET pago=1 WHERE id_conta_pagar='$id_conta_pagar'";

if ($conn->query($sql) === TRUE) {
    echo "Conta marcada como paga com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
