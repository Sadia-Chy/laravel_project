<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class MyController extends Controller
{

    public function about($n,$e){
    	return view('about-us',['myname'=>$n, 'myemail'=> $e]);
    }

    public function add(){
    	return view('add');
    }
    public function all(){
        $data = Employee::all();
    	return view('list',['employee'=>$data]);
    }

    public function edit($id){
        $employee = Employee::find($id);
    	return view('edit',['employee'=>$employee]);
    }

    public function store(Request $request){

        // echo $request->name.'<br>'.$request->email;
        $obj = new Employee();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->birth_date = $request->birth_date;
        $obj->salary = $request->salary;
        //$obj->status = 1;
        if($obj->save()){
           return redirect()->to('/list');
        }

    }

    public function update(Request $req, $id){
        $obj = Employee::find($id);
        //$obj = Employee::where('email','=',$email)
        $obj->name = $req->name;
        $obj->email = $req->email;
        $obj->birth_date = $req->birth_date;
        $obj->salary = $req->salary;
        if($obj->save()){
            echo 'Successfully Updated';
         }

    }

    public function delete($id){
        $obj = Employee::find($id);
        if($obj->delete()){
            return redirect()->to('list');
        }
    }

}
