<?php
echo "Insira o nome do Projeto que deseja criar: ";
$nomeProjeto = trim(fgets(STDIN));
echo "insira o sufixo da linguagem que deseja ultilizar: Ex(php, js)";
$linguagem = trim(fgets(STDIN));
$criador = `mkdir $nomeProjeto`;
$criarArquivo = `type nul > $nomeProjeto/$nomeProjeto.$linguagem`;
echo $criador;
echo $criarArquivo;

