<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Address\PermanentAddress;
use App\Models\Address\ResidentialAddress;
use App\Models\CivilServiceEligibility\CivilServiceEligibilty;
use App\Models\EducationalBackground\EducationalBackground;
use App\Models\FamilyBackground\FamilyBackground;
use App\Models\LearningAndDevelopment\LearningAndDevelopment;
use App\Models\OtherInformation\OtherInformation;
use App\Models\Reference\Reference;
use App\Models\Survey\Survey;
use App\Models\VoluntaryWork\VoluntaryWork;
use App\Models\WorkExperience\WorkExperience;
use PDO;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'place_of_birth',
        'sex',
        'civil_status',
        'height',
        'weight',
        'blood_type',
        'gsis_id',
        'pag_ibig_id',
        'philhealth_id',
        'sss_id',
        'tin_id',
        'agency_employee_no',
        'citizenship',
        'country',
        'telephone_no',
        'mobile_no',
        'email',
    ];

    public function residentialAddress()
    {
        return $this->hasOne(ResidentialAddress::class);
    }

    public function permanentAddress()
    {
        return $this->hasOne(PermanentAddress::class);
    }

    public function familyBackground()
    {
        return $this->hasOne(FamilyBackground::class);
    }

    public function educationalBackground()
    {
        return $this->hasMany(EducationalBackground::class);
    }

    public function civilServiceEligibility()
    {
        return $this->hasMany(CivilServiceEligibilty::class);
    }

    public function workExperience()
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function voluntaryWork()
    {
        return $this->hasMany(VoluntaryWork::class);
    }

    public function learningAndDevelopment()
    {
        return $this->hasMany(LearningAndDevelopment::class);
    }

    public function otherInformation()
    {
        return $this->hasMany(OtherInformation::class);
    }

    public function survey()
    {
        return $this->hasOne(Survey::class);
    }

    public function reference()
    {
        return $this->hasMany(Reference::class);
    }
}
