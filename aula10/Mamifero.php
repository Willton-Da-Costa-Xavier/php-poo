<?php 
    require_once "Animal.php";
    class Mamifero extends Animal{
        private $corPele;


        public function locomover(){
            echo "<p>Correndo</p>";
        }

        public function alimentar(){
            echo "<p>Mamando</p>";
        }

        public function emitirSom(){
            echo "<p>Som de Mamifero</p>";
        }
    
        /**
         * @param mixed $corPele
         * @return self
         */
        public function setCorPele($corPele)
        {
            $this->corPele = $corPele;
        }


        /**
         * @return mixed
         */
        public function getCorPele()
        {
            return $this->corPele;	
        }

    }


?>