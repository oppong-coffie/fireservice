<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;
    protected $fillable = ['profile_pic', 'firstname', 'surname', 'dob', 'pob', 'marital_status', 'spouse', 'num_children', 'names_children', 'age', 'sex', 'languages', 'qualification', 'courses', 'contact', 'email', 'hometown', 'residential_address', 'kin_name', 'kin_phone', 'bank_name', 'bank_number', 'voters_id', 'national_id', 'rank', 'staff_id', 'date_of_enlishment', 'height', 'shirt_size', 'cap_beret_size', 'boot_size', 'shoe_size', 'disciplinary', 'station', 'previous_station', 'department', 'previous_department', 'retirement_date', 'medical_condition', 'allergies', 'blood_type'];
    
}
