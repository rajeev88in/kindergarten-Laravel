<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kids;
use App\Models\Pickup;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function register(Request $req)
    {
        $req->validate(
            [
            'sname'=> 'required',
            'dob'=> 'required|date',
            'admclass'=>'required',
            'road' => 'required',
            'city'=> 'required',
            'country'=> 'required',
            'state' => 'required',
            'img' => 'required',
            'pin'=>'required|numeric|digits_between:6,7',
            'name'=>'required',
            'phone'=>'required|digits:10'
            ]
    );
    // echo "<pre>";
    // print_r($req->all());


       $imagepath=$req->file('img')->store('upload');

       $kid = new kids;
        $kid->cname = strtoupper($req['sname']);
        $kid->dob = $req['dob'];
        $kid->class = $req['admclass'];
        $kid->address = $req['road'];
        $kid->city = $req['city'];
        $kid->country = $req['country'];
        $kid->state = $req['state'];
        $kid->zipcode = $req['pin'];
        $kid->photoname = $imagepath;
       $result= $kid->save();
       if($result)
       {
        $kidsid = kids::orderby('id','desc')->limit(1)->get('id');
        if($kidsid)
        {
            $kidsid=trim($kidsid,'[{"id":}]');
            // echo $kidsid;
            $pick = new Pickup;   
            $pick->gname=strtoupper($req['name']);
            $pick->relation=$req['relation'];
            $pick->contact = $req['phone'];
            $pick->guardof =$kidsid;
           $finalreg= $pick->save();
           if($req['count']>0)
           {
            for($i=1;$i<$req['count'];$i++)
            {
                $newpick='P'.$i;
                $newpick = new Pickup;
                // echo $req['name'.$i]." ";
                // echo $req['relation'.$i]." ";
                // echo $req['phone'.$i]." ";
                $newpick->gname=strtoupper($req['name'.$i]);
                $newpick->relation=$req['relation'.$i];
                $newpick->contact = $req['phone'.$i];
                $newpick->guardof =$kidsid;
                $finalreg= $newpick->save();
            }
           }
        }
        if($finalreg)
        {
            return ["Result"=>"Successfully Registered"];
        }
        
       }    

    }
}
