<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'full_name',
        'birth_date',
        'gender',
    ];

    /**
     * #eloquent-mutators#attribute-casting.
     * The attributes that should be cast.
     * When defining a date or datetime cast, you may also specify the date's format
     * @var array
     */

    protected $casts = [
        'birth_date' => 'datetime:Y-m-d',
    ];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */

    protected $primaryKey = 'staff_id';

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */

    protected $keyType = 'string';

    protected function getGenderFormatterAttribute($value)
    {
        return $value === 1 ? 'Male' : 'Female';
    }
}
