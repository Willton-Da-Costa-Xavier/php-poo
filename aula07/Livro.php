<?php 
    require_once "Pessoa.php";
    require_once "Publicacao.php";
    
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
       
        public function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $leitor;
        }


        public function abrir(){
            $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
           if($p > $this->totPaginas){
            $this->pagAtual = 0;
           }else{
            $this->pagAtual = $p;
           }
        }

        public function avancarPag(){
            $this->pagAtual++;
        }

        public function voltarPag(){
            $this->pagAtual-=1;
        }

        public function detalhes(){
            echo "<hr>Livro " . $this->titulo ." escrito por " . $this->autor;
            echo "<br> Paginas: ". $this->totPaginas . " atual: ". $this->pagAtual;
            echo "<br> Sendo lido por: ". $this->leitor->getNome();
        }
    
        /**
         * @return mixed
         */
        public function getTitulo()
        {
            return $this->titulo;	
        }

        /**
         * @return mixed
         */
        public function getAutor()
        {
            return $this->autor;	
        }

        /**
         * @return mixed
         */
        public function getTotPaginas()
        {
            return $this->totPaginas;	
        }

        /**
         * @return mixed
         */
        public function getPagAtual()
        {
            return $this->pagAtual;	
        }

        /**
         * @return mixed
         */
        public function getAberto()
        {
            return $this->aberto;	
        }

        /**
         * @return mixed
         */
        public function getLeitor()
        {
            return $this->leitor;	
        }

        
        /**
         * @param mixed $titulo
         * @return self
         */
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
            
        }

        /**
         * @param mixed $autor
         * @return self
         */
        public function setAutor($autor)
        {
            $this->autor = $autor;
            
        }

        /**
         * @param mixed $totPaginas
         * @return self
         */
        public function setTotPaginas($totPaginas)
        {
            $this->totPaginas = $totPaginas;
            
        }

        /**
         * @param mixed $pagAtual
         * @return self
         */
        public function setPagAtual($pagAtual)
        {
            $this->pagAtual = $pagAtual;
            
        }

        /**
         * @param mixed $aberto
         * @return self
         */
        public function setAberto($aberto)
        {
            $this->aberto = $aberto;
                
        }

        /**
         * @param mixed $leitor
         * @return self
         */
        public function setLeitor($leitor)
        {
            $this->leitor = $leitor;
                
        }

    }


?>