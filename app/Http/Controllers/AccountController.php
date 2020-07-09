<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ViewErrorBag;

class AccountController extends Controller
{
    public function Signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'last_name' => 'required|min:2|max:255',
            'name' => 'required|max:255',
            'account' => 'required|min:6|max:255',
            'password' => 'required|min:6|max:15', 
        ], [
            'last_name.required' => 'Họ không được để rỗng',
            'last_name.min' => 'Họ  phải trên 2 kí tự',
            'last_name.max' => 'Họ không phải nhỏ hơn 255 kí tự',
            'name.required' => 'Tên không được để rỗng',
            'name.max' => 'Tên không phải nhỏ hơn 255 kí tự',
            'account.required' => 'Tài khoản không được để rỗng',
            'account.min' => 'Account phải trên 6 kí tự',
            'account.max' => 'Account phải nhỏ hơn 255 kí tự',
            'password.required' => 'Password không được để rỗng',
            'password.min' => 'Password phải trên 6 kí tự',
            'password.max' => 'Password phải nhỏ hơn 15 kí tự',
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }
        if (User::where('account', $request->input('account'))->first()) {
            $validator->getMessageBag()->add('account', 'Tài khoản đã tồn tại');
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
            }else{
            $product = new User();
            $product->account = $request->input('account');
            $product->password = $request->input('password');
            $product->last_name = $request->input('last_name');
            $product->name = $request->input('name');
            $product->save();
            return response()->json([
                'error' => false,
                'message' => 'Bạn đã tạo tài khoản thành công'
            ], 200);
            }
    }
    public function Signin(Request $request)
    {
        $thongTin = User::where('account', $request->input('account'))
        ->where('password', $request->input('password'))
        ->first();
        if(isset($thongTin)) {
            Session::put('name', $thongTin->name);
            Session::put('last_name', $thongTin->last_name);
            Session::put('account', $thongTin->account);
            Session::put('id', $thongTin->id);
            Session::put('phone', $thongTin->phone);
            Session::put('email', $thongTin->email);
            Session::put('permissions', $thongTin->permissions);
        }else{
            return response()->json([
                'error' => true,
                'message' => 'Tài khoản hoặc mật khẩu không đúng'
            ], 200);
        }
    }
    public function Logout()
    {
        session::flush();
        return redirect('loginpage');
    }
    public function getList()
    {
    	$account = User::all();
    	return view('Admin.Account.list_account',['account'=>$account]);
    }
    public function postDelete(Request $request)
	{
		$account = User::find($request->id)->delete();
		return response()->json();
    }
    public function postEdit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'last_name' => 'required|min:2|max:255',
            'name' => 'required|min:2|max:255',
            'account' => 'required|min:6|max:255',
            'password' => 'required|min:6|max:15', 
            // 'email' => 'email',
            'phone' => 'numeric|min:9'
        ], [
            'last_name.required' => 'Họ không được để rỗng',
            'last_name.min' => 'Họ  phải trên 2 kí tự',
            'last_name.max' => 'Họ không phải nhỏ hơn 255 kí tự',
            'name.required' => 'Tên không được để rỗng',
            'name.min' => 'Tên phải trên 2 kí tự',
            'name.max' => 'Tên không phải nhỏ hơn 255 kí tự',
            'account.required' => 'Tài khoản không được để rỗng',
            'account.min' => 'Account phải trên 6 kí tự',
            'account.max' => 'Account phải nhỏ hơn 255 kí tự',
            'password.required' => 'Password không được để rỗng',
            'password.min' => 'Password phải trên 6 kí tự',
            'password.max' => 'Password phải nhỏ hơn 15 kí tự',
            // 'email.email'=>'Sai định dạng email',
            'phone.numberic' => 'Số điện thoại không hợp lệ',
            'phone.min'=>'Số điện thoại không hợp lệ'
        ]);
        if ($validator->fails()){
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }
        $checkacc = DB::table('User')->where('account',$request->input('account'))
        ->where('id','!=',$request->input('id'))
        ->count();
        if ($checkacc>0) {
            $validator->getMessageBag()->add('account', 'Tài khoản đã tồn tại');
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }
        $check = DB::table('User')->where('email',$request->input('email'))
        ->where('id','!=',$request->input('id'))
        ->count();
        if ($check>0) {
            $validator->getMessageBag()->add('email', 'Email đã tồn tại');
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }
        else{
                $acc = User::find($request->id);
                $acc->account = $request->account;
                $acc->password = $request->password;
                $acc->last_name = $request->last_name;
                $acc->name = $request->name;
                $acc->email = $request->email;
                $acc->phone = $request->phone;
                $acc->save();
                return response()->json($acc);
            }
    }
    public function postCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'last_name' => 'required|min:2|max:255',
            'name' => 'required|min:2|max:255',
            'account' => 'required|min:6|max:255',
            'password' => 'required|min:6|max:15', 
        ], [
            'last_name.required' => 'Họ không được để rỗng',
            'last_name.min' => 'Họ  phải trên 2 kí tự',
            'last_name.max' => 'Họ không phải nhỏ hơn 255 kí tự',
            'name.required' => 'Tên không được để rỗng',
            'name.min' => 'Tên phải trên 2 kí tự',
            'name.max' => 'Tên không phải nhỏ hơn 255 kí tự',
            'account.required' => 'Tài khoản không được để rỗng',
            'account.min' => 'Account phải trên 6 kí tự',
            'account.max' => 'Account phải nhỏ hơn 255 kí tự',
            'password.required' => 'Password không được để rỗng',
            'password.min' => 'Password phải trên 6 kí tự',
            'password.max' => 'Password phải nhỏ hơn 15 kí tự',
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }
        if (User::where('account', $request->input('account'))->first()) {
            $validator->getMessageBag()->add('account', 'Tài khoản đã tồn tại');
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
            }else{
            $acc = new User();
            $acc->account = $request->account;
            $acc->password = $request->password;
            $acc->last_name = $request->last_name;
            $acc->name = $request->name;
            $acc->email = $request->email;
            $acc->phone = $request->phone;
            $acc->save();
            return response()->json($acc);
            }
    }
}