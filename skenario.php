<html>
<head>
    <title>
      PERCABANGAN PHP CINTA A.C 
    </title>
</head>
<body>

<p><strong>Nama Anggota:</br>
1. Cinta Arrini Callula (06) </br>
2. Nisfi Kayla Azzaro (23)</strong></p>

<h1>Skenario 1</h1>

<?php
// jika nilai 100-90, maka keterangan A
// jika nilai 89-80, maka keterangan B
// jika nilai 79-70, maka keterangan C
// jika nilai 69-0, maka keterangan D
// jika kurang dari 0 dan lebih dari 100, maka keterangan nilai wajib di antara 0 -100

$nilai = "90" ;

if ($nilai >= 90 && $nilai <= 100) {
    	echo "Nilai $nilai : <br/> A";
} 
	else if ($nilai >= 80 && $nilai <= 89) {
    	echo "Nilai $nilai : <br/> B";
} 
else if ($nilai >= 70 && $nilai <= 79) {
    	echo "Nilai $nilai : <br/> C";
} 
	else if ($nilai >= 0 && $nilai <= 69) {
    	echo "Nilai $nilai : <br/> D";
} 
	else {
    	echo "Hasil invalid";
}

?>

<h1> Skenario</h1>
<?php

//jika jam 00:00-04.00 , maka keterangan Dini hari
//jika jam 04:00-10:00, maka keterangan Pagi 
//jika jam 10:00-15:00, maka keterangan Siang
//jika jam 15:00-17:30, maka keterangan Sore
//jika jam 17:30:18:30, maka keterangan Petang
//jika jam 18:00-24:00, maka keterangan Dunia lain


$jam = "24:00";

if ($jam >= date ("00:00") && $jam <= date ("04:00")) {
	echo "Jam $jam : Dini hari";
} 
	else if ($jam >= date ("04:00") && $jam <= date ("10:00")) {
		echo "Jam $jam : Pagi";
}
	else if ($jam >= date ("10:00") && $jam <= date ("15:00")) {
		echo "Jam $jam : Siang";
}
	else if ($jam >= date ("15:00") && $jam <= date ("17:30")) {
		echo "Jam $jam : Sore";
}
	else if ($jam >= date ("17:30") && $jam <= date ("18:30")) {
		echo "Jam $jam : Petang";
}
	else if ($jam >= date ("18:00") && $jam <= date ("24:00")) {
	echo "Jam $jam : Dunia lain";
}
	
?>

<h1> Skenario 3 </h1>

<?php

//Pulang sekolah pukul 15:30 dan tiba di rumah pukul 15:45.
//Mengaji selama 30 menit, namun Andi harus mandi terlebih dahulu sebelum mengaji.
//Mengerjakan tugas sekolah selama 2 jam tanpa terputus.
//Menghafalkan dialog untuk festival kesenian budaya yang akan dia ikuti di sekolah selama setengah jam.
//Ibu meminta Andi untuk membeli bumbu masakan sebelum makan malam.
//Makan malam dilakukan setelah sholat maghrib tetapi harus selesai sebelum sholat isya.
//Antara pukul 17:00 hingga sebelum tidur, Andi perlu menyisihkan waktu 30 menit tanpa terputus untuk chatting mengenai persiapan festival kesenian budaya yang akan dia ikuti di sekolah dengan Raya yang berada di Arab. Perbedaan waktu dengan Arab adalah 4 jam lebih cepat dari waktu di tempat Andi.
//Sebelum tidur, Andi dan keluarganya memiliki kebiasaan mengobrol bersama keluarga selama 30 menit. Mengobrol bersama keluarga dilakukan setelah tugas sekolah Andi selesai dikerjakan. Dapat dimajukan jika tidak ada tugas sekolah.
//Andi tidur jam 22:00 dan bangun jam 04:00.

$jam = "22:30";


if ($jam >= "15:30" && $jam < "15:45") {
    echo "Jam $jam : Pulang Sekolah";
} 
	else if ($jam >= "15:45" && $jam < "16:00") {
    	echo "Jam $jam : Mandi";
}
	
	else if ($jam >= "16:00" && $jam < "16:30") {
    	echo "Jam $jam : Mengaji";
} 
	else if ($jam >= "16:30" && $jam < "17:00") {
    	echo "Jam $jam : Pergi membeli bumbu masakan";
}
	else if ($jam >= "17:00" && $jam < "17:30") {
    	echo "Jam $jam : Chatting dengan Raya mengenai persiapan festival";
} 
	else if ($jam >= "17:30" && $jam < "18:00") {
    	echo "Jam $jam : Menghafal dialog untuk festival kesenian budaya";
} 
	else if ($jam >= "18:00" && $jam < "18:30") {
   		echo "Jam $jam : Sholat Maghrib";
} 
	else if ($jam >= "18:30" && $jam < "19:00") {
    	echo "Jam $jam : Makan malam";
} 
	else if ($jam >= "19:00" && $jam < "19:30") {
    	echo "Jam $jam : Sholat Isya";
} 
	else if ($jam >= "19:30" && $jam < "21:30") {
    	echo "Jam $jam : Mengerjakan Tugas";
} 	
	else if ($jam >= "21:30" && $jam < "22:00") {
    	echo "Jam $jam : Mengobrol bersama keluarga";
} 
	else if (($jam >= "22:00" && $jam <= "23:59") || ($jam >= "00:00" && $jam < "04:00")) {
    	echo "Jam $jam : Tidur";
} 
	else if ($jam >= "04:00" && $jam < "15:30") {
    	echo "Jam $jam : Bangun tidur & Aktivitas lainnya";
} 	else {
    	echo "Jam $jam : Dunia lain T_T";
}


?> 

<h1>Bahan Diskusi</h1>

<?php
echo "<p> <strong> Apa yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan? </strong> <br>
=> Jadwal yang ditentukan harus berurutan agar tidak ada jadwal yang bertabrakan. </p>";

echo "<p> <strong> Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut! </strong> <br>
=> Karena kegiatan yang dilakukan Andi adalah kegiatan sehari-hari yang harus dilakukan. </p>";

echo "<p> <strong> Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya? </strong> <br>
=> Jam 17:00 - 17:30 WIB. </p>";

echo "<p> <strong> Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah? </strong> <br>
=> Tidak ada waktu luang, hanya ada waktu untuk mengobrol bersama keluarga pada Jam 21:30 - 22:00 mengobrol bersama keluarga sebelum tidur. </p>";

echo "<p> <strong> Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki? </strong><br>
=> Jam 19:30 - 21:30 WIB, jadi Andi memiliki waktu luang jika tidak ada tugas selama 2 jam. </p>";
?>

	</body>
</html>