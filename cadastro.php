<?php
if(!isset($_POST["nome"])|| !isset($_POST["cpf"])){
    $_POST["nome"] = "padrão";
    $_POST["cpf"] = "vazio";
    echo "<center>Por favor preencha os campos<center>";
}



$arquivo = "cadastro.txt";
if(!file_exists($arquivo)){
    $conteudo = fopen($arquivo,"w");
}else{
    $conteudo = fopen($arquivo,"a");

}

if($_POST["nome"]!="padrão"&&$_POST["cpf"]!="vazio"){ 
fwrite($conteudo,"\n".$_POST["nome"]."\n".$_POST["cpf"]."\n==========================\n");
fclose($conteudo);     
echo "<center><h1>Usuário cadastrado, visite o arquivo CADASTRO.TXT para as informações<center></h1>";
header("refresh:2;url=welcome.php");
}
?>





<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
*{
    box-sizing:border-box;
    margin :0;
    padding:0;
}
form{
    width:500px;
    margin : 0 auto;
    border: 1px solid black;
    border-radius:10px;
    height: 350px;
    text-align:center;
    padding:10px;
}

input[type="text"],[type="number"]{
    width:80%;
    padding:10px;
    margin:20px 2% 50px 2%;
    display:inline-block;
}

label{
    display:block;
    width:100%;
    text-align:left !important;
}

input[type="submit"]{
    width:50%;
    background-color:#3A7C8A;
    line-height:40px;
    border:0;
    border-radius:5px;

}

</style>
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
   
    <label>Insira o Nome:</label>
    <input type="text" required name="nome" placeholder="Digite o nome">
    <label>Insira o CPF:</label>
    <input type="number" required name="cpf" require placeholder="Digite o CPF">
    <input type="submit" value="CADASTRAR">







</body>