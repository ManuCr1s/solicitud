<?php
require_once 'app/models/User.php';
$usuario = new User();
$usuario->set([
    'number_document'=>'73143090',
    'type_document'=>'DNI',
    'name_user'=>'MANUEL',
    'last_name'=>'CIRSTOBAL NEYRA',
    'name_company'=>'',
    'email'=>'MCRISTOBALN@OUTLOOK.COM',
    'phone'=>'910108053'
]);