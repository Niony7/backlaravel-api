@extends('layout')

@section('content')


<h1>  Créer un nouveau client</h1>
<br>
<form action="/clients" method="POST">
       @csrf 
         <div class="form-group">
             <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="entrer votre pseude....">
            
             <!-- message d'error quand le champs pseudo est vide -->
             @error('name')
             <div class="invalid-feedback">
             {{ $errors ->first('name')}}
             </div>
             @enderror
             <!-- -->
            
         </div>
          <br>
         <div class="form-group">
             <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
             placeholder="entrer votre email...">
         
             @error('email')
             <div class="invalid-feedback">
             {{ $errors ->first('email')}}
             </div>
             @enderror

          </div>
         
         <br>

         <div class="form-group">
            <select class="custom-select  @error('status') is-invalid @enderror" name="status">
               <option value="1">Actif</option>
               <option value="0">Inactif</option>
            </select>
            @error('stutus')
             <div class="invalid-feedback">
             {{ $errors ->first('status')}}
             </div>
            @enderror

         </div>

         <br>
         <div class="form-group">
         <select class="custom-select  @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
            
            @foreach ($entreprises as $entreprise)
            <option value="{{ $entreprise->id }}" > {{ $entreprise->name }} </option>
            @endforeach

            </select>
            @error('entreprise_id')
             <div class="invalid-feedback">
             {{ $errors -> first('entreprise_id')}}
             </div>
            @enderror

         </div>

         <br>
         <button type="submit" class="btn btn-primary">ajouter le clients </button>

      </form>

@endsection