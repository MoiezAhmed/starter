<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{


    public  function  AdminIndex()
    {
        $data=[];
        $data['name']='moiez ahmed';
        $data['age']=27;

        $obj=new \stdClass();
        $obj->name='moiez ahmed';
        $obj->age=27;

        return view('hoe',compact('obj'));
    }
    public  function  GetAdminInfo()
    {
        return 'khartoum jbara';
    }

    public  function  GetAdminRole()
    {
        return 'level1';
    }

    public  function  GetAdminphone()
    {
        return '0900594651';
    }
}
