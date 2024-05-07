<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // Select students who attended (assuming there's a column named 'attendance' in the table)
    $attendance = DB::table('studentname')->where('attendance', 1)->get();
    
    // Select students who did not attend
    $togo = DB::table('studentname')->where('attendance', 0)->get();

    return view('student', ['attendance' => $attendance, 'togo' => $togo]);
});

