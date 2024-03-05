@extends('layouts.layout')

@section('contents')



<div class="card">
    <div class="card-body">
        <h2>Customer Satisfaction List</h2>
        <br>
        <table id="csf_table" class="striped" style="width:100%">
            <thead>
                <tr style="background-color:gray; color:white;">
                    <th class="text-center p-1">Name</th>
                    <th class="text-center">Position</th>
                    <th class="text-center">Office</th>
                    <th class="text-center">Age</th>
                    <th class="text-center">Start date</th>
                    <th class="text-center">Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                </tr>
                
            </tbody>
        </table>

    </div>
</div>

<script>
    $("document").ready(function(){
        new DataTable('#csf_table');
    })
</script>


@endsection