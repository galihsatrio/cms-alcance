<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MServiceController extends Controller
{
    public function index() {
        $model = DB::table('m_services')->get();
        return view('page.service.index', ['list' => $model]);
    }

    public function create() {
        return view('page.service.create');
    }
}
