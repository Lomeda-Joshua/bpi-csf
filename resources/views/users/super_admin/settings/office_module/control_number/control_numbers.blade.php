@extends('users.super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">

        <a href="{{ route('super.office') }}" class="btn btn-danger">Return</a>
        <a href="{{ route('super.set-control.number') }}" class="btn btn-success m-1">Set new control number</a>
        

        <div class="table-responsive">
            <table id="control_number_list" class="table align-middle striped" style="width:100%">
                <thead>
                    <tr style="background-color:gray; color:white;">
                        <th class="text-center">Control Number:</th>
                        <th class="text-center">Section</th>
                        <th class="text-center">Created at</th>
                        <th class="text-center">Updated at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($control_number as $data)
                    <tr>
                        <td class="text-center">{{ $data->section->office_name . '-' . $data->control_number_year."-". $data->control_number_month."-". $data->control_number_count }}</td>            
                        <td class="text-center">{{ $data->section->office_name }}</td>
                        <td class="text-center">{{ $data->created_at }}</td>
                        <td class="text-center">{{ $data->updated_at }}</td>                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        

    </div>
</div>

<script>
    $("document").ready(function(){
        new DataTable('#control_number_list');
    })
</script>

@endsection