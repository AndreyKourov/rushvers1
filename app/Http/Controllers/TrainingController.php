<?php

namespace App\Http\Controllers;

use App\Option;
use App\Block;
use App\User;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $option = Option::all();
        $block = Block::all();
        //$optionid = Block::pluck('optionid');  , 'id'=>1 
        return view('training.index', ['page'=>'Training', 'option'=>$option, 'block'=>$block ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deledit($id)
    {
        $block = Block::find($id);
        
        return view('training.deledit', ['page'=>'Training', 'block'=>$block]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delupdate(Request $request, $id)
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
            return redirect('training');
        }else {
            return redirect('training');
        }
    }

    public function idedit($id)
    {
        $block = Block::find($id);
        
        return view('training.idedit', ['page'=>'Training', 'block'=>$block]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function idupdate(Request $request, $id)
    {
        $block = Block::find($id);
        // $block = Block::where($id)->get();
        $users = User::find(1);
        // $option1 = Option::all();
        // $block1 = Block::all();
        $options = Option::pluck('optionname', 'id');

        if ( $users->name === $request->login && $users->password === $request->password )
        {
            return view('training.edit', ['page'=>'Training', 'block'=>$block, 'options'=>$options ]);
            // return redirect('about');
        }else {
            return redirect('training');
        }
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
        $options = Option::pluck('optionname', 'id');

        return view('training.edit', ['page'=>'Training', 'block'=>$block, 'options'=>$options]);
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
        return redirect('training/');
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
}
