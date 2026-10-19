<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'judul_buku' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'genre' => 'Fiksi',
                'harga' => 85000,
                'images' => 'laskar-pelangi.jpg',
                'summary' => 'Kisah perjuangan sepuluh anak Belitung dalam 
                meraih pendidikan dan mewujudkan impian mereka.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_buku' => 'Bumi',
                'penulis' => 'Tere Liye',
                'genre' => 'Fantasi',
                'harga' => 95000,
                'images' => 'bumi.jpg',
                'summary' => 'Petualangan Raib, Seli, dan Ali yang membawa mereka mengenal dunia paralel 
                dan berbagai rahasia di dalamnya.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_buku' => 'Laut Bercerita',
                'penulis' => 'Leila S. Chudori',
                'genre' => 'Novel Sejarah',
                'harga' => 99000,
                'images' => 'laut-bercerita.jpg',
                'summary' => 'Novel yang mengisahkan persahabatan, perjuangan, kehilangan, dan ingatan 
                tentang peristiwa politik di Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_buku' => 'Belajar Coding itu Penting diera Revolusi Industri 4.0',
                'penulis' => 'Yeni Mulyani',
                'genre' => 'Buku Pendidikan',
                'harga' => 35000,
                'images' => 'belajar-coding.jpg',
                'summary' => 'Buku ini membahas pentingnya mempelajari pemrograman dalam era revolusi industri 4.0.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_buku' => 'Dasar-Dasar Algoritma, Struktur Data, dan Pemrograman ',
                'penulis' => 'M.A. Saelan',
                'genre' => 'Buku Pendidikan',
                'harga' => 55000,
                'images' => 'dasar-dasar-algoritma-pemrograman.jpg',
                'summary' => 'Buku ini membahas mengenai konsep dan metode 
                yang digunakan dalam ilmu pemrograman.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_buku' => 'Rebels A New Beginning',
                'penulis' => 'Rashifa Killa',
                'genre' => 'Novel Fiksi',
                'harga' => 80000,
                'images' => 'rebels-a-new-beginning.jpg',
                'summary' => 'Kisah sekelompok remaja yang berjuang melawan sistem yang tidak adil 
                dan mencari jalan keluar dari situasi sulit mereka.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}