@extends('super_admin.layouts.layout')

@section('contents')

<a href="{{ route('index.super-admin') }}" class="btn btn-danger">Return</a>
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