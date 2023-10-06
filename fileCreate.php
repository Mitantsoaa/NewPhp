<?php
// manipulation de fichier
$file = fopen('monFichier.txt', 'w') or die('Pas de permission!');
$texte = 'ceci est le contenu du fichier';
fwrite($file,$texte);
fclose($file);