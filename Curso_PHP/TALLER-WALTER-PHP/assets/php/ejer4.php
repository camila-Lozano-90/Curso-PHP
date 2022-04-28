<?php
#inicializamos las variables
$cantAlumnos = $_POST['cantAlumnos'];
$costePorAlumno = 0;
$total = 0;

if($cantAlumnos >= 100){
    $costePorAlumno = 6500;
    $total = $cantAlumnos * $costePorAlumno;
}if($cantAlumnos > 50 && $cantAlumnos < 99){
    $costePorAlumno = 7000;
    $total = $cantAlumnos * $costePorAlumno;
}if($cantAlumnos > 30 && $cantAlumnos < 49){
    $costePorAlumno = 9500;
    $total = $cantAlumnos * $costePorAlumno;
}if($cantAlumnos < 30){
    $costePorAlumno = 400000 / $cantAlumnos;
    $total = $cantAlumnos * $costePorAlumno;
}

echo 'La cantidad de alumnos es: '.$cantAlumnos.'<br>'.'El coste por alumno es: '.$costePorAlumno.'<br>'.'El total es: '.$total;
?>