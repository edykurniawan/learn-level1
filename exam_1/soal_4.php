+<?php

+	echo "Soal: - buatlah program memunculkan deretan angka dari 100 sampai 1.\n";

+	

+	echo "Jawaban: \n";

+	

+	// melakukan perulangan dari 100 sampai dengan 1 menggunakan decreement

+	for ($i = 100; $i >= 1; $i-- ) {

+		echo $i;

+		

+		// tambahkan tanda koma dan spasi selama bukan deretan paling akhir atau deretan pada angka 1

+		if ($i !== 1) {

+			echo ", ";

+		} 

+	}

+	

+	echo "\n";
