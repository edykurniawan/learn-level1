+<?php

+	echo "Soal: - buatlah program untuk memunculkan deretan angka dari 1 sampai dengan 100. Dengan ketentuan setiap kali bertemu dengan angka yang habis dibagi empat, angka tsb diganti dengan kata Friend. Sedangkan jika bertemu dengan angka yang habis dibagi 7, maka ganti dengan kata Foe. Sedangkan jika bertemu angka yang habis dibagi 4 dan 7 munculkan FriendFoe.\n";

+	

+	echo "Jawaban: \n";

+	

+	echo "metode pemula \n";

+	// melakukan perulangan dari angka 1 sampai dengan 100

+	for ($i = 1; $i <= 100; $i++) {

+		

+		// mengecek apakah angka $i habis dibagi 4 dan habis dibagi 7

+		if ( ($i % 4 == 0) and ($i % 7 == 0) ) {

+			

+			// jika kondisi benar, maka keluarkan output "FriendFoe" 

+			echo "FriendFoe";

+			

+		}

+		// mengecek apakah angka $i habis dibagi 4 

+		elseif ( $i % 4 == 0 ) {

+			

+			// jika kondisi benar, maka keluarkan output "Friend"

+			echo "Friend";

+			

+		}

+		// mengecek apakah angka $i habis dibagi 7 

+		elseif ( $i % 7 == 0 ) {

+			

+			// jika kondisi benar, maka keluarkan output "Friend"

+			echo "Foe";

+			

+		}

+		// jika kondisi diatas tidak ada yang benar, maka keluarkan angka $i itu sendiri sebagai output 

+		else {

+			

+			// jika kondisi benar, maka keluarkan output "Friend"

+			echo $i;

+			

+		}

+		

+		// menambahkan karakter "koma" (,) dan spasi pada bagian akhir angka, tapi tidak untuk angka paling terakhir

+	  // mengecek apakah angka aktif sekarang bukan angka paling terakhir

+		if ($i < 100) {

+			

+			// jika kondisi benar, maka keluarkan output koma dan spasi

+			echo ", ";

+			 

+		}

+		

+	}

+	

+	echo "\n\n";

+	

+	echo "metode advanced\n";

+	

+	for ($_i = 1; $_i <= 100; $_i++) {

+		

+		// menyimpan output kedalam satu referensi

+		// menggunakan metode short tag dari flow control (if)

+		$_output = ( ($_i % 4 == 0) ? "Friend" : "" ) . ( ($_i % 7 == 0) ? "Foe" : "" );

+		

+		// menambahkan nilai referensi output dengan angka yang aktif sekarang jika referensi diatas masih kosong

+		// menambahkan koma dan spasi tapi tidak untuk angka paling terakhir

+		$_output .= ( (!$_output) ? $_i : "" ) . ( ($_i < 100) ? ", " : "" );

+		

+		// keluarkan nilai output

+		echo $_output;

+		

+	}

+	echo "\n\n";

+	

+	echo "metode extreme\n";

+	

+	// menggunakan inline loop

+	for ($_i = 1; $_i <= 100; $_o = ( ($_i % 4) ? "" : "Friend" ) . ( ($_i % 7) ? "" : "Foe" ), $_o .= ( (!$_o) ? $_i : "" ) . ( ($_i < 100) ? ", " : "" ), print $_o, $_i++);

+

+	echo "\n\n";
