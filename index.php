<?php
require __DIR__ . '/vendor/autoload.php';

MyMvc\Requests::setTable('maison');
MyMvc\Requests::Insert(['la', 'la', '5']);