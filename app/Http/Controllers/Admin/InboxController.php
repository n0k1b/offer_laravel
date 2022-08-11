<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Category;
use App\Model\Product;
use App\Model\ImageUpload;
use App\Model\Order;
use App\Model\Vendor;
use Image;
use File;


class InboxController extends Controller
{
    public function index(Request $request){
        
        // // dd($list);
        return view('admin.pages.inbox.list')
            ->with('page','inbox');
        //                                     ->with('page','coin');

    }

    public function post(Request $request){

        $validator = \Validator::make($request->all(), [
            'code'=>'required',
            'affiliation_id'=>'required',
            'item_sku'=>'required',
            'item_name'=>'required',
            'offer_type'=>'required',
            'offer_amount'=>'required',
            'item_price'=>'required',
            'mobile_no'=>'numeric|digits_between:9,13',
            'contact_address'=>'required|max:400',
            'user_id'=>'required',
            'message' => 'required|max:400'
         ]);

        if ($validator->fails()) {
            return response()->json(array(
                'response'=> json_encode($validator->messages()),
                'success'=>false
            ));
        } else {
            // check affiliation true or not //
            $vendor=Vendor::find($request->affiliation_id);
            if($vendor){
                return response()->json(array(
                    'response'=> "Affiliation not found",
                    'success'=>false
                ));
            }
            $data = new Order();
            $data->code = $request->code;
            $data->affiliation_id = $request->affiliation_id;
            $data->item_sku = $request->item_sku;
            $data->item_name = $request->item_name;
            $data->name = $request->offer_name;
            $data->offer_type = $request->offer_type;
            $data->item_price = $request->item_price;
            $data->after_price = $request->after_price;
            $data->offer_amount = $request->offer_amount;
            $data->message = $request->message;
            
            $data->mobile_no = $request->mobile_no;
            $data->user_id = $request->user_id;
            $data->product_id = $request->product_id;
            $data->request_url = $request->request_url;
            $data->contact_address = $request->contact_address;
            $data->save();
            return response()->json(array(
                'response'=> "Request sent successfully",
                'success'=>true
            ));
        }
    }
    
    public function updateStatus(Request $request){
        
        $validator = \Validator::make($request->all(), [
            'order_id'=>'required',
            'order_status'=>'required',
            'affiliation_id'=>'required'
         ]);
            $vendor=Vendor::where('affiliation_id',$request->affiliation_id)->first();
            if(!$vendor){
                return redirect()->back()->with('message',
                'Affilition id not found!');
            }
            
            $data = Order::where('id',$request->order_id)->where('affiliation_id',$request->affiliation_id)->first()
            ->update(['order_status'=>$request->order_status,'comment'=>$request->message]);
            if($data){
                return redirect()->back()->with('message',
                'Status Updated Successfully!');
            }else{
                return redirect()->back()->with('message',
                'Something went wrong!');
            }
    }


    public function getCategory(Request $request){
        $id = $request->cat_id;
        $data = Category::where('parent_id',$id)->get();
        return response()->json($data);
    }
    
    
    public function productAdd(){
        $cat = Category::where('parent_id',0)->where('status',1)->get();
       // // dd($list);
       return view('admin.pages.product.add')->with('page','product')->with('cat',$cat);

    }
    public function productAddSubmit(Request $request){
        $validateData = $request->validate([
            'title_english_name' => 'required',
            'sub_title_english_name' => 'required',
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

        $data->description = $request->description;
        $data->sku = $request->sku;
       


        if($request->input('status')){
            $data->status = 1;
        }
        else{
            $data->status = 0;
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
           $cateGoryData = Category::where('id',$data->category_id)->first();
           // // dd($list);
           return view('admin.pages.product.edit')
                    ->with('cat',$cat)->with('page','product')
                    ->with('cat_data',$cateGoryData)
                    ->with('data',$data);


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
            'category_id' => 'required',
            'imgFile' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
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
        
        $data->sku = $request->sku;
        $data->description = $request->description;

        if($request->input('status')){
        $data->status = 1;
        }
        else{
        $data->status = 0;
        }

        if($request->hasFile('jpg_name')){

            //  $getimageNameJpg = $request->category_id.'_jpg_'.time().'.'.$request->jpg_name->getClientOriginalExtension();
            //     // dd($getimageNameJpg);
            // $request->jpg_name->move(public_path('images/'), $getimageNameJpg);
            // $data->main_image = $getimageNameJpg;
            
            // thumbnails

              $imagePath = public_path('/images/'.$data->main_image);
              $imagePath2 = public_path('/thumbnails/'.$data->thumb_image);
              if(File::exists($imagePath)){
              unlink($imagePath);
              }
              if(File::exists($imagePath2)){
              unlink($imagePath2);
              }

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
