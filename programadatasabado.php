<?php

$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quanta', 'Quinta', 'Sexta', 'Sábado');
$mesesano = array('Janeiro', 'Fevereiro', 'Marços', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

$quantidadedeindices = count($diasemana);

$data = date('d-m-Y');
echo " *** Sistema Datas *** ";
echo "<br>";
echo "Data atual: $data";

$diasemana_numero = date('w', strtotime($data));
echo "<br>";

$quantdiasfaltam = ($quantidadedeindices - $diasemana_numero);
$numero = $quantidadedeindices-1;
echo "Faltam $quantdiasfaltam dias para $diasemana[$numero]";
$mes = (string) date('m');
$mesobtido = substr($mes, 1) -1;
echo "<br>";
$mes = $mesesano[$mesobtido];
echo "Hoje é o mês de $mes";
echo "<br>";
echo "Fim....!";

?>