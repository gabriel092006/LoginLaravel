<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    
    <script language = javascript>

        function blokletras(keypress)
        {

            if(keypress>=48 && keypress<=57)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        </SCRIPT>
    
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 40%, rgba(0,212,255,1) 100%);
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .buttondogabriel{
            background-color: rgb(0, 162, 255);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .buttondogabriel:hover{
            background-color: rgb(0, 162, 255);
            cursor: pointer;
        }

    </style>
</head>

<body>
    <div>

<form name="cliente" method = "POST" action = "">

        <h1>Login</h1>
        <p><input name = "txtnome" type = "text" placeholder = "Nome" required>
        <br><br>
        <input name = "txtsenha" type = "password" placeholder = "Senha" onkeypress = "return blokletras(window.event.keyCode)" required>
        <br><br>
        <input type =  "submit" class =  "buttondogabriel" name = "btnentrar" value = "Entrar">


    </div>

</form>