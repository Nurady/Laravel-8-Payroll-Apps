<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    // karyawan punya 2 jabatan : belongsToMany

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
