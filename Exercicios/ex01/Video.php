<?php 
    require_once "AcoesVideo.php";
    class Video implements AcoesVideo{
        private $titulo;
        private $avaliacao;
        private $curtidas;
        private $reproduzindo;
        private $views;
	/**
	 * @param mixed $titulo
	 * @param mixed $avaliacao
	 * @param mixed $curtidas
	 * @param mixed $reproduzindo
	 * @param mixed $views
	 */
        public function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->curtidas = 0;
            $this->reproduzindo = false;
            $this->views = 0;
        }



        public function play(){
            $this->reproduzindo = true;
        }

        public function pause(){
            $this->reproduzindo = false;
        }

        public function like(){
            $this->curtidas ++;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of avaliacao
         */ 
        public function getAvaliacao()
        {
                return $this->avaliacao;
        }

        /**
         * Set the value of avaliacao
         *
         * @return  self
         */ 
        public function setAvaliacao($avaliacao)
        {
            $media = ($this->avaliacao + $avaliacao)/$this->views;
            $this->avaliacao = $avaliacao;
        }

        /**
         * Get the value of curtidas
         */ 
        public function getCurtidas()
        {
                return $this->curtidas;
        }

        /**
         * Set the value of curtidas
         *
         * @return  self
         */ 
        public function setCurtidas($curtidas)
        {
                $this->curtidas = $curtidas;

                return $this;
        }

        /**
         * Get the value of reproduzindo
         */ 
        public function getReproduzindo()
        {
                return $this->reproduzindo;
        }

        /**
         * Set the value of reproduzindo
         *
         * @return  self
         */ 
        public function setReproduzindo($reproduzindo)
        {
                $this->reproduzindo = $reproduzindo;

                return $this;
        }

        /**
         * Get the value of views
         */ 
        public function getViews()
        {
                return $this->views;
        }

        /**
         * Set the value of views
         *
         * @return  self
         */ 
        public function setViews($views)
        {
                $this->views = $views;

                return $this;
        }
    }



?>