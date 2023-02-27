<?php
// Criando um arquivo
$conteudo = "Este é um arquivo de exemplo.";
$arquivo = fopen("exemplo.txt", "w");
fwrite($arquivo, $conteudo);
fclose($arquivo);
echo "Arquivo criado com sucesso.";

// Lendo um arquivo
$arquivo = fopen("exemplo.txt", "r");
$conteudo = fread($arquivo, filesize("exemplo.txt"));
fclose($arquivo);
echo "<br>O conteúdo do arquivo é: " . $conteudo;

// Adicionando conteúdo em um arquivo
$arquivo = fopen("exemplo.txt", "a");
$conteudo_adicional = "\nEste é um conteúdo adicional.";
fwrite($arquivo, $conteudo_adicional);
fclose($arquivo);
echo "<br>Conteúdo adicionado ao arquivo com sucesso.";

// Deletando um arquivo
if (unlink("exemplo.txt")) {
  echo "<br>Arquivo deletado com sucesso.";
} else {
  echo "<br>Falha ao deletar o arquivo.";
}
// Neste exemplo, criamos um arquivo chamado exemplo.txt, 
// escrevemos um conteúdo nele, lemos o conteúdo do arquivo, 
// adicionamos um conteúdo adicional e depois deletamos o arquivo. 
// Isso demonstra como o PHP é capaz de manipular arquivos de diferentes maneiras, como criar, ler, escrever, adicionar e deletar arquivos.
?>
