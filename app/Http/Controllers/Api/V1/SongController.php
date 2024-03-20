<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SongController extends Controller
{
    public function index()
    {
        return Song::all();
    }
}
