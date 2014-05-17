<?php
//bobot untuk alternatif

for ($i=1;$i<=3;$i++)
{
	
	for ($j=1;$j<=3;$j++)
	{
		$k=$i.$j;
		$t[$i][$j]=$_GET["$k"];
	}
}

//bobot preferensi
for ($j=1;$j<=3;$j++)
{
	$k="b".$j;
	$b[$j]=$_GET["$k"];
}

//echo $t[1][1];
//untuk menghitung nalai x1....xn
for ($i=1;$i<=3;$i++)
{
	$x[$i];
	for ($j=1;$j<=3;$j++)
	{
		$k=$i.$j;
		$t[$i][$j]=$_GET["$k"];
		
		$x[$i]+=$t[$j][$i]*$t[$j][$i];
	}
	$x[$i]=sqrt($x[$i]);
}
//menghitung nilai r11.....rnn
echo "nilai R=<table>";

for ($i=1;$i<=3;$i++)
{
	echo "<tr>";
	for ($j=1;$j<=3;$j++)
	{
		$r[$i][$j]=$t[$i][$j]/$x[$i];
		echo '<td> '.$r[$i][$j].'</td>';
	}
	echo "</tr>";
	
}
echo "</table>";

//menghitung nilai y11....ynn

echo "<br>nilai Y=<table>";
for ($i=1;$i<=3;$i++)
{
	echo "<tr>";
	for ($j=1;$j<=3;$j++)
	{
		$y[$i][$j]=$r[$i][$j]*$b[$i];
		echo "<td>". $y[$i][$j]."</td>";
	}
	
	echo "</tr>";
	
}
echo "</table>";
//tranpose y
for ($i=1;$i<=3;$i++)
{
	
	for ($j=1;$j<=3;$j++)
	{
		$yt[$i][$j]=$y[$j][$i];
	//echo $yt[$i][$j]." ";
	}

	//echo "<br>";
}

//mencari nilai max dan min

echo "<br>nilai max= <table>";
echo "<tr><td>A+=</td>";
for ($i=1;$i<=3;$i++)
{
	echo "<td>
	".$max[$i]=max($yt[$i])."</td>";
	
}
echo "</tr></table>";

echo "<br>nilai min= <table>";
echo "<tr><td>A-=</td>";
for ($i=1;$i<=3;$i++)
{
	echo "<td>".
	$min[$i]=min($yt[$i])
	."</td>";
	
}
echo "</tr></table>";
//hitung jarak nilai terbobot terhadap solusi positif/negatif
for ($i=1;$i<=3;$i++)
{
	for ($j=1;$j<=3;$j++)
	{
		$dp[$i]+=($y[$i][$j]-$max[$i])*($y[$i][$j]-$max[$i]);
		$dm[$i]+=($y[$i][$j]-$min[$i])*($y[$i][$j]-$min[$i]);
	}
	$Dp[$i]=sqrt($dp[$i]);
	echo "D".$i."+=".$Dp[$i]."<br>";
	$Dm[$i]=sqrt($dm[$i]);
	echo "D".$i."-=".$Dm[$i]."<br><br>";
}
//solusi untuk v1....
for ($i=1;$i<=3;$i++)
{
	$v[$i]=$Dm[$i]/($Dp[$i]+$Dm[$i]);
	echo "V".$i."=".$v[$i]."<br>";
}

?>