<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('welcome', [
            'tasks' => loadTasks()
        ]);
    }
}
