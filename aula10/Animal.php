<?php 

    abstract class Animal
    {
    protected $peso;
    protected $idade;
    protected $membros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();
    
	/**
	 * @return mixed
	 */
	public function getPeso()
	{
		return $this->peso;	
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
	public function getMembros()
	{
		return $this->membros;	
	}


	/**
	 * @param mixed $peso
	 * @return self
	 */
	public function setPeso($peso)
	{
		$this->peso = $peso;	
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
	 * @param mixed $membros
	 * @return self
	 */
	public function setMembros($membros)
	{
		$this->membros = $membros;	
	}

	}



?>