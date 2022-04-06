<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\register;
use Auth;

class bloodController extends Controller
{
    public function __construct(){
        $this->obj= new register;
        
    }
  public function register()
  {
      return view('register');
  } 
  public function about()
  {
      return view('about');
  }
  public function RegisterAction(Request $req)
  {
    $name=$req->input('name');
    $age=$req->input('age');
    $gender=$req->input('gender');
    $blood_group=$req->input('blood_group');
    $mail=$req->input('email');
    $last_date=$req->input('date');
    $password=$req->input('password');
    $data=['name'=>$name,
    'age'=>$age,
    'gender'=>$gender,
    'blood_group'=>$blood_group,
    'email'=>$mail,
    'last_donation_date'=>$last_date,
        'password'=>$password];
    $this->obj->insertData('registers',$data);
    return redirect('/register');
  }
  public function userlogin()
  {
      return view('userlogin');
  }
  public function userloginAction(Request $req)
{
    $email=$req->input('email');
    $password=$req->input('password');
    $data=['user_name'=>$email,
    'password'=>$password];
    $data=$this->obj->loginData('registers',$email,$password);
    if(isset($data))
    {
        if($data->email!="admin@gmail.com"){
        $req->session()->put(array('sess'=>$data->id));
        return redirect('/register');
        }
        else{
            return redirect('/adminindex');
        }
    }else{
        return redirect('/userlogin')->with('error','invalid email and password');
    }
  
}
public function logout()
{
 Auth::logout();
 return redirect('/');
}
// public function donorDetails()
// {
//     $data['result']=$this->obj->viewDonor('registers');
//     return redirect('donordetails',$data);
// }
public function viewDonor()
{
$data['result']=$this->obj->viewRegister('registers');
return view('viewdonor',$data);
}
public function search (Request $req)
{
$search=$req->input('searchdonor');
$user['result'] = register::where('name','LIKE','%'.$search.'%')->orwhere('blood_group','LIKE','%'.$search.'%')->get();
    if(count($user) > 0)
        return view('viewdonor',$user)->withQuery ( $search );
    
}
}