<?php
$monFichier = fopen('monFichier.txt', 'r') or die('enable to read file');
echo fread($monFichier, filesize('monFichier.txt'));
fclose($monFichier);