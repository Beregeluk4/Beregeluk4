<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        return view('FAQ', [
            'task' => loadTasks()
        ]);
    }
}
