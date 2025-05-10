@extends('users.super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">
    <h3><b>Edit selected Office</b></h3><br>
      <form method="post" action="{{ route('super.office.edit-save', ['id' => $office->id ]) }}">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="office_name" class="form-label">Office Name</label>
          
          @error('office_name')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        
          <input type="text" class="form-control" id="office_name" name="office_name" value="{{ $office->office_name }}" aria-describedby="emailHelp">
            
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>

@endsection