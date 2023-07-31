<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de número aleatório</title>
    <link rel="stylesheet" href="estiloDoGerador.css">
</head>
<body>
    <header>
        <h1>Gerando um número aleatório: </h1>
    </header>
    <p>Gerando um número aleatório entre 0 e 500... </p>
    <?php

    // Se você precisar de números aleatórios seguros, deve usar a função random_int(). A random_int() gera números aleatórios em um intervalo especificado. 

        $Num_Aleat = random_int(0,500);

        echo "O número gerado foi: " . $Num_Aleat;
    ?>    

    </br> </br> <input type="button" value="Gerar novo número" onclick="window.location.reload()">
    
    <?php // o gerador aleatório foi gerado a partir do uso da função window.location.reload(), que atualiza a página e por consequência me forne outro número. ?>

</body>
</html>