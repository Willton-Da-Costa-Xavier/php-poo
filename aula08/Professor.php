<?php 
    require_once "Pessoa.php";

    class Professor extends Pessoa{
    private $escpecialidade;
    private $salario;


    public function ReceberAum($aum){
        $this->salario +=$aum;
    }
    
	/**
	 * @return mixed
	 */
	public function getEscpecialidade()
	{
		return $this->escpecialidade;	
	}

	/**
	 * @return mixed
	 */
	public function getSalario()
	{
		return $this->salario;	
	}


	/**
	 * @param mixed $escpecialidade
	 * @return self
	 */
	public function setEscpecialidade($escpecialidade)
	{
		$this->escpecialidade = $escpecialidade;	
	}

	/**
	 * @param mixed $salario
	 * @return self
	 */
	public function setSalario($salario)
	{
		$this->salario = $salario;	
	}

}


?>