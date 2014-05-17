<?php
function createTable($alternatives,$criteria){
	for ($ccount=0; $ccount<$criteria; $ccount++){
		echo "<tr>";
		for ($acount=0; $acount <$alternatives ; $acount++) { 
			
			echo "<td contenteditable ";
			echo "id=\"";
			echo "r";
			echo $ccount;
			echo "c";
			echo $acount;
			echo "\"";
			echo ">";
			echo "here";
			echo "</td>";
		}
		echo "</tr>";
	}
}
?>


<table>
	<?php
	createTable(5,4);

	?>
</table>