<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index($slug = null)
    {
        $department = Department::whereSlug($slug)->firstOrFail();

    }

    public function indexAdmin()
    {
        $departments = Department::all();
        dd($departments);
    }
}
