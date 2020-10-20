<?php

namespace App\Http\Controllers;

use App\Option;
use App\Block;

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
        //
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
     *
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
        $block->delete();
        return redirect('about');
    }
}
