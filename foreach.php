<?php
function greeting() {
    echo "Hello, selamat datang";
}

// Memanggil function
greeting();
echo "<br>";
?>

<?php
function sapa($nama, $gender) {
    // Memeriksa gender dan memberikan salam yang sesuai
    if (strtolower($gender) == "pria") {
        $sapa = "Hi bro";
    } elseif (strtolower($gender) == "wanita") {
        $sapa = "Hi sis";
    } else {
        $sapa = "Hi";
    }

    // Mencetak pesan dengan nama dan gender
    echo "$sapa, nama saya adalah $nama, dan gender saya adalah $gender.";
}

// Contoh pemanggilan function
sapa("Bintang", "Pria"); echo "<br>";
sapa("Salwa", "Wanita");
echo "<br>";
?>

<?php
function cekBilanganGenap($bilangan) {
    // Mengecek apakah bilangan habis dibagi 2
    if ($bilangan % 2 == 0) {
        return true; // Bilangan genap
    } else {
        return false; // Bilangan tidak genap
    }
}

// Contoh pemanggilan function
$hasil1 = cekBilanganGenap(7); // False
$hasil2 = cekBilanganGenap(8); // True

// Menampilkan hasil
echo "Cek bilangan genap (7): " . ($hasil1 ? "True" : "False") . "<br>";
echo "Cek bilangan genap (8): " . ($hasil2 ? "True" : "False");
?>