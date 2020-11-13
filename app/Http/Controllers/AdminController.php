<?php

namespace App\Http\Controllers;

use App\Option;
use App\Block;
use App\User;
use Session;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = User::all();
        //$user = User::pluck('name', 'password');
        //$options = new Option;
        $users = new User;
        return view('admin.index', [ 'users'=>$users, 'page'=>'Admin' ]);
        //return view('admin.index', [ 'options'=>$options, 'page'=>'Admin' ]);
        //return '<h1>From method, class TestController</h1>';
        
    }

    public function createadmin(Request $request)
    {
        // $user -> name === $request -> login && $user -> password = $request -> password )
        // $block = new Block;
        // $options = Option::pluck('optionname', 'id');
        // return view('admin.create', [ 'block'=>$block, 'options'=>$options, 'page'=>'Admin']);
        //$user = User::all();
       // $options = Option::where('id', 1)->get();
       $block = new Block;
       $options = Option::pluck('optionname', 'id');
       $users1 = new User;
       //return view('admin.create', [ 'block'=>$block, 'options'=>$options, 'page'=>'Admin']);
       // $users->name === $request->login && $users->password === $request->password)
       $users = User::find(1);
       $login = $request->login;
       $pass = $request->password;
       
       $login_trim = trim(htmlspecialchars($login));
       $pass_trim = trim(htmlspecialchars($pass));
       $name = $users->name;

        //foreach($options as $optiab) {}
        if ( $name === $login_trim && $users->password === $pass_trim)
        {   
            session(['name' => $name]);
            return view('admin.create', [ 'block'=>$block, 'options'=>$options,'page'=>'Admin']);
        } else {
            return view('admin.index', [ 'users'=>$users1, 'page'=>'Admin' ]);
        }
        //return redirect('admin.create', [ 'page'=>'Admin']);

    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $block = new Block;
        $options = Option::pluck('optionname', 'id');
        return view('admin.create', [ 'block'=>$block, 'options'=>$options, 'page'=>'Admin']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $block = new Block;

         $fname = $request->file('imagepath');
         if($fname !== null) {
             $original_name = $fname->getClientOriginalName();
             $fname->move(public_path().'/images', $original_name);
             $block->imagepath='/images/'.$original_name;    
         } else {
             $block->imagepath='';
         }

        $block->optionid = $request->optionid;
        $block->title = $request->title;
        $block->content = $request->block_content;

         if(!$block->save()) {
             $err = $block->getErrors();
             return redirect('AdminController@create')->with('errors', $err)->withInput();
         }
         return redirect()->action('AdminController@create')->with('message', 'New block' .$block->title.' has been added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $block = Block::find($id);
        $options = Option::pluck('optionname', 'id');

        return view('admin.edit', ['page'=>'Admin', 'block'=>$block, 'options'=>$options]);
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
        $block = Block::find($id);
        $block->optionid = $request->optionid;
        $block->title = $request->title;
        $block->content = $request->content;

        $fname = $request->file('imagepath');
        if($fname !== null) {
            $original_name = $request->file('imagepath')->getClientOriginalName();
            $request->file('imagepath')->move(public_path().'/images', $original_name);
            $block->imagepath = 'images/'.$original_name;
        }

        $block->save();
        return redirect('about/');
        //return redirect('about/'.$block->optionid);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $block = Block::find($id);
        // $users = User::find(1);

        // if ( $users->password === $request->password )
        // {
        $block->delete();
        return redirect('about');
        // }else {
        //     return redirect('about');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
      * @param  \Illuminate\Http\Request  $request   Request $request,
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyabout(Request $request, $id)
    {
        $block = Block::find($id);
        // $block = Block::where($id)->get();
        $users = User::find(1);
        // $option1 = Option::all();
        // $block1 = Block::all();

        if ( $users->password === $request->password )
        {
        $block->delete();
        // return view('about.index', ['page'=>'About', 'option'=>$option1, 'block'=>$block1 ]);
        return redirect('about');
        }else {
            return redirect('about');
        }
        //return '<h1>From method, class TestController</h1>';    

    }
    public function logout(Request $request)
    {
        Session::forget('name');
        return redirect('about');
    }
    
}


        