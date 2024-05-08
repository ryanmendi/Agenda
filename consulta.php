<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Eventos</title>
    <style>
        body{
            display: flex;
            flex-direction:column ;
            align-items: center;
            margin-top: 50px;
        }
        form{
            border: 2px solid white;
            width: fit-content;
            align-items: center;
            display: flex;
            flex-direction: column;
            padding: 15px;
        }
        #a{
            width: min-content;
            background-color: rgba(0, 0, 0, 0.4);
            padding: 15px;
            border-radius: 5px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="a">
    <form action="phpconsulta.php" method="post">
        Código do Evento: <input type="text" name="cod_event"><br><br>
        <input type="submit" value="Consultar">
    </form>
    </div>
    <button onclick="window.history.back()">Voltar</button>
</body>
</html>
