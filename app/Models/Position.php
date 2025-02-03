<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



/**
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status
 * @property int $direction_id
 * @package App\Models
 */

class Position extends Model
{
    protected $fillable = [
        'name',
        "description",
        "status",
        "direction_id"
    ];

    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class);
    }

    public function team():HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
