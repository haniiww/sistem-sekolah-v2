<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'bryan@ski.sch.id';
        $userStudentEmail = 'forensya@ski.sch.id';
        
        // User Teacher
        User::updateOrCreate(
            ['email'=> $userTeacherEmail],
            [
                'name' => 'Bryan Steve',
                'password' => bcrypt('password'),
                'role' => 'teacher'
            ]
        );

        // User Student
        User::updateOrCreate(
            ['email'=> $userStudentEmail],
            [
                'name' => 'Forensya Hani',
                'password' => bcrypt('password'),
                'role' => 'student'
            ]
        );
    }
}
