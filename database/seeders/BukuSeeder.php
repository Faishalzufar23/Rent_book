<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run()
    {
        Buku::create([
            'judul_buku' => 'Sample Book 1',
            'gambar_buku' => 'sample_book_1.png',
            'desc_buku' => 'Description of Sample Book 1',
            'author_buku' => 'Author 1',
            'harga_buku' => 29.99,
        ]);

        Buku::create([
            'judul_buku' => 'Sample Book 2',
            'gambar_buku' => 'sample_book_2.png',
            'desc_buku' => 'Description of Sample Book 2',
            'author_buku' => 'Author 2',
            'harga_buku' => 24.99,
        ]);

        // Add more Buku records as needed
        Buku::create([
            'judul_buku' => 'Sample Book 3',
            'gambar_buku' => 'sample_book_3.png',
            'desc_buku' => 'Description of Sample Book 3',
            'author_buku' => 'Author 3',
            'harga_buku' => 19.99,
        ]);

        Buku::create([
            'judul_buku' => 'Sample Book 4',
            'gambar_buku' => 'sample_book_4.png',
            'desc_buku' => 'Description of Sample Book 4',
            'author_buku' => 'Author 4',
            'harga_buku' => 34.99,
        ]);

        Buku::create([
            'judul_buku' => 'Sample Book 5',
            'gambar_buku' => 'sample_book_5.png',
            'desc_buku' => 'Description of Sample Book 5',
            'author_buku' => 'Author 5',
            'harga_buku' => 39.99,
        ]);
    }
}
