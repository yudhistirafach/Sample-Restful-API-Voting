<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VotingCandidate extends Model
{
    protected $table = 'voting_candidates';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'employeeId',
        'votingEvendId',
    ];

    public function Employee(): HasMany {
        return $this->hasMany(Employee::class, 'employeeId');
    }

    public function VotingEvent(): HasMany {
        return $this->hasMany(VotingEvent::class, 'votingEventId');
    }
}
