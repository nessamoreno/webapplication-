@extends('layouts.core_template')

@section('title', 'Mi Página')

@section('content')
     <h1>Esta página es para actualizar o modificar</h1>
     <form action="{{Route('applying.put',$applying)}}" method="post" >
          <h1 class="text-center mb-3 fw-bold">FORMULARIO</h1>
          <h4 class="text-center mb-3 text-success fs-6 fw-lighter">Actualizar tus datos</h4>
          @csrf
          @method('put')
          <h3 class="text-center"><b>Información Personal</b></h3>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Primer Nombre <b class="text-danger">*</b></label>
               <input type="text" name="first_surname" class="form-control" id="firstName" aria-describedby="emailHelp" value="{{$applying->first_surname}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Segundo Nombre</label>
               <input type="text" name="middle_name" class="form-control" id="secondName" aria-describedby="emailHelp" value="{{$applying->middle_name}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Primer Apellido <b class="text-danger">*</b></label>
               <input type="text" name="first_last_name" class="form-control" id="firstLastName" aria-describedby="emailHelp" value="{{$applying->first_last_name}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Segundo Apellido</label>
               <input type="text" name="second_last_name" class="form-control" id="secondLastName" aria-describedby="emailHelp" value="{{$applying->second_last_name}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento <b class="text-danger">*</b></label>
               <input type="date" name="date_birth" class="form-control" id="date_birth " aria-describedby="emailHelp" value="{{$applying->date_birth}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Tipo documento <b class="text-danger">*</b></label>
               <select name="type_document"  class="form-control" id="type_document" value="{{$applying->type_document}}">
                    <option value="0"></option>
                    <option value="identification">Cédula</option>
                    <option value="passport">Pasaporte</option>
                    <option value="foreign_identification">Cédula extranjera</option>
               </select>
          </div>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Número identificación<b class="text-danger">*</b></label>
               <input type="number" name="document_number" class="form-control" id="dateBirth " aria-describedby="emailHelp" value="{{$applying->document_number}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Nacionalidad <b class="text-danger">*</b></label>
               <input type="text" name="nationality" class="form-control" id="nacionality" aria-describedby="emailHelp" value="{{$applying->nationality}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Ciudad <b class="text-danger">*</b></label>
               <input type="text" name="city" class="form-control" id="city" aria-describedby="emailHelp" value="{{$applying->city}}">
          </div>
          <h3 class="text-center"><b>Información Contacto</b></h3>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Correo Electronico <b class="text-danger">*</b></label>
               <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{$applying->email}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Número Celular<b class="text-danger">*</b></label>
               <input type="number" name="cell_phone_number" class="form-control" id="numIphone" aria-describedby="emailHelp" value="{{$applying->cell_phone_number}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Dirección<b class="text-danger">*</b></label>
               <input type="text" name="adress" class="form-control" id="adress" aria-describedby="emailHelp" value="{{$applying->adress}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Barrio<b class="text-danger">*</b></label>
               <input type="text" name="neighborhood" class="form-control" id="neighborhood" aria-describedby="emailHelp" value="{{$applying->neighborhood}}">
          </div>
               
          <h3 class="text-center"><b>Información Financiera</b></h3>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Ingreso Mensual<b class="text-danger">*</b></label>
               <input type="number" name="monthly_income" class="form-control" id="monthlyIncome" aria-describedby="emailHelp" value="{{$applying->monthly_income}}">
          </div>
          <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tipo de empleo<b class="text-danger">*</b></label>
               <select name="type_work"  class="form-control" id="type_work" value="{{$applying->monthly_income}}">
                    <option value="0"></option>
                    <option value="part_time">Tiempo parcial</option>
                    <option value="time_full">Tiempo completo</option>
                    <option value="self_employed">Autonomo</option>
                    <option value = "other">Otro</option>
               </select>
          </div>
          <h3 class="text-center"><b>Referencia Personal</b></h3>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Nombre Completo <b class="text-danger">*</b></label>
               <input type="text" name="full_name" class="form-control" id="full_name" aria-describedby="emailHelp" value="{{$applying->full_name}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Cédula<b class="text-danger">*</b></label>
          <input type="number" name="identification" class="form-control" id="identification" aria-describedby="emailHelp" value="{{$applying->identification}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Celular<b class="text-danger">*</b></label>
               <input type="number" name="cell_phone_number_family" class="form-control" id="cell_phone_number_family" aria-describedby="emailHelp" value="{{$applying->cell_phone_number_family}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Dirección<b class="text-danger">*</b></label>
               <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp" value="{{$applying->address}}">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Tipo de Familia<b class="text-danger">*</b></label>
               <select class="form-control" id="family_type" name="family_type" aria-describedby="emailHelp" value="{{$applying->family_type}}">
                    <option value="0"></option>
                    <option value="father">Padre</option>
                    <option value="mother">Madre</option>
                    <option value="brother">Hermano</option>
                    <option value="sister">Hermana</option>
                    <option value="friend">Amigo</option>
                    <option value="other">Otro</option>
               </select>
          </div>
          <div class="mb-2 text-center">
               <button class="btn btn-primary btn-lg text-center" type= "submit">Guardar</button>
          </div>
     </form>
@endsection
