<?php

require("conex-db.php");

$nomcli = $_POST['busca'];
// $encli = $_POST['']
// echo "<table width='100%'>";
echo "<tr width='100%'><b>";
echo "   <td width='30%'>Nome</td>";
echo "   <td width='25%'>Cidade</td>";
echo "   <td width='25%'>E-mail</td>";
echo "   <td width='20%'>Telefone</td>";
echo "</tr></b>";

if ($nomcli != ''){
    $sql = "select * from cadcli where nomcli LIKE '".$nomcli."' '%'"; 
    $rs = $conn->query($sql); 


    if (($rs) and ($rs != '')) {
        while ($row = $rs->fetch_assoc() ) {
            echo "<tr width='100%'>";
            echo "<td width='30%'>" .$row["nomcli"]."</td>";
            echo "<td width='25%'>" .$row["cidcli"]."</td>";
            echo "<td width='25%'>" .$row["emacli"]."</td>";
            echo "<td width='20%'>" .$row["telcli"]."</td>";
            echo "</tr>";
        }
    }
    else {
        echo "Nenhum cliente encontrado";
    }
}
    echo "</table>";


?>