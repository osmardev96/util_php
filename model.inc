<?php
function obtener_valor_general(array $arreglo, String $clave, String $default = '') {
    return (isset($arreglo[$clave])) ? $arreglo[$clave] : $default;
}