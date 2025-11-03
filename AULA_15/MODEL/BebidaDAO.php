<?
class BebidaDAO {
    private $bebidasArray = []; 
    private $arquivoJson = 'bebidas.json';

    public function __construct() {
        if(file_exists(
            $this->arquivoJson)) {
                $conteudoArquivo = file_get_contents
                ($this->arquivoJson);

                $dadosArquivoEmArray = json_decode
                ($conteudoArquivo, 
                true);

                if ($dadosArquivoEmArray) {
                    foreach ($dadosArquivoEmArray as
                    $nome=> $info) {
                        $this->bebidasArray[$nome] =
                        new Bebida(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde'],
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
        file_put_contents($this->arquivoJson,
        json_encode($dadosParaSalvar,
        JSON_PRETTY_PRINT));
    }

    //CREAT
    public function criarBebidas(Bebida $bebida) {
        $this->bebidasArray[$bebida->getNome()] = $bebida;
        $this->salvarArquivo();
    }

    //UPDATE
    public function atualizarBebidas($nome, $novoValor, $novaQTDE) {
        if(isset($this->bebidasArray[$nome])) {
            $this->bebidasArray[$nome] -> setValor($novoValor);
            $this->bebidasArray[$nome] -> setQtde($novaQTDE);
        }
        $this->salvarArquivo();
    }

    //READ
    public function lerBebidas(){
        return $this->bebidasArray;
    }

    //DELETE
    public function excluirBebidas($nome) {
        unset($this->bebidasArray[$nome]);
        $this->salvarArquivo();
    }
}



?>