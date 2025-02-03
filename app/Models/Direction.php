<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $abbreviation
 * @property string $description
 * @property int $status
 *
 * @package App\Models
 */


class Direction extends Model

{
    protected $fillable = [
        "title",
        "name",
        "abbreviation",
        "description",
        "status",
    ];

    public function position(): HasMany
    {
        return $this->hasMany(Position::class);
    }

}
