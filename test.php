<?php

require_once(__DIR__ . '/nuliga_config.php');
require_once(__DIR__ . '/nuLigaClient.php');

$client = new nuLigaClient($nuLigaConfig);

$federations = $client->getFederations();
printf("<pre>");
print_r($federations);
printf("</pre>");

$bdv = $client->getFederation('BDV');
printf("<pre>");
print_r($bdv);
printf("</pre>");

//$seasons = $client->getSeasons('BDV');
//printf("<pre>");
//print_r($seasons);
//printf("</pre>");

$clubs = $client->getClubs('BDV');
printf("<pre>");
print_r($clubs);
printf("</pre>");

//$players = $client->getPlayers('BDV');
//printf("<pre>");
//print_r($players);
//printf("</pre>");
