@extends('users.layouts.layout')

@section('contents')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Profile</h5>
      @foreach($profile_details as $item)
      <p class="mb-0">Section</p>
        {{ $item->office_id }}
      <p class="mb-0">Account Name</p>
        {{ $item->name }}
      <p class="mb-0">Date Created</p>
        {{ $item->created_at }}
      <p class="mb-0">Date Updated</p>
        {{ $item->updated_at }}
      @endforeach
    </div>
</div>
@endsection