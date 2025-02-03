<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $description
 * @property string $image
 * @property string $phone_id
 * @property int $position_id
 * @package App\Models
 */




class Employee extends Model
{

    protected $fillable = [
        "first_name",
        "last_name",
        "description",
        "image",
        "position_id"
    ];
    public function position():BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
    public function phone(): HasMany
    {
        return $this->hasMany(Phone::class);
    }
}
