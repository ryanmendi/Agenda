<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            display: flex;
            flex-direction:column ;
            align-items: center;
            margin-top: 50px;
        }
        #a{
            background-color: rgba(0, 0, 0, 0.4);
            padding: 15px;
            border-radius: 5px;
            color: white;
        }
        form{
            border: 2px solid white;
            width: fit-content;
            align-items: center;
            display: flex;
            flex-direction: column;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="a">
    <form action="phpupdate.php" method="POST">
    <label for="codigo">Código do evento</label>
    <input type="number" name="cod_event">
    <br>
    <label for="nome">Nome Evento</label>
    <input type="text" name="nm_event">
    <br>
    <label for="data">Data Evento</label>
    <input type="date" name="dt_event">
    <br>
    <label for="hora começo">Horario do começo do evento</label>
    <input type="time" name="hrcmc_event">
    <br>
    <label for="hora fim">Horario do fim do Evento</label>
    <input type="time" name="hrfim_event">
    <br>
    <label for="descrição evento">Descrição do Evento</label>
    <input type="text" name="desc_event">
    <br>
    <label for="localização">Localização do evento</label>
    <input type="text" name="loc_event">
    <br>
    <label for="organizador">Organizador do evento</label>
    <input type="text" name="dono_event">
    <br>
    <input type="submit" value="Atualizar">
    </form>
    </div>
    <button onclick="window.history.back()">Voltar</button>
</body>
</html>