<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/funcionario" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" />
        <br/>
        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="endereco" />
        <br/>
        <input type="submit" value="Criar">
    </form>
</body>
</html>