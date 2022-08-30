<?php

    class Disciplina{
        private $nome;
        private $cargaHoraria;
        private $ementa;

        // Construtor da classe
        public function __construct($nome, $cargaHoraria, $ementa){
            $this->nome = $nome;
            $this->cargaHoraria = $cargaHoraria;
            $this->ementa = $ementa;
            echo "<br/> Classe criada.";
        }

        // Funções Getters e Setters
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome                                                                        ){
            $this->nome = $nome;
        }

        public function getCargaHoraria(){
            return $this->cargaHoraria;
        }

        public function setCargaHoraria($nome                                                                        ){
            $this->cargaHoraria = $cargaHoraria;
        }

        public function getEmenta(){
            return $this->ementa;
        }

        public function setEmenta($nome                                                                        ){
            $this->ementa = $ementa;
        }

        public function toString(){
            echo "<br/> O nome da ".__CLASS__." é ".$this->nome.".<br/>";
            echo "<br/> A carga horária da ".__CLASS__." é ".$this->cargaHoraria."h.<br/>";
            echo "<br/> A ementa da ".__CLASS__." é ".$this->ementa.".<br/>";
        }

    }

    $logica = new Disciplina("Lógica de Programação", 160, "Algoritmos");
    echo "<br>";
    $logica->toString();

    echo "<br>";

    $web = new Disciplina("Linguagem de Programação Web", 120, "HTML, CSS, JavaScript e PHP");
    echo "<br>";
    $web->toString();
