<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{

    public function getAll(){

        $polls = Poll::with('user')->get();

        return response()->json([
            'status' => true,
            'data' => $polls
        ]);

    }

    public function store(Request $request)
    {
        $poll = Poll::create([
            'title' => $request->title,
            'description' => $request->content,
            'user_id' => $request->userID
        ]);

        if($poll)
        {
            return response()->json([
                'status' => true,
                'data' => $poll
            ]);
        }
    }

    public function upVote($id)
    {

        $poll = Poll::where('id', $id)->first();

        $poll->upvote += 1;
        $poll->save();

        return response()->json([
            'status' => true,
            'msg' => 'Voted'
        ]);
    }
}
