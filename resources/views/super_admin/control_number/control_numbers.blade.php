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
                
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>                    
                    <td class="text-center"></td>                    
                </tr>
                
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