@extends('super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">

        <a href="{{ route('set-control.number') }}" class="btn btn-success m-1">Set new control number</a>

        <table id="control_number_list" class="striped" style="width:100%">
            <thead>
                <tr style="background-color:gray; color:white;">
                    <th class="text-center p-1">Control Number:</th>
                    <th class="text-center p-1">Section</th>
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

<script>
    $("document").ready(function(){
        new DataTable('#control_number_list');
    })
</script>

@endsection