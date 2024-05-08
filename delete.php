<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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
            border-radius: 5px ;
            color: white;
        }
    </style>
</head>
<body>
    <div class="a">
    <form action="phpdelete.php" method="POST">
    <label for="delete">Digite o codigo que deseja escluir da agenda:</label>
    <br>
    <input type="number" name="cod">
    <input type="submit" value="Delete">
    </form>
    </div>
    <button onclick="window.history.back()">Voltar</button>
</body>
</html>