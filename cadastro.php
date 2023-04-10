<!DOCTYPE html>
<html lang="pt-br">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="index.css">
            <title>Registro do Cliente</title>

            <style>
                body {
                    background-image: url("MicrosoftTeams-image.png");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: auto;
                }
	        </style>
         
</head>
<body >
           

    <h1 align="rigth">Registro do Cliente</h1>
    <p>
        <table border="3" class="notas" align="lefth">
            <caption>Dados do Cliente</caption>
            <tr class="cabeçalho">
                <th class="cabeçalhoe">Nomes</th>
                <th class="cabeçalhoe">CPF   </th>
                <th class="cabeçalhoe">Endereço</th>
                <th class="cabeçalhoe">Necessidade</th>
                <th class="cabeçalhoe">Data da consulta</th>
            </tr>
                <tr>
                    <td><?php echo $_POST['nome']; ?></td>
                    <td><?php echo $_POST['cpf']; ?></td>
                    <td><?php echo $_POST['endereco']; ?></td>
                    <td><?php echo $_POST['nome_livro']; ?></td>
                    <td><?php echo $_POST['data']; ?></td>
                </tr>

        </table>
    
    
    </p>
    <footer>
    <button class="voltar"><a href="cadastro.html">Voltar</a></button>
    </footer>
    
</body>
</html>








