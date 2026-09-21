<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Banner extends Model
{
    protected $appends=['status'];

    protected function status(): Attribute
    {
        return Attribute::make(
             get: fn () => $this->is_active ? "<span class='badge bg-success'> Active </span>" : "<span class='badge bg-secondary'> Inactive</span>"
        );
    }
}
