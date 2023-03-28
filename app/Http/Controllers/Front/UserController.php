<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller ;

 class UserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public  function  showAdminName()
 {
     return 'almoiez ahmed';
 }
}
