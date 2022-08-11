<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\News;

use Image;


class NewsController extends Controller
{
    public function index(){
        
        $list = News::where('status',1)->get();
        // // dd($list);
        return view('admin.pages.news.list')
            ->with('page','news')
            ->with('dataList',$list);
        //                                     ->with('page','coin');

    }

 
    
    public function newsAdd(){
       // // dd($list);
       return view('admin.pages.news.add')->with('page','news');

    }
    public function newsAddSubmit(Request $request){
        $validateData = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'jpg_name' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            // 'composition_bangla_name' => 'required',
        ]);

         
        
        $data = new news();
        $data->text = $request->text;
        $data->title = $request->title;
        
         if($request->hasFile('jpg_name')){

      
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
         }

        $data->save();
        return redirect()->route('news.list')->with('page','news')->with('message',
        'Added successfully!');


    }
    public function newsEdit($id){
           $data = News::find($id);
           // // dd($list);
           return view('admin.pages.news.edit')
                    ->with('page','news')
                    ->with('data',$data);


    }
    public function newsEditSubmit(Request $request){
         $validateData = $request->validate([
         'title' => 'required',
         'text' => 'required',
         'jpg_name' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
         // 'composition_bangla_name' => 'required',
         ]);
        $data = News::find($request->id);
        $data->text = $request->text;
        $data->title = $request->title;
        if($request->hasFile('jpg_name')){
            $image = $request->file('jpg_name');
            $input['imagename'] = time().'.'.$image->extension();


            $filePath = public_path('/images');
            $image->move($filePath, $input['imagename']);
            $data->image = $input['imagename'];
        }

        $data->save();
        return redirect()->route('news.list')->with('page','news')->with('message',
        'Updated successfully!');

    }
    
}
