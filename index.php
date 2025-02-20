<?php 
echo "<table border='1'>";
for($righe=0;$righe<$_POST["righe"];$righe++){
    echo "<tr>";
    for($colonne=0;$colonne<$_POST["colonne"];$colonne++)
        echo "<td>$colonne</td>";
      echo "</tr>";
}
echo "</table>";
?>