<?php 

    class ContaBanco{
        //Atributos
        public $numconta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;


        //Metodos
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC"){
                $this->setSaldo(50);
            }elseif($t == "CP"){
                $this->setSaldo(150);
            }

        }

        public function fecharConta(){
            if($this->getSaldo()>0){
                echo "<p>Conta Ainda tem dinheiro, nao posso fechar</p>";
            }elseif($this->getSaldo()<0){
                echo "<p>Conta esta em debito. Impossivel encerrar</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Conta de {$this->getDono()} fechada com sucesso</p>";
            }
        }

        public function depositar($v){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo()+$v);
                echo "<p>Deposito de $v na conta de {$this->getDono()}</p>";
            }else{
                echo "<p>Impossivel depositar</p>";
            }
        }

        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo()-$v);
                    echo "<p>Saque de $v autorizado na conta de {$this->getDono()}</p>";
                }else{
                    echo "<p>Saldo insuficiente para saque</p>";
                }
            }else{
                echo "<p>Nao posso sacar de uma conta fechada</p>";
            }
        }

        public function mensalidade(){
            if($this->getTipo() == "CC"){
                $v = 12;
            }elseif ($this->getTipo() == "CP"){
                $v = 20;
            }
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de $v debitada na conta de {$this->getDono()}</p>";
            }else{
                echo "<p>Problemas com a conta nao posso cobrar</p>";
            }
        }

        //Metodos especiais 
        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso</p>";
        }

        public function getnumConta(){
            return $this->numconta;
        }

        public function setnumConta($numConta){
            $this->numconta = $numConta;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo= $tipo;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($dono){
            $this->dono = $dono;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($status){
            $this->status = $status;
        }
    }
    
?>