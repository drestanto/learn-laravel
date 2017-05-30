<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;

class LinkController extends Controller
{
    //RETRIEVE
    public function showLink($id)
    {
    	$link = \App\Link::findOrFail($id);
    	//return $link;


        return view('onelink',compact('link'));
    }
    public function showAllLinks()
    {
    	$links = \App\Link::all();
    	//return $links;


        return view('link',compact('links'));
    }
    //RETRIEVE USING DATABASE
    public function showLink2($id)
    {
        $link = DB::table('links')->where('id',$id)->first();
        //return $link;


        return view('onelink',compact('link'));
    }
    public function showAllLinks2()
    {
        $links = DB::table('links')->get();
        //return $links;


        return view('link',compact('links'));
    }


    //CREATE
    public function saveLink(Request $request)
    {
    	$validator = Validator::make($request->all(), [
	        'title' => 'required|max:100',
	        'url' => 'required|max:255',
	        'description' => 'required|max:100',
	    ]);
	    if ($validator->fails()) {
	        return back()
	            ->withInput()
	            ->withErrors($validator);
	    }
	    $link = new \App\Link;
	    $link->title = $request->title;
	    $link->url = $request->url;
	    $link->description = $request->description;
	    $link->save();
	    return redirect('/links');
    }
    //INSERT USING DATABASE
    public function saveLink2(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'url' => 'required|max:255',
            'description' => 'required|max:100',
        ]);
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
        DB::insert('insert into links (title, url, description) values (?,?,?)',[$request->title,$request->url,$request->description]);
        return redirect('/links');
    }


    //UPDATE
    public function startEditLink($id)
    {
    	$link = \App\Link::findOrFail($id);
    	//return $link;

        return view('editlink',compact('link'));
    }
    public function editLink(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'url' => 'required|max:255',
            'description' => 'required|max:100',
        ]);
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
        $link = \App\Link::find($id);
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();

        return redirect('/links');
    }
    //UPDATE USING DATABASE
    public function editLink2(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'url' => 'required|max:255',
            'description' => 'required|max:100',
        ]);
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
        $numAffected = DB::update('update links set title = ?, url = ?, description = ? where id = ?', [$request->title,$request->url,$request->description, $id]);
        
        return redirect('/links');
    }
    

    //DELETE
    public function startDeleteLink($id)
    {
        $link = \App\Link::findOrFail($id);
        //return $link;

        return view('deletelink',compact('link'));
    }
    public function deleteLink(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'url' => 'required|max:255',
            'description' => 'required|max:100',
        ]);
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
        $link = \App\Link::find($id);
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();

        return redirect('/links');
    }

}
