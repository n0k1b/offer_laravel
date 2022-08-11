<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Banner;
use App\Model\Settings;
use App\Model\Aboutus;
use App\Model\Brand;
use App\Model\Vendor;
use App\Model\Product;
use App\Model\Offer;

use App\Model\Messages;
use App\Model\ImageUpload;
use App\Model\User;
use Jenssegers\Agent\Agent as Agent;
use Hash;
use Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function __construct(Request $request)
    {   
        
    }
    public function index(Request $request){

        if(session()->get('user_type') == 'admin' || session()->get('user_type') == 'vendor'){
            return redirect()->route('admin.dashboard')->with('message','Please logout from admin panel');
        }

        $device = "website";
        $Agent = new Agent();
        if ($Agent->isMobile()) {
        // you're a mobile device
            $device = "mobile";
        }
        $category=Category::where('status',1)->where('parent_id',0)->get();
        $banner=Banner::where('status',1)->get();
        $brand=Vendor::where('status',"ACTIVE")->get();
        // $news=News::where('status',1)->orderBy('id','desc')->get()->take(4);
        // $settings=Settings::where('status',1)->first();
        // $about=Aboutus::where('status',1)->first();
        // $product=Product::where('status',1)->get()->take(12);
        // // dd($settings);
        // if(!$request->session()->has('lang')){
        //     $request->session()->put('lang', 'eng');
        // }
        return view('new_website.pages.home_page')
                ->with('banner',$banner)
                ->with('category',$category)
                ->with('brand',$brand)
                // ->with('news',$news)
                // ->with('settings',$settings)
                // ->with('about',$about)
                // ->with('product',$product)
                // ->with('device',$device)
                ;
    }
    public function dashboard(Request $request){
        $device = "website";
        $Agent = new Agent();
        if ($Agent->isMobile()) {
        // you're a mobile device
            $device = "mobile";
        }
        $category=Category::where('status',1)->where('parent_id',0)->get();
        $banner=Banner::where('status',1)->get();
        $brand=Brand::where('status',"ACTIVE")->get();
        // $news=News::where('status',1)->orderBy('id','desc')->get()->take(4);
        // $settings=Settings::where('status',1)->first();
        // $about=Aboutus::where('status',1)->first();
        // $product=Product::where('status',1)->get()->take(12);
        // // dd($settings);
        // if(!$request->session()->has('lang')){
        //     $request->session()->put('lang', 'eng');
        // }
        return view('new_website.pages.dashboard')
                ->with('banner',$banner)
                ->with('category',$category)
                ->with('brand',$brand)
                // ->with('news',$news)
                // ->with('settings',$settings)
                // ->with('about',$about)
                // ->with('product',$product)
                // ->with('device',$device)
                ;
    }
    
    public function checkout(Request $request){
        if(session()->get('user_type') == 'admin' || session()->get('user_type') == 'vendor'){
            return redirect()->route('admin.dashboard')->with('message','Please logout from admin panel');
        }
        $category=Category::where('status',1)->where('parent_id',0)->get();
        $banner=Banner::where('status',1)->get();
        $brand=Brand::where('status',"ACTIVE")->get();
        return view('new_website.pages.checkout')->with('banner',$banner)
        ->with('category',$category)
        ->with('brand',$brand);
    }
    public function details(Request $request){
        if(session()->get('user_type') == 'admin' || session()->get('user_type') == 'vendor'){
            return redirect()->route('admin.dashboard')->with('message','Please logout from admin panel');
        }

        $category=Category::where('status',1)->where('parent_id',0)->get();
        $banner=Banner::where('status',1)->get();
        $brand=Brand::where('status',"ACTIVE")->get();
        return view('new_website.pages.vendor')->with('banner',$banner)
        ->with('category',$category)
        ->with('brand',$brand);
    }
    public function products_details(Request $request){

        if(session()->get('user_type') == 'admin' || session()->get('user_type') == 'vendor'){
            return redirect()->route('admin.dashboard')->with('message','Please logout from admin panel');
        }
        $category=Category::where('status',1)->where('parent_id',0)->get();
        $banner=Banner::where('status',1)->get();
        $brand=Brand::where('status',"ACTIVE")->get();
        return view('new_website.pages.product_details')->with('banner',$banner)
        ->with('category',$category)
        ->with('brand',$brand);
    }
    
    public function setLang(Request $request){
        if ($request->lang) {
            $request->session()->put('lang', $request->lang);
        }
        return redirect()->back();    
    }
    public function allnews(){
          return view('public.pages.news');
    }
    public function allproducts(){
                  return view('public.pages.allproducts');

    }
    public function subcategorylist(Request $request){

        $cat = Category::where('id',$request->id)->first();
        $product = Product::where('category_id',$cat->id)->get();
        return view('public.pages.new_s_page')->with('cat',$cat)->with('product',$product);
    }

    public function comming_soon(){
        return view('public.pages.coming_soon');
    }
    public function productList(Request $request){

        // $product = Product::where('category_id',$request->cat_id)->get();
        // dd($product);
        $cat=parentCategory($request->id);
        $data = Category::where('parent_id',$request->id)->where('status',1)->get();
        return view('public.pages.allproducts')->with('data',$data)->with('cat',$cat);

    }
    
    
    public function career(){
        return view('public.pages.coming_soon');
    }
    public function contact(){
        return view('public.pages.contact');

    }
    
    public function productDetails(Request $request){
       
        $productDetails=Product::find($request->id);
        $parent_cat=parentCategory($productDetails->category_id);
        return view('public.pages.product_details')
        ->with('cat',$parent_cat)
        ->with('productDetails',$productDetails);
    }

    public function campaign(){

        $images = ImageUpload::paginate(15);
         return view('public.pages.image_gallery')
         ->with('images',$images);
    }
    public function aboutus(){
         $category=Category::where('status',1)->where('parent_id',0)->get();
         $banner=Banner::where('status',1)->get();
         $news=News::where('status',1)->orderBy('id','desc')->get()->take(4);
         $settings=Settings::where('status',1)->first();
         $about=Aboutus::where('status',1)->first();
         $product=Product::where('status',1)->orderBy('id','desc')->get()->take(12);


         // dd($settings);
         return view('public.pages.aboutus')
         ->with('banner',$banner)
         ->with('category',$category)
         ->with('news',$news)
         ->with('settings',$settings)
         ->with('product',$product)        
        ->with('about',$about);
    }
    public function newsdetails(Request $request){

          $newsdetails=News::find($request->id);

          // dd($settings);
          return view('public.pages.news_details')
          ->with('newsdetails',$newsdetails);
    }
    public function sentmessages(Request $request){

         $validateData = $request->validate([
         'name' => 'required',
         'email' => 'required|email',
         'subject' => 'required|max:200',
         'phone' => 'required',
         'message' => 'required|max:300',
         // 'composition_bangla_name' => 'required',
         ]);

        $message= new Messages();
        $message->name= $request->name;
        $message->message= $request->message;
        $message->email= $request->email;
        $message->phone= $request->phone;
        $message->subject= $request->subject;
        $message->save();

        return redirect()->back()->with('message',
        'Thank you contaction with us, we will back to you soon!');
    }
public function login(Request $request){
    if(session()->get('user_type') == 'admin' || session()->get('user_type') == 'vendor'){
        return redirect()->route('admin.dashboard')->with('message','Please logout from admin panel');
    }
        $email = $request->input('email');
        $input_password = $request->input('password');
        $user = User::where('email',$email)
                        ->first();
                        // dd($user);
        if(!$user || (!Hash::check($input_password,$user->password))){
            return response()->json(array(
                'response'=>"Please check your input",
                'success'=>false
            ));
        }else{
            session(['user' => $user,'user_type' => 'customer']);
            return response()->json(array(
                'response'=>"Login Successfull",
                'success'=>true
            ));
        }
        
    }
    public function signup(Request $request){
        if(session()->get('user_type') == 'admin' || session()->get('user_type') == 'vendor'){
            return redirect()->route('admin.dashboard')->with('message','Please logout from admin panel');
        }
            $validator =Validator::make($request->all(), [              
                'email' => 'required|email|unique:users',
                
                'password' => 'required|min:6',
                'name' => 'required|min:3',
            ]);
            if ($validator->fails()) {
                return response()->json(array(
                    'response'=> json_encode($validator->errors()),
                    'success'=>false
                ));
            }
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->phone_number = $request->input('phone');
            $user->save();
            $userInfo=$user::find($user->id);
            session(['user' => $userInfo,'user_type' => 'customer']);

            return response()->json(array(
                'response'=>"Signup Successfull",
                'success'=>true
            ));
        }
        public function logout(){
            session()->flush();
            return redirect()->route('toppage');
        }
        public function vendorprofile(Request $request){
            if(session()->get('user_type') == 'admin' || session()->get('user_type') == 'vendor'){
                return redirect()->route('admin.dashboard')->with('message','Please logout from admin panel');
            }
            $category=Category::where('status',1)->where('parent_id',0)->get();
            $banner=Banner::where('status',1)->get();
            $brand=Brand::where('status',"ACTIVE")->get();
            $vendor=Vendor::find($request->id);
            
            $product=Product::where('vendor_id',$request->id)->where('status','ACTIVE')->get();
            $offer=Offer::where('status','ACTIVE')->where('vendor_id',$request->id)->get();
            return view('new_website.pages.vendor.vendor_profile')


            ->with('category',$category)
            ->with('banner',$banner)
            ->with('brand',$brand)
            ->with('vendor_id',$request->id)

            ->with('vendor',$vendor)
            ->with('product',$product)
            ->with('offer',$offer);
        }

        public function test()
        {
            $category=Category::where('status',1)->where('parent_id',0)->get();
        $banner=Banner::where('status',1)->get();
        $brand=Brand::where('status',"ACTIVE")->get();
            return view('vendor_with_website')
            ->with('banner',$banner)
            ->with('category',$category)
            ->with('brand',$brand);
              
        } 

        public function test2()
        {
            $category=Category::where('status',1)->where('parent_id',0)->get();
        $banner=Banner::where('status',1)->get();
        $brand=Brand::where('status',"ACTIVE")->get();
            return view('vendor_without_website')
            ->with('banner',$banner)
            ->with('category',$category)
            ->with('brand',$brand);
              
        } 
        public function test3()
        {
            $category=Category::where('status',1)->where('parent_id',0)->get();
        $banner=Banner::where('status',1)->get();
        $brand=Brand::where('status',"ACTIVE")->get();
            return view('product_details')
            ->with('banner',$banner)
            ->with('category',$category)
            ->with('brand',$brand);
              
        } 
        public function test4()
        {
            $category=Category::where('status',1)->where('parent_id',0)->get();
            $banner=Banner::where('status',1)->get();
            $brand=Brand::where('status',"ACTIVE")->get();
            return view('product_single')
            ->with('banner',$banner)
            ->with('category',$category)
            ->with('brand',$brand);
        }
        public function test5()
        {
            $category=Category::where('status',1)->where('parent_id',0)->get();
            $banner=Banner::where('status',1)->get();
            $brand=Brand::where('status',"ACTIVE")->get();
            return view('checkout')
            ->with('banner',$banner)
            ->with('category',$category)
            ->with('brand',$brand);
        }
        

}