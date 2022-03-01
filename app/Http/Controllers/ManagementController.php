<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManagementCarbohydratesCereals;

class ManagementController extends Controller
{
    public function index(ManagementCarbohydratesCereals $post){
        return $post->get();
    }
}
