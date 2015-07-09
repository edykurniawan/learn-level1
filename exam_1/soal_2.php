+<?php

+	echo "Soal: - buatlah program untuk menampilkan angka yang hanya dapat dibagi oleh dirinya sendiri dari deretan sngka 1 sampai dengan 100.\n";

+	echo "Jawaban: \n";

+	

+	// soal ini merupakan cara perhitungan bilangan prima. Yaitu bilangan yang habis dibagi dengan 1, dan dirinya sendiri

+	

+	// melakukan perulangan dari 1 sampai dengan 100

+	for ($i = 1; $i <= 100; $i++) {

+		

+		// menyimpan referensi nilai sementara

+		$_result = 0;

+		

+		// melakukan perulangan baru untuk melakukan proses modulus pada deretan angka yang sekarang sedang aktif.

+		for ($_i = 1; $_i <= $i; $_i++) {

+			

+			// check apakah $i habis dibagi dengan $_i.

+			if ($i % $_i == 0){

+				// nilai result pada akhirnya akan menjadi 2 jika dia merupakan bilangan prima. kenapa?

+			  // karena bilangan tersebut akan habis dibagi 1

+				// dan habis dibagi dengan dirinya sendiri

+				// sedangkan yang resultnya melebihi dari dua, atau kurang dari dua.

+				// maka dianggap bukan sebagai bilangan prima.

+				$_result++;

+			}

+			

+		}

+		

+		// mengecek apakah angka yang sedang aktif sekarang merupakan bilangan prima (memiliki result == 2)

+		if ($_result === 2) {

+			// jika kondisi benar maka muncul angka tersebut 

+			echo $i . " ";

+		}

+		 

+	}

+	

+	echo "\n";
