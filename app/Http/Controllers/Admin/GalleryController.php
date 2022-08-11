<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\ImageUpload;

use Image;
use File;


class GalleryController extends Controller
{
    public function index(){
        
        $list = ImageUpload::where('status',1)->get();
        // // dd($list);
        return view('admin.pages.gallery.list')
            ->with('page','gallery')
            ->with('dataList',$list);
        //                                     ->with('page','coin');

    }

 
    
    public function galleryAdd(){
       // // dd($list);
       return view('admin.pages.gallery.add')->with('page','gallery');

    }
    public function galleryAddSubmit(Request $request){
         $request->validate([
          'jpg_name' => 'required',
          'jpg_name.*' => 'mimes:jpeg,jpg,png,gif|max:4048'
          ]);

        if($files=$request->file('jpg_name')){
            foreach($files as $key=>$image){
                 
                $data = new ImageUpload();
                
                 // thumbnails
                 $filename= time().$key.'.'.$image->extension();
                 $filePath = public_path('/thumbnails');

                 $img = Image::make($image->path());
                 $img->resize(300, 300, function ($const) {
                 $const->aspectRatio();
                 })->save($filePath.'/'.$filename);

                 $filePath = public_path('/images');
                 $image->move($filePath, $filename);

                 $data->thumb_image = $filename;
                 $data->main_image = $filename;
                 $data->save();
            }
        }
        return redirect()->back()->with('page','product')->with('message',
          'Operation successfully!');


    }
    public function galleryEdit($id){
           $data = ImageUpload::find($id);
           // // dd($list);
           return view('admin.pages.gallery.edit')
                    ->with('page','gallery')
                    ->with('data',$data);


    }
    public function galleryEditSubmit(Request $request){
         $validateData = $request->validate([
         // 'title' => 'required',
         // 'text' => 'required',
         'jpg_name' => 'image|mimes:jpg,jpeg,png,svg,gif|max:4048',
         // 'composition_bangla_name' => 'required',
         ]);
        $data = ImageUpload::find($request->id);
        
        if($request->hasFile('jpg_name')){
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
        }

        $data->save();
        return redirect()->route('gallery.list')->with('page','gallery')->with('message',
        'Updated successfully!');

    }
    public function delete(Request $request){
        
            $data = ImageUpload::find($request->id);

             $imagePath = public_path('/images/'.$data->main_image);
             $imagePath2 = public_path('/thumbnails/'.$data->main_image);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                 if(File::exists($imagePath2)){
                     unlink($imagePath2);
                 }
            $data->delete();
        

        return redirect()->back()->with('page','product')->with('message',
        'Operation successfully!');
    }
    
}
