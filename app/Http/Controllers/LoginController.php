<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use DB;
use Carbon\Carbon;
use Mail;
use Session;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\UrlRequest;
use App\Http\Requests\EmailRequest;
use Alert;

class LoginController extends Controller
{

    public function index(){
      return view('login');
    }
    //VISTA DE CONFIRMACION EMAIL
    public function confirm_email(){
      return view('email');
    }
    //ENVIA EL LINK DE CONFIRMACION
    public function mail_send (EmailRequest $request){

      $data['email']    = $request->input('email');
      $data['confirmation_code'] = str_random(25);

      $mail = DB::table('confirmed_emails')->where('email', $data['email'])->first();

      if(! $mail)
      {
        DB::table('confirmed_emails')->insert([
    			'email'   => $data['email'],
    			'confirmation_code' => $data['confirmation_code']
        ]);

        Mail::send('emails.confirmation_code', $data, function($message) use ($data) {
           $message->to($data['email'])->subject('Por favor confirma tu correo');
      });
          return redirect('listo');
        }else{
          return redirect('confirm_email');
        }
  }
  //VERIFICA QUE ES CORRECTO EL LINK DE CONFIRMACION, SI LO ES YA PUEDES REGISTRARTE SI NO TIENES QUE ENVIAR DE NUEVO EL CORREO
    public function verify($code)
  {
      $mail = DB::table('confirmed_emails')->where('confirmation_code', $code)->first();

      if (! $mail)
          return redirect('confirm_email');


        return redirect('company/'.$code);
    }
          //VALIDA QUE EL CORREO Y CONTRASEÑA SEAN CORRECTOS
    public function validar(Request $request)
    {
      $email    = $request->input('email');
      $password = $request->input('password');

      if(Auth::attempt(['email' => $email, 'password' => $password]))
      {
          Alert::success('', 'Bienvenido a Kaikoi');
           return redirect()->route('home');
        }else{
           return redirect('confirm_email');
        }
    }
    /*public function validatorRegistro(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'company' =>

        ]);
    }*/
    //INSERTA UN NUEVO USUARIO
    public function insertar (UserRequest $request)
	{
    $name = $request->input('name');
    $email    = $request->input('email_');
    $password = $request->input('password');
    $company = $request->input('company');
    $_token = $request->input('_token');
    $date = Carbon::now();

		  DB::table('users')->insert([
			'name'  => $name,
			'email'   => $email,
			'password' => Hash::make($password),
      'id_company'   => $company,
      'remember_token'  =>  $_token,
      'created_at'  =>  $date,
      'updated_at'  => $date
    ]);
    return redirect('login');
	}
  public function listo(){
    return view('send_email');
  }
  public function company($code){

    if( !Auth::check() )
    {
        $confirm = DB::SELECT('SELECT * FROM confirmed_emails WHERE confirmation_code = "'.$code.'"');

        if( !empty($confirm) )
        {
          return view('company_name');
        }
/*
        DB::table('confirmed_emails')->where('confirmation_code', $code)->update([
            'confirmed' => true,
            'confirmation_code'  => ''
        ]);*/

    }

    return view('login');
  }
  public function new_company(CompanyRequest $request){

    $company = $request->input('company');
    $date = Carbon::now();

    DB::table('company')->insert([
      'name' => $company,
      'created_at' => $date,
      'updated_at' => $date
    ]);
      return redirect('url_pick');
  }
  
  public function url_pick(){
    return view('url_pick');
  }
  public function new_link(URLRequest $request){

    $link = $request->input('link');
    $date = Carbon::now();

    DB::table('company')
    ->orderBy('id','desc')
    ->limit(1)
    ->update([
      'link'  => $link.".kaikoi.com",
      'updated_at' => $date
    ]);
      return redirect('user');
  }
    public function registrar(){
    $companies = DB::select('select * from company');
    $email = DB::table('confirmed_emails')
    ->orderBy('id','desc')
    ->limit(1)
    ->get();

    return view('create-account')->with('companies',$companies)->with('email',$email);
  }


}
