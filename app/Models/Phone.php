<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 * @property int $id
 * @property string $phone
 * @package App\Models
 */


class Phone extends Model
{
    protected $fillable = [
        "phone",
        "employee_id"
    ];

    public function employee():BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
