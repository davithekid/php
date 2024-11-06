<?php



$arquivo = "meu_arquivo.txt"; // criando arquivo

$handle = fopen($arquivo ,"w"); // abrindo arquivo

// conteudo
fwrite($handle, "Davi, 19\n");
fwrite($handle, "Lima, 17.\n");
fwrite($handle, "Mathias, 20.\n");


fclose($handle); // fechamento








