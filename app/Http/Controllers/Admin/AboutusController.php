<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Aboutus;

use Image;


class AboutusController extends Controller
{
    public function index(){
        
        $list = Aboutus::where('status',1)->first();
        // // dd($list);
        return view('admin.pages.aboutus.list')
            ->with('page','aboutus')
            ->with('data',$list);
        //                                     ->with('page','coin');

    }

 
    
    public function aboutusAdd(){
       // // dd($list);
       return view('admin.pages.aboutus.add')->with('page','aboutus');

    }
    public function aboutusAddSubmit(Request $request){
        $validateData = $request->validate([
            'text' => 'required',
            // 'jpg_name' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            // 'composition_bangla_name' => 'required',
        ]);

         
        
        $data = new Aboutus();
        $data->text = $request->text;
        $data->text_english = $request->text_english;
        
         if($request->hasFile('jpg_name')){

      
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
         }

        $data->save();
        return redirect()->route('aboutus.list')->with('page','aboutus')->with('message',
        'Added successfully!');


    }
    public function aboutusEdit($id){
           $data = Aboutus::find($id);
           // // dd($list);
           return view('admin.pages.aboutus.edit')
                    ->with('page','aboutus')
                    ->with('data',$data);


    }
    public function aboutusEditSubmit(Request $request){
         $validateData = $request->validate([
         'text' => 'required',
        //  'jpg_name' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
         // 'composition_bangla_name' => 'required',
         ]);
        $data = Aboutus::find($request->id);
        $data->text = $request->text;
        $data->text_english = $request->text_english;
        if($request->hasFile('jpg_name')){
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
        }

        $data->save();
        return redirect()->route('aboutus.list')->with('page','aboutus')->with('message',
        'Updated successfully!');

    }
    
}
