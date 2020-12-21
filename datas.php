<?php

/**
 * -> P     representação de Período: vem antes de dia, mês, ano e semana
 * Y    anos
 * M    meses
 * D    dias
 * W    semanas
 * 
 * -> T     representação de Tempo: vem antes de hora, minuto, e segundo
 * H    horas
 * M    minutos
 * S    segundos
 */

$data = new DateTime();
echo 'Data e hora agora: ' . $data->format('d-m-Y H:i:s') . PHP_EOL;

$intervalo = new DateInterval('PT5M'); // coloca um período de 5 minutos


$data->add($intervalo); // adiciona
echo PHP_EOL . 'Acrescentando o intervalo de 5 minutos temos: ' . $data->format('d-m-Y H:i:s') . PHP_EOL;

$data = new DateTime();

$data->sub($intervalo); // subtrai
echo PHP_EOL . 'Subtraindo o intervalo de 5 minutos temos: ' . $data->format('d-m-Y H:i:s') . PHP_EOL;