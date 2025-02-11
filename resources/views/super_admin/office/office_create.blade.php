@extends('super_admin.layouts.layout')

@section('contents')

<style>
  .card-body{
    box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px !important;
  }
  
</style>

<a href="{{ route('super.office') }}" class="btn btn-danger">Return</a>
<div class="card">
    <div class="card-body">
    <h3><b>Create new Office</b></h3><br>
      <form method="post" action="{{ route('super.office.store') }}">
        @csrf
        @method('post')
        <div class="mb-3">
          <label for="office_name" class="form-label">Office Name</label>
          
          @error('office_name')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        
          <input type="text" class="form-control" id="office_name" name="office_name" aria-describedby="emailHelp">
            
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
       
      </form>
    </div>
  </div>

@endsection