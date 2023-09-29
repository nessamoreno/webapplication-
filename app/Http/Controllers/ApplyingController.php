<?php

namespace App\Http\Controllers;

use App\Models\Applying;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class ApplyingController extends Controller
{
    public function create()
    {
        return view ('register');
    }

    public function store(Request $r)
    {   
        {
            try {
                    $r->validate([
                    'first_surname' => 'required|string',
                    'middle_name',
                    'first_last_name' => 'required|string',
                    'second_last_name',
                    'date_birth' => 'required|date',
                    'type_document' => 'required|string',
                    'document_number' => 'required',
                    'nationality' => 'required|string',
                    'city' => 'required|string',
                    'email' => 'required|email',
                    'cell_phone_number' => 'required',
                    'adress' => 'required|string',
                    'neighborhood' => 'required|string',
                    'monthly_income' => 'required',
                    'type_work' => 'required',
                    'full_name' => 'required|string',
                    'identification' => 'required',
                    'cell_phone_number_family' => 'required',
                    'address' => 'required|string',
                    'family_type' => 'required',
                    ]);
                   
                    $applying =  Applying::create([
                    'first_surname' => $r-> first_surname,
                    'middle_name' => $r-> middle_name,
                    'first_last_name' => $r-> first_last_name,
                    'second_last_name' => $r-> second_last_name,
                    'date_birth' => $r-> date_birth,
                    'type_document' => $r-> type_document,
                    'document_number' => $r-> document_number,
                    'nationality' => $r-> nationality,
                    'city' => $r-> city,
                    'email' => $r-> email,
                    'cell_phone_number' => $r-> cell_phone_number,
                    'adress' => $r-> adress,
                    'neighborhood' => $r-> neighborhood,
                    'monthly_income' => $r-> monthly_income,
                    'type_work' => $r-> type_work,
                    'full_name' => $r-> identification,
                    'identification' => $r-> identification,
                    'cell_phone_number_family' => $r-> cell_phone_number_family,
                    'address' => $r-> address,
                    'family_type' => $r-> family_type
                    ]);
                    $dateOfBirth = $r->date_birth;
                    $today = date('Y-m-d');
                    $age = date_diff(date_create($dateOfBirth), date_create($today))->y;

                    if ($age >= 18) {
                        // La persona es mayor de edad, puedes continuar con el proceso
                        // ... tu código de creación de Applying ...
            
                    return $this->list();
                    } else {
                        // La persona no es mayor de edad, puedes mostrar un mensaje de error o tomar alguna otra acción
                        alert('error', 'Debes ser mayor de edad para realizar esta solicitud.');
                    }
                    $applying ->save();
                    return $this->list();
                } catch (\Exception $e) {
                    throw $e;
                    // unique:posts
                }
        }
    }

    
    public function list()
    {
        $data['applyings'] = Applying::all();
        return view('home',$data);
    }

    
    public function update($id, Request $r)
    {
        $applying = Applying::find($id);
        return view('update',["applying" => $applying]);
    }

    
    public function put($id, Request $r)
    {
        try {
            $applying = Applying::find($id);
            $applying->update($r->all());
            $applying->save();
            return $this->list();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function delete($id,Request $r)
    {
        $applying = Applying::find($id);
        $applying->delete();
        return $this->list();
    }
}