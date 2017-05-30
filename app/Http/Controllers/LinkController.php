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


        return view('crud.onelink',compact('link'));
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


        return view('crud.onelink',compact('link'));
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
        DB::insert('insert into links (title, url, description, created_at, updated_at) values (?,?,?,now(),now())',[$request->title,$request->url,$request->description]);
        return redirect('/links');
    }


    //UPDATE
    public function startEditLink($id)
    {
    	$link = \App\Link::findOrFail($id);
    	//return $link;

        return view('crud.editlink',compact('link'));
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
        $numAffected = DB::update('update links set title = ?, url = ?, description = ?, updated_at=now() where id = ?', [$request->title,$request->url,$request->description, $id]);
        //return $numAffected;
        
        return redirect('/links');
    }
    

    //DELETE
    public function startDeleteLink($id)
    {
        $link = \App\Link::findOrFail($id);
        //return $link;

        return view('crud.deletelink',compact('link'));
    }
    public function deleteLink(Request $request, $id)
    {
        $link = \App\Link::find($id);
        $link->delete();

        return redirect('/links');
    }
    public function deleteLink2(Request $request, $id)
    {
        $numDeleted = DB::delete('delete from links where id = ?', [$id]);
        //return $numDeleted;

        return redirect('/links');
    }

    //SEARCH
    public function startSearch(Request $request)
    {
        //return $request->key;
        
        return redirect('/search/' . $request->key);
    }
    public function search($keyword)
    {
        //return "Hello";
        $quer = "SELECT * FROM links WHERE title LIKE '%" . $keyword . "%' OR url like '%" . $keyword . "%' OR description like '%" . $keyword . "%'" ;
        $links = DB::select($quer);

        return view('fitur.search',compact('links', 'keyword'));
    }
}
