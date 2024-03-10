@extends('users.layouts.layout')

@section('contents')



<div class="card">
    <div class="card-body">
        <h2>Customer Satisfaction List</h2>
        <br>
        <table id="csf_table" class="striped" style="width:100%">
            <thead>
                <tr style="background-color:gray; color:white;">
                    <th class="text-center p-1">Name</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Contact Details</th>
                    <th class="text-center">Age</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $csf as $items)
                  <tr>
                      <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">{{ $items->name }}</h6>                   
                      </td>
                      <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">{{ $items->gender == 1 ? "Male" : "Female" }}</p>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal text-center">{{ $items->contact_details }}</p>
                        </td>
                      <td class="border-bottom-0">
                      <p class="mb-0 fw-normal text-center">{{ $items->age }}</p>
                      </td>
                      <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">{{ $items->csf_date }}</p>
                      </td>
                      <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">{{ $items->csf_time }}</p>
                      </td>
                      <td class="border-bottom-0 ">
                        <div class="d-flex align-items-center gap-2 ">
                            <button class="badge bg-success rounded-3 fw-semibold text-center">View</button>
                        </div>
                      </td>

                  </tr>    
                  @endforeach      
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