<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Send;
use App\Models\User;


class SendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('send');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $user = $request->user();
        $send = new Send;
        $send->title = $request->title;
        $send->description = $request->description;
        $user->Send()->save($send);
        return redirect(route('send.index'))->with('status','Post Added');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $send = Send::find($id);

        return view('edit', ['send'=>$send]);   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $send = Send::find($id);
        $send->title = $request->title;
        $send->description = $request->description;
        $send->save();
        return redirect(route('dashboard'))->with('status','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Send::destroy($id);
        return redirect(route('dashboard'))->with('status','Post Deleted');

    }
}
