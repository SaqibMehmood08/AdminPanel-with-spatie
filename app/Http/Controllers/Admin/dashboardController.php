<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class dashboardController extends Controller
{
    public function index(){
        abort_if(Gate::denies('view_dashboard'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pages.index');
    }

    public function form(){
        abort_if(Gate::denies('view_dashboard'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pages.form');
    }
}
