<?php
require_once 'calendario.php';
$cal = new Calendario();
for ($i=0; $i<25; $i++) {
    $cal->agregarRegalo($i + 1, 'Regalo dia ' . ($i + 1));
}
$cal->mostrarTodoCalendario();   

$cal->mostraDiaActual('1');
$cal->mostraDiaActual('10');

?>