<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Settings;

use Image;


class SettingsController extends Controller
{
    public function index(){
        
        $list = Settings::where('status',1)->first();
        // // dd($list);
        return view('admin.pages.settings.list')
            ->with('page','settings')
            ->with('data',$list);
        //                                     ->with('page','coin');

    }

 
    
    public function settingsAdd(){
       // // dd($list);
       return view('admin.pages.settings.add')->with('page','settings');

    }
    public function settingsAddSubmit(Request $request){
       
         
        
        $data = new Settings();
        $data->site_name = $request->site_name;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->hot_line = $request->hot_line;
        $data->info_mail = $request->info_mail;
        $data->facebook_link = $request->facebook_link;

        if($request->hasFile('jpg_name')){

      
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
         }
        

        $data->save();
        return redirect()->route('settings.list')->with('page','settings')->with('message',
        'Added successfully!');


    }
    public function settingsEdit($id){
           $data = Settings::find($id);
           // // dd($list);
           return view('admin.pages.settings.edit')
                    ->with('page','settings')
                    ->with('data',$data);


    }
    public function settingsEditSubmit(Request $request){
        
        $data = Settings::find($request->id);
          $data->site_name = $request->site_name;
          $data->contact = $request->contact;
          $data->address = $request->address;
          $data->email = $request->email;
          $data->facebook_link = $request->facebook_link;
           $data->hot_line = $request->hot_line;
        $data->info_mail = $request->info_mail;

         if($request->hasFile('jpg_name')){

      
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
         }
        $data->save();
        return redirect()->route('settings.list')->with('page','settings')->with('message',
        'Updated successfully!');

    }
    
}
