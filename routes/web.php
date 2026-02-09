<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

// $jobs = [ // [الطريقة القديمة الفانية لتعريف البيانات] 
//     [
//         'id' => 1,
//         'title' => 'Director',
//         'salary' => '$50,000'
//     ],
//     [
//         'id' => 2,
//         'title' => 'Programmer',
//         'salary' => '$10,000'
//     ],
//     [
//         'id' => 3,
//         'title' => 'Teacher',
//         'salary' => '$40,000'
//     ]
// ];


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home',[
    'greeting' => 'Hello', /* [greeting = $greeting = Hello] */
    'name' => 'MokaMo',
    ]);
});


Route::get('/about', function () {
    return view('about');
    });

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/jobs', function () { // [الطريقة القديمة لتعريف البيانات]
//         return view('jobs',[
    
//             'jobs' => [
//                 [
//                     'id' => 1,
//                     'title' => 'Director',
//                     'salary' => '$50,000'
//                 ],
//                 [
//                     'id' => 2,
//                     'title' => 'Programmer',
//                     'salary' => '$10,000'
//                 ],
//                 [
//                     'id' => 3,
//                     'title' => 'Teacher',
//                     'salary' => '$40,000'
//                 ]
//             ]
//         ]);
//     });

    Route::get('/jobs', function () {
        return view('jobs',[
    
            // 'jobs' => job::all() // [طريقة جلب البيانات من قاعدة البيانات بدون علاقة بين الجداول] [تحميل كسول للبيانات]
            'jobs' => Job::with('employer')->get() /* [with('employer') = eager loading] */
        ]);
    });

    Route::get('/jobs/{id}', function ($id) {

        $job = job::find($id);

        // dd($job);

            return view('job', ['job' => $job]);
    });