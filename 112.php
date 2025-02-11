<html>

	<head>
		<tittle>
			cinta belajar php
		</tittle>
		<style>
		    .abang {
			color: red;
		    }
        </style>
	</head>

	<body>
		Hai!
		<?php
		$walkes = " Bu Yuniar ";
		echo "<br> Perkenalkan aku cinta";
		echo '<br> Aku bersekolah di Snapan';
		echo "<div class='abang'>Wali kelas: ". $walkes ." <div/>";
		    //ini komentar satu baris
		    #ini juga komentar satu baris
		    /* ini komentar
		    berbaris
		    baris */
	
        echo " $walkes ";
        $angka1 = 5;
        $angka2 = 10;
        $penjumlahan = $angka1 + $angka2;
        $x = $angka1 * $angka2;

        echo "<br> $angka1 + $angka2 = ". $penjumlahan;
        echo "<br>";
        echo $x ."$angka1 x $angka2";
        echo "<br> $angka1<sup>$angka2</sup> = "; //<sup> untuk membuat angka pangkat
        echo number_format(pow($angka1,$angka2), 2, '.', ''); /*untuk melihat hasil menggunakan echo pow, 
        number_format untuk angka ada jarak. contoh: 1000 =>  1.000,00
        2 untuk ada berapa angka di belakang koma 
        'tanda koma/titik paling belakang'
        'tanda koma/titik di antara angka' */
	?>
	</body>

</html>