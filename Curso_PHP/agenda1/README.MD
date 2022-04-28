# PROYECTO AGENDA

la base de datos se llama : agenda
y la tabla : contactos

CONTACTO
id autoincrementable
nombre varchar(200)
apellido varchar(250)
e-mail varchar(200)
teléfono1 varchar(100)
móvil varchar(100)
activo boolean   //para listar los contactos activos

NOTA: el boolean se transforma en tinyint(1) (integer de una sola posición donde 1 es True y 0 es False)

## Conexión a la BD

PHP tiene varias clases predeterminadas para manejar conexiones con BASES de Datos
Clase 1 : mysqli()  //base de datos mysql.
Clase 2 : PDO()  //universal PHP DATA OBJETS

## require, include, require_once, include_once

Todos incluyen un archivo externo, la diferencia está en el manejo de errores.
Si hay un error grave INCLUDE rompe el programa o aborta la carga normal. El require genera el error pero permite la carga del aplicativo.

## PATRON DE DISEÑO FRONT_CONTROLLER
En el diseño del aplicativo tengo una sola "puerta de entrada" a las funcionalidades.s