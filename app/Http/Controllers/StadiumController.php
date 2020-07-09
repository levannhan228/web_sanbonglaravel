<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Stadium;
use App\Deal;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function showList()
    {
        $stadium = Stadium::paginate(8);
        $active = 0;
    	return view('Component.Stadium.pagestadium',['stadium'=>$stadium,'active'=>$active]);
    }
    public function showListnhantao()
    {
        $stadium = Stadium::where('surface','sân cỏ nhân tạo')->paginate(8);
        $active = 1;
    	return view('Component.Stadium.pagestadium',['stadium'=>$stadium,'active'=>$active]);
    }
    public function showListtunhien()
    {
        $stadium = Stadium::where('surface','sân cỏ tự nhiên')->paginate(8);
        $active = 2;
    	return view('Component.Stadium.pagestadium',['stadium'=>$stadium,'active'=>$active]);
    }
    public function showListcat()
    {
        $stadium = Stadium::where('surface','sân cát')->paginate(8);
        $active = 3;
    	return view('Component.Stadium.pagestadium',['stadium'=>$stadium,'active'=>$active]);
    }
    public function getList()
    {
    	$stadium = Stadium::all();
    	return view('Admin.Stadium.list_stadium',['stadium'=>$stadium]);
    }
    public function posttCreate_stadium(Request $request)
    {
        $product = new Stadium();
        $product->manager_name = $request->manager_name;
        $product->name = $request->name;
        $product->short_note = $request->short_note;
        $product->surface = $request->surface;
        $product->province_city = $request->province_city;
        $product->location = $request->location;
        $product->phone = $request->phone;
        $product->email = $request->email;
        $product->facebook = $request->facebook;
        if($request->file('img')){
            // $this->validate($request,[
            //     'imageteam' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move('./assets/images',$filename);
            $product->img = $filename;
        };
        $product->price = $request->price;
        $product->about = $request->input('about');
        $product->user_id = Session::get('id');
        $product->save();
        return redirect('admin/stadium/create');
    }

    public function getCreate_stadium(){
        return view('Admin.Stadium.create_stadium');
    }
    public function postDelete_stadium(Request $request)
	{
		$account = Stadium::find($request->id)->delete();
		return response()->json();
    }
    
    public function getEdit_stadium(Request $request,$id){
        $stadium = Stadium::find($request->id);
		return view('Admin.Stadium.edit_stadium',['stadium'=>$stadium]);
	}
    public function postEdit_stadium(Request $request)
    {
        $stadium = Stadium::find($request->id);
        $stadium->manager_name = $request->manager_name;
        $stadium->name = $request->name;
        $stadium->short_note = $request->short_note;
        $stadium->surface = $request->surface;
        $stadium->province_city = $request->province_city;
        $stadium->location = $request->location;
        if($request->file('img')){
            // $this->validate($request,[
            //     'imageteam' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move('./assets/images',$filename);
            $stadium->img = $filename;
        };
        $stadium->price = $request->price;
        $stadium->phone = $request->phone;
        $stadium->email = $request->email;
        $stadium->about = $request->about;
        $stadium->facebook = $request->facebook;
        $stadium->save();
        return redirect('admin/stadium/list');
    }  
    public function getDetail(Request $request,$id)
    {
        $stadium = Stadium::find($id);
        $stadiumrd = Stadium::all()->random(4);
		return view('Component.Stadium.detail',['stadium'=>$stadium,'stadiumrd'=>$stadiumrd]);
    }
    public function showHot(Request $request)
    {
        $stadium = Stadium::all()->random(8);
		return view('Component.HomePage.homepage',['stadium'=>$stadium]);
    }
    public function getIntroduce(Request $request){
        $stadium = Stadium::all();
    	return view('Admin.Stadium.detail',['stadium'=>$stadium]);
    }
    public function getBookyard(Request $request,$id)
    {
        $stadium = Stadium::find($id);
      
        return view('Component.Stadium.bookyard',['stadium'=>$stadium]);
    }
    public function postBookyard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'last_name' => 'required|min:2|max:255',
            'name' => 'required|max:255',
            'province_city' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric'

        ], [
            'last_name.required' => 'Họ không được để rỗng',
            'last_name.min' => 'Họ  phải trên 2 kí tự',
            'last_name.max' => 'Họ không phải nhỏ hơn 255 kí tự',
            'name.required' => 'Tên không được để rỗng',
            'name.max' => 'Tên không phải nhỏ hơn 255 kí tự',
            'province_city.required' => 'Tỉnh /Thành phố không được để rỗng',
            'address.required' => 'Địa chỉ không được để trống',
            'email.required' => 'Email không được để rỗng',
            'email.email'=>'Email nhập không đúng',
            'phone.required' => 'Điện thoại không được để rỗng',
            'phone.numeric' => 'Vui lòng nhập đúng số điện thoại'
        ]);
        if ($validator->fails()){
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }else{
            $product = new Deal();
            $product->last_name = $request->last_name;
            $product->name = $request->name;
            $product->province_city = $request->province_city;
            $product->address = $request->address;
            $product->phone = $request->phone;
            $product->email = $request->email;
            $product->id_stadium = $request->id_stadium;
            $product->price = $request->price;
            $product->save();
            return response()->json([
                'error' => false,
                'message' => 'Bạn đã đặt sân thành công'
            ], 200);
            }
    }
}