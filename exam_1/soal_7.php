+<?php

+	echo "Soal: - buatlah program untuk mengeluarkan output berbentuk tree dari sebuah angka terbesar ke terkecil. Misal: 

+Jika angka yg dimaksudkan adalah 3.

+Maka output dari program: 

+3 

+22 

+111

+

+Jika angka yg dimaksudkan adalah 5:

+Maka outputnya: 

+5 

+44 

+333 

+2222 

+11111\n\n";

+

+	echo "Jawaban: \n";

+	

+	// buat fungsi agar dapat digunakan berulang-ulang

+	function my_tree($num) {

+		

+		// cek apakah num adalah integer

+		if (is_int($num)) {

+			

+			// melakukan perulangan dengan jumlah tidak lebih dari input num

+			for ($i=0; $i < $num; $i++) {

+				

+				// melakukan perulangan dengan jumlah tidak lebih dari angka i yang sekarang aktif

+				for ($_i=0; $_i<=$i; $_i++) {

+					

+					// keluarkan output dengan mengurangi nilai num dengan i yang sekarang aktif

+					echo $num-$i;

+					

+				}

+				

+				echo "\n";

+				

+			}			

+			

+		} else {

+			

+			echo "Gagal, hanya menerima input integer";

+			

+		}

+		

+	}

+	

+	echo "Percobaan dengan angka 5 : \n";

+	my_tree(5);

+	

+	echo "\n";

+	

+	echo "Percobaan dengan angka 8 : \n";

+	my_tree(8);

+	

+	echo "\n";

+	

+	echo "Percobaan dengan huruf '8' : \n";

+	my_tree('8');
