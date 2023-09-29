<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applying extends Model
{
    use HasFactory;
    protected $table = 'applying';
    protected $fillable =[
        'first_surname',
        'middle_name',
       'first_last_name',
        'second_last_name',
        'date_birth',
        'type_document', 
        'document_number',
        'nationality',
        'city',
        'email',
        'cell_phone_number',
        'adress',
        'neighborhood', 
        'monthly_income',
        'type_work',
        'full_name',
        'identification',
        'cell_phone_number_family',
        'address',
        'family_type'
    ];
}