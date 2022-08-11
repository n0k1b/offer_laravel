<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;

use App\Model\Admin;
use App\Model\User;
use App\Model\TrainerSchedule;
use App\Model\Trainer;
use App\Model\Vendor;

class UserController extends Controller
{
    
    public function userManagement(){
        return view(('admin.user'))
        ->with('page','user');

    }

    public function userManagementDeatil(){
        return view(('admin.user_details'))
        ->with('page','user');

    }
    public function adminList(){
        $data = Admin::Orderby('id','desc')->get();
        // dd($data);
        return view('admin.user.list')->with('userData',$data)
                                    ->with('page','admin_setting');
    }
    public function adminAdd(){
        return view('admin.user.add')->with('page','admin_setting');
    }
    public function adminAddSubmit(Request $request){
        // dd($request);
        $validateData = $request->validate([
            'email' => 'required|unique:tbl_admins,email',
            'password' => 'required',
        ]);
        $admin = new Admin();
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        if($request->input('status')){
            $admin->status = 1;
        }
        else{
            $admin->status = 0;
        }
        $admin->save();
        return redirect()->route('admin.list')->with('message', 'Added successfully!');


    }
    public function adminEdit($id){
        if(session()->get('user_type') == 'vendor'){
            $data = Vendor::Where('id',$id)->first();
        }else{
            $data = Admin::Where('id',$id)->first();

        }
        
        return view('admin.user.edit')->with('user',$data)
        ->with('page','admin_setting');
 
     }

    public function adminEditSubmit(Request $request){

          if($request->password){

            $validateData = $request->validate([
                'password' => 'required|confirmed|min:6',
            ]);
            if(session()->get('user_type') == 'vendor'){
                $admin = Vendor::Where('id',$request->input('id'))->first();
            }else{
                $admin = Admin::Where('id',$request->input('id'))->first();
    
            }
            $admin->password = Hash::make($request->input('password'));
            $admin->save();
            return redirect()->route('admin.list')->with('message', 'Edited successfully!');
          }else{
                    $validateData = $request->validate([
                        'email' => 'required|unique:tbl_admins,email,except,id',
                    ]);


                    if(session()->get('user_type') == 'vendor'){
                        $admin = Vendor::Where('id',$request->input('id'))->first();
                    }else{
                        $admin = Admin::Where('id',$request->input('id'))->first();
            
                    }

                    $admin->email = $request->input('email');

                    if($request->input('status')){
                     $admin->status = "ACTIVE";
                    }
                    else{
                        $admin->status = "IN_ACTIVE";
                    }
                    $admin->save();
                    if(session()->get('user_type') == 'vendor'){
                        return redirect()->back()->with('message', 'Edited successfully!');
                    }else{
                        return redirect()->route('admin.list')->with('message', 'Edited successfully!');
            
                    }
          }


    }
    
    public function vendorEditSubmit(Request $request){
        $vendor = Vendor::find($request->id);
        if($ibanner=$request->file('banner')){
            // thumbnails
            $filename= time().'banner'.'.'.$ibanner->extension();
            $filePath = public_path('/images');
            $ibanner->move($filePath, $filename);
            $vendor->banner=$filename;
        }
        if($icon=$request->file('icon')){
            // thumbnails
            $filename2= time()."icon".'.'.$icon->extension();
            $filePath = public_path('/images');
            $icon->move($filePath, $filename2);
            $vendor->icon=$filename2;
        }
        $vendor->name = $request->input('name');
        $vendor->description = $request->input('description');
        if($request->input('status')){
            $vendor->status = "ACTIVE";
        }
        else{
            $vendor->status = "IN_ACTIVE";
        }
        $vendor->slogan = $request->input('slogan');
        $vendor->address = $request->input('address');
        $vendor->mobile = $request->input('mobile');
        $vendor->website = $request->input('website');
        $vendor->facebook = $request->input('facebook');
        $vendor->instagram = $request->input('instagram');
        $vendor->twitter = $request->input('twitter');
        $vendor->save();
        return redirect()->back()->with('message', 'Added successfully!');
    }
 

    public function userList(){
        $userList = User::orderBy('id','DESC')->get();
        // dd($trainerList);
        return view('admin.user_manage.list')->with('userList',$userList)
                                            ->with('page','user');
    }
    public function userEdit($id){
        $data = User::Where('id',$id)->first();
        return view('admin.user_manage.edit')->with('user',$data)
        ->with('page','user');
     
    }

    public function userEditSubmit(Request $request){
        // dd($request);
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $id = $request->input('id');
        $data = User::Where('id',$id)->first();
        $data->name = $request->input('name');
        $data->phonetic = $request->input('phonetic');
        $data->email = $request->input('email');
        $data->weight = $request->input('weight');
        $data->length = $request->input('length');
        if($request->input('status')){
            $data->status = 1;
        }
        else{
            $data->status = 0;
        }
        $data->save();
        return redirect()->route('user.list')->with('message', 'Edited successfully!');

    }

    public function trainingHistory($id){
        $user = User::Where('id',$id)->first();
        $trainingHistory = TrainerSchedule::Join('tbl_trainings','tbl_trainings.trainer_schedule_id','=','tbl_trainer_schedules.id')
                                            ->Join('tbl_exercise_data','tbl_exercise_data.training_id','=','tbl_trainings.id')
                                            ->Join('tbl_courses','tbl_courses.id','=','tbl_exercise_data.course_id')
                                            ->Join('tbl_equipments','tbl_equipments.id','=','tbl_courses.equipment_id')
                                            ->where('tbl_trainer_schedules.user_id',$id)
                                            ->where('tbl_trainer_schedules.status','completed')
                                            ->select('tbl_trainings.id as training_id','tbl_trainer_schedules.user_id','tbl_trainer_schedules.date','tbl_trainer_schedules.time','tbl_exercise_data.course_id','tbl_exercise_data.set_1','tbl_exercise_data.set_2','tbl_exercise_data.set_3','tbl_courses.course_name','tbl_equipments.name as item')
                                            ->get();

        // dd($trainingHistory);
        return view('admin.user_manage.training_history')
        ->with('trainings',$trainingHistory)
        ->with('user_id',$id)
        ->with('page','user');
    }

    public function csvDownload($id){
        $user = User::Where('id',$id)->first();
        $trainingHistory = TrainerSchedule::Join('tbl_trainings','tbl_trainings.trainer_schedule_id','=','tbl_trainer_schedules.id')
                                            ->Join('tbl_exercise_data','tbl_exercise_data.training_id','=','tbl_trainings.id')
                                            ->Join('tbl_courses','tbl_courses.id','=','tbl_exercise_data.course_id')
                                            ->Join('tbl_equipments','tbl_equipments.id','=','tbl_courses.equipment_id')
                                            ->where('tbl_trainer_schedules.user_id',$id)
                                            ->where('tbl_trainer_schedules.status','completed')
                                            ->select('tbl_trainings.id as training_id','tbl_trainer_schedules.user_id','tbl_trainer_schedules.date','tbl_trainer_schedules.time','tbl_exercise_data.course_id','tbl_exercise_data.set_1','tbl_exercise_data.set_2','tbl_exercise_data.set_3','tbl_courses.course_name','tbl_equipments.name as item')
                                            ->get();

            $headers = array(
                "Content-type" => "text/csv",
                "Content-Disposition" => "attachment; filename=training_history.csv",
                "Pragma" => "no-cache",
                "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
                "Expires" => "0"
            );
        
            $data = $trainingHistory;
            $columns = array('User Id', 'Date', 'Time', 'Course', 'Item', 'Set 1', 'Set 2', 'Set 3');
        
            $callback = function() use ($data, $columns)
            {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);
        
                foreach($data as $data) {
                    fputcsv($file, array($data->user_id, $data->date, $data->time, $data->course_name, $data->item, $data->set_1,$data->set_2,$data->set_3));
                }
                fclose($file);
            };
            return Response()->stream($callback, 200, $headers);
                                        
        }

    public function dw()
    {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=user.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
    
        $reviews = User::all();
        $columns = array('name', 'email');
    
        $callback = function() use ($reviews, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
    
            foreach($reviews as $review) {
                fputcsv($file, array($review->name, $review->email));
            }
            fclose($file);
        };
        return Response()->stream($callback, 200, $headers);
    }
   

}
