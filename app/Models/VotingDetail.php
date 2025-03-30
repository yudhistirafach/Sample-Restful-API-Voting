<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VotingDetail extends Model
{
    protected $table = 'voting_details';
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'votedCandidateId',
        'employeeId',
    ];

    public function VotinCandidate(): HasMany {
        return $this->hasMany(VotingCandidate::class, 'votedCandidateId');
    }

    public function Employees(): HasMany {
        return $this->hasMany(Employee::class, foreignKey: 'employeeId');
    }
}
