<?php



use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function index(){
        $msg = "This is a simple message.";
       // $data = $request->all(); // This will get all the request data.

       // dd($data);
       /* if($request::ajax()){
            return 'getRequest comleto' ;
        }*/
       // return response()->json(array('msg'=> $msg), 200);
       
     }
     public function post(){
        if($_POST['dato'])
        {
            $dato=$_POST['dato'];
            eval("\$var = $dato;");
           
            return $var;
        }else {
            return "respuesta";
        }
      
        
     }
}
