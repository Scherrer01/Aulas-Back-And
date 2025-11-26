<?php
require_once __DIR__ . "/../CONTROLLER/LivroController.php";

$controller = new LivroController();
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        if ($controller->criar(
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano'],
            $_POST['genero'],
            $_POST['quantidade']
        )) {
            $mensagem = "Livro cadastrado com sucesso!";
        }
    } elseif ($_POST['acao'] === 'deletar') {
        if ($controller->deletar($_POST['id'])) {
            $mensagem = "Livro excluído com sucesso!";
        }
    } elseif ($_POST['acao'] === 'editar') {
        $livroParaEditar = $controller->editar($_POST['id']);
    } elseif ($_POST['acao'] === 'atualizar') {
        if ($controller->atualizar(
            $_POST['id'],
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano'],
            $_POST['genero'],
            $_POST['quantidade']
        )) {
            $mensagem = "Livro atualizado com sucesso!";
        }
    }
}

$livros = $controller->Ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Livros - Biblioteca Escolar</title>
</head>
<body>
    <div class="cadastro">
        <h1>Catálogo de Livros - Biblioteca Escolar</h1>
        
        <?php if ($mensagem): ?>
            <div class="mensagem"><?php echo $mensagem; ?></div>
        <?php endif; ?>

        <div class="input">
            <form method="POST">
                <input type="hidden" name="acao" value="salvar">
                
                <input type="text" name="titulo" placeholder="Título do livro" required>
                <input type="text" name="autor" placeholder="Autor do livro" required>
                <input type="number" name="ano" placeholder="Ano de publicação" min="1000" max="2024" required>
                
                <select name="genero" required>
                    <option value="">Selecione o gênero</option>
                    <option value="Literatura">Literatura</option>
                    <option value="Ficção Científica">Ficção Científica</option>
                    <option value="Fantasia">Fantasia</option>
                    <option value="Romance">Romance</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Terror">Terror</option>
                    <option value="Biografia">Biografia</option>
                    <option value="História">História</option>
                    <option value="Ciências">Ciências</option>
                    <option value="Matemática">Matemática</option>
                    <option value="Didático">Didático</option>
                    <option value="Infantil">Infantil</option>
                    <option value="Poesia">Poesia</option>
                </select>

                <input type="number" name="quantidade" placeholder="Quantidade disponível" min="0" required>
                
                <button type="submit" class="cadastrar">Cadastrar Livro</button>
            </form>
        </div>
    </div>

    <?php if (isset($livroParaEditar)): ?>
    <h2>Editando: <?php echo $livroParaEditar['titulo']; ?></h2>
    <div class="input">
        <form method="POST">
            <input type="hidden" name="acao" value="atualizar">
            <input type="hidden" name="id" value="<?php echo $livroParaEditar['id']; ?>">
            
            <input type="text" name="titulo" value="<?php echo $livroParaEditar['titulo']; ?>" placeholder="Título do livro" required>
            <input type="text" name="autor" value="<?php echo $livroParaEditar['autor']; ?>" placeholder="Autor do livro" required>
            <input type="number" name="ano" value="<?php echo $livroParaEditar['ano']; ?>" placeholder="Ano de publicação" min="1000" max="2024" required>
            
            <select name="genero" required>
                <option value="<?php echo $livroParaEditar['genero']; ?>" selected><?php echo $livroParaEditar['genero']; ?></option>
                <option value="Literatura">Literatura</option>
                <option value="Ficção Científica">Ficção Científica</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Romance">Romance</option>
                <option value="Suspense">Suspense</option>
                <option value="Terror">Terror</option>
                <option value="Biografia">Biografia</option>
                <option value="História">História</option>
                <option value="Ciências">Ciências</option>
                <option value="Matemática">Matemática</option>
                <option value="Didático">Didático</option>
                <option value="Infantil">Infantil</option>
                <option value="Poesia">Poesia</option>
            </select>

            <input type="number" name="quantidade" value="<?php echo $livroParaEditar['quantidade']; ?>" placeholder="Quantidade" min="0" required>
            
            <button type="submit" class="cadastrar">Atualizar Livro</button>
        </form>
    </div>
    <?php endif; ?>

    <h2>Acervo de Livros</h2>
    <?php if ($livros): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano</th>
                <th>Gênero</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?php echo $livro['id']; ?></td>
                <td><?php echo $livro['titulo']; ?></td>
                <td><?php echo $livro['autor']; ?></td>
                <td><?php echo $livro['ano']; ?></td>
                <td><?php echo $livro['genero']; ?></td>
                <td><?php echo $livro['quantidade']; ?></td>
                <td>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">
                        <button type="submit" class="editar">Editar</button>
                    </form>
                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="acao" value="deletar">
                        <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">
                        <button type="submit" class="excluir" onclick="return confirm('Tem certeza que deseja excluir este livro?')">Excluir</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum livro cadastrado no acervo.</p>
    <?php endif; ?>
</body>

<style>
    * {
        padding: 0px;
        margin: 0px;
    }

    h1 {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        background-color: #2c017c;
        border-radius: 10px;
        margin-top: 30px;
        border: solid 2px darkblue;
        width: 1000px;
        color: white;
        box-shadow: 2px 2px 5px #4868fa;
        margin-bottom: 20px;
        padding: 15px;
    }

    body {
        background-color: lightgray;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h2 {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        background-color: #2c017c;
        border-radius: 10px;
        box-shadow: 2px 2px 5px #4868fa;
        margin: 20px 0;
        border: solid 2px darkblue;
        color: white;
        padding: 10px 20px;
    }

    .cadastro {
        background: linear-gradient(to bottom, #7eb6d9, lightgray);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 20px 0;
    }

    .input {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .input form {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    input, select {
        background-color: azure;
        text-align: center;
        border: 2px solid darkblue;
        font-family: Arial, Helvetica, sans-serif;
        padding: 12px;
        border-radius: 5px;
        min-width: 150px;
    }

    .cadastrar {
        display: block;
        margin: 0 auto;
        margin-top: 2vh;
        border: none;
        background-color: green;
        padding: 15px 25px;
        border-radius: 50px;
        color: white;
        font-size: 16px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .cadastrar:hover {
        background-color: #00af43;
        transform: translateY(-3px);
        box-shadow: 2px 2px 5px #37ec31;
    }

    table {
        width: 90%;
        border-collapse: collapse;
        margin: 20px auto;
        text-align: center;
        border: solid 2px black;
        background-color: white;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
        border: solid 1px black;
    }
    
    th {
        background-color: #2c017c;
        color: white;
        font-weight: bold;
    }
    
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .excluir {
        background-color: red;
        padding: 8px 15px;
        color: white;
        font-weight: bold;
        font-size: 14px;
        border: solid 2px darkred;
        border-radius: 30px;
        box-shadow: 2px 2px 5px #fa4c4c;
        cursor: pointer;
    }

    .excluir:hover {
        background-color: #c20404;
        transform: translateY(-3px);
    }

    .editar {
        background-color: orange;
        padding: 8px 15px;
        color: white;
        font-weight: bold;
        font-size: 14px;
        border: solid 2px darkorange;
        border-radius: 30px;
        box-shadow: 2px 2px 5px #ff7300;
        cursor: pointer;
    }

    .editar:hover {
        background-color: #f5d236;
        transform: translateY(-3px);
    }

    .mensagem {
        background-color: #4CAF50;
        color: white;
        padding: 15px;
        border-radius: 5px;
        margin: 10px 0;
        text-align: center;
        font-weight: bold;
    }
</style>
</html>