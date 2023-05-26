<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\User;
use App\Models\UserReward;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function getAll()
    {
        $rewards = Reward::all();

        return response()->json([
            'status' => true,
            'data' => $rewards
        ]);
    }

    public function shuffle($id)
    {
        try {

            $user = User::where('id', $id)->first();

            if ($user) {
                $reward = Reward::all();
                // $ids = [];
                $rewardID = 0;
                foreach ($reward as $key => $item) {
                    # code...
                    // array_push($ids, $item->id);
                    $check = UserReward::where('user_id', $id)
                        ->where('reward_id', $item->id)
                        ->exists();
                    if (!$check) {
                        $rewardID = $item->id;
                    }
                }

                if ($rewardID != 0) {
                    $reward = new UserReward();

                    $reward->user_id = $user->id;
                    $reward->reward_id = $rewardID;
                    $reward->save();

                    $user->is_rewarded = 1;
                    $user->save();

                    // $reward = UserReward::where('id', $reward->id)
                    // ->with('reward')->first();

                    return response()->json([
                        'status' => true,
                        'user' => $user,
                        'name' => Reward::where('id', $rewardID)->first()->name,
                        'msg' => 'You have recieved a reward!'
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'msg' => 'No rewards available!'
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'msg' => 'Invalid Token!'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'msg' => $th->getMessage()
            ]);
        }
    }
}
