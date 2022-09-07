<?php
    /*** Función que determina si un numero es primo* Tiene que recibir 
     * el numero a determinar si es primo o no* Devuelve True o False*/
    function primo($num){
        $cont=0;
        // Funcion que recorre todos los numero desde el 2 hasta el valor recibido
        for($i=2;$i<=$num;$i++){if($num%$i==0){
            # Si se puede dividir por algun numero mas de una vez, no es primo
            if(++$cont>1)return false;
        }
        }return true;
    }

    //Recibe la cantidad de numeros primos a mostrar
    function ingresar($cantidad){
        $detener = 0;
        for($i=1;$i<=100000000;$i++){
            if(primo($i)){
                echo $i."<br />";
                $detener++;
            }

            if($detener === intval($cantidad)) return;
        }
    }


    ingresar($_POST["dato1"]);
?>


<pre>
    <a href="index.php">Inicio</a>
</pre>