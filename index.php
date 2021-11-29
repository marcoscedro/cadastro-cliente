    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cliente</title>
    </head>
    <body>
        <h1>Cadastro de clientes</h1>
        <p>Sistema para cadastro de clientes.</p>
        <form action="salvarcliente.php" method="get">
            <label for="nome">Nome do cliente</label>
            <input type="text" name="nome" id="nome"> <br><br>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf"> <br><br>
            <label for="fone">Telefone</label>
            <input type="phone" name="fone" id="fone"> <br><br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"> <br><br>

            <input type="submit" name="salvar" value="Salvar Cliente">
        </form>
            

    </body>
    </html>