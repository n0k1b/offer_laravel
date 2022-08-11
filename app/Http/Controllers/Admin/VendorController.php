<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;

use App\Model\Vendor;
use App\Model\User;
use App\Model\TrainerSchedule;
use App\Model\Trainer;

use Image;
use File;


class VendorController extends Controller
{
    
  

    public function vendorList(){
        $data = Vendor::where('status','ACTIVE')->Orderby('id','desc')->get();
        // dd($data);
        return view('admin.vendor.list')->with('userData',$data)
                                    ->with('page','vendor_setting');
    }
    public function vendorAdd(){
        return view('admin.vendor.add')->with('page','vendor_setting');
    }
    public function vendorAddSubmit(Request $request){
        // dd($request);
         $request->validate([
            'email' => 'required|unique:tbl_vendor,email',
            'password' => 'required|min:5',
            'icon' => 'required|mimes:jpeg,jpg,png,gif|max:4048',
            'banner' => 'required|mimes:jpeg,jpg,png,gif|max:4048',
            'name' => 'required|string|min:4',
        ]);
        $vendor = new vendor();
        $vendor->email = $request->input('email');
        $vendor->location = $request->input('location');
        $vendor->password = Hash::make($request->input('password'));
        $vendor->name = $request->input('name');
        $vendor->description = $request->input('description');
        $vendor->affiliation_id= str_replace(' ', '', substr($request->input('name'), 0, 4).random_int(1000000, 9999999));
        $filename="";
        if($ibanner=$request->file('banner')){
            // thumbnails
            $filename= time().'banner'.'.'.$ibanner->extension();

            $filePath = public_path('/images');
            $ibanner->move($filePath, $filename);
            $vendor->banner=$filename;
        }

        if($icon=$request->file('icon')){
            // thumbnails
            $filename2= time().'icon'.'.'.$icon->extension();

            $filePath = public_path('/images');
            $icon->move($filePath, $filename2);
            $vendor->icon=$filename2;
        }
        
        $vendor->slogan = $request->input('slogan');
        $vendor->description = $request->input('description');
        $vendor->address = $request->input('address');
        $vendor->mobile = $request->input('mobile');
        $vendor->website = $request->input('website');
        $vendor->facebook = $request->input('facebook');
        $vendor->instagram = $request->input('instagram');
        $vendor->twitter = $request->input('twitter');
        $vendor->save();
        return redirect()->route('vendor.list')->with('message', 'Added successfully!');
    }
    public function vendorContentSubmit(Request $request){
        // dd($request);
        
        $vendor = Vendor::find($request->id);
        if($ibanner=$request->file('banner')){
            // thumbnails
            $filename= time().'banner'.'.'.$ibanner->extension();
            $filePath = public_path('/images');
            $ibanner->move($filePath, $filename);
            $vendor->banner=$filename;
        }
        if($icon=$request->file('icon')){
            // thumbnails
            $filename2= time()."icon".'.'.$icon->extension();
            $filePath = public_path('/images');
            $icon->move($filePath, $filename2);
            $vendor->icon=$filename2;
        }
        $vendor->name = $request->input('name');
        $vendor->description = $request->input('description');
        if($request->input('status')){
            $vendor->status = "ACTIVE";
        }
        else{
            $vendor->status = "IN_ACTIVE";
        }
        $vendor->slogan = $request->input('slogan');
        $vendor->address = $request->input('address');
        $vendor->mobile = $request->input('mobile');
        $vendor->website = $request->input('website');
        $vendor->facebook = $request->input('facebook');
        $vendor->instagram = $request->input('instagram');
        $vendor->twitter = $request->input('twitter');
        $vendor->affiliation_id= str_replace(' ', '', substr($request->input('name'), 0, 4).random_int(1000000, 9999999));

        $vendor->save();
        return redirect()->route('vendor.list')->with('message', 'Added successfully!');
    }
    public function vendorEdit($id){
        $data = Vendor::Where('id',$id)->first();
        return view('admin.vendor.edit')->with('data',$data)
        ->with('page','vendor_setting');

     }

    public function vendorEditSubmit(Request $request){

          if($request->password){

            $validateData = $request->validate([
                'password' => 'required|confirmed|min:6',
            ]);
            $admin = Vendor::Where('id',$request->input('id'))->first();
            $admin->password = Hash::make($request->input('password'));
            $admin->save();
            return redirect()->route('vendor.list')->with('message', 'Edited successfully!');
          }


    }
 

}
