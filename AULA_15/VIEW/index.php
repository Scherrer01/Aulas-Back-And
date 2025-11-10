<?php
require_once __DIR__ . "/../CONTROLLER/BebidaController.php";

$controller = new BebidaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $controller->criar(
            $_POST['nome'],
            $_POST['categoria'],
            $_POST['volume'],
            $_POST['valor'],
            $_POST['qtde']
        );
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    } elseif ($_POST['acao'] === 'editar') {
        $bebidaParaEditar = $controller->editar($_POST['nome']);
    } elseif ($_POST['acao'] === 'atualizar') {
        $controller->atualizar(
            $_POST['nome_original'],
            $_POST['nome'],
            $_POST['categoria'],
            $_POST['volume'],
            $_POST['valor'],
            $_POST['qtde']
        );
    }
}

$bebidas = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bebidas</title>
</head>
<body>
    <div class="cadastro">
    <h1>Formulário para preenchimento de bebidas</h1>
    <div class="input">
    <form method="POST">
        <input type="hidden" name="acao" value="salvar">
        
        <input type="text" name="nome" placeholder="Nome da bebida" required>
        
        <select name="categoria" required>
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
        
        </div>

        <button type="submit" class="cadastrar">Cadastrar</button>
    </form>
    </div>

    <?php if (isset($bebidaParaEditar)): ?>
<h2>Editando: <?php echo $bebidaParaEditar->getNome(); ?></h2>
<div class="input">
    <form method="POST">
        <input type="hidden" name="acao" value="atualizar">
        <input type="hidden" name="nome_original" value="<?php echo $bebidaParaEditar->getNome(); ?>">
        
        <input type="text" name="nome" value="<?php echo $bebidaParaEditar->getNome(); ?>" placeholder="Nome da bebida" required>
        
        <select name="categoria" required>
            <option value="<?php echo $bebidaParaEditar->getCategoria(); ?>" selected><?php echo $bebidaParaEditar->getCategoria(); ?></option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Energético">Energético</option>
        </select>

        <input type="text" name="volume" value="<?php echo $bebidaParaEditar->getVolume(); ?>" placeholder="Volume da bebida" required>
        <input type="number" name="valor" value="<?php echo $bebidaParaEditar->getValor(); ?>" step="0.01" placeholder="Valor em R$" required>
        <input type="number" name="qtde" value="<?php echo $bebidaParaEditar->getQtde(); ?>" placeholder="Quantidade" required>
        
        <button type="submit" class="cadastrar">Atualizar</button>
    </form>
</div>
<?php endif; ?>

    <h2>Bebidas Cadastradas</h2>
    <?php if ($bebidas): ?>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Volume</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($bebidas as $bebida): ?>
            <tr>
                <td><?php echo $bebida->getNome(); ?></td>
                <td><?php echo $bebida->getCategoria(); ?></td>
                <td><?php echo $bebida->getVolume(); ?></td>
                <td>R$ <?php echo $bebida->getValor(); ?></td>
                <td><?php echo $bebida->getQtde(); ?></td>
                <td>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="nome" value="<?php echo $bebida->getNome(); ?>">
                        <button type="submit" class="editar">Editar</button>
                    </form>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="acao" value="deletar">
                        <input type="hidden" name="nome" value="<?php echo $bebida->getNome(); ?>">
                        <button type="submit" class="excluir">Excluir</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhuma bebida cadastrada.</p>
    <?php endif; ?>
</body>

    <style>

        *{
            padding: 0px;
            margin: 0px;
        }

        h1 {
            
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-color: #2c017cff;
            border-radius: 10px;
            margin-top: 30px;
            box-shadow: 1 0.5 0.5;
            border: solid 2px;
            width: 1000px;
            border-color: darkblue;
            color: white;
            box-shadow: 2px 2px 5px #4868faff;
            margin-bottom: 20px;
        }

        body {
            background-color: lightgray;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-color: #2c017cff;
            border-radius: 10px;
            box-shadow: 2px 2px 5px #4868faff;
            margin: 20px 800px;
            box-shadow: 1, 0.5, 0.5;
            border: solid 2px;
            border-color: darkblue;
            color: white;
        }

        .cadastro {
            background: linear-gradient(to bottom, #7eb6d9, lightgray);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }

        .input {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .input form {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    input {
        background-color: azure;
        text-align: center;
        border-color: darkblue;
        font-family: Arial, Helvetica, sans-serif;
        padding: 15px;
    }

        select {
            background-color: azure;
            text-align: center;
            border-color: darkblue;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            padding: 15px;
        }

        .cadastrar {
            display: block;
            margin: 0 auto;
            margin-top: 2vh;
            border: none;
            background-color: green;
            padding: 20px;
            border-radius: 50px;
            color: white;
            font-size: 20px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 20px;
        }

        .cadastrar:hover {
            background-color: #00af43ff;
            transform: translateY(-5px);
            box-shadow: 2px 2px 5px #37ec31ff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0px auto;
            width: 1500px;
            height: 300px;
            text-align: center;
            border: solid 2px;
            border-color: black;

}

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            border: solid 1px;
            border-color: black;
        }
        
        th {
            background-color: #2c017cff;
            color: white;
            font-weight: bold;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .excluir {
            background-color: red;
            padding: 8px;
            color: white;
            font-weight: bold;
            font-size: 15px;
            border: solid 2px;
            border-radius: 30px;
            border-color: darkred;
            box-shadow: 2px 2px 5px #fa4c4cff;
        }

        .excluir:hover {
            
            background-color: #c20404ff;
            transform: translateY(-5px);
        }

        .editar {
            background-color: orange;
            padding: 8px;
            color: white;
            font-weight: bold;
            font-size: 15px;
            border: solid 2px;
            border-radius: 30px;
            border-color: darkorange;
            box-shadow: 2px 2px 5px #ff7300ff;
        }

        .editar:hover {
            background-color: #f5d236ff;
            transform: translateY(-5px);
            border: none;
        }


    </style>
</body>
</html>