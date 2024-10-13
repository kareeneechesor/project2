<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // แสดงฟอร์มการลงทะเบียน
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // ฟังก์ชันการลงทะเบียนผู้ใช้ใหม่
    public function register(Request $request)
    {
        // ตรวจสอบข้อมูลที่ได้รับจากฟอร์ม
        $this->validator($request->all())->validate();

        // สร้างผู้ใช้ใหม่
        $user = $this->create($request->all());

        // เข้าสู่ระบบด้วยบัญชีผู้ใช้ที่สร้างใหม่
        Auth::login($user);

        // เปลี่ยนเส้นทางไปที่หน้า login
        return redirect()->intended('login');
    }

    // ฟังก์ชันตรวจสอบข้อมูลที่กรอกในฟอร์ม
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // ฟังก์ชันสร้างผู้ใช้ใหม่ในฐานข้อมูล
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'name' => $data['first_name'] . ' ' . $data['last_name'], // รวมชื่อและนามสกุลเข้าด้วยกัน
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
