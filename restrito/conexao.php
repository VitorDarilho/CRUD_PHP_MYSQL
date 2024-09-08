<?php
    $_server="localhost";
    $user= "root";
    $pass= "";
    $bd ="empresa";

    if($conn = mysqli_connect($_server, $user, $pass, $bd)) {
        #echo "CONECTADO!";
    }else
        echo "NÃO Conectado";

    function mensagem($texto,$tipo){
        echo "<div class='alert alert-success' role='alert'>
                $texto
            </div>";
    
    }

    function mostra_data($data){
        $d = explode('-', $data);
        $escreve = $d[2]."/" .$d[1] ."/" .$d[0];
        return $escreve;
    }
?>