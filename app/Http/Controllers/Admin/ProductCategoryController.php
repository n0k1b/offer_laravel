<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Category;

use Image;
use File;


class ProductCategoryController extends Controller
{
    public function index(){
        
        $cat = Category::where('parent_id',0)->where('status',1)->get();
        $subcat = Category::where('parent_id','!=',0)->where('status',1)->get();
        $list = Category::where('status',1)->get();
        // // dd($list);
        return view('admin.pages.product_category.list')
            ->with('page','productcategory')
            ->with('cat', $cat)
            ->with('subcat', $subcat)
            ->with('dataList',$list);
        //                                     ->with('page','coin');

    }

    
    
    public function productcategoryAdd(){
        $cat = Category::where('parent_id',0)->where('status',1)->get();
       // // dd($list);
       return view('admin.pages.product_category.add')->with('page','productcategory')->with('cat',$cat);

    }
    public function productcategoryAddSubmit(Request $request){
        $validateData = $request->validate([
            // 'bangla_name' => 'required',
            'parent_id' => 'required',
            'jpg_name' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);


        $data = new Category();
        $data->bangla_name = $request->bangla_name ?? '';
        $data->english_name = $request->english_name;
        $data->parent_id = $request->parent_id;

          if($request->hasFile('jpg_name')){
          $image = $request->file('jpg_name');
          $input['imagename'] = time().'.'.$image->extension();

          $filePath = public_path('/thumbnails');

          $img = Image::make($image->path());
          $img->resize(84, 84, function ($const) {
        //   $const->aspectRatio();
          })->save($filePath.'/'.$input['imagename']);

          $filePath = public_path('/images');
          $image->move($filePath, $input['imagename']);

          $data->circle_image = $input['imagename'];
          $data->image = $input['imagename'];

                        

          }
        if($request->input('status')){
            $data->status = 1;
        }
        else{
            $data->status = 0;
        }

        $data->save();
        return redirect()->route('productcategory.list')->with('page','productcategory')->with('message',
        'Added successfully!');


    }
    public function productcategoryEdit($id){
           $cat = Category::where('status',1)->where('id','!=',$id)->get();
           $data = Category::find($id);
           // // dd($list);
           return view('admin.pages.product_category.edit')
                    ->with('cat',$cat)->with('page','productcategory')
                    ->with('data',$data);


    }
    public function productcategoryEditSubmit(Request $request){
          $validateData = $request->validate([
          // 'bangla_name' => 'required',
          'parent_id' => 'required',
          'jpg_name' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
          ]);

        $data = Category::find($request->id);
        $data->bangla_name = $request->bangla_name ?? '';
        $data->english_name = $request->english_name;
        $data->parent_id = $request->parent_id;

           if($request->hasFile('jpg_name')){
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();

            $filePath = public_path('/thumbnails');

            $img = Image::make($image->path());
            $img->resize(84, 84, function ($const) {
            // $const->aspectRatio();
            })->save($filePath.'/'.$input['imagename']);

            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);

            $data->circle_image = $input['imagename'];
            $data->image = $input['imagename'];


           }
        if($request->input('status')){
          $data->status = 1;
        }
        else{
        $data->status = 0;
        }

        $data->save();

        return redirect()->route('productcategory.list')->with('page','productcategory')->with('message',
        'Edited successfully!');

    }
    
}
