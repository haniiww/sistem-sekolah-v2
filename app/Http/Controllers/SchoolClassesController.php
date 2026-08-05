<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller

{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Kelas";
        $classes = [
                [
                    'id' => 1,
                    'name' => 'XII AKL 1',
                    'grade' => 'XII',
                    'major' => 'AKL',
                    'homeroom_teacher' => 'Budi Santoso'
                ],
                [
                    'id' => 2,
                    'name' => 'XII TKJ 1',
                    'grade' => 'XII',
                    'major' => 'TKJ',
                    'homeroom_teacher' => 'Siti Aminah'
                ]
        ];
            return view('classes.index', [
            'title' => $title,
            'classes' => $classes
        ]);
    }

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail Kelas";
        return view('classes.show', [
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Guru";
        return view('classes.create', [
            'title' => $title
        ]);
    }

    public function edit(string $id)
    {
        $title = "Sistem Sekolah - Edit Guru";
        return view('teachers.edit', [
            'title' => $title
        ]);
    }

    public function store()
    {
        return"Menambahkan data guru baru";
    }

     public function update(string $id)
    {
        return"Mengubah data guru dengan ID: {$id}";
    }

     public function destroy(string $id)
    {
        return"Menghapus data guru dengan ID: {$id}";
    }
}