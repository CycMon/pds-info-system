<?php

namespace App\Models\OtherInformation;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title'
    ];

    public function personaInformation()
    {
        return $this->belongsTo(PersonalInformation::class);
    }
}
