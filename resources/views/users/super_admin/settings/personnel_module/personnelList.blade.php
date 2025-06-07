@extends('users.super_admin.layouts.layout')

@section('contents')

    <div class="card">
        <div class="card-body">


            <h5 class="card-title fw-semibold mb-4">Authorized Personnel</h5>
            <a href="{{ route('super.admin-store.new.user') }}" id="new_user" class="btn btn-primary m-1">Apply a new user</a>

            @if (auth()->user()->role_id == 3)
                <a id="restore_user" data-bs-toggle="modal" data-bs-target="#restore_deleted_modal"
                    class="btn btn-danger m-1">Restore User</a>
            @endif

            <div class="table-responsive">
                <table id="personnel_list" class="table text-nowrap mb-0 align-middle" >
                    <thead>
                        <tr style="background-color:gray; color:white;">
                            <th class="text-center">Name</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Office</th>
                            <th class="text-center">User email account</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Updated at</th>
                            <th class="text-center">Actions:</th>
                        </tr>
                    </thead>
    
    
                    <tbody>
    
    
    
                        @foreach ($personnels as $item)
                            <tr>
                                <td class="text-center">{{ $item->last_name . ", " . $item->first_name }}</td>
                                <td class="text-center">
                                    @switch($item->role_id)
                                            @case(1)
                                                {{ 'User' }}
                                            @break
        
                                            @case(2)
                                                {{ 'Admin' }}
                                            @break
        
                                            @case(3)
                                                {{ 'Super admin' }}
                                            @break
                                    @endswitch
                                </td>
    
    
                                <td class="text-center">{{ $item->office->office_name ?? 'Super admin role' }}</td>
                                <td class="text-center">{{ $item->email }}</td>
                                <td class="text-center">{{ date('F d, Y', strtotime($item->created_at)) }}</td>
                                <td class="text-center">{{ date('F d, Y', strtotime($item->updated_at)) }}</td>
                                <td class="text-center">
    
                                    @php
                                        $encrypted_id = Crypt::encryptString($item->id);
                                    @endphp
    
                                    <form method="POST" action="{{ route('super.admin-delete.user', $encrypted_id) }}">
                                        @csrf
                                        @method('DELETE')

                                        <a data-bs-toggle="modal" data-bs-target="#personnel_modal"
                                            class="btn btn-primary m-1 personnel_modal_button" data-info={{ $item }} >Edit</a>

                                        @if ($item->role_id != 3)
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
    </div>


    <div class="card" style="background-color: #13deb9;">
        <div class="card-body">

            <h5 class="card-title fw-semibold mb-4 text-white">Assigned Focal Personnel</h5>
            <div class="table-responsive">
                <table id="assign_focal" class="table text-nowrap mb-0 align-middle" style="width:100%">
                    <thead>
                        <tr style="background-color:gray; color:white;">
                            <th class="text-center">Name</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Office</th>
                            <th class="text-center">User email account</th>
                            <th class="text-center">Assigning date</th>
                            <th class="text-center">Actions:</th>
                        </tr>
                    </thead>
    
    
                    <tbody>
    
    
    
                        @foreach ($assigned_personnel as $item)

                            <tr>
                                <td class="text-center">{{ $item->last_name . " " . $item->first_name }}</td>
                                <td class="text-center">
                                    @switch($item->role_id)
                                        @case(1)
                                            {{ 'User' }}
                                        @break
    
                                        @case(2)
                                            {{ 'Admin' }}
                                        @break
    
                                        @case(3)
                                            {{ 'Super admin' }}
                                        @break
                                    @endswitch
                                </td>
    
    
                                <td class="text-center">{{ $item->office->office_name ?? 'Super admin role' }}</td>
                                <td class="text-center">{{ $item->email }}</td>
                                <td class="text-center">{{ date('F d, Y', strtotime($item->created_at)) }}</td>
                                <td class="text-center">
    
                                    @php
                                        $encrypted_id = Crypt::encryptString($item->id);
                                    @endphp
    
                                    <form method="POST" action="{{ route('super.admin-assign.focal', $encrypted_id) }}">
                                        @csrf
                                        @method('POST')

                                        @if ($item->is_focal == 1)
                                            <p class="btn btn-warning m-1">Already a focal</p>
                                            <button class="btn btn-danger m-1" name="assign_as_focal" value="0">Remove as focal</button>

                                        @elseif( $item->is_focal == 0 )
                                            <button class="btn btn-primary m-1" name="assign_as_focal" value="1" >Assign as focal</button>
                                        @endif

                                    </form>
                                </td>
                            </tr>
                        @endforeach
    
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    @include('users.super_admin.settings.personnel_module.modal.edit_user_profile')
    @include('users.super_admin.settings.personnel_module.modal.restore_delete')

    <script>
        $("document").ready(function() {

                new DataTable('#personnel_list', {
                    searching: false
                });

                new DataTable('#assign_focal', {
                    searching: true
                });


                $('#restore_deleted_modal').on('hidden.bs.modal', function () {
                    window.location.reload();
                });

                
                $('.personnel_modal_button').on('click', function(){
                    let personnel_data = $(this).data('info');
                    let personnel_data_id = personnel_data.id;

                    $('#personnel_modal_' + personnel_data_id);

                    
                    console.log(personnel_data);
                    // $('.first_name_input').val(personnel_data.first_name);
                    // $('.last_name_input').val(personnel_data.last_name);
                });
                
        });
    </script>
@endsection
