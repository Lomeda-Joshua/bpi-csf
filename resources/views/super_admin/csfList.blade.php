@extends('super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">
        <h2>Customer Satisfaction List</h2>


        @if( count($csf)  )

            <a href="{{ route('print-summary') }}" target="_blank" id="printSummary" class="btn btn-success m-1">Print summary</a>

        @endif

        
        
        <table id="csf_table" class="table align-middle striped" style="width:100%">
            <thead>
                <tr style="background-color:gray; color:white;">
                    <th class="text-center">Name</th>
                    <th class="text-center">Age</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Contact Details</th>
                    <th class="text-center">Office</th>
                    <th class="text-center">CSF Date</th>
                    <th class="text-center">CSF Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($csf as $items)
                <tr>
                    <td>{{ $items->name }}</td>
                    <td>{{ $items->age }}</td>
                    <td>{{ $items->gender == 1 ? "Male" : "Femaie" }}</td>
                    <td>{{ $items->contact_details }}</td>
                    <td>{{ $items->office->office_name }}</td>
                    <td>{{ $items->csf_date }}</td>
                    <td>{{ $items->csf_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

<script>
    $("document").ready(function(){
        new DataTable('#csf_table');


        $("#printSummary").click(function(){
            
        });
    })
</script>


@endsection