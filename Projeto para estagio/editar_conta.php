<?php
// editar_conta.php
// Conexão com o banco de dados
include 'conexao.php'; // Inclui a conexão com o banco de dados

$id_conta_pagar = $_POST['id_conta_pagar'];
$id_empresa = $_POST['empresa'];
$data_pagar = $_POST['data_pagar'];
$valor = $_POST['valor'];

// Atualiza os dados na tabela `tbl_conta_pagar`
$sql = "UPDATE tbl_conta_pagar SET id_empresa='$id_empresa', data_pagar='$data_pagar', valor='$valor' WHERE id_conta_pagar='$id_conta_pagar'";

if ($conn->query($sql) === TRUE) {
    echo "Conta a pagar atualizada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
