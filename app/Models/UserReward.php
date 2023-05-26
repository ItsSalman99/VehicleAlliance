<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReward extends Model
{
    use HasFactory;

    /**
     * Get the reward that owns the UserReward
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reward()
    {
        return $this->belongsTo(Reward::class, 'reward_id', 'id');
    }

}
