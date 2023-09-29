@extends('layouts.core_template')

@section('title', 'Mi Página')

@section('content')
     <div class="text-center">
        <h1 class="text-center mb-3 fw-bold">El Prestamo</h1>
    </div>
    <div>
        <a class="btn btn-info" href="{{Route ('applying.register')}}">Crear</a>
    </div>
     <table class="table text-center table-bordered table-hover table-light"">
          <thead>
               <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre 1</th>
                    <th scope="col">Nombre 2</th>
                    <th scope="col">Apelido 1</th>
                    <th scope="col">Apellido 2</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Tipo Doc</th>
                    <th scope="col">Num Documento</th>
                    <th scope="col">Nacionalidad</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Barrio</th>
                    <th scope="col">Ingreso</th>
                    <th scope="col">Trabajo</th>
                    <th scope="col">Nombre completo</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Tipo Familia</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
               </tr>
          </thead>
          <tbody>
                @foreach($applyings as $applying)
                    <tr>
                        <td>{{$applying->id}}</td>
                        <td>{{$applying->first_surname}}</td>
                        <td>{{$applying->middle_name}}</td>
                        <td>{{$applying->first_last_name}}</td>
                        <td>{{$applying->second_last_name}}</td>
                        <td>{{$applying->date_birth}}</td>
                        <td>{{$applying->type_document}}</td>
                        <td>{{$applying->document_number}}</td>
                        <td>{{$applying->nationality}}</td>
                        <td>{{$applying->city}}</td>
                        <td>{{$applying->email}}</td>
                        <td>{{$applying->cell_phone_number}}</td>
                        <td>{{$applying->adress}}</td>
                        <td>{{$applying->neighborhood}}</td>
                        <td>{{$applying->monthly_income}}</td>
                        <td>{{$applying->type_work}}</td>
                        <td>{{$applying->full_name}}</td>
                        <td>{{$applying->identification}}</td>
                        <td>{{$applying->cell_phone_number_family}}</td>
                        <td>{{$applying->address}}</td>
                        <td>{{$applying->family_type}}</td>
                        <td>
                            <form action="{{Route('applying.update',$applying)}}" method="get">
                                @csrf 
                                @method('update')
                                <button  class="btn btn-outline-success" type="submit">Actualizar</button>
                            </form> 
                        </td>
                        <td>
                            <form action="{{Route('applying.delete',$applying)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
     </table>
@endsection