@extends('super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Authorized Personnel</h5>

      <a href="{{ route('super.admin-store.new.user') }}" id="new_user" class="btn btn-success m-1">Apply a new user</a>

      @if(auth()->user()->role_id == 3)
        <a id="restore_user" data-bs-toggle="modal" data-bs-target="#restore_deleted_modal" class="btn btn-danger m-1">Restore User</a>
      @endif
 
      <table id="personnel_list" class="striped" style="width:100%">
        <thead>
            <tr style="background-color:gray; color:white;">
                <th class="text-center p-1">Name</th>
                <th class="text-center">Role</th>
                <th class="text-center">Office</th>
                <th class="text-center">User email account</th>
                <th class="text-center">Created at</th>
                <th class="text-center">Updated at</th>
                <th class="text-center">Actions:</th>
            </tr>
        </thead>

        
        <tbody>

              

            @foreach($personnels as $item)
            <tr>
                <td class="text-center">{{ $item->name }}</td>
                <td class="text-center">
                    @switch($item->role_id)
                    
                    @case(1)
                        {{ "User" }}
                    @break

                    @case(2)
                        {{ "Admin" }}
                    @break

                    @case(3)
                        {{ "Super admin" }}
                    @break
                    
                    @endswitch
                </td>


                    <td class="text-center">{{ $item->office->office_name ?? "Super admin role"  }}</td>
                    <td class="text-center">{{ $item->email }}</td>
                    <td class="text-center">{{ date('F d, Y', strtotime($item->created_at))  }}</td>
                    <td class="text-center">{{ date('F d, Y', strtotime($item->updated_at))  }}</td>
                    <td class="text-center">

                    @php
            
                        $encrypted_id = Crypt::encryptString($item->id);
                    
                    @endphp
                  
                    <form method="POST" action="{{ route('super.admin-delete.user', $encrypted_id) }}">
                        @csrf
                        @method('DELETE')
                            <a data-bs-toggle="modal" data-bs-target="#personnel_modal" class="btn btn-success m-1">Edit</a>
                        @if($item->role_id != 3)
                            <button type="submit" class="btn btn-danger m-1">Delete</button>
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
</div>


@include('super_admin.modal.edit_user_profile')
@include('super_admin.modal.restore_delete')

<script>
    $("document").ready(function(){

        new DataTable('#personnel_list', {
            searching: false
        });

    });
</script>


@endsection