<?php

namespace App\Models\Survey;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;


    protected $guarded = ['id', 'personal_information_id', 'timestamps'];


    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformation::class);
    }
}
