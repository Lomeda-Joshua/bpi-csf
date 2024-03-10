@extends('users.layouts.layout')

@section('contents')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Profile</h5>
    
      <p class="mb-0"><b>Account Name</b></p>
        {{ $profile->name }}
      <p class="mb-0"><b>Date Created</b></p>
        {{ $profile->created_at }}
      <p class="mb-0"><b>Date Updated</b></p>
        {{ $profile->updated_at }}
      
    </div>
</div>
@endsection