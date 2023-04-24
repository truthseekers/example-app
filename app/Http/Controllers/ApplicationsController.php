<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    
   public function index() {


    // $test_array = [
    //     'productOne' => 'iPhone',
    //     'productTwo' => 'Samsung'
    // ];

    // print_r($test_array);

    // DB::insert('insert into users (id, name, email) values (?, ?, ?)', [1, 'Marc', "Marc@hotmail.com"]);

    $users = DB::select('select * from users');

    print_r($users);

    print_r(route('applications'));

    // users.index would mean have a "views/users/index.blade.php"
    return view('applications.index');

   }
}
