<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Model\OfferType;


class OfferTypeController extends Controller
{
    
  

    public function index(){
        $data = OfferType::Orderby('id','desc')->get();
        // dd($data);
        return view('admin.offertype.list')->with('data',$data)
                                    ->with('page','offer_type_setting');
    }
    public function offerTypeAdd(){
        return view('admin.offertype.add')->with('page','offer_type_setting');
    }
    public function offerTypeAddSubmit(Request $request){
        // dd($request);
        // dd(session()->get('user')->id);
        $request->validate([
            'title' => 'required|string|unique:tbl_offer_type,title',
            ]);
        $offer = new OfferType();
        $offer->title = $request->input('title');
        $offer->user_id=session()->get('user')->id;
        if($request->input('status')){
            $offer->status = "ACTIVE";
        }
        else{
            $offer->status = "IN_ACTIVE";
        }
        $offer->save();
        return redirect()->route('offertype.list')->with('message', 'Added successfully!');
    }
    public function offerTypeEdit($id){
        $data = OfferType::Where('id',$id)->first();
        return view('admin.offertype.edit')->with('data',$data)
        ->with('page','offer_type_setting');
 
     }

    public function offerTypeEditSubmit(Request $request){

        $request->validate([
            'title' => 'required|string',
        ]);
        $offer = OfferType::find($request->id);
        $offer->title = $request->input('title');
        $offer->user_id=session()->get('user')->id;
        if($request->input('status')){
            $offer->status = "ACTIVE";
        }
        else{
            $offer->status = "IN_ACTIVE";
        }
        $offer->save();

        return redirect()->route('offertype.list')->with('page','offer_type_setting')->with('message',
        'Updated successfully!');
    }
 
}
