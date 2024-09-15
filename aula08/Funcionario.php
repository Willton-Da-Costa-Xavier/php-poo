<?php 
    require_once "Pessoa.php";

    class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
    
	/**
	 * @return mixed
	 */
	public function getSetor()
	{
		return $this->setor;	
	}

	/**
	 * @return mixed
	 */
	public function getTrabalhando()
	{
		return $this->trabalhando;	
	}


	/**
	 * @param mixed $setor
	 * @return self
	 */
	public function setSetor($setor)
	{
		$this->setor = $setor;
	}

	/**
	 * @param mixed $trabalhando
	 * @return self
	 */
	public function setTrabalhando($trabalhando)
	{
		$this->trabalhando = $trabalhando;
	}

}


?>