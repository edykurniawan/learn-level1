+<?php

+	

+	echo "Soal: - buatlah program untuk menampilkan berapa kali angka 1 dimunculkan dari deretan angka 1 sampai dengan 100.\n";

+	

+	echo "Jawaban: \n";

+	

+	// membuat referensi variabel untuk menghitung total angka 1

+	$_total = 0;

+	

+	// melakukan perulangan dari 1 sampai dengan 100

+	for($i = 1; $i <= 100; $i++) {

+		// mengubah tipe data dari $i menjadi string dan memasukkan kedalam referensi variabel baru ($_str_i)

+		$_str_i = (string) $i;

+		

+		// mengubah string $_str_i menjadi data struktur array.

+		// contoh, jika 123 maka akan menjadi array(1, 2, 3)

+		$_array_i = preg_split('//', $_str_i, -1, PREG_SPLIT_NO_EMPTY);

+		

+		// melakukan perulangan pada array_i.

+		foreach ($_array_i as $value) {

+			// mengecek kondisi apakah nilai dari pengulangan adalah 1

+			if ($value === "1") {

+				// jika hasilnya benar. maka kita tambahkan satu ke total

+				// $_total += 1;

+			  // atau boleh juga dengan

+				$_total++; 

+			}

+		} 

+		

+	}

+	

+	echo "Jumlah berapa kali angka 1 muncul dari deretan 1 sampai dengan 100 adalah " . $_total . "\n";
