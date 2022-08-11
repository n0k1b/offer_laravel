<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Banner;
use App\Model\Category;

use Image;


class BannerimageController extends Controller
{
    public function index(){
        
        $list = Banner::where('status',1)->get();
        // // dd($list);
        return view('admin.pages.bannerimage.list')
            ->with('page','bannerimage')
            ->with('dataList',$list);
        //                                     ->with('page','coin');

    }

 
    
    public function bannerimageAdd(){
       // // dd($list);
         $cat = Category::where('status',1)->get();
       return view('admin.pages.bannerimage.add')->with('page','bannerimage')->with('cat',$cat);

    }
    public function bannerimageAddSubmit(Request $request){
        $validateData = $request->validate([
            // 'jpg_name' => 'required|image|mimes:jpg,jpeg,png,svg,gif,webp|max:2048',
             'main_category' => 'required'
            
            // 'composition_bangla_name' => 'required',
        ]);

         
        
        $data = new Banner();
        $data->name= $request->name ?? '';
        $data->description= $request->description ?? '';
        // $data->main_category= $request->main_category ?? '';
        if(!empty($request->category)){
            $data->category = json_encode($request->category);
        }
          if($request->input('status')){
          $data->status = 1;
          }
          else{
          $data->status = 0;
          }
         if($request->hasFile('jpg_name')){

      
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
         }

        $data->save();
        return redirect()->route('bannerimage.list')->with('page','bannerimage')->with('message',
        'Added successfully!');


    }
    public function bannerimageEdit($id){
           $data = Banner::find($id);
            $cat = Category::where('status',1)->get();
           // // dd($list);
           return view('admin.pages.bannerimage.edit')
                    ->with('page','bannerimage')->with('cat',$cat)
                    ->with('data',$data);


    }
    public function bannerimageEditSubmit(Request $request){
         $validateData = $request->validate([
         'jpg_name' => 'image|mimes:jpg,jpeg,png,svg,gif,webp|max:2048',
            //  'main_category' => 'required'
         // 'composition_bangla_name' => 'required',
         ]);
        $data = Banner::find($request->id);
         $data->name= $request->name ?? '';
        $data->description= $request->description ?? '';
        // $data->main_category= $request->main_category ?? '';
          if(!empty($request->category)){
            $data->category = json_encode($request->category);
          }

        if($request->hasFile('jpg_name')){
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
        }
        if($request->input('status')){
        $data->status = 1;
        }
        else{
        $data->status = 0;
        }
        $data->save();
        return redirect()->route('bannerimage.list')->with('page','bannerimage')->with('message',
        'Updated successfully!');

    }
    
}
