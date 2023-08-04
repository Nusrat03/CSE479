<?php
echo "<table border 😕"1\" style='border-collapse: collapse'>";
	for ($r=1; $r <= 10; $r++) { 
		echo "<tr> \n";
		for ($c=1; $c <= 10; $c++) { 
		   $a = $c * $r;
		   echo "<td>$a</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>