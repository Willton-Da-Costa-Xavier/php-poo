<?php 

    class Caneta{

        var $modelo;
        var $cor;
        var $ponta;
        var $tampada;
        var $carga;

        function rabiscar(){
            if ($this->tampada == true) {
                echo "<p>Erro! Nao posso rabiscar</p>";
            }else{
                echo "<p>Estou rabiscando</p>";
            }
            
        }

        function tampar(){
            $this->tampada = true;
        }

        function destampar(){
            $this->tampada = false;
        }

    }

?>