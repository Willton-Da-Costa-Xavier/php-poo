<?php 
    require_once 'Lutador.php';
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarluta($l1, $l2){
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){

                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);

                switch ($vencedor) {
                    case 0: //Empate
                        echo "<p>Empate!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;

                    case 1: // desafiado vence
                        echo "<p>". $this->desafiado->getNome() . " Vence"."</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;

                    case 2: //desafiante vence
                        echo "<p>". $this->desafiante->getNome() . " Vence"."</p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                }

            }else{
                echo "<p>Luta nao pode acontecer</p>";
            }
        }

       
        public function getDesafiado()
        {
            return $this->desafiado;
        }

        
        public function setDesafiado($desafiado)
        {
            $this->desafiado = $desafiado;
            
        }

       
        public function getDesafiante()
        {
            return $this->desafiante;
        }

       
        public function setDesafiante($desafiante)
        {
            $this->desafiante = $desafiante;
        }

        public function getRounds()
        {
            return $this->rounds;
        }

       
        public function setRounds($rounds)
        {
            $this->rounds = $rounds;
        }

       
        public function getAprovada()
        {
            return $this->aprovada;
        }

       
        public function setAprovada($aprovada)
        {
            $this->aprovada = $aprovada;
        }
    }

?>