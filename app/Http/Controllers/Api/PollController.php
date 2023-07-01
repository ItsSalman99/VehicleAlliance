<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PollController extends Controller
{

    public function index()
    {
        $polls = Poll::all();

        return view('backend.poll.index', compact('polls'));
    }

    public function getAll()
    {

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

            if ($poll) {
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

    public function getComments($id)
    {
        $comment = PollComment::where('poll_id', $id)->get();

        return response()->json([
            'status' => true,
            'data' => $comment
        ]);

    }

    public function storComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'poll_id' => 'required',
            'comment' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'msg' => $validator->errors()->first()
            ]);
        }

        try {
            //code...
            $poll = new PollComment();

            $poll->user_id = $request->user_id;
            $poll->poll_id = $request->poll_id;
            $poll->comment = $request->commment;

            $poll->save();

            if ($poll) {
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
}
