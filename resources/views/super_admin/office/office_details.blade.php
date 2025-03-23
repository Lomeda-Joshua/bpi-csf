@extends('super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">

      <a href="{{ route('super.office.create') }}" class="btn btn-primary m-1">Create new office</a>
      <a href="{{ route('super.control.number') }}" class="btn btn-success m-1">Set control number</a>

      <table id="office_table" class="table align-middle striped" style="width:100%">
        <thead>
            <tr style="background-color:gray; color:white;">
                <th class="text-center">Name</th>
                <th class="text-center">Total CSF</th>
                <th class="text-center">Created At</th>
                <th class="text-center">Updated At</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($office as $items)
            <tr>
                <td>{{ $items->office_name }}</td>
                <td class="text-center">{{ $items->customer_satisfaction->count('id') }}</td>
                <td>{{ date('F d, Y', strtotime($items->created_at))  }}</td>
                <td>{{ date('F d, Y', strtotime($items->updated_at))  }}</td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                      <a href="{{ route('super.office.edit', ['id' => $items->id ]) }}" class="badge bg-primary rounded-3 fw-semibold">Edit</a>
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

      new DataTable('#office_table');
      
  });

</script>

@endsection