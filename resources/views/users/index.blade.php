@extends('users.layouts.layout')

@section('contents')

<h2>You're signed on <b>{{ $office_user->office->office_name }}</b></h2>

<br>

    <div class="row">

        <div class="col-sm-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold"> Total CSF on this section </h5>
                  <h4 class="fw-semibold mb-3">{{ $csf_total->count('id') ? $csf_total->count('id') : 0 }}</h4>
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
                  <h4 class="fw-semibold mb-3">{{ count($internal_total) ? count($internal_total) : 0  }}</h4>
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
                  <h4 class="fw-semibold mb-3">{{ count($external_total) ? count($external_total) : 0 }}</h4>
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
                  <h5 class="card-title mb-9 fw-semibold"> CSF For this month </h5>
                  <h4 class="fw-semibold mb-3">{{ count($total_month) }}</h4>
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


<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Recent CSF for this section</h5>

        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4" >
                  <tr>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Office destination</h6>
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

                  @if( count($csf) > 0  )

                    @foreach( $csf as $items)
                      <tr>
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
                                <button class="badge bg-success rounded-3 fw-semibold">View</button>
                            </div>
                          </td>

                      </tr>    
                    @endforeach    

                  @else
                    <tr>
                      <td colspan="7" class="text-center">No CSF signed up yet</td>
                    </tr>
                  @endif

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection