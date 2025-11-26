<?php
require_once __DIR__ . "/../CONTROLLER/BebidaController.php";

$controller = new BebidaController();
$mensagem = '';
$tipoMensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if ($_POST['acao'] === 'salvar') {
            $controller->criar(
                $_POST['nome'],
                $_POST['categoria'],
                $_POST['volume'],
                $_POST['valor'],
                $_POST['qtde']
            );
            $mensagem = 'Bebida cadastrada com sucesso!';
            $tipoMensagem = 'sucesso';
            
        } elseif ($_POST['acao'] === 'deletar') {
            $controller->deletar($_POST['nome']);
            $mensagem = 'Bebida excluída com sucesso!';
            $tipoMensagem = 'sucesso';
            
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
            $mensagem = 'Bebida atualizada com sucesso!';
            $tipoMensagem = 'sucesso';
        }
    } catch (Exception $e) {
        $mensagem = $e->getMessage();
        $tipoMensagem = 'erro';
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
    <div class="container">
        <!-- MENSAGENS -->
        <?php if ($mensagem): ?>
        <div class="mensagem <?php echo $tipoMensagem; ?>">
            <?php echo $mensagem; ?>
        </div>
        <?php endif; ?>

        <div class="cadastro">
            <h1>Formulário para preenchimento de bebidas</h1>
            <div class="input">
                <form method="POST">
                    <input type="hidden" name="acao" value="salvar">
                    
                    <input type="text" name="nome" placeholder="Nome da bebida" required value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''; ?>">
                    
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

                    <input type="text" name="volume" placeholder="Volume da bebida" required value="<?php echo isset($_POST['volume']) ? htmlspecialchars($_POST['volume']) : ''; ?>">
                    <input type="number" name="valor" step="0.01" placeholder="Valor em R$ da bebida" required value="<?php echo isset($_POST['valor']) ? htmlspecialchars($_POST['valor']) : ''; ?>">
                    <input type="number" name="qtde" placeholder="Quantidade em estoque" required value="<?php echo isset($_POST['qtde']) ? htmlspecialchars($_POST['qtde']) : ''; ?>">
                    
                    <button type="submit" class="cadastrar">Cadastrar</button>
                </form>
            </div>
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
    </div>

    <style>
    /* Reset e Variáveis */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary: #2c017c;
        --primary-dark: #1f0157;
        --primary-light: #4a29a3;
        --secondary: #3498db;
        --success: #27ae60;
        --warning: #f39c12;
        --danger: #e74c3c;
        --light: #f8f9fa;
        --dark: #2c3e50;
        --gray: #6c757d;
        --border: #dee2e6;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        --shadow-hover: 0 8px 15px rgba(0, 0, 0, 0.15);
    }

    body {
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 20px;
        line-height: 1.6;
        color: var(--dark);
    }

    /* Container Principal */
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Cabeçalhos */
    h1 {
        text-align: center;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        border-radius: 12px;
        margin: 20px auto 30px;
        width: 90%;
        max-width: 800px;
        color: white;
        box-shadow: var(--shadow);
        padding: 20px;
        font-size: 1.8rem;
        font-weight: 700;
    }

    h2 {
        text-align: center;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        border-radius: 12px;
        box-shadow: var(--shadow);
        margin: 30px auto;
        color: white;
        padding: 16px;
        width: 90%;
        max-width: 600px;
        font-size: 1.4rem;
        font-weight: 600;
    }

    /* Seção de Cadastro */
    .cadastro {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        border-radius: 16px;
        margin: 0 auto 40px;
        width: 90%;
        max-width: 900px;
        box-shadow: var(--shadow);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .input {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-bottom: 25px;
    }

    .input form {
        display: grid;
        grid-template-columns: repeat(5, 1fr) auto;
        gap: 15px;
        width: 100%;
        align-items: end;
    }

    /* Campos de Formulário */
    input, select {
        background: var(--light);
        text-align: left;
        border: 2px solid var(--border);
        font-family: inherit;
        padding: 12px 15px;
        border-radius: 8px;
        font-size: 14px;
        width: 100%;
        transition: all 0.3s ease;
    }

    input:focus, select:focus {
        outline: none;
        border-color: var(--primary);
        background: white;
        box-shadow: 0 0 0 3px rgba(44, 1, 124, 0.1);
    }

    /* Botões */
    .cadastrar {
        border: none;
        background: linear-gradient(135deg, var(--success), #2ecc71);
        padding: 12px 25px;
        border-radius: 8px;
        color: white;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: var(--shadow);
        height: fit-content;
        white-space: nowrap;
    }

    .cadastrar:hover {
        background: linear-gradient(135deg, #229954, var(--success));
        transform: translateY(-2px);
        box-shadow: var(--shadow-hover);
    }

    /* Tabela */
    table {
        width: 95%;
        border-collapse: collapse;
        margin: 30px auto;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    th, td {
        padding: 15px 20px;
        text-align: center;
        border-bottom: 1px solid var(--border);
    }

    th {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
        font-weight: 600;
        font-size: 14px;
    }

    td {
        background: white;
        font-size: 14px;
    }

    tr:nth-child(even) td {
        background: #f8f9fa;
    }

    tr:hover td {
        background: #e8f4fd;
    }

    /* Botões de Ação */
    .excluir {
        background: linear-gradient(135deg, var(--danger), #c0392b);
        padding: 8px 16px;
        color: white;
        font-weight: 600;
        font-size: 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: var(--shadow);
    }

    .excluir:hover {
        background: linear-gradient(135deg, #c0392b, var(--danger));
        transform: translateY(-2px);
        box-shadow: var(--shadow-hover);
    }

    .editar {
        background: linear-gradient(135deg, var(--warning), #e67e22);
        padding: 8px 16px;
        color: white;
        font-weight: 600;
        font-size: 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: var(--shadow);
    }

    .editar:hover {
        background: linear-gradient(135deg, #e67e22, var(--warning));
        transform: translateY(-2px);
        box-shadow: var(--shadow-hover);
    }

    /* Forms inline */
    form[style*="display: inline"] {
        display: inline-block;
        margin: 0 4px;
    }

    /* Mensagens */
    p {
        text-align: center;
        font-size: 16px;
        color: var(--gray);
        margin: 30px 0;
        font-weight: 500;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: var(--shadow);
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }

    .mensagem {
        padding: 15px 20px;
        border-radius: 8px;
        margin: 20px auto;
        text-align: center;
        font-weight: 600;
        max-width: 800px;
        border: 1px solid;
        animation: fadeIn 0.5s ease;
    }

    .mensagem.sucesso {
        background: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
    }

    .mensagem.erro {
        background: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
    }

    /* Responsividade */
    @media (max-width: 1024px) {
        .input form {
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }
        
        .cadastrar {
            grid-column: span 3;
        }
    }

    @media (max-width: 768px) {
        .input form {
            grid-template-columns: 1fr;
            gap: 12px;
        }
        
        .cadastrar {
            grid-column: span 1;
        }
        
        table {
            width: 98%;
            font-size: 13px;
        }
        
        th, td {
            padding: 12px 8px;
        }
        
        h1 {
            font-size: 1.5rem;
            padding: 16px;
        }
        
        h2 {
            font-size: 1.2rem;
            padding: 14px;
        }
    }

    /* Animações */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .cadastro, table, h1, h2 {
        animation: fadeIn 0.6s ease-out;
    }
</style>
</body>
</html>