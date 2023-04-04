<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'kode_buku'=>'BKN01',
                'judul'=>'Belajar Database',
                'pengarang'=>'Sofia Mulia',
                'jenis_buku'=>'Buku Umum',
                'harga'=>102000,
                'qty'=>50,
            ],
            [
                'kode_buku'=>'BKN02',
                'judul'=>'Belajar Membaca',
                'pengarang'=>'Yunus Abadi',
                'jenis_buku'=>'Buku Umum',
                'harga'=>110000,
                'qty'=>60,
            ],
            [
                'kode_buku'=>'BKN03',
                'judul'=>'Dari Langit ke Bumi',
                'pengarang'=>'Ferdina Malika',
                'jenis_buku'=>'Novel',
                'harga'=>75000,
                'qty'=>40,
            ],
            [
                'kode_buku'=>'BKN04',
                'judul'=>'Belajar MongoDB',
                'pengarang'=>'Sofia Mulia',
                'jenis_buku'=>'Buku Umum',
                'harga'=>112000,
                'qty'=>40,
            ],
            [
                'kode_buku'=>'BKN05',
                'judul'=>'Belajar Laravel 1',
                'pengarang'=>'Sofia Mulia',
                'jenis_buku'=>'Buku Umum',
                'harga'=>100000,
                'qty'=>50,
            ],
            [
                'kode_buku'=>'BKN06',
                'judul'=>'Bumi dan Langit',
                'pengarang'=>'Jaka Susila',
                'jenis_buku'=>'Novel',
                'harga'=>120000,
                'qty'=>52,
            ],
            [
                'kode_buku'=>'BKN07',
                'judul'=>'Belajar Java',
                'pengarang'=>'Anis Salihin',
                'jenis_buku'=>'Buku Umum',
                'harga'=>90000,
                'qty'=>30,
            ],
            [
                'kode_buku'=>'BKN08',
                'judul'=>'Masakan Nusantara',
                'pengarang'=>'Budi Waluya',
                'jenis_buku'=>'Buku Umum',
                'harga'=>101000,
                'qty'=>20,
            ],
            [
                'kode_buku'=>'BKN09',
                'judul'=>'Masakan Western',
                'pengarang'=>'John Stone',
                'jenis_buku'=>'Buku Umum',
                'harga'=>110000,
                'qty'=>10,
            ],
            [
                'kode_buku'=>'BKN10',
                'judul'=>'Negeri Seberang',
                'pengarang'=>'Fardina Malika',
                'jenis_buku'=>'Novel',
                'harga'=>82000,
                'qty'=>40,
            ],
            [
                'kode_buku'=>'BKN11',
                'judul'=>'Mendaki Jabatan',
                'pengarang'=>'Jaka Susila',
                'jenis_buku'=>'Novel',
                'harga'=>100000,
                'qty'=>40,
            ],
            [
                'kode_buku'=>'BKN12',
                'judul'=>'Belajar SSMS',
                'pengarang'=>'Sofia Mulia',
                'jenis_buku'=>'Buku Umum',
                'harga'=>102000,
                'qty'=>50,
            ],
            [
                'kode_buku'=>'BKN13',
                'judul'=>'Merajut Asa',
                'pengarang'=>'Jaka Susila',
                'jenis_buku'=>'Novel',
                'harga'=>92000,
                'qty'=>20,
            ],
            [
                'kode_buku'=>'BKN14',
                'judul'=>'Lautan Susu',
                'pengarang'=>'Ferdina Malika',
                'jenis_buku'=>'Novel',
                'harga'=>72000,
                'qty'=>35,
            ],
            [
                'kode_buku'=>'BKN15',
                'judul'=>'Belajar Aljabar 1',
                'pengarang'=>'Yunus Abadi',
                'jenis_buku'=>'Buku Umum',
                'harga'=>102000,
                'qty'=>50,
            ],
            [
                'kode_buku'=>'BKN16',
                'judul'=>'Belajar Aljabar 2',
                'pengarang'=>'Yunus Abadi',
                'jenis_buku'=>'Buku Umum',
                'harga'=>112000,
                'qty'=>40,
            ],
            [
                'kode_buku'=>'BKN17',
                'judul'=>'Kisah Abu Nawas',
                'pengarang'=>'Abdul Ghani',
                'jenis_buku'=>'Buku Umum',
                'harga'=>82000,
                'qty'=>60,
            ],
            [
                'kode_buku'=>'BKN18',
                'judul'=>'Si Kancil',
                'pengarang'=>'Abdul Ghani',
                'jenis_buku'=>'Fabel',
                'harga'=>62000,
                'qty'=>50,
            ],
            [
                'kode_buku'=>'BKN19',
                'judul'=>'Langit Runtuh',
                'pengarang'=>'Jaka Susila',
                'jenis_buku'=>'Novel',
                'harga'=>92000,
                'qty'=>45,
            ],
            [
                'kode_buku'=>'BKN20',
                'judul'=>'Meraih Puisi',
                'pengarang'=>'Jaka Susil',
                'jenis_buku'=>'Novel',
                'harga'=>82000,
                'qty'=>40,
            ],
        ];
        DB::table('books')->insert($data);
    }
}
