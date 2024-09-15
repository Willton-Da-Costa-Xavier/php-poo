<?php 

    abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;

    public final function fazerAniversario(){
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