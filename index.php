<?php

require __DIR__ . '/vendor/autoload.php'; // Pastikan autoload dari Composer

use LibrarySystem\Library; // Namespace dari kelas
use Carbon\Carbon;


// Membuat objek perpustakaan
$library = new Library();

// Menambahkan buku ke perpustakaan
$library->addBook('Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling');
$library->addBook('The Great Gatsby', 'F. Scott Fitzgerald');

// Meminjam buku
echo $library->borrowBook('Harry Potter and the Sorcerer\'s Stone') . " pada " . Carbon::now()->toDateTimeString() . "<br>";

// Daftar buku setelah peminjaman
echo $library->listBooks() . "<br>". PHP_EOL;


// Mengembalikan buku
echo $library->returnBook('Harry Potter and the Sorcerer\'s Stone') . " pada " . Carbon::now()->toDateTimeString() . "<br>";


// Daftar buku setelah pengembalian
echo $library->listBooks() . "<br>". PHP_EOL;

