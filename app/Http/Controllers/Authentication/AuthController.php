<?php

namespace App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function Login(Request $request){
        //dd($request->all());
        $credentials=$request->only(['email','password']);
        if(Auth::attempt($credentials)){
            return view('panel.default.panel-aytan')->with('success','Basarili Bir Sekilde Giris Yaptiniz');
        }
        else{
            return back()->with('error','Boyle Bir Kullanici Bulunamadi!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home.index')->with('success','Basariyla Cikis Yapildi');
    }
    public function edit(){
        $user=Auth::user(); 
        return view('panel.user.profile')->with('user',$user);
    }
    public function update(Request $request){
        $users=User::where('id',$request->id)->first();
        if(Hash::check($request->old_password,$users->password)){
          
            if($request->password==null){
                $request->validate(
                    [
                        'name'=>'required',
                        'email'=>'required'
                    ]
                );  
                $user=User::where('id',$request->id)->update(
                    [
                        "name"=>$request->name,
                        "email"=>$request->email,
                        "company_name"=>$request->sirket
                    ]
                );
            }else{
                $request->validate(
                    [
                        'name'=>'required',
                        'email'=>'required',
                        'password'=>'required|min:8|same:password2',
                        'password2'=>'required'
                    ]
                );  
                $user=User::where('id',$request->id)->update(
                    [
                        "name"=>$request->name,
                        "email"=>$request->email,
                        "company_name"=>$request->sirket,
                        "password"=>Hash::make($request->password)
                    ]
                );
            }
     
            if($user){
                return view('panel.default.panel-aytan')->with('success','Profil Basariyla Duzenlendi!');
            }
            return back()->with('error','Profil Duzenleme Basarisiz');
        }
         return back()->with('error','Eski Sifre Bilgisini Yanlis Girdiniz.');        
        
    }
}
