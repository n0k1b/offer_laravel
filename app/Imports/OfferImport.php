<?php

namespace App\Imports;

use App\Model\Offer;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
Use Exception;

class OfferImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        dd($row[1]);
        return new MemberList([
            //
        ]);
    }

    public function collection(Collection $rows)
    {

        // dd(count($rows));
        foreach ($rows as $key=>$row) 
        {

            if($key !== 0){
                try
                {
                    Offer::create([
                        'code'=>$row[0],
                        'title'=>$row[1],
                        'type'=>$row[2],
                        'amount'=>$row[3],
                        'offer_url'=>$row[4], 
                        'apply_time'=>$row[5],  
                        'expired_within'=>$row[6],
                        'has_website'=>$row[7],
                        'vendor_id'=>session()->get('user')->id,
                        'user_id'=>session()->get('user')->id,
                        
                    ]);
                    if($key === (count($rows)-1)){
                        return true;
                    }
                }
                catch(Exception $e)
                {
                   dd($e->getMessage());
                }
            }
            
        }
    }
}
