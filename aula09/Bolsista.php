<?php 

    require_once "Aluno.php";

    class Bolsista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }

    public function pagarMensalidade(){
        echo "<p>$this->nome e bolsista entao paga com desconto!</p>";
    }
    
	/**
	 * @return mixed
	 */
	public function getBolsa()
	{
		return $this->bolsa;	
	}


	/**
	 * @param mixed $bolsa
	 * @return self
	 */
	public function setBolsa($bolsa)
	{
		$this->bolsa = $bolsa;
	}

}

?>