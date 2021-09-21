<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
class employeesController extends Controller
{
    //
    function show()
    {
        $data = employees::paginate(10);
        return view('list',['employees'=>$data]);
    }
    function delete($id)
    {
        $data=employees::find($id);
        $data->delete();
        return redirect('list');
    }
    function showData($id)
    {
        $data= employees::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data=employees::find($req->id);
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->companyname=$req->companyname;
        $data->companyemail=$req->companyemail;
        $data->companylogo=$req->companylogo;
        $data->companywebsite=$req->companywebsite;
        $data->save();
        return redirect('list');
    }
}
