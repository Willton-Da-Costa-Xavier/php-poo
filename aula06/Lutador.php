<?php 

    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derotas, $empates;
	
        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
        {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derotas = $de;
            $this->empates = $em;
        }



        public function apresentar(){
            echo "<p>----------------------------------</p>";
            echo "<p>CHEGOU A HORA! O lutador ". $this->getNome();
            echo " veio diretamente de ". $this->getNacionalidade();
            echo " tem ". $this->getIdade() . " anos e pesa ". $this->getPeso() . "Kg";
            echo "<br>Ele tem ". $this->getVitorias() . " vitorias, ";
            echo $this->getDerotas() . " derotas e ". $this->getEmpates() . " empates</p>";
        }

        public function status(){
            echo "<p>-----------------------------------</p>";
            echo "<p>" . $this->getNome() . " e um peso " . $this->getCategoria();
            echo " e ja ganhou ". $this->getVitorias() . " vezes,";
            echo " perdeu ". $this->getDerotas() . " vezes e ";
            echo " empatou ". $this->getEmpates() . " vez/es</p>";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias()+1);
        }

        public function perderLuta(){
            $this->setDerotas($this->getDerotas()+1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates()+1);
        }

       
        public function getNome()
        {
            return $this->nome;
        }

       
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        
        public function getNacionalidade()
        {
            return $this->nacionalidade;
        }

        
        public function setNacionalidade($nacionalidade)
        {
            $this->nacionalidade = $nacionalidade;
        }

       
        public function getIdade()
        {
            return $this->idade;
        }

        
        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        
        public function getAltura()
        {
            return $this->altura;
        }

      
        public function setAltura($altura)
        {
            $this->altura = $altura;

            return $this;
        }

      
        public function getPeso()
        {
            return $this->peso;
        }

        
        public function setPeso($peso)
        {
            $this->peso = $peso;
            $this->setCategoria();
        }

       
        public function getCategoria()
        {
            return $this->categoria;
        }

       
        private function setCategoria()
        {
            if($this->peso < 52.2){
                $this->categoria = "Invalido";
            }elseif($this->peso <= 70.3){
                $this->categoria = "Leve";
            }elseif($this->peso <= 83.9){
                $this->categoria = "Medio";
            }elseif($this->peso <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Invalido";
            }
        }

        
        public function getVitorias()
        {
            return $this->vitorias;
        }

       
        public function setVitorias($vitorias)
        {
            $this->vitorias = $vitorias;

            return $this;
        }

       
        public function getDerotas()
        {
            return $this->derotas;
        }

       
        public function setDerotas($derotas)
        {
            $this->derotas = $derotas;

            return $this;
        }

       
        public function getEmpates()
        {
            return $this->empates;
        }

       
        public function setEmpates($empates)
        {
            $this->empates = $empates;
        }
    }

?>