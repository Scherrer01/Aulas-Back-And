<?
// Confirmação de formulário
require_once __DIR__ . "../CONTROLLER/bebidaController.php";

if ($_SERVER ['REQUEST_METHOD' === 'POST']) {
    $acao = $_POST['acao'] ?? '';
    if ($acao === 'criar') {
        $controller->salvar (
            $_POST['nome'],
            $_POST['categoria'],
            $_POST['volume'],
            $_POST['valor'],
            $_POST['qtde']
        );
    } elseif ($acao === 'deleter') {
        $controller->deletar($_POST['nome']);
    }

    header("Location: index.php");
    exit;
}
$bebidas = $controller->listar();
?>


<!-- Forumulário em HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário para preenchimento de bebidas:  </h1>
        <form method="POST">
            <input type="hidden">
            <input type="number">
            <input type="text" name="nome" placeholder="Nome da bebida" required>
            <select name="categoria">

                <option value="">Selecione a categoria</option>
                <option value="Refrigerante">Refrigerante</option>
                <option value="Cerveja">Cerveja</option>
                <option value="Vinho">Vinho</option>
                <option value="Destilado">Destilado</option>
                <option value="Água">Água</option>
                <option value="Suco">Suco</option>
                <option value="Energético">Energético</option>

            </select>

            <input type="text" name="volume" placeholder="Volume da bebida" required>
            <input type="number" name="valor" step="0.01" placeholder="Valor em R$ da bebida" required>
            <input type="number" name="qtde" placeholder="Quantidade em estoque" required>
            <button type="submit">Cadastrar</button>

        </form>
   
</body>
</html>




