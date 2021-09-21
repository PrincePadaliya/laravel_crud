<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view('employee');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
   /*
          $employee->firstname = 'milu';
       $employee->lastname = 'rana';
        $employee->email ='milu@gmail.com';
        $employee->phone =908866;
        $employee->companyname ='jvd2';
        $employee->companyemail = 'jvs2';
        $employee->companylogo = 'ldhfosod';
         $employee->companywebsite ='lnkfafnk';
*/


        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->companyname = $request->input('companyname');
        $employee->companyemail = $request->input('companyemail');
        $employee->companylogo='public/images/team-4.jpg';
        $employee->companywebsite = $request->input('companywebsite');
        
       
        $employee->save();

        return view('employee')->with('employee',$employee);
    }
}
