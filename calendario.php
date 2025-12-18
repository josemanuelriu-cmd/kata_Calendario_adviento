<?php
class Calendario {
    private $regalo = [];

    public function agregarRegalo($fecha, $regalo) {
        $this->regalo[$fecha][] = $regalo;
    }

    public function obtenerRegalo($fecha) {
        return isset($this->regalo[$fecha]) ? $this->regalo[$fecha] : [];
    }

    public function mostrarTodoCalendario() {
        foreach ($this->regalo as $fecha => $regalo) {
            echo "Regalo para dia " . $fecha . ": ";
            foreach($regalo as $r){
                echo $r."\n";
            }
        }
    }
    public function mostraDiaActual($fecha) {
        $regalo = $this->obtenerRegalo($fecha);
        if (!empty($regalo)) {
            echo "Regalo para dia " . $fecha . ": ";
            foreach ($regalo as $r) {
                echo $r . "\n";
            }
        } else {
            echo "No hay regalo para " . $fecha . ".\n";
        }
    }
}

?>