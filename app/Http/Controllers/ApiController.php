<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\OpenLibrary;

class ApiController extends Controller
{
    public function index(OpenLibrary $openLibrary){

        dd($openLibrary->bookInfo('0385472579'));
    }
}
