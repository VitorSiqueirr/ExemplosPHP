<?php
// Criando um arquivo
$conteudo = "Exemplo PHP.";
$arquivo = fopen("teste.txt", "w");
fwrite($arquivo, $conteudo);
fclose($arquivo);
echo "\n Arquivo criado com sucesso. \n";

// Lendo um arquivo
$arquivo = fopen("teste.txt", "r");
$conteudo = fread($arquivo, filesize("teste.txt"));
fclose($arquivo);
echo "\n O conteúdo do arquivo é: " . $conteudo;

// Adicionando conteúdo em um arquivo
$arquivo = fopen("teste.txt", "a");
$conteudo_adicional = "\nEste é um conteúdo adicional.";
fwrite($arquivo, $conteudo_adicional);
fclose($arquivo);
echo "\n Conteúdo adicionado ao arquivo com sucesso.";

// Deletando um arquivo
if (unlink("teste.txt")) {
  echo "\n Arquivo deletado com sucesso. \n";
} else {
  echo "\n Falha ao deletar o arquivo.";
}
// Neste exemplo, criamos um arquivo chamado teste.txt, 
// escrevemos um conteúdo nele, lemos o conteúdo do arquivo, 
// adicionamos um conteúdo adicional e depois deletamos o arquivo. 
// Isso demonstra como o PHP é capaz de manipular arquivos de diferentes maneiras, como criar, ler, escrever, adicionar e deletar arquivos.
?>
