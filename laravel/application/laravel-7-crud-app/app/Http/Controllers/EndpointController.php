<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ps_endpoints;
use App\ps_aors;
use App\ps_auth;
use Illuminate\Support\Facades\DB;

class EndpointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ps_endpoints = DB::table('ps_endpoints')
        ->leftJoin('ps_auths','ps_endpoints.id','=','ps_auths.id')
        ->leftJoin('ps_aors','ps_endpoints.id','=', 'ps_aors.id')
        -> get();

        return view('endpoints.index',compact('ps_endpoints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('endpoints.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'context'=>'required',
            'password' => 'required',
            'pickup_group' => 'required'
        ]);

        $endpoint = new ps_endpoints([
    
            'id' => $request->get('id'),
            'transport' => "transport-udp",
            'aors' => $request->get('id'),
            'auth' => $request->get('id'), 
            'context' => $request->get('context'),
            'disallow' => "all",
            'allow' => "g722,ulaw",
            'direct_media' => "no",
            'force_rport' => "yes",
            'rewrite_contact' => "yes",
            'rtp_symmetric' => "yes",
            'call_group' => "1",
            'pickup_group' => $request->get('pickup_group')
        ]);

        $auth = new ps_auth([
            'id' => $request->get('id'),
            'auth_type' => "userpass",
            'username' => $request->get('id'),
            'password' => $request->get('password')
        ]);
        
        $aors = new ps_aors([
            'id' => $request->get('id'),
            'max_contacts' => "1",
            'remove_existing' => "yes"
        ]);

        $endpoint->save();
        $auth->save();
        $aors->save();

        return redirect('/endpoints')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource by context
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $endpoint = ps_endpoints::find($id);
        $auth = ps_auth::find($id);
        return view('endpoints.edit', compact('endpoint'), compact('auth'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'context'=>'required',
            'password' => 'required',
            'pickup_group' => 'required'
        ]);

        $endpoint = ps_endpoints::find($id);
        $auth = ps_auth::find($id);
        $aors = ps_aors::find($id);

        $endpoint->id = $request->get('id');
        $endpoint->context = $request->get('context');
        $endpoint->pickup_group = $request->get('pickup_group');

        $auth->id = $request->get('id');
        $auth->username = $request->get('id');
        $auth->password = $request->get('password');

        $aors->id = $request->get('id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $endpoint = ps_endpoints::find($id);
        $auth = ps_auth::find($id);
        $aors = ps_aors::find($id);

        $endpoint->delete();
        $auth->delete();
        $aors->delete();

        return redirect('/endpoints')->with('success', 'Contact deleted!');
    }
}
