<?php 
    require_once "Pessoa.php";

    class Aluno extends Pessoa{

    private $matricula;
    private $curso;


    public function cancelarMatricula(){
        echo "<p>Matricula sera cancelada</p>";
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