<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        $title = "Sistem Sekolah - Edit Kelas";

        $classes = [
            'id' => $id,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major_id' => 1,
            'teacher_id' => 1,
        ];

        $majors = [
            ['id' => 1, 'code' => 'AKL'],
            ['id' => 2, 'code' => 'TKJ'],
            ['id' => 3, 'code' => 'BD'],
        ];

        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view('classes.edit', [
            'title' => $title,
            'class' => $classes,
            'majors' => $majors,
            'teachers' => $teachers,
        ]);
    }
}