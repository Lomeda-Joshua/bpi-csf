@extends('super_admin.layouts.layout')

@section('contents')


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="row">

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="row alig n-items-start">
          <div class="col-8">
            <h5 class="card-title mb-9 fw-semibold"> Total CSF generated</h5>
            <h4 class="fw-semibold mb-3">{{ $csf_data->count('id') ? $csf_data->count('id') : 0 }}</h4>
            <div class="d-flex align-items-center pb-1">
            </div>
          </div>
          <div class="col-4">
            <div class="d-flex justify-content-end">
              <div class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
                <i class="ti ti-album fs-6"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="row alig n-items-start">
          <div class="col-8">
            <h5 class="card-title mb-9 fw-semibold"> Total Internal Customers </h5>
            <h4 class="fw-semibold mb-3">{{ $internal_total ? $internal_total : 0  }}</h4>
            <div class="d-flex align-items-center pb-1">
            </div>
          </div>
          <div class="col-4">
            <div class="d-flex justify-content-end">
              <div class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
                <i class="ti ti-calendar fs-6"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="row alig n-items-start">
          <div class="col-8">
            <h5 class="card-title mb-9 fw-semibold"> Total External Customers </h5>
            <h4 class="fw-semibold mb-3">{{ $external_total ? $external_total : 0 }}</h4>
            <div class="d-flex align-items-center pb-1">
           
            </div>
          </div>
          <div class="col-4">
            <div class="d-flex justify-content-end">
              <div class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
                <i class="ti ti-currency-dollar fs-6"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="row alig n-items-start">
          <div class="col-8">
            <h5 class="card-title mb-9 fw-semibold"> Total Applied users </h5>
            <h4 class="fw-semibold mb-3">{{ $user }}</h4>
            <div class="d-flex align-items-center pb-1">
            </div>
          </div>
          <div class="col-4">
            <div class="d-flex justify-content-end">
              <div class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
                <i class="ti ti-users fs-6"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Recent CSF received by all the section</h5>

        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Office service catered</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Age</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Contact Details</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Date</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Time</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Actions</h6>
                    </th>
                </tr>
                </thead>
                <tbody>


                    @foreach( $csf as $items)
                    <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $items->id }}</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{ $items->name }}</h6>
                            <span class="fw-normal">{{ $items->internal_external == 2 ? "External customer" : "Internal customer" }}</span>                          
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{ $items->office->office_name }}</p>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{ $items->age }}</p>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{ $items->contact_details }}</p>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{ $items->csf_date }}</p>
                        </td>
                        <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 fs-4">{{ $items->csf_time }}</h6>
                        </td>

                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                              <button class="badge bg-success rounded-3 fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModal">View</button>
                          </div>
                        </td>

                    </tr>    
                    @endforeach                 
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection