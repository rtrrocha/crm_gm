<?php

require("conex-db.php");

$nomcli = $_POST['nomcli'];
$cidcli = $_POST['cidcli'];
$emacli= $_POST['emacli'];
$telcli = $_POST['telcli'];

$sql = "insert into cadcli (nomcli, cidcli, emacli, telcli)
        values('$nomcli','$cidcli', '$emacli', '$telcli')";

$rs = $conn->query($sql); 

if ($rs === true){
    echo "<script>alert('Informações inseridas!');location.href=\"index.html\";</script>";
    }
else {
    echo "Erro: ".$sql."<br>" . $rs->error;
}

$conn->close();

?>