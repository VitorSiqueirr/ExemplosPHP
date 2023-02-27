<?php
// Inicia a sessão
session_start();

// Define valores na sessão
$_SESSION['nome'] = 'João';
$_SESSION['idade'] = 30;

// Exibe os valores da sessão
echo "Nome: " . $_SESSION['nome'] . "<br>";
echo "Idade: " . $_SESSION['idade'] . "<br>";

// Remove um valor da sessão
unset($_SESSION['idade']);

// Exibe novamente os valores da sessão
echo "Nome: " . $_SESSION['nome'] . "<br>";
if (isset($_SESSION['idade'])) {
  echo "Idade: " . $_SESSION['idade'] . "<br>";
} else {
  echo "A idade não está definida na sessão.<br>";
}

// Encerra a sessão
session_destroy();
// Neste exemplo, iniciamos uma sessão com session_start(), 
// definimos dois valores na sessão (nome e idade), exibimos os valores da sessão, 
// removemos o valor idade, exibimos novamente os valores da sessão e encerramos a sessão com session_destroy().
// Isso demonstra como o PHP é capaz de gerenciar sessões, permitindo armazenar valores que podem ser acessados em diferentes páginas ou requisições.
?>
