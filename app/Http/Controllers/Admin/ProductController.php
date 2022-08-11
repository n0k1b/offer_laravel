<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Category;
use App\Model\Product;
use App\Model\ImageUpload;
use App\Model\Offer;
use App\Model\Brand;
use Image;
use File;


class ProductController extends Controller
{
    public function index(){
        
        $cat = Category::where('parent_id',0)->where('status',1)->get();
        if(session()->get('user_type') == 'admin'){
            $list = Product::where('status',"ACTIVE")->get();
        }else{
            $list = Product::where('status',"ACTIVE")->where('user_id',session()->get('user')->id)->get();

        }
        // // dd($list);
        return view('admin.pages.product.list')
            ->with('page','product')
            ->with('dataList',$list);
        //                                     ->with('page','coin');

    }

    public function getCategory(Request $request){
        $id = $request->cat_id;
        $data = Category::where('parent_id',$id)->get();
        return response()->json($data);
    }
    
    
    public function productAdd(){
        $cat = Category::where('parent_id',0)->where('status',1)->get();
       // // dd($list);
       $offer = Offer::where('status','ACTIVE')->get();
       $brand = Brand::where('status','ACTIVE')->get();
       return view('admin.pages.product.add')->with('page','product')->with('cat',$cat)->with('offer',$offer)->with('brand',$brand);
    }
    public function productAddSubmit(Request $request){
        $validateData = $request->validate([
            'title_english_name' => 'required',
            'sub_title_english_name' => 'required',
            // 'brand' => 'required',
            'category_id' => 'required',
            // 'composition_bangla_name' => 'required',
        ]);


        if(isset($request->sub_category_name)){
            $cat_id=$request->sub_category_name;
        }else{
            $cat_id=$request->category_id;
        }
        $data = new Product();
        $data->category_id = $cat_id;
        $data->title_english_name = $request->title_english_name;
        $data->sub_title_english_name = $request->sub_title_english_name;

        $userType = session()->get('user_type');
        $userId= session()->get('user')->id;
        $data->user_id=session()->get('user')->id;
        $data->vendor_id = $userType == 'admin' ? $request->input('vendor_id'): $userId;

        $data->description = $request->description;
        $data->brand = $request->brand??'';
        $data->offer = $request->offer;
        $data->price = $request->price;
        $data->product_sku= random_int(1000000, 9999999);

        if($request->input('status')){
            $data->status = "ACTIVE";
        }
        else{
            $data->status = "IN_ACTIVE";;
        }
        if($request->hasFile('jpg_name')){

        // $getimageNameJpg = $request->category_id.'_jpg_'.time().'.'.$request->jpg_name->getClientOriginalExtension();
        // // dd($getimageNameJpg);
        // $request->jpg_name->move(public_path('images/'), $getimageNameJpg);
        // $data->main_image = $getimageNameJpg;

        // thumbnails
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();

            $filePath = public_path('/thumbnails');

            $img = Image::make($image->path());
            $img->resize(300, 300, function ($const) {
            $const->aspectRatio();
            })->save($filePath.'/'.$input['imagename']);

            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->thumb_image = $input['imagename'];
            $data->main_image = $input['imagename'];
        }

        $data->save();
        return redirect()->route('product.list')->with('page','product')->with('message',
        'Added successfully!');

    }
    public function productEdit($id){
        $cat = Category::where('parent_id',0)->where('status',1)->get();
        $data = Product::find($id);
        // // dd($list);
        $cat = Category::where('parent_id',0)->where('status',1)->get();
        // // dd($list);
        $offer = Offer::where('status','ACTIVE')->get();
        $brand = Brand::where('status','ACTIVE')->get();
        return view('admin.pages.product.edit')
            ->with('data',$data)
            ->with('page','product')
            ->with('cat',$cat)
            ->with('offer',$offer)
            ->with('brand',$brand);


    }
    public function product_image(Request $request){
        $data = Product::find($request->id);
        $images = ImageUpload::where('product_id',$request->id)->get();
        return view('admin.pages.product.image')->with('page','product')
            ->with('productImage',$images)
            ->with('data',$data);
    }
    public function product_image_submit(Request $request){
          $request->validate([
          'jpg_name' => 'required',
          'jpg_name.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
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
                 $data->product_id = $request->id;
                 $data->save();
            }
        }
        return redirect()->back()->with('page','product')->with('message',
          'Operation successfully!');


    }
    public function product_image_delete(Request $request){

         if($img=$request->image_id){
         foreach($img as $val){
            $data = ImageUpload::find($val);

             $imagePath = public_path('/images/'.$data->main_image);
             $imagePath2 = public_path('/thumbnails/'.$data->main_image);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                 if(File::exists($imagePath2)){
                     unlink($imagePath2);
                 }
            $data->delete();
         }
        }

        return redirect()->back()->with('page','product')->with('message',
        'Operation successfully!');
    }
    public function productEditSubmit(Request $request){
       
        $validateData = $request->validate([
            'title_english_name' => 'required',
            'sub_title_english_name' => 'required',
            // 'brand' => 'required',
            'category_id' => 'required',
            // 'composition_bangla_name' => 'required',
        ]);

         
        if(isset($request->sub_category_name)){
            $cat_id=$request->sub_category_name;
        }else{
            $cat_id=$request->category_id;
        }
        $data =  Product::find($request->id);
        $data->category_id = $cat_id;
        $data->title_english_name = $request->title_english_name;
        $data->sub_title_english_name = $request->sub_title_english_name;

        $data->description = $request->description;
        $data->brand = $request->brand??'';
        $data->offer = $request->offer;
        $data->price = $request->price;

        $userType = session()->get('user_type');
        $userId= session()->get('user')->id;
        $data->user_id=session()->get('user')->id;
        $data->vendor_id = $userType == 'admin' ? $request->input('vendor_id'): $userId;

        if($request->input('status')){
            $data->status = "ACTIVE";
        }
        else{
            $data->status = "IN_ACTIVE";;
        }
        if($request->hasFile('jpg_name')){

            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();

            $filePath = public_path('/thumbnails');

            $img = Image::make($image->path());
            $img->resize(300, 300, function ($const) {
            $const->aspectRatio();
            })->save($filePath.'/'.$input['imagename']);

            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->thumb_image = $input['imagename'];
            $data->main_image = $input['imagename'];
        }
        

        $data->save();
        return redirect()->route('product.list')->with('page','product')->with('message',
        'Added successfully!');

    }
    
}
