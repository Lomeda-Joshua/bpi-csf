@extends('users.super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Profile</h5>


      <div class="row">

        <div class="col-md-3">
            <p class="mb-0"><b>Account Name :</b></p>
            {{ $user_data->last_name . ", " . $user_data->first_name }}
            <br><br>
      
            <p class="mb-0"><b>Role :</b></p>
          {{ $role_name }}
          <br><br>
          
        </div>

        <div class="col-md-3">
          
          <p class="mb-0"><b>Section :</b></p>
          {{ $user_data->office_id ? $user_data->office_id : "Super admin no section indicated"  }}
          <br><br>
    
         
        </div>


        <div class="col-md-3">
          <p class="mb-0"><b>Date Created : </b></p>
          {{ date('F d, Y ', strtotime($user_data->created_at)) }}
          <br><br>
    
          <p class="mb-0"><b>Date Updated :</b></p>
            {{ date('F d, Y', strtotime($user_data->updated_at)) }}
          <br><br>
        </div>

      </div>

    </div>
</div>
@endsection

