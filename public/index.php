<?php

$hello = 'Hello';
$from = 'from';
$the = 'the';
$other = 'other';
$side = 'side!';

$words = compact('hello', 'from', 'the', 'other', 'side');

echo join(' ', $words);
