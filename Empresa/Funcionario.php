<?php
    class Funcionario
    {
        private $nome;
        private $cidade;
        private $horasTrab;
        private $salarioFinal;

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }

        public function getCidade()
        {
            return $this->cidade;
        }

        public function setHorasTrabalhadas($horas)
        {
            $this->horasTrab = $horas;
        }

        public function getHorasTrabalhadas()
        {
            return $this->horasTrab;
        }

        public function setSalarioFinal($salario)
        {
            $this->salarioFinal = $salario;
        }

        public function getSalarioFinal()
        {
            return $this->salarioFinal;
        }

        public function calcularSalario()
        {
            return $this->salarioFinal =  $this->horasTrab * $this->salHora * 30;
        }

        public function mostrarDados()
        {
            return $this->nome. " " .$this->cidade. " " .$this->horasTrab. " ".  $this->salarioFinal;
        } 
        
        public function darAumento($aumento)
        {
            $this->salarioFinal += $aumento;
        }
    }
?>