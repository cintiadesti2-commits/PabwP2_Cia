<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function index()
{
    $students = [
        [
            'name' => 'Ciaa',
            'major' => 'Sistem Informasi',
            'age' => 19,
            'courses' => ['pemrograman web','Database','Cloude computing'],
        ],
        [
            'name' => 'Aqila',
            'major' => 'Teknik Elektro',
            'age' => 20,
            'courses' => ['Elektromagnetik','Algoritma','Telekomunikasi'],
        ],
        ];
        return view('students.index',compact('students'));
    }
}

