<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{

    public function index()
    {
        $polls = Poll::all();

        return view('backend.poll.index', compact('polls'));

    }

    public function getAll(){

        $polls = Poll::with('user')->get();

        return response()->json([
            'status' => true,
            'data' => $polls
        ]);

    }

    public function store(Request $request)
    {

        // return response()->json([
        //     'status' => true,
        //     'data' => $request->all()
        // ]);

        try {
            //code...
            $poll = new Poll();
            $poll->title = $request->title;
            $poll->description = $request->content;
            $poll->user_id = (int) $request->uid;

            $poll->save();

            if($poll)
            {
                return response()->json([
                    'status' => true,
                    'data' => $poll
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'msg' => $th->getMessage()
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
