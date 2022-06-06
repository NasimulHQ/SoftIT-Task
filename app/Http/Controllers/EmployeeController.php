<?php

namespace App\Http\Controllers;

use App\Models\Employee;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;


class EmployeeController extends Controller
{

    public function getAllEmployee(){
        $employees = Employee::all();
        return view('employee', compact('employees'));
    }
    public function downloadPDF(){
        $employees = Employee::All();
        $pdf = PDF::LoadView('employee', compact('employees'));
        return $pdf->download('employees.pdf');
    }

    }


