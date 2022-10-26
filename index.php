<?php
include 'model.inc';
$arreglo = [
    'codigo' => '1',
];

echo "valor -> " . obtener_valor_general($arreglo, 'descripcion', 'sin descripcion');