<?php 
include_once('classes/Casino.php');

$casino = new Casino();

$casino->addPlayer("Anna");
$casino->addPlayer("Pep");
$casino->addPlayer("J.Laporta");
$casino->addPlayer("Anna"); 

$casino->removePlayer("Anna");
$casino->removePlayer("Anna");

$casino->addProfitToPlayer("Anna",20);
$casino->addProfitToPlayer("J.Laporta",-500);
$casino->addProfitToPlayer("Pep",32);
$casino->addProfitToPlayer("Pep",-17);

?>