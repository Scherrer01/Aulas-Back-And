<?php
require_once __DIR__ . '/Bebida.php';

class BebidaDAO {
    private $arquivoJson;
    private $bebidasArray = [];

    public function __construct() {
        $this->arquivoJson = __DIR__ . '/../DATA/bebidas.json';
        $this->carregarArquivo();
    }

    private function carregarArquivo() {
        if (file_exists($this->arquivoJson)) {
            $conteudoArquivo = file_get_contents($this->arquivoJson);
            $dadosArquivoEmArray = json_decode($conteudoArquivo, true);
            
            if ($dadosArquivoEmArray) {
                foreach ($dadosArquivoEmArray as $nome => $info) {
                    $this->bebidasArray[$nome] = new Bebida(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde']
                    );
                }
            }
        }
    }

    private function salvarArquivo() {
        $dadosParaSalvar = [];
        foreach ($this->bebidasArray as $nome => $bebida) {
            $dadosParaSalvar[$nome] = [
                'nome' => $bebida->getNome(),
                'categoria' => $bebida->getCategoria(),
                'volume' => $bebida->getVolume(),
                'valor' => $bebida->getValor(),
                'qtde' => $bebida->getQtde(),
            ];
        }
        
        // Garante que o diretório existe
        $diretorio = dirname($this->arquivoJson);
        if (!is_dir($diretorio)) {
            mkdir($diretorio, 0777, true);
        }
        
        file_put_contents($this->arquivoJson, json_encode($dadosParaSalvar, JSON_PRETTY_PRINT));
    }

    // CREATE
    public function criarBebidas(Bebida $bebida) {
        $this->bebidasArray[$bebida->getNome()] = $bebida;
        $this->salvarArquivo();
    }

    // UPDATE
    public function atualizarBebidas($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde) {
    if (isset($this->bebidasArray[$nomeOriginal])) {
        $bebida = $this->bebidasArray[$nomeOriginal];
        
        $bebida->setNome($novoNome);
        $bebida->setCategoria($categoria);
        $bebida->setVolume($volume);
        $bebida->setValor($valor);
        $bebida->setQtde($qtde);
        
        if ($nomeOriginal !== $novoNome) {
            unset($this->bebidasArray[$nomeOriginal]);
            $this->bebidasArray[$novoNome] = $bebida;
        }
        
        $this->salvarArquivo();
    }
}

    // READ
    public function lerBebidas() {
        return $this->bebidasArray;
    }

    // DELETE
    public function excluirBebidas($nome) {
        if (isset($this->bebidasArray[$nome])) {
            unset($this->bebidasArray[$nome]);
            $this->salvarArquivo();
        }
    }
}
?>