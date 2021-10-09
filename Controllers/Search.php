<?php

$from = $_GET['from'] ?? '';
$to = $_GET['to'] ?? '';
$date = $_GET['date'] ?? '';

$result = $Search->search($from, $to, $date);
$search['content'] = $Search->viewAllSearched($result);
