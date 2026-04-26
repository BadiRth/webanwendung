<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GearItem extends Model
{
    protected $fillable = [
        'name',
        'category',
        'condition',
        'purchase_date',
        'value',
        'notes',
        'image',
    ];
    public function getConditionLabelAttribute(): string
    {
    return match($this->condition) {
        'new'    => 'Neu',
        'good'   => 'Gut',
        'worn'   => 'Abgenutzt',
        'broken' => 'Kaputt',
        default  => $this->condition,
    };
    }
}