<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Index</title>
</head>

<body>
    <h1>Lista de Clientes</h1>
    <ul>
        <li>Cliente 1</li>
        <li>Cliente 2</li>
    </ul>

    <p>
        <a href="{{ route('pesquisa-cliente') }}">Clique para exibir todos os registros</a>
    </p>

    <p>
        <a href="{{ route('pesquisa-cliente', ['id' => 10, 'nome' => 'Claudio']) }}">Clique para filtrar</a>
    </p>
</body>

</html>