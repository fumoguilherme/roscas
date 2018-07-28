<?php
/**
 * Created by PhpStorm.
 * User: TechJonas
 * Date: 07/26/2018
 * Time: 10:26
 */

include_once ("../../dao/actualizar.php");

$grupo_codigo = $_REQUEST["grupo_id"];

$actualizar = atualizar("grupo_estado","activo","grupo_roscas","WHERE md5(grupo_codigo) = '$grupo_codigo'");

if($actualizar){
    $status = array(
        'estado' => 'sucesso'
    );

    echo json_encode($status);
}else{
    $status = array(
        'estado' => 'erro'
    );

    echo json_encode($status);
}