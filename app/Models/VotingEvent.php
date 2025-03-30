<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VotingEvent extends Model
{
    protected $table = 'voting_events';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'title',
        'description',
        'date_start',
        'date_end',
        'voters',
    ];

    public function VotingEvent():BelongsTo {
        return $this->belongsTo(VotingCandidate::class);
    }
}
