<p>=== Segitiga Bintang === </p>
<?php
for ($a=10;$a>0;$a--){
	for($a1=10;$a1>$a;$a1--){
		echo "x";
	}
	echo "<br>";
}
?>
<?php
for ($a=10;$a>0;$a--){
	for($a1=$a;$a1>0;$a1--){
		echo "x";
	}
	echo "<br>";
}
?>
<hr>
<p>=== Segitiga angka === </p>
<?php
for ($a=1;$a<10;$a++){
	for($a1=$a;$a1<10;$a1++){
		echo "$a1";
	}
	echo "<br>";
}
?>
<?php
for($i=1;$i<10;$i++){
	for($j=1;$j<$i;$j++){
		echo "$j";
	}echo "<br>";
}
?>
<hr>
<p>=== Bilangan Prima ===</p>
<?php
for($i=1;$i<=100;$i++){
	    $a = 0;
	for($j=1;$j<=$i;$j++){
	  	if($i % $j == 0){ $a++;}
	  	}
	    if($a == 2){
	                    echo $i.'&nbsp';
	            }
	}
?>
<p>=== Bilangan Ganjil ===</p>
<?php
for($i=1;$i<=100;$i++){
	  	if($i % 2 != 0){
	     echo $i.'&nbsp';
	    }
	}
?>
<hr>
<p>=== Balik Kata ===</p>
<?php
$kata="hello";
$panjang=strlen($kata);
for($i=0;$i<=$panjang;$i++){
	$hasil=substr($kata,$panjang-$i,1);
	echo "$hasil";
}
?>

