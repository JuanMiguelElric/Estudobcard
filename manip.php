<?php 
$json = '[{"aluno":"pedro","professor":"juan miguel"}]';

$array4= ["aluno"=>"juan o pé","professor"=>"girafales"];
// transforma em array PHP
$dados = json_decode($json, true);
$dados[] = ["aluno" => "joão", "professor" => "ana"];
$dados[] = ["aluno" => "maria", "professor" => "carlos"];
$dados[] = ["aluno" => "fernanda", "professor" => "rodrigo"];
$dados[] = $array4;

// converter para JSON
echo json_encode($dados, JSON_PRETTY_PRINT);

?>