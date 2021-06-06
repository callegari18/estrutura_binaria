<?php

// include 'arvore.class.php';
// include 'no.class.php';


$usuario= $_GET['nome'];
$score= $_GET['pontos'];

$users[] = [$usuario];
// array_push($users['nome']=$usuario);
// // array_push($users['pontos']=$score);

print_r($users);
// // $no1 = New No(50);
// // $arvore = New Arvore();


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Árvore Binária</title>
</head>
<body>
    <div class="main">
        <div>
            <div class="title">
                <h1>Árvore Binária</h1>
            </div>
            <div class="input_and_score">
                <div class="input">
                  <form action="index.php" method="get">
                      <input type="text" name="nome" placeholder="Nome do usuário:">
                      <input type="number" name="pontos"placeholder="Pontuação:">
                      <button type="submit">Cadastrar</button>
                  </form>
                </div>
                <div class="score">
                    <div>
                        <h3>SCOREs</h3>
                    </div>
                    <div>
                        <P>Left:200</P>
                        <p>Right:100</p>
                    </div>
                </div>
            </div>
            <div class="tree">
                <div class="root">
                    <div class="raiz">
                        <div class="info_user">
                            <p>Usúario:1</p> 
                            <p>Pontos: </p> 
                        </div>
                    </div>
                </div>
                <div class="nodes">
                    <div class="left">
                        <div class="info_user">
                            <p>Usúario:2</p> 
                            <p>Pontos: 200</p> 
                        </div>
                    </div>
                    <div class="right">
                        <div class="info_user">
                            <p>Usúario:3</p> 
                            <p>Pontos: 100</p> 
                        </div>
                    </div>
                </div>
                <div class="nodes">
                    <div class="left">
                        <div class="info_user">
                            <p>Usúario:Left</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="right">
                        <div class="info_user">
                            <p>Usúario:Right</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="left">
                        <div class="info_user">
                            <p>Usúario:Left</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="right">
                        <div class="info_user">
                            <p>Usúario:Right</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                </div>
                <div class="nodes">
                    <div class="left">
                        <div class="info_user">
                            <p>Usúario:Left</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="right">
                        <div class="info_user">
                            <p>Usúario:Right</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="left">
                        <div class="info_user">
                            <p>Usúario:Left</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="right">
                        <div class="info_user">
                            <p>Usúario:Right</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="left">
                        <div class="info_user">
                            <p>Usúario:Left</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="right">
                        <div class="info_user">
                            <p>Usúario:Right</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="left">
                        <div class="info_user">
                            <p>Usúario:Left</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                    <div class="right">
                        <div class="info_user">
                            <p>Usúario:Right</p> 
                            <p>Pontos: 200</p> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>