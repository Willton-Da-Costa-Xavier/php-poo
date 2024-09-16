<?php 
    require_once "Animal.php";

    class Reptil extends Animal{
    private $corEscama;
    
    public function locomover(){
        echo "<p>Rastejando</p>";
    }

    public function alimentar(){
        echo "<p>Comer vegetais</p>";
    }

    public function emitirSom(){
        echo "<p>Som do Reptil</p>";
    }
    
	/**
	 * @return mixed
	 */
	public function getCorEscama()
	{
		return $this->corEscama;	
	}


	/**
	 * @param mixed $corEscama
	 * @return self
	 */
	public function setCorEscama($corEscama)
	{
		$this->corEscama = $corEscama;
	}

}


?>