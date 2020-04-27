<?php
    //Mostrar texto en patalla
    echo 'Hola Mundo </br>'; 
    //Concatenar variables y mostrar en pantalla
    $mensaje = 'somos temple ! ';
    $numMiembros = 17;
    echo 'Hola mundo ' . $mensaje . ' y estamos ' . $numMiembros . '</br>';
    //Estructura condicional if
    $dinero = 500; 
    $tiempo = true;
    $combustible = false;
    if($dinero>=300 && $tiempo){
        echo 'Tengo ' . $dinero . ' soles' . ' y tiempo suficiente, puedo ir de vacaciones cuando termine la cuarentena </br>';  
     }else{
        echo 'No tengo ' . $dinero . ' soles' . ' ni tiempo suficiente, no puedo ir de vacaciones cuando termine la cuarentena';  
     }

    if($dinero>=300 || $combustible){
        echo 'Tengo ' . $dinero . ' soles' . ' o combustible suficiente, puedo ir de vacaciones cuando termine la cuarentena </br>';  
    }else{
        echo 'No tengo ' . $dinero . ' soles' . 'ni combustible suficiente, no puedo ir de vacaciones cuando termine la cuarentena </br>';  
    }
    //Estructura repetitiva while
    $contador = 1; 
    while($contador<=5){
        echo $contador . '</br>'; 
        $contador+=1 ; // es equivalente a decir $contador = $contador + 1 o $contador++;
    }

    /*BONUS
    Contatenacion valida pero no segura
     echo "Hola mundo $mensaje y estamos $numMiembros;
    Concatenacion valida y segura
     echo 'Hola mundo ' . $mensaje . ' y estamos' . $numMiembros;
     */
?>