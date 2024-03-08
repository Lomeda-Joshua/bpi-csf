@extends('super_admin.layouts.layout')

@section('contents')

<div class="card">
  <div class="row">
    <div class="card-body p-4">
      <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
      <div class="row align-items-center">
        <div class="col-8">
          <h4 class="fw-semibold mb-3">$36,358</h4>
          <div class="d-flex align-items-center mb-3">
            <span class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
              <i class="ti ti-arrow-up-left text-success"></i>
            </span>
            <p class="text-dark me-1 fs-3 mb-0">+9%</p>
            <p class="fs-3 mb-0">last year</p>
          </div>
          <div class="d-flex align-items-center">
            <div class="me-4">
              <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
              <span class="fs-2">2023</span>
            </div>
            <div>
              <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
              <span class="fs-2">2023</span>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-center">
            <div id="breakup" style="min-height: 128.7px;"><div id="apexchartsmdmiptfbj" class="apexcharts-canvas apexchartsmdmiptfbj apexcharts-theme-light" style="width: 180px; height: 128.7px;"><svg id="SvgjsSvg1487" width="180" height="128.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1489" class="apexcharts-inner apexcharts-graphical" transform="translate(28, 0)"><defs id="SvgjsDefs1488"><clipPath id="gridRectMaskmdmiptfbj"><rect id="SvgjsRect1491" width="132" height="150" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskmdmiptfbj"></clipPath><clipPath id="nonForecastMaskmdmiptfbj"></clipPath><clipPath id="gridRectMarkerMaskmdmiptfbj"><rect id="SvgjsRect1492" width="130" height="152" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1493" class="apexcharts-pie"><g id="SvgjsG1494" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1495" r="41.59756097560976" cx="63" cy="63" fill="transparent"></circle><g id="SvgjsG1496" class="apexcharts-slices"><g id="SvgjsG1497" class="apexcharts-series apexcharts-pie-series" seriesName="2022" rel="1" data:realIndex="0"><path id="SvgjsPath1498" d="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 103.6849453198706 100.69516662913668 L 93.51370898990294 91.27137497185251 A 41.59756097560976 41.59756097560976 0 0 0 63 21.40243902439024 L 63 7.536585365853654 z" fill="rgba(93,135,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="132.81553398058253" data:startAngle="0" data:strokeWidth="0" data:value="38" data:pathOrig="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 103.6849453198706 100.69516662913668 L 93.51370898990294 91.27137497185251 A 41.59756097560976 41.59756097560976 0 0 0 63 21.40243902439024 L 63 7.536585365853654 z"></path></g><g id="SvgjsG1499" class="apexcharts-series apexcharts-pie-series" seriesName="2021" rel="2" data:realIndex="1"><path id="SvgjsPath1500" d="M 103.6849453198706 100.69516662913668 A 55.463414634146346 55.463414634146346 0 0 1 7.594622861729029 60.463359102040855 L 21.445967146296773 61.097519326530644 A 41.59756097560976 41.59756097560976 0 0 0 93.51370898990294 91.27137497185251 L 103.6849453198706 100.69516662913668 z" fill="rgba(236,242,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="139.8058252427184" data:startAngle="132.81553398058253" data:strokeWidth="0" data:value="40" data:pathOrig="M 103.6849453198706 100.69516662913668 A 55.463414634146346 55.463414634146346 0 0 1 7.594622861729029 60.463359102040855 L 21.445967146296773 61.097519326530644 A 41.59756097560976 41.59756097560976 0 0 0 93.51370898990294 91.27137497185251 L 103.6849453198706 100.69516662913668 z"></path></g><g id="SvgjsG1501" class="apexcharts-series apexcharts-pie-series" seriesName="2020" rel="3" data:realIndex="2"><path id="SvgjsPath1502" d="M 7.594622861729029 60.463359102040855 A 55.463414634146346 55.463414634146346 0 0 1 62.99031980805149 7.536586210609762 L 62.99273985603862 21.402439657957324 A 41.59756097560976 41.59756097560976 0 0 0 21.445967146296773 61.097519326530644 L 7.594622861729029 60.463359102040855 z" fill="rgba(249,249,253,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="87.37864077669906" data:startAngle="272.62135922330094" data:strokeWidth="0" data:value="25" data:pathOrig="M 7.594622861729029 60.463359102040855 A 55.463414634146346 55.463414634146346 0 0 1 62.99031980805149 7.536586210609762 L 62.99273985603862 21.402439657957324 A 41.59756097560976 41.59756097560976 0 0 0 21.445967146296773 61.097519326530644 L 7.594622861729029 60.463359102040855 z"></path></g></g></g></g><line id="SvgjsLine1503" x1="0" y1="0" x2="126" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1504" x1="0" y1="0" x2="126" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1490" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark" style="left: -10.5078px; top: -5.59375px;"><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(249, 249, 253);"></span><div class="apexcharts-tooltip-text" style="font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">2020: </span><span class="apexcharts-tooltip-text-y-value">25</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(249, 249, 253);"></span><div class="apexcharts-tooltip-text" style="font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">2020: </span><span class="apexcharts-tooltip-text-y-value">25</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(249, 249, 253);"></span><div class="apexcharts-tooltip-text" style="font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">2020: </span><span class="apexcharts-tooltip-text-y-value">25</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
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