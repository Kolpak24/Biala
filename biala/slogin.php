<?php
    $baza = new mysqli('localhost','root', '', 'biala');
    $sql = "select * from login";
    $wyn = $baza->query($sql);
    echo "<table><tr>";
    foreach($wyn as $w){
        echo "<tr>";
	echo "<td>", $w['Username'], "</td>";
    echo "<td>", $w['Email'], "</td>";
	echo "<td>", $w['Password'], "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>