<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationsController extends Controller
{
    
   public function index() {


    // $test_array = [
    //     'productOne' => 'iPhone',
    //     'productTwo' => 'Samsung'
    // ];

    // print_r($test_array);

    // DB::insert('insert into users (id, name, email) values (?, ?, ?)', [1, 'Marc', "Marc@hotmail.com"]);
    // DB::insert('insert into applications (id, name, email, creditscore) values (?, ?, ?, ?)', [2, 'Joe', "Joe@gmail.com", 682]);

    // $users = DB::select('select * from users');

    // print_r($users);


    $applications = DB::select('select * from applications');

    // print_r($applications);

    // print_r(route('applications'));
    
    // return view('products.index', [
    //     'data' => $data
    // ]);

    // users.index would mean have a "views/users/index.blade.php"
    return view('applications.index', [ "applications" => $applications]);
    // return view('applications.index', [ $applications]);

   }

   public function submitapplication(Request $request)
   {
    // die("did it work?");
    $application = new Application;
    $application->name = $request->name;
    $application->email = $request->email;
    $application->save();
    // return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    return redirect('apply');
   }

}
