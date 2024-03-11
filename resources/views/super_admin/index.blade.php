@extends('super_admin.layouts.layout')

@section('contents')

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
            <h4 class="fw-semibold mb-3">{{ $csf_data->count('internal_external') ? $csf_data->count('internal_external') : 0  }}</h4>
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
            {{-- <h4 class="fw-semibold mb-3">{{ count($external_total) ? count($external_total) : 0 }}</h4> --}}
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
            {{-- <h4 class="fw-semibold mb-3">{{ count($total_month) }}</h4> --}}
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
            <h5 class="card-title mb-9 fw-semibold"> Total Application users </h5>
            <h4 class="fw-semibold mb-3">{{ count($user) }}</h4>
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
  
    <div class="row">
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <a href="javascript:void(0)"><img src="../assets/images/products/s4.jpg" class="card-img-top rounded-0" alt="..."></a>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
            <div class="card-body pt-3 p-4">
              <h6 class="fw-semibold fs-4">Boat Headphone</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0">$50 <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <a href="javascript:void(0)"><img src="../assets/images/products/s5.jpg" class="card-img-top rounded-0" alt="..."></a>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
            <div class="card-body pt-3 p-4">
              <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <a href="javascript:void(0)"><img src="../assets/images/products/s7.jpg" class="card-img-top rounded-0" alt="..."></a>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
            <div class="card-body pt-3 p-4">
              <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
              <a href="javascript:void(0)"><img src="../assets/images/products/s11.jpg" class="card-img-top rounded-0" alt="..."></a>
              <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
            <div class="card-body pt-3 p-4">
              <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                </ul>
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
                              <button class="badge bg-success rounded-3 fw-semibold">View</button>
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