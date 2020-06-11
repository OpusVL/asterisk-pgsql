<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ps_endpoints;
use App\ps_aors;
use App\ps_auth;
use Illuminate\Support\Facades\DB;

class ContextController extends Controller
{

    public function show(Request $request)
    {
        $request->validate([
            'context'=>'required',
        ]);
        $context = $request->get('context');
        $endpoint = ps_endpoints::find($context);

        //$results = DB::table('ps_endpoints')->where('context',11);
        
        $results = DB::table('ps_endpoints')->where('context',11)->get();

        //print "Context is $context";

        foreach ($results as $result) {
            print "ID is ";
            print $result->id;
            print "<br>";
            print "Context is ";
            print $result->context;
            echo "<br>";
        }
        
    }

}