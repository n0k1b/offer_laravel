<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;

use App\Model\Brand;
use App\Model\User;
use App\Model\TrainerSchedule;
use App\Model\Trainer;

use Image;
use File;


class BrandController extends Controller
{
    
  

    public function brandList(){
        $data = Brand::where('status','ACTIVE')->Orderby('id','desc')->get();
        // dd($data);
        return view('admin.brand.list')->with('userData',$data)
                                    ->with('page','brand_setting');
    }
    public function brandAdd(){
        return view('admin.brand.add')->with('page','brand_setting');
    }
    public function brandAddSubmit(Request $request){
        // dd($request);
         $request->validate([
            // 'email' => 'required|unique:tbl_brand,email',
            // 'password' => 'required|min:5',
            'icon' => 'required|mimes:jpeg,jpg,png,gif|max:4048',
            'banner' => 'required|mimes:jpeg,jpg,png,gif|max:4048',
            'name' => 'required',
        ]);
        $brand = new Brand();
        $brand->location = $request->input('location');
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        
        $filename="";

        if($ibanner=$request->file('banner')){
            // thumbnails
            $filename= time().'banner'.'.'.$ibanner->extension();

            $filePath = public_path('/images');
            $ibanner->move($filePath, $filename);
            $brand->banner=$filename;
        }

        if($icon=$request->file('icon')){
            // thumbnails
            $filename2= time().'icon'.'.'.$icon->extension();

            $filePath = public_path('/images');
            $icon->move($filePath, $filename2);
            $brand->icon=$filename2;
        }
        
        $brand->slogan = $request->input('slogan');
        $brand->description = $request->input('description');
        $brand->address = $request->input('address');
        $brand->mobile = $request->input('mobile');
        $brand->website = $request->input('website');
        $brand->facebook = $request->input('facebook');
        $brand->instagram = $request->input('instagram');
        $brand->twitter = $request->input('twitter');

        $brand->save();
        return redirect()->route('brand.list')->with('message', 'Added successfully!');
    }
    public function brandContentSubmit(Request $request){
        // dd($request);
        
        $brand = Brand::find($request->id);
        if($ibanner=$request->file('banner')){
            // thumbnails
            $filename= time().'banner'.'.'.$ibanner->extension();
            $filePath = public_path('/images');
            $ibanner->move($filePath, $filename);
            $brand->banner=$filename;
        }
        if($icon=$request->file('icon')){
            // thumbnails
            $filename2= time()."icon".'.'.$icon->extension();
            $filePath = public_path('/images');
            $icon->move($filePath, $filename2);
            $brand->icon=$filename2;
        }
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        if($request->input('status')){
            $brand->status = "ACTIVE";
        }
        else{
            $brand->status = "IN_ACTIVE";
        }
        $brand->slogan = $request->input('slogan');
        $brand->address = $request->input('address');
        $brand->mobile = $request->input('mobile');
        $brand->website = $request->input('website');
        $brand->facebook = $request->input('facebook');
        $brand->instagram = $request->input('instagram');
        $brand->twitter = $request->input('twitter');
        $brand->save();
        return redirect()->route('brand.list')->with('message', 'Added successfully!');
    }
    public function brandEdit($id){
        $data = Brand::Where('id',$id)->first();
        return view('admin.brand.edit')->with('data',$data)
        ->with('page','brand_setting');
 
     }

    public function brandEditSubmit(Request $request){

          if($request->password){

            $validateData = $request->validate([
                'password' => 'required|confirmed|min:6',
            ]);
            $admin = Brand::Where('id',$request->input('id'))->first();
            $admin->password = Hash::make($request->input('password'));
            $admin->save();
            return redirect()->route('brand.list')->with('message', 'Edited successfully!');
          }


    }
 

}
