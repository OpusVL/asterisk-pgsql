<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ps_endpoints;
use App\ps_aors;
use App\ps_auth;
//use App\ps_contacts;
use Illuminate\Support\Facades\DB;

class ContextController extends Controller
{
    public function index()
    {
        return view('endpoints.context');
    }

    public function show(Request $request)
    {
        /*$request->validate([
            'context'=>'required',
        ]);
        */
        $context = $request->get('context');
        $endpoint = ps_endpoints::find($context);
            
            if ($context==""){
                $ps_endpoints = DB::table('ps_endpoints')
                ->leftJoin('ps_auths','ps_endpoints.id','=','ps_auths.id')
                ->leftJoin('ps_aors','ps_endpoints.id','=', 'ps_aors.id')
                -> get();
            }

            else{
            $ps_endpoints = DB::table('ps_endpoints')
                ->leftJoin('ps_auths','ps_endpoints.id','=','ps_auths.id')
                ->leftJoin('ps_aors','ps_endpoints.id','=', 'ps_aors.id')
                ->leftJoin('ps_contacts','ps_endpoints.id','=', 'ps_contacts.endpoint')
                -> select('ps_endpoints.*','ps_auths.username','ps_auths.password','ps_aors.max_contacts','ps_aors.remove_existing','ps_contacts.uri','ps_contacts.user_agent')
                ->where ('ps_endpoints.context','=',$context)
                -> get();
            }
            
            /*
            $ps_contact = DB::table('ps_contacts')
                -> where ('endpoint','=',$endpoint->id)
                -> get();
            */

            return view('endpoints.context',compact('ps_endpoints','context'));

        
    }

}