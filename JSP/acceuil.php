<?php
//sert à afficher la FAQ
require('config.php');
require('model-function/database.fn.php');
require('model-function/faq.fn.php');
$pdo = getPDO($config);
include('Vues-templates/_header.php');
    

include('Vues-templates/_footer.php');


?>
