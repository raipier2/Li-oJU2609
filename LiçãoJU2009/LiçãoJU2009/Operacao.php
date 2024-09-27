<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE6A7;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #7E1F3D; /* Cor de vinho */
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            width: 200px;
            border: 1px solid #432818;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #7E1F3D;
            color: white;
            cursor: pointer;
            margin: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message-box {
            border: 1px solid #007bff;
            border-radius: 5px;
            padding: 10px;
            background-color: #e7f0ff;
            width: 300px;
            text-align: center;
            display: none; /* Oculto por padrão */
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>Cadastro de Vinhos</h1>
       
            <br><input type="text" name="vinho" id="1" placeholder="Dgite o Nome"></input>
            <br><input type="text" name="cat" id="2"  placeholder="Digite o Tipo"></input>
            <br><input type="number" name="safra" id="3"  placeholder="Digite a Safra"></input>
            <br><input type="number" name="num" id="4"  placeholder="Digite o Preço"></input>
        <br>
            <br><input type="submit" name="bnt1" value="Cadastrar Vinho">
            <br><input type="submit" name="bnt" value="Verificar preço">
       

    </form>
</body>
</html>

<?php
    require_once 'Vinho.php';
    if(isset($_POST["bnt1"])){
        $tipoVinho = new Vinho();

    $tipoVinho->setNome($_POST["vinho"]);


    $tipoVinho->setTipo($_POST["cat"]);


    $tipoVinho->setSafra($_POST["safra"]);


    $tipoVinho->setPreco($_POST["num"]);

    echo $tipoVinho->mostrarVinho();
    }
    
    if(isset($_POST["bnt"])){


    $tipoVinho = new Vinho();

    $tipoVinho->setNome($_POST["vinho"]);


    $tipoVinho->setTipo($_POST["cat"]);


    $tipoVinho->setSafra($_POST["safra"]);


    $tipoVinho->setPreco($_POST["num"]);
    

    
    
    if( $tipoVinho->verificarPreco($_POST["num"]) == true){
        echo "Produto em Oferta";
    }else{
        echo "Produto com o preço normal";
    }


}
?>