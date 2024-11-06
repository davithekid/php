
<?php
$arquivo = "meu_arquivo.txt"; // criando arquivo
$handle = fopen($arquivo ,"r"); // lendo arquivo
$dados = [];

// array
while(($line = fgets($handle)) !== false  ){
    list($nome, $idade) = explode(',' , $line);
    echo "nome: $nome, Idade: $idade <br>"; 

    $dados[] = [
        'nome' => $nome,
        'Idade' => $idade
    ];

}

fclose($handle); // fechamento

print"<pre>";
print_r($dados); // print