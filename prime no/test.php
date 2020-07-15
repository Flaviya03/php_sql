<style>
div{
	font-family: serif;
	font-size:25px;
	color: Red;
}
</style>
<?php 
	$n1=$_POST['fn'];
	$n2=$_POST['sn'];
	echo "<div>";
		for ($i=$n1;$i<$n2;$i++)
		{
			if ($i==2 || $i==3 || $i==5 || $i==7)
			{
			echo "$i";
			echo "<br>";
			}
			else if (($i%2) !=0 && ($i%3) !=0 && ($i%5) !=0 && ($i%7) !=0)
 			{
			echo "$i";
			echo "<br>";
			}
			else
    			continue;
	    }
	echo "are prime numbers between $n1 and $n2.";
	
	echo "</div>";