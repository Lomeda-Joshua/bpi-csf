@extends('users.public_users.layouts.layout')

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
      
        
        @if( empty($role_id_check)  )

          <h4>Set as super-admin</h4>
          <form method="post" action="{{ route('profile.update', [ 'id' => $profile->id ])  }}" role="form" >
            @csrf
            @method('put')
            
            <input value="3" name="role_id" id="role_id" type="hidden" />
            <button type="submit" id="profile_update" class="btn btn-success m-1">Apply as Super-admin</button>

          </form> 

        @endif


    </div>

    
</div>
@endsection