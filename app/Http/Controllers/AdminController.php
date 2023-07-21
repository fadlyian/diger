<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index(){
        return Inertia::render('Admin/Beranda');
    }

    public function users(){
        return Inertia::render('Admin/User', [
            'users' => User::all(),
        ]);
    }

    public function deleteUser($id){
        User::findorfail($id)->delete();

        return to_route('admin.users');
    }

}
