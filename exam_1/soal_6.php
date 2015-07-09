+<?php

+	echo "Soal: - buatlah program calculator yang dengan mudah dapat digunakan kembali.\n";

+	

+	echo "Jawaban: \n";

+	

+	// buat fungsi untuk tambah, kurang, kali dan bagi dengan selalu menerima dua output

+	function tambah($a, $b) {

+		

+		// check apakah a dan b merupakan integer, jika tidak maka keluarkan output gagal

+		// menggunakan fungsi is_int mengecek apakah integer atau bukan

+		if ( is_int($a) and is_int($b) ) {

+			

+			// jika kondisi benar, kembalikan nilai dari hasil a + b

+			return $a + $b;

+			

+		} else {

+			

+			// jika kondisi salah, kembalikan nilai gagal

+			return "Gagal, kedua data harus integer";

+			

+		}

+		

+	}

+	

+	function kurang($a, $b) {

+		

+		// check apakah a dan b merupakan integer, jika tidak maka keluarkan output gagal

+		// menggunakan fungsi is_int mengecek apakah integer atau bukan

+		if ( is_int($a) and is_int($b) ) {

+			

+			// jika kondisi benar, kembalikan nilai dari hasil a - b

+			return $a - $b;

+			

+		} else {

+			

+			// jika kondisi salah, kembalikan nilai gagal

+			return "Gagal, kedua data harus integer";

+			

+		}

+		

+	}

+	

+	function kali($a, $b) {

+		

+		// check apakah a dan b merupakan integer, jika tidak maka keluarkan output gagal

+		// menggunakan fungsi is_int mengecek apakah integer atau bukan

+		if ( is_int($a) and is_int($b) ) {

+			

+			// jika kondisi benar, kembalikan nilai dari hasil a * b

+			return $a * $b;

+			

+		} else {

+			

+			// jika kondisi salah, kembalikan nilai gagal

+			return "Gagal, kedua data harus integer";

+			

+		}

+		

+	}

+	

+	function bagi($a, $b) {

+		

+		// check apakah a dan b merupakan integer, jika tidak maka keluarkan output gagal

+		// menggunakan fungsi is_int mengecek apakah integer atau bukan

+		if ( is_int($a) and is_int($b) ) {

+			

+			// jika kondisi benar, kembalikan nilai dari hasil a / b

+			return $a / $b;

+			

+		} else {

+			

+			// jika kondisi salah, kembalikan nilai gagal

+			return "Gagal, kedua data harus integer";

+			

+		}

+		

+	}

+	echo "\n\n";

+		

+	echo "Percobaan pertama dengan angka 2 dan 5\n";

+	$angka_1 = 2;

+	$angka_2 = 5; 

+	echo "Hasil tambah: " . tambah($angka_1, $angka_2) . "\n";

+	echo "Hasil kurang: " . kurang($angka_1, $angka_2) . "\n";

+	echo "Hasil kali: " . kali($angka_1, $angka_2) . "\n";

+	echo "Hasil bagi: " . bagi($angka_1, $angka_2) . "\n";

+	

+	echo "\n\n";

+	

+	echo "Percobaan kedua dengan angka 2 dan huruf '5'\n";

+	$angka_1 = 2;

+	$angka_2 = '5'; 

+	echo "Hasil tambah: " . tambah($angka_1, $angka_2) . "\n";

+	echo "Hasil kurang: " . kurang($angka_1, $angka_2) . "\n";

+	echo "Hasil kali: " . kali($angka_1, $angka_2) . "\n";

+	echo "Hasil bagi: " . bagi($angka_1, $angka_2) . "\n";

+	

+	echo "\n\n";

+	

+	// menggunakan hanya satu fungsi, dengan kondisi sebagai operator

+	function proses($a, $b, $operator) {

+		

+		// check apakah a dan b merupakan integer, jika tidak maka keluarkan output gagal

+		// menggunakan fungsi is_int mengecek apakah integer atau bukan

+		if ( is_int($a) and is_int($b) ) {

+			

+			// jika kondisi benar, kita check apakah operator ada

+			if ($operator) {

+				

+				// jika kondisi benar, maka kita hanya menerima nilai operator dengan tambah, kurang, kali atau bagi

+				if ($operator === "tambah") {

+					// jika benar, maka kembalikan a + b

+					return $a + $b;

+				}

+				elseif ($operator === "kurang") {

+					// jika benar, maka kembalikan a - b

+					return $a - $b;

+				}

+				elseif ($operator === "kali") {

+					// jika benar, maka kembalikan a * b

+					return $a * $b;

+				}

+				elseif ($operator === "bagi") {

+					// jika benar, maka kembalikan a / b

+					return $a / $b;

+				}

+				else {

+					// jika semua kondisi diatas salah, maka keluarkan output Operator tidak ditemukan

+					return "Gagal, operator tidak ditemukan";

+				}

+				

+			} else {

+				// jika kondisi salah, maka keluarkan output operator kosong

+				return "Gagal, operator Kosong";

+			}

+			

+		} else {

+			

+			// jika kondisi salah, kembalikan nilai gagal

+			return "Gagal, kedua data harus integer";

+			

+		}

+		

+	}

+	

+	echo "Percobaan ketiga dengan angka 2 dan 5\n";

+	$angka_1 = 2;

+	$angka_2 = 5; 

+	echo "Hasil tambah: " . proses($angka_1, $angka_2, "tambah") . "\n";

+	echo "Hasil kurang: " . proses($angka_1, $angka_2, "kurang") . "\n";

+	echo "Hasil kali: " . proses($angka_1, $angka_2, "kali") . "\n";

+	echo "Hasil bagi: " . proses($angka_1, $angka_2, "bagi") . "\n";

+	echo "Hasil tanpa operator: " . proses($angka_1, $angka_2, "") . "\n";

+	echo "Hasil dengan operator salah: " . proses($angka_1, $angka_2, "tambahkurang") . "\n";

+	

+	echo "\n\n";
