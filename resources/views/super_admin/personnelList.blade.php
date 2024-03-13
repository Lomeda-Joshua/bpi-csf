@extends('super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Authorized Personnel</h5>
      <table id="personnel_list" class="striped" style="width:100%">
        <thead>
            <tr style="background-color:gray; color:white;">
                <th class="text-center p-1">Name</th>
                <th class="text-center">Role</th>
                <th class="text-center">Office</th>
                <th class="text-center">Created at</th>
                <th class="text-center">Updated at</th>
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
                <td class="text-center">{{ $item->created_at  }}</td>
                <td class="text-center">{{ $item->updated_at  }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>

<script>
    $("document").ready(function(){
        new DataTable('#personnel_list');
        new DataTable('#authorize_list');
    })
</script>
@endsection