<?php

namespace App\Http\Controllers\Panel;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(){
        $id=Auth::id();
        $user=User::where('id',$id)->first();
        return view('panel.user.profile')->with('user',$user);
    }
    public function show(){
        $data['user']=User::all();
        return view('panel.user.index',compact('data'));
    }
    public function store(){
        return view('panel.user.create');
    }
    public function create(Request $request){
       // dd($request->all());
       $request->validate(
           [
               'name'=>'required',
               'email'=>'required',
               'password'=>'required|min:8|same:password2',
               'password2'=>'required'
           ]
           );  
           $user=User::insert(
               [
                   "name"=>$request->name,
                   "email"=>$request->email,
                   "password"=>Hash::make($request->password),
                   "role"=>"user",
                   "company_name"=>$request->sirket
               ]
           );
            if($user){
                return redirect()->route('user.List')->with('success','Kullanici Basariyla Kayit Edildi!');
            }     
                return back()->with('error','Kullanici Kaydi Basarisiz!');        
    }

    public function edit($id){
        $user=User::where('id',$id)->first(); 
        return view('panel.user.edit')->with('user',$user);
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
                return redirect()->route('user.List')->with('success','Kullanici Basariyla Duzenlendi!');
            }
            return back()->with('error','Kullanici Duzenleme Basarisiz');
        }
         return back()->with('error','Eski Sifre Bilgisini Yanlis Girdiniz.');        
        
    }
    public function destroy($id){
        $user=User::find($id);
        $user->delete();
        return back()->with('success','Kullanici Basariyla Silindi');
    }
   

}
