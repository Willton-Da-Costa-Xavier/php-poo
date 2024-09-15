<?php 


    class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    
	public function __construct()
	{
	}



    

    public function fazerAniversario(){
        $this->idade ++;
    }
    
	/**
	 * @return mixed
	 */
	public function getNome()
	{
		return $this->nome;	
	}

	/**
	 * @return mixed
	 */
	public function getIdade()
	{
		return $this->idade;	
	}

	/**
	 * @return mixed
	 */
	public function getSexo()
	{
		return $this->sexo;	
	}


	/**
	 * @param mixed $nome
	 * @return self
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	/**
	 * @param mixed $idade
	 * @return self
	 */
	public function setIdade($idade)
	{
		$this->idade = $idade;
	}

	/**
	 * @param mixed $sexo
	 * @return self
	 */
	public function setSexo($sexo)
	{
		$this->sexo = $sexo;

	}

}


?>