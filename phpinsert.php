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

$res = mysqli_query($con,"INSERT INTO agenda(Cod_event,nm_event,dt_event,hrcmc,hrfim,des_event,loc_event,responsavel) VALUES('$cod','$nm','$dt','$hrcmc','$hrfim','$desc','$loc','$dono')"); 
echo"Seu Evento foi Cadastrado";
    mysqli_close($con);
?>
<button onclick="window.history.back()">Voltar</button>
</body>
</html>