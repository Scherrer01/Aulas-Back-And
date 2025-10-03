<?php
//teste
class jogo{
    private $nome;
    private $tipo;
    private $preco;
    private $ano;
    private $empresa;

    //construtores
        public function ___construct($nome, $tipo, $preco, $ano, $empresa){
        $this -> setNome($nome);
        $this -> setTipo($tipo);
        $this -> setPreco($preco);
        $this -> setAno($ano);
        $this -> setempresa($empresa);
    }

    //Encapsulamento (getters e setters)

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome= ucwords(strtolower 
            ($nome));
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo= ucwords(strtolower 
            ($tipo));
        }
        public function getPreco(){
            return $this->preco;
        }
         public function setPreco($preco){
            $this->preco= ucwords(strtolower 
            ($preco));
         }

        public function getano($ano){
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano= ucwords(strtolower 
            ($ano));
        }

         public function getEmpresa(){
            return $this->empresa;
        }
        public function setEmpresa($empresa){
            $this->empresa= ucwords(strtolower 
            ($empresa));
        }

    //Métodos
        public function exibirInfo(){
            return "O $this->nome é um jogo de $this->tipo no valor de R$$this->preco, lançado em $this->ano feito pela $this->empresa.\n";
        }
        public function atualizacaoJogo(){
            if($this->ano < 2023){
                return "O $this->nome precisa de atualização!\n";
            }elseif($this->ano < 2005){
                return "O $this->nome não tem mais atualização\n";
            }else{
                return "O $this->nome está atualizado\n";
            }
        }
}

//Objetos
$valorant = new jogo ("Valorant", "FPS", 0, 2020, "riot");
$GTA = new jogo ("GTA","mundo aberto", 259.99, 2013, "Rockstar");
$mario = new jogo("Super Mario Bross Wonder", "Plataforma", 349.00,2023, "Nintendo");

// Visualizar métodos
echo$valorant -> exibirInfo();
echo $GTA -> atualizacaoJogo();

?>
