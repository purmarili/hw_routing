<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/name', function () {
    return response()->json(['First Name' => 'John', 'Last Name' => 'Doe']);
});

Route::get('/age', function () {
    return response()->json(['Age' => 25]);
});

Route::get('/hobbies', function () {
    return response()->json(['Hobbies' => ['Reading', 'Swimming']]);
});

Route::get('/education', function () {
    return response()->json(['Education' => 'Bachelor\'s in Computer Science']);
});

Route::get('/work', function () {
    return response()->json(['Work' => 'Software Engineer']);
});

Route::post('/update', function () {
    return response()->json(['message' => 'updated successfully']);
});

Route::put('/add', function () {
    return response()->json(['message' => 'added successfully']);
});

Route::delete('/delete', function () {
    return response()->json(['message' => 'deleted successfully']);
});
