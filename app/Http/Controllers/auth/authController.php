<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class authController extends Controller
{
    public function login()
    {
        return view('autentikasi/login', [
            '' => ''
        ]);
    }

    public function verifikasilogin(Request $request){
        $rule = [
            'username' => ['required'],
            'password' => ['required'],
        ];

        $pesan = [
            'username.required' => 'username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ];

        $validator = Validator::make($request->all(), $rule, $pesan);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 422, //422 | server meresponse tapi validasi tidak lolos
                'errors' => $validator->errors(),
            ]);
        }

        if(Auth::attempt($request->only('username','password'))){
            // if(Auth::user()->hasrole('visitor') == true ){
            //     $url = 'pengajuan-proposal';
            // }else{
            //     $url = 'panel';
            // }

            $responseData = [
                'status_code' => 200,
                'message' => 'Redirect..',
                'url' => 'panel'
            ];
            
            return response()->json($responseData, 200);
        }else{
            // session()->flash('keyword', 'Alert');
            // session()->flash('pesan', 'Email atau Password salah!');
            // return redirect('/login-ulang');

            $responseData = [
                'status_code' => 404,
                'message' => 'Email atau Password salah!',
            ];
            
            return response()->json($responseData, 200);
        }
    }

    public function verifikasipendaftaran(Request $request){
        $rule = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:20'],
        ];

        $pesan = [
            'name.required' => 'Kolom nama harus diisi.',
            'name.max' => 'Panjang nama maksimal :max karakter.',
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Kolom password harus diisi.',
            'password.min' => 'Panjang password minimal :min karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'phone.required' => 'Kolom WhatsApp harus diisi.',
        ];

        $validator = Validator::make($request->all(), $rule, $pesan);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 422, //422 | server meresponse tapi validasi tidak lolos
                'errors' => $validator->errors(),
            ]);
        }

        response('tes');

        $store = New User();
        $store->id = Uuid::uuid4()->toString();
        $store->name = $request['name'];
        $store->username = $request['username'];
        $store->password = bcrypt($request['password']);
        $store->email = $request['email'];
        $store->phone = $request['phone'];
        $store->save();
        // $store->refresh();

        // masukkan ke assign role visitor
        // $role = 'visitor';
        // $user = User::find($store->id);
        // $user->assignRole($role);

        $responseData = [
            'status_code' => 200,
            'message' => 'Pendaftaran berhasil silahkan login',
        ];
        
        return response()->json($responseData, 200);
    }
    
    public function logout()
    {
        Auth::logout(); 
        session()->flush();
        return redirect('/');
    }
}
