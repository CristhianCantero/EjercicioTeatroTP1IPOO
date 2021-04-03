<?php
include 'Teatro.php';
/**
 * PROGRAMA PRINCIPAL
*/
echo "Ingrese el nombre del teatro: ";
$nombreTeatro = trim(fgets(STDIN));
echo "Ingrese la direccion del teatro: ";
$direccionTeatro = trim(fgets(STDIN));

echo "Ingrese el nombre de la funcion 1: ";
$nombFun1 = trim(fgets(STDIN));
echo "Ingrese el precio de la funcion 1: ";
$preFun1 = trim(fgets(STDIN));

echo "Ingrese el nombre de la funcion 2: ";
$nombFun2 = trim(fgets(STDIN));
echo "Ingrese el precio de la funcion 2: ";
$preFun2 = trim(fgets(STDIN));

echo "Ingrese el nombre de la funcion 3: ";
$nombFun3 = trim(fgets(STDIN));
echo "Ingrese el precio de la funcion 3: ";
$preFun3 = trim(fgets(STDIN));

echo "Ingrese el nombre de la funcion 4: ";
$nombFun4 = trim(fgets(STDIN));
echo "Ingrese el precio de la funcion 4: ";
$preFun4 = trim(fgets(STDIN));

$coleccionFuncionesTeatro = array();
$coleccionFuncionesTeatro["funcion1"] = ["nombre"=>$nombFun1, "precio"=>$preFun1];
$coleccionFuncionesTeatro["funcion2"] = ["nombre"=>$nombFun2, "precio"=>$preFun2];
$coleccionFuncionesTeatro["funcion3"] = ["nombre"=>$nombFun3, "precio"=>$preFun3];
$coleccionFuncionesTeatro["funcion4"] = ["nombre"=>$nombFun4, "precio"=>$preFun4];

$teatro = new Teatro($nombreTeatro, $direccionTeatro, $coleccionFuncionesTeatro);

do {
    echo "ELIJA UNA OPCION: " . "\n";
    echo "1: Cambiar nombre del teatro" . "\n";
    echo "2: Cambiar direccion del teatro" . "\n";
    echo "3: Cambiar nombre y precio de alguna funcion" . "\n";
    echo "4: SALIR" . "\n";
    echo "Opcion: ";
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case '1':
            echo "Nombre actual: " . $teatro->getNombre() . "\n";
            echo "Ingrese el nuevo nombre: ";
            $nuevoNombreTeatro = trim(fgets(STDIN));
            $teatro->cambiarNombre($nuevoNombreTeatro);
            echo "--------------------------------------" . "\n";
            echo $teatro . "\n";
            echo "--------------------------------------" . "\n";
            break;
        case '2':
            echo "Direccion actual: " . $teatro->getDireccion() . "\n";
            echo "Ingrese la nueva direccion: ";
            $nuevaDireccionTeatro = trim(fgets(STDIN));
            $teatro->cambiarDireccion($nuevaDireccionTeatro);
            echo "--------------------------------------" . "\n";
            echo $teatro . "\n";
            echo "--------------------------------------" . "\n";
            break;
        case '3':
            do{
                echo "ELIJA QUE FUNCION DESEA CAMBIAR SUS ATRIBUTOS" . "\n";
                echo "1: Funcion " . $teatro->getNombreFuncion1() . "\n";
                echo "2: Funcion " . $teatro->getNombreFuncion2(). "\n";
                echo "3: Funcion " . $teatro->getNombreFuncion3(). "\n";
                echo "4: Funcion " . $teatro->getNombreFuncion4(). "\n";
                echo "5: CANCELAR" . "\n";
                echo "Opcion: ";
                $opcionNombreFuncion = trim(fgets(STDIN));
                switch ($opcionNombreFuncion) {
                    case '1':
                        echo "Nombre funcion 1 actual: " . $teatro->getNombreFuncion1() . "\n";
                        echo "Precio funcion 1 actual: " . $teatro->getPrecioFuncion1() . "\n";
                        echo "Ingrese el nuevo nombre de la funcion 1: ";
                        $nuevoNombreFuncion = trim(fgets(STDIN));
                        echo "Ingrese el nuevo precio de la funcion 1: ";
                        $nuevoPrecioFuncion = trim(fgets(STDIN));
                        $nuevaFuncion = array();
                        $nuevaFuncion = ["nombre"=>$nuevoNombreFuncion, "precio"=>$nuevoPrecioFuncion];
                        $teatro->cambiarFuncion1($nuevaFuncion);
                        break;
                    case '2':
                        echo "Nombre funcion 2 actual: " . $teatro->getNombreFuncion2() . "\n";
                        echo "Precio funcion 2 actual: " . $teatro->getPrecioFuncion2() . "\n";
                        echo "Ingrese el nuevo nombre de la funcion 2: ";
                        $nuevoNombreFuncion = trim(fgets(STDIN));
                        echo "Ingrese el nuevo precio de la funcion 2: ";
                        $nuevoPrecioFuncion = trim(fgets(STDIN));
                        $nuevaFuncion = array();
                        $nuevaFuncion = ["nombre"=>$nuevoNombreFuncion, "precio"=>$nuevoPrecioFuncion];
                        $teatro->cambiarFuncion2($nuevaFuncion);
                        break;
                    case '3':
                        echo "Nombre funcion 3 actual: " . $teatro->getNombreFuncion3() . "\n";
                        echo "Precio funcion 3 actual: " . $teatro->getPrecioFuncion3() . "\n";
                        echo "Ingrese el nuevo nombre de la funcion 3: ";
                        $nuevoNombreFuncion = trim(fgets(STDIN));
                        echo "Ingrese el nuevo precio de la funcion 3: ";
                        $nuevoPrecioFuncion = trim(fgets(STDIN));
                        $nuevaFuncion = array();
                        $nuevaFuncion = ["nombre"=>$nuevoNombreFuncion, "precio"=>$nuevoPrecioFuncion];
                        $teatro->cambiarFuncion3($nuevaFuncion);
                        break;
                    case '4':
                        echo "Nombre funcion 4 actual: " . $teatro->getNombreFuncion4() . "\n";
                        echo "Precio funcion 4 actual: " . $teatro->getPrecioFuncion4() . "\n";
                        echo "Ingrese el nuevo nombre de la funcion 4: ";
                        $nuevoNombreFuncion = trim(fgets(STDIN));
                        echo "Ingrese el nuevo precio de la funcion 4: ";
                        $nuevoPrecioFuncion = trim(fgets(STDIN));
                        $nuevaFuncion = array();
                        $nuevaFuncion = ["nombre"=>$nuevoNombreFuncion, "precio"=>$nuevoPrecioFuncion];
                        $teatro->cambiarFuncion4($nuevaFuncion);
                        break;
                }
                echo "--------------------------------------" . "\n";
                echo $teatro . "\n";
                echo "--------------------------------------" . "\n";
            }while($opcionNombreFuncion<>5);
            break;
    }
}while($opcion<>4);

