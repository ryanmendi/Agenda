<body>
<?php

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "TestesAgenda";
$con   = mysqli_connect($host, $user, $pass, $base);
$cod = $_POST['cod'];
$res = mysqli_query($con,"DELETE FROM agenda WHERE Cod_event = $cod")
echo"Você deletou o evento";
?>
<button onclick="window.history.back()">Voltar</button>
</body>
</html>