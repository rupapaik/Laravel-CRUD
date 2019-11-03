<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class AdminController extends Controller
{
  public function add_contact()
  {
    return view('contact.addcontact');
  }

//all contact show from database
  public function all_contact()
  {
  $petani = DB::table('tbl_contact')->get();

   return view('contact.allcontact', ['data_list' => $petani]);
  }
  
//dashboard controller
  public function dashboard()
  {
    return view('master');
  }

  //all contact added part in database
  public function save_contact(Request $request)
  {
$data=array();
$data['contact_name']=$request->contact_name;
$data['contact_number']=$request->contact_number;
DB::table('tbl_contact')->insert($data);

    return back()->with('success', 'Data inserted Successfully');

}
//delete contact from data base,one by one
public function destroy($contact_id){
DB::table('tbl_contact')->where('contact_id',$contact_id)->delete();
  return back()->with('success', 'Data deleted Successfully');
}

//edit contact Controller are here
public function edit($contact_id){
 $petani=DB::table('tbl_contact')->where('contact_id',$contact_id)->first();
   return view('contact.contact_edit', ['data_list' => $petani]);
 $manage_contact=view(contact.contact_edit)->with('data'.$contact_info);
 return view('layout')
 ->with('contact.contact_edit'.$manage_contact);
}

//contact update are here
public function update(Request $request,$contact_id)
{
$data=array();
$data['contact_name']=$request->contact_name;
$data['contact_number']=$request->contact_number;
DB::table('tbl_contact')->where('contact_id',$contact_id)
->update($data);
  return Redirect::to('/allcontact')->with('success', 'Data Update Successfully');;

}
}
