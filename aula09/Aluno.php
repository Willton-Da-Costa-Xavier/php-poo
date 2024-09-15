<?php 
    require_once "Pessoa.php";

    class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function pagarMensalidade(){
        echo "<p>Pagando Mensalidade do aluno <strong>". $this->getNome()."</strong></p>";
    }
    
	/**
	 * @return mixed
	 */
	public function getMatricula()
	{
		return $this->matricula;	
	}

	/**
	 * @return mixed
	 */
	public function getCurso()
	{
		return $this->curso;	
	}


	/**
	 * @param mixed $matricula
	 * @return self
	 */
	public function setMatricula($matricula)
	{
		$this->matricula = $matricula;	
	}

	/**
	 * @param mixed $curso
	 * @return self
	 */
	public function setCurso($curso)
	{
		$this->curso = $curso;	
	}

}

?>