@extends('users.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Profile</h5>
    
      <p class="tagname mb-0"><b>Account Name</b></p>
        {{ $profile->name }} <br><br>
      <p class="tagname mb-0"><b>Date Created</b></p>
        {{ $profile->created_at }} <br><br>
      <p class=" tagname mb-0"><b>Date Updated</b></p>
        {{ $profile->updated_at }} <br><br>
      
    </div>
</div>
@endsection