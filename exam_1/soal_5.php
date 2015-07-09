+<?php

+	echo "Soal: - buatlah program untuk mencatat data organ manusia menggunakan metode data struktur.\n";

+	

+	echo "Jawaban: \n";

+	

+	// cara pertama, deklarasi dan inisialisasi langsung. 

+	// menyimpan referensi data organ ke satu variabel bernama organ dengan tipe data struktur (array)	

+	$organ = array('Tengkorak', 'Tulang dada', 'Tulang rusuk', 'Tulang Belakang', 'Jantung', 'Pembuluh darah', 'dll');

+	

+	// cetak output dari organ menggunakan perulangan

+	foreach ($organ as $num => $_value) {

+		

+		// cetak organ secara berurut.

+		echo $_value;

+		

+		// tambahkan koma dan spasi, tapi tidak untuk cetakan paling akhir

+		// pertama tambahkan satu pada num (key), karena deretan num (key) dimulai dari 0

+		// gunakan fungsi sizeof untuk menghitung jumlah nilai array

+		if ( ( $num+1 ) < sizeof($organ)) {

+			echo ", ";

+		} 

+		

+	} 

+	

+	echo "\n\n";

+	

+	// cara kedua, menggunakan array multidimensional

+	$_organ = array(

+		array(

+			'sistem' => 'Sistem Gerak',

+			'organ' => array('Tengkorak', 'tulang dada', 'tulang rusuk', 'tulang belakang', 'tulang panggul', 'tulang bahu', 'otot lurik', 'otot jantung'),

+		),

+		array(

+			'sistem' => 'Peredaran darah & limfa',

+			'organ' => array('Jantung', 'pembuluh darah', 'limfa'),

+		),

+	);

+	

+	// mencetak data struktural _organ

+	// pertama, kita lakukan perulangan pada _organ, nilai dari _organ ada dua array.

+	foreach ($_organ as $_num => $_value) {

+		

+		// kita munculkan nama sistem organ yang sekarang

+		// menggunakan kata kunci sistem dari _value

+		echo $_value['sistem'] . ' : ';

+		// dikarenakan kata kunci organ dari _value merupakan array, kita lakukan perulangan yang sama

+		foreach ($_value['organ'] as $__num => $__value) {

+			

+			echo $__value;

+			

+			// tambahkan koma dan spasi

+			if ( ($__num + 1) < sizeof($_value['organ']) ) {

+				echo ", ";

+			}

+			

+			

+		}

+		

+		echo "\n";

+		

+	}
