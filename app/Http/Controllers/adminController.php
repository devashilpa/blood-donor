<?php

namespace App\Http\Controllers;
use App\models\register;
use Illuminate\Http\Request;
class adminController extends Controller
{
  public function adminindex()
  {
      return view('admin.adminindex');
  }
  public function __construct()
  {
      $this->obj2= new register;
  }
  public function registerview()
  {
      $data['result']=$this->obj2->viewRegister('registers');
      return view('admin.registerview',$data);
  }
  public function adminlogin()
  {
      return view('adminlogin');
  }

}
