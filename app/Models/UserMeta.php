<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class UserMeta extends Model
{
    protected $fillable = [
        'user_id',
        'other_career_stage',
        'other_interested_field',
        'other_goal',
        'joinned_as',
        'location_id',
        'community_updates',
        'accepted_terms'
    ];

    protected $cast = [
        'joinned_as' => 'integer',
        'community_updates' => 'boolean',
        'accepted_terms' => 'boolean'
    ];

    protected $appends = ['joinned_as_label'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function interestedFields()
    {
        return $this->belongsToMany(Profession::class, 'interested_field_user');
    }

    public function location()
    {
        return $this->belongsTo(Country::class);
    }

    public function getJoinnedAsLabelAttribute(){
        return match ($this->joinned_as){
            0 => 'Next Gen',
            1 => 'Aficionado',
            3 => 'Both'
        };
    }

}
