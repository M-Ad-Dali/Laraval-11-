<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr; 
use Illuminate\Database\Eloquent\Factories\HasFactory;


// class job { // [الطريقة الاحدث في لارفل لتعريف البيانات يدوياً] 
//     public static function all(): array
//     {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                 'salary' => '$50,000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Programmer',
//                 'salary' => '$10,000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Teacher',
//                 'salary' => '$40,000'
//             ]
//         ];
//     }

class Job extends Model{ 
    use HasFactory;

    protected $table = 'job_listings'; /* [تحديد اسم الجدول في قاعدة البيانات] */

    protected $fillable = ['title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class); /* [تعريف العلاقة بين الوظيفة وصاحب العمل صاحب عمل واحد معه عدة وظائف] [One-to-Many] */
    }

}