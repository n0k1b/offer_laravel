<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;

use App\Model\Brand;
use App\Model\User;
use App\Model\Category;
use App\Model\Offer;
use App\Model\OfferType;
use App\Imports\OfferImport;

use Image;
use File;


class OfferController extends Controller
{
    
    public function index(){
        if(session()->get('user_type') == 'admin'){
            $data = Offer::Orderby('id','desc')->get();
        }else{
            $data = Offer::where('vendor_id',session()->get('user')->id)->Orderby('id','desc')->get();
        }
        // dd($data);
        return view('admin.offer.list')->with('data',$data)
                                    ->with('page','offer_setting');
    }
    public function offerAdd(){
        $type = OfferType::where('status','ACTIVE')->Orderby('id','desc')->get();
        return view('admin.offer.add')->with('page','offer_setting')->with('type',$type);
    }
    public function offerAddSubmit(Request $request){
        // dd($request);
        $userType = session()->get('user_type');
        $userId= session()->get('user')->id;
        $request->validate([
            'title' => 'required|string',
            'type' => 'required',
            'amount' => 'required|integer',
            'vendor_id' => 'required',
            'has_website' => 'required',
            'code' => 'required',
            'expired_within' => 'required',
            'apply_time' => 'required',
           
        ]);
        $offer = new Offer();
        $offer->vendor_id = $userType == 'admin' ? $request->input('vendor_id'): $userId;
        $offer->has_website = $request->input('has_website') == "yes" ? 1 : 0;
        $offer->offer_url = $request->input('offer_url');
        
        $offer->category_id = $request->input('category_id');
        $offer->title = $request->input('title');
        $offer->type = $request->input('type');
        $offer->amount = $request->input('amount');
        $offer->user_id=session()->get('user')->id;

        $offer->code =str_replace(' ', '', $request->input('code'));
        $offer->apply_time = $request->input('apply_time');
        $offer->expired_within = $request->input('expired_within');
        
        $filename="";
        if($request->input('status')){
            $offer->status = "ACTIVE";
        }
        else{
            $offer->status = "IN_ACTIVE";
        }
        if($banner=$request->file('icon')){
            // thumbnails
            $filename= time().'offer'.'.'.$banner->extension();

            $filePath = public_path('/images');
            $banner->move($filePath, $filename);
            $offer->icon_image=$filename;
        }

        $offer->save();
        return redirect()->route('offer.list')->with('message', 'Added successfully!');
    }
    public function offerEdit($id){
        $type = OfferType::where('status','ACTIVE')->Orderby('id','desc')->get();
        
        $data = Offer::Where('id',$id)->first();
        return view('admin.offer.edit')->with('data',$data)->with('type',$type)
        ->with('page','offer_setting');
     }

    public function offerEditSubmit(Request $request){
        $userType = session()->get('user_type');
        $userId= session()->get('user')->id;
        $request->validate([
            'title' => 'required|string',
            'type' => 'required',
            'amount' => 'required|integer',
            'has_website' => 'required',
            'code' => 'required',
            'expired_within' => 'required',
            'apply_time' => 'required',
          
        ]);

        $offer =  Offer::find($request->id);
        $offer->has_website = $request->input('has_website') == "yes" ? 1 : 0;
        $offer->offer_url = $request->input('offer_url');
        $offer->category_id = $request->input('category_id');

        $offer->title = $request->input('title');
        $offer->type = $request->input('type');
        $offer->amount = $request->input('amount');
        $offer->user_id=session()->get('user')->id;
        $offer->vendor_id = $userType == 'admin' ? $request->input('vendor_id'): $userId;

        $offer->code =str_replace(' ', '', $request->input('code'));
        $offer->apply_time = $request->input('apply_time');
        $offer->expired_within = $request->input('expired_within');

        $filename="";
       
        if($request->input('status')){
            $offer->status = "ACTIVE";
        }
        else{
            $offer->status = "IN_ACTIVE";
        }
        if($banner=$request->file('icon')){
            // thumbnails
            $filename= time().'offer'.'.'.$banner->extension();

            $filePath = public_path('/images');
            $banner->move($filePath, $filename);
            $offer->icon_image=$filename;
        }
        $offer->save();
        return redirect()->route('offer.list')->with('page','offer_setting')->with('message',
        'Updated successfully!');
    }
 
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function offerBulkubmit(Request $request){
        // dd($request);
        if($request->hasFile('file_xl')){
            $filename = pathinfo($request->file_xl->getClientOriginalName(), PATHINFO_FILENAME).'_file_'.time().'.'.$request->file_xl->getClientOriginalExtension();
            $request->file_xl->move(public_path('files/'), $filename);   
            ob_start();

            \Excel::import(new OfferImport, public_path('files/'.$filename));
            
            ob_end_clean();

            return redirect()->back()->with('message', 'Bulk upload successfull!');

        }else{
            return redirect()->back()->with('message', 'There is an error!');
        }

    }
    public function download(Request $request){
        $path=url('admin/offer.xlxs');

        return \Storage::get($path);
    }
}
