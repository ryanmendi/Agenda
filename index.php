<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Princial</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        nav{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        nav ul{
            display: flex;
            align-items: center;
            list-style: none;
            padding: 10px;
        }
        nav li{
            margin-left: 7px;
        }
        nav li a{
            color: black;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }
        nav li a:hover{
            background-color: white;
            color: black;
        }
        body {
            min-height: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #tabela {
            background-color: rgba(0, 0, 0, 4);
            padding: 10px;
            border-radius: 5px;
            margin: 10px;
            color: white;
            width: min-content;
        }
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid black;
            border: 1px solid black;
        }

        tr:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        th {
            background-color: #fff;
            color: white;
            
        }
        #enfeite{
            margin: 10px;
            border: 2px solid white;
        }
    </style>
</head>
<body>
        <nav> 
        <ul>
            <li><a href='insert.php'>inserir</a></li>
            <li><a href='update.php'>update</a></li>
            <li><a href='delete.php'>deletar</a></li>
            <li><a href='consulta.php'>consultar</a></li>
        </ul>
        </nav>

        <div id="tabela">
        <section id='enfeite'>

        <?php
$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "TestesAgenda";
$con = mysqli_connect($host, $user, $pass, $base);
$res = mysqli_query($con,"SELECT * FROM agenda");

echo "<table border=3px><tr><td>Codigo do Evento</td><td>Nome do Evento</td><td>Data do Evento</td><td>Hora de Começo</td><td>Hora de Fim</td><td>Descrição do Evento</td><td>Localização</td><td>Organizador</td></tr>";

while($escrever=mysqli_fetch_array($res)){
    echo "</td><td>" . $escrever['Cod_event'] . "</td><td>" . $escrever['nm_event'] . "</td><td>" . $escrever['dt_event'] . "</td><td>" . $escrever['hrcmc'] . "</td><td>" . $escrever['hrfim'] . "</td><td>" . $escrever['des_event'] . "</td><td>" . $escrever['loc_event'] . "</td><td>" . $escrever['responsavel'] . "</td></tr>"; 
    
    }
    echo "</table>"; 

    echo "</br></br>";

    mysqli_close($con);
?>
        </section>
</div>
</body>
</html>
