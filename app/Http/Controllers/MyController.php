<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //

        public function selectData(){
            $students = ['ali','aqsa','asim' ,'rafiya','sana'] ;
            return view('student',compact('students'));

        }


        public function insertData(Request $req){
            $insData = new student(); 
            $insData->name = $req->name;
            $insData->email = $req->email;
            $insData->password = $req->password;
            $insData->save();
            return redirect('select');
        }


        public function selectStudentData(){
            $selectData = new student();
            $selectallData = $selectData::all();
            return view('allusers',compact('selectallData'));
        }
           public function editData($id){
            $editData = new student();
            $edituserData = $editData->find($id);
            return view('edit',compact('edituserData'));
    
           }
           public function updateData(Request $req , $id){
            $updateData = new student();
            $updateStd = $updateData->find($id);
            $updateStd->name = $req->name; 
            $updateStd->email = $req->email;
            $updateStd->password = $req->password;
            $updateStd->save();
            return redirect('select');
           }
           public function removeData($id){
            $updateData = new student();
            $updateStd = $updateData->find($id)->delete();
            // dd($updateStd);
            return redirect('select');

}

}