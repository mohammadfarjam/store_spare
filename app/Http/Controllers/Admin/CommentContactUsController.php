<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ReplayContactUs;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getCommentContactUs=ContactUs::latest()->paginate();
        return view('Admin.comments_contactUs.index',compact('getCommentContactUs'));
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
    public function edit($id)
    {
        //
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
        //
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


    public function getDataReplay(Request $request)
    {
        $id=$request['id'];
        $get_data_replay=ContactUs::findOrFail($id);
        return response()->json($get_data_replay,200);
    }

    public function sendEmailToUser(Request $request)
    {
        $message=$request['message'];
        $user_email=$request['user_email'];
        $replay_to_user=$request['replay_to_user'];
        $user_id=$request['user_id'];

        $find_person=ContactUs::findOrFail($user_id);
        $find_person->answer=$replay_to_user;
        $find_person->status=1;
        $find_person->update();

        Mail::to($user_email)->send(new ReplayContactUs($request));

        return response()->json(['success'=>'success','user_id'=>$user_id],200);
    }
}
