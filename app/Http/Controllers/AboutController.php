<?php

namespace App\Http\Controllers;

use App\Option;
use App\Block;
use App\User;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $option = Option::all();
        $block = Block::orderBy('updated_at', 'desc')->get();
        //$block = Block::orderBy('updated_at', 'asc')->get();
        // $block = Block::all();
        //$optionid = Block::pluck('optionid');  , 'id'=>1 
        return view('about.index', ['page'=>'About', 'option'=>$option, 'block'=>$block ]);
    }


    public function contacts()
    {
        return view('about/contacts', ['page'=>'Contacts']);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $block = Block::find($id);
        
        // return view('about.edit2edit', ['page'=>'Admin', 'block'=>$block]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $block = Block::find($id);
        
        return view('about.edit', ['page'=>'About', 'block'=>$block]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit2edit($id)
    {
        $block = Block::find($id);
        
        return view('about.edit2edit', ['page'=>'About', 'block'=>$block]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2edit(Request $request, $id)
    {
        $block = Block::find($id);
        // $block = Block::where($id)->get();
        $users = User::find(1);
        // $option1 = Option::all();
        // $block1 = Block::all();
        $options = Option::pluck('optionname', 'id');

        if ( $users->name === $request->login && $users->password === $request->password )
        {
            return view('admin.edit', ['page'=>'About', 'block'=>$block, 'options'=>$options ]);
            // return redirect('about');
        }else {
            return redirect('about');
        }
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
        // $block = Block::where($id)->get();
        $users = User::find(1);
        // $option1 = Option::all();
        // $block1 = Block::all();

        if ( $users->name === $request->login && $users->password === $request->password )
        {
        $block->delete();
        // return view('about.index', ['page'=>'About', 'option'=>$option1, 'block'=>$block1 ]);
            return redirect('about');
        }else {
            return redirect('about');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $search = $request->searchform;
        $search = '%'.$search.'%';
        $block = Block::all();
        $titles = Block::where('title', 'like', $search)->get();
        return view ('about.search', ['page'=>'About', 'block'=>$block, 'title'=>$titles, 'id'=>0]);
    }
}
