<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'deadline',
        'status',
        'description',
    ];
}


    // mendefinisikan data tugas
    // protected static $tasks = [
    // [
    //     "id" => 1,
    //     "name" => "Bahasa Inggris",
    //     "deadline" => "2024-05-29",
    //     "status" => "Belum Selesai",
    //     "description" => "Mengerjakan tugas Bahasa Inggris Chapter 3 halaman 10-12",
    // ], [
    //     "id" => 2,
    //     "name"=> "Matematika",
    //     "deadline" => "2024-05-30",
    //     "status" => "Belum Selesai",
    //     "description" => "Mengerjakan tugas Matematika di buku PR halaman 21-25",
    // ], [
    //     "id" => 3,
    //     "name"=> "Fisika",
    //     "deadline" => "2024-05-31",
    //     "status" => "Belum Selesai",
    //     "description" => "Mengerjakan tugas Matematika di buku PR halaman 26-30",
    // ]
    // ];

// method untuk mendapatkan semua data tugas
// public static function getAll()
//     {
//         return self::$tasks;
//     }