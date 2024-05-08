<html>
<body>
<?php
$cod = $_POST['cod_event'];
$nm = $_POST['nm_event'];
$dt = $_POST['dt_event'];
$hrcmc = $_POST['hrcmc_event'];
$hrfim = $_POST['hrfim_event'];
$desc = $_POST['desc_event'];
$loc = $_POST['loc_event'];
$dono = $_POST['dono_event'];
$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "TestesAgenda";
$con   = mysqli_connect($host, $user, $pass, $base);

$res = mysqli_query($con,"UPDATE agenda Set nm_event = '$nm', dt_event = '$dt', hrcmc = '$hrcmc', hrfim = '$hrfim', des_event = '$desc', loc_event = '$loc', responsavel = '$dono' WHERE Cod_event = '$cod'");
echo"Sua Agenda fou atualizada.";
mysqli_close($con);
?>
<button onclick="window.history.back()">Voltar</button>
</body>
</html>