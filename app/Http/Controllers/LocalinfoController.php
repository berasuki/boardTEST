<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\localinfo;

class LocalinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = localinfo::orderBy('created_at', 'desc')->get();

        
        return view('board.localinfo_list',['info'=>$info]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //만드는 폼 글 작성창 리턴해서 보여줌 
        return view('board.localinfo_write');
    }
    
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $info = new localinfo();
        $info->title = $request->input('title');
        $info->content = $request->input('content');
        $info->view = 0;
        $info->save();
        
            return redirect('/');
       
    //   DB::table('localinfos')->insert(['name' => $request->input()]);

    //   DB::table('localinfos')->insert(['title' => $request->input()]);
    //   DB::table('localinfos')->insert(['content' => $request->input()]);
    //   DB::table('localinfos')->insert(['view' => $request->input()]);
    //   DB::table('localinfos')->insert(['ip' => $request->input()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = localinfo::find($id);
        
        
        
        return view('board.localinfo_read', ['info'=>$info] );
    
    }
    
  
    public function edit($id)
    {
      
        $info = localinfo::find($id);
        
        return view('board.localinfo_edit', ['info'=>$info] );
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
       $info = localinfo::find($id);
       $info->title = $request->input('title');
       $info->content= $request->input('content');
       $info->save();
       
       return redirect('/');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = localinfo::find($id);
        $info->delete();
      
      return redirect('/');
    }
}
