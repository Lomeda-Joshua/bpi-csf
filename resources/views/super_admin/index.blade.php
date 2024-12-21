@extends('super_admin.layouts.layout')

@section('contents')

  <style>

      .container_label{
        display: flex;
        flex-direction: row;
        width:200px;
        background-color: tomato;
      }


      /* Hide the browser's default checkbox */
      .container_radio {
        display: block;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }


      /* Hide the browser's default checkbox */
      .container_radio input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
      }

      .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 250px;
        width: 25px;
        background-color: #eee;
      }

      /* On mouse-over, add a grey background color */
      .container_radio:hover input ~ .checkmark {
        background-color: #ccc;
      }


      label{
        font-size:15px;
      }

      .modal-content{
        width:1100px !important;
      }
  </style>

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
                                <div
                                    class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
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
                            <h4 class="fw-semibold mb-3">{{ $internal_total ? $internal_total : 0 }}</h4>
                            <div class="d-flex align-items-center pb-1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div
                                    class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
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
                                <div
                                    class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
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
                                <div
                                    class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
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


                        @if ($csf->count() == 0)
                            <tr>
                                <td class="border-bottom-0 text-center" colspan='8'>
                                    <h6 class="fw-semibold mb-0"><span style="color:red; font-size:16px;">No Data record
                                            yet!</span></h6>
                                </td>
                            </tr>
                        @else
                            @foreach ($csf as $items)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $items->id }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">{{ $items->name }}</h6>
                                        <span
                                            class="fw-normal">{{ $items->internal_external == 2 ? 'External customer' : 'Internal customer' }}</span>
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
                                        <p class="mb-0 fw-normal">{{ date('F d, Y', strtotime($items->csf_date)) }}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0 fs-4">{{ date('h:i a', strtotime($items->csf_time)) }}
                                        </h6>
                                    </td>

                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <button class="badge bg-success rounded-3 fw-semibold btnCSF" data-bs-toggle="modal"
                                                data-bs-target="#viewModal" data-id="{{$items->id}}" >View</button>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="viewModalLabel">Customer Satisafaction form of: </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <div class="container">
                    <div class="row">
                      <div class="col-4">One</div>
                      <div class="col-4">Two</div>
                      <div class="col-4">Three</div>
                    </div>
                  </div>
           
                  <table class="table mb-0 align-middle" style="width:100%; overflow-x:auto;">
                    <thead class="text-center align-middle">
                        <tr class="col">
                            <td style="background-color:#3c835c; color:white;"><b>Criteria/</b><i>Kriterya</i></td>
                            <td class='col'>
                                <label><b>Very Satisfied/ Lubos na nasiyahan</b></label>
                            </td>
                            <td class='col'>
                                <label><b>Satisfied/ Nasiyahan</b></label>
                            </td>
                            <td class='col'>
                                <label><b>Neutral</b></label>
                            </td>
                            <td class='col'>
                                <label><b>Hindi Nasiyahan</b></label>
                            </td>
                            <td class='col'>
                                <label><b>Very Dissatisfied/ Lubos na hindi Nasiyahan</b></label>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label><b>1. Quality of goods or services provided</b>/ <i>Kalidad ng produkto o serbisyong natanggap?</i></label>
                            </td>

                            <td class="text-center container_label">

                                <label class="container_radio" for="">
                                  <input type="radio" name="criteria_quality_of_goods" value = "5">
                                  <span class="checkmark"></span>
                                </label>

                                <label class="container_radio" for="">
                                  <input type="radio" name="criteria_quality_of_goods" value = "4">
                                  <span class="checkmark"></span>
                                </label>

                                <label class="container_radio" for="">
                                  <input type="radio" name="criteria_quality_of_goods" value = "3">
                                  <span class="checkmark"></span>
                                </label>

                                <label class="container_radio" for="">
                                  <input type="radio" name="criteria_quality_of_goods" value = "2">
                                  <span class="checkmark"></span>
                                </label>

                                <label class="container_radio" for="">
                                  <input type="radio" name="criteria_quality_of_goods" value = "1">
                                  <span class="checkmark"></span>
                                </label>   

                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label><b>2. Courteousness</b>/ <i>Pagiging magalang?</i></label>
                            </td>
                            <td class="text-center">
                                <input type="radio" name="criteria_courteousness" id="courteousness" value = "5">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="criteria_courteousness" id="courteousness" value = "4">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="criteria_courteousness" id="courteousness" value = "3">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="criteria_courteousness" id="courteousness" value = "2">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="criteria_courteousness" id="courteousness" value = "1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><b>3. Responsiveness </b>/ <i>Mabilis na pagtugon?</i></label>
                            </td>
                            <td class="text-center"><input type="radio" name="criteria_responsiveness" id="internal" value = "5"></td>
                            <td class="text-center"><input type="radio" name="criteria_responsiveness" id="internal" value = "4"></td>
                            <td class="text-center"><input type="radio" name="criteria_responsiveness" id="internal" value = "3"></td>
                            <td class="text-center"><input type="radio" name="criteria_responsiveness" id="internal" value = "2"></td>
                            <td class="text-center"><input type="radio" name="criteria_responsiveness" id="internal" value = "1"></td>
                        </tr>
                        <tr>
                            <td>
                                <label><b>4. Overall customer goods or services provided</b>/ <i>Kabuoang serbisyong natanggap?</i></label>
                            </td>
                            <td class="text-center"><input type="radio" name="criteria_overall_experience" id="internal" value = "5"></td>
                            <td class="text-center"><input type="radio" name="criteria_overall_experience" id="internal" value = "4"></td>
                            <td class="text-center"><input type="radio" name="criteria_overall_experience" id="internal" value = "3"></td>
                            <td class="text-center"><input type="radio" name="criteria_overall_experience" id="internal" value = "2"></td>
                            <td class="text-center"><input type="radio" name="criteria_overall_experience" id="internal" value = "1"></td>
                        </tr>
                        <tr>
                            <td>
                                <label style="text-transform:uppercase"><b>Promoter score</b></label>
                            </td>
                            <td>
                                <label style="font-size:13px"><b>(5) STRONGLY AGREE</b><br><i>LUBOS NA NASIYAHAN</i></label>
                            </td>
                            <td>
                                <label style="font-size:13px"><b>(4) AGREE</b><br><i>SANG-AYON</i></label>
                            </td>
                            <td>
                                <label style="font-size:13px"><b>(3) NEUTRAL</b></label>
                            </td>
                            <td>
                                <label style="font-size:13px"><b>(2) DISAGREE</b><br><i>HINDI SANG-AYON</i></label>
                            </td>
                            <td>
                                <label style="font-size:13px"><b>(1) STRONGLY AGREE</b><br><i>LUBOS NA HINDI SANG-AYON</i></label>
                            </td>                                                
                        </tr>
                        <tr>
                            <td>
                                <label><b>5. BPI products and services are worth promotable</b> / <i>Ang mga produkto at serbisyo ng BPI ay karapat-dapat mapalaganap</i></label>
                            </td>
                            <td class="text-center"><input type="radio" name="promoter_score" id="internal" value = "5"></td>
                            <td class="text-center"><input type="radio" name="promoter_score" id="internal" value = "4"></td>
                            <td class="text-center"><input type="radio" name="promoter_score" id="internal" value = "3"></td>
                            <td class="text-center"><input type="radio" name="promoter_score" id="internal" value = "2"></td>
                            <td class="text-center"><input type="radio" name="promoter_score" id="internal" value = "1"></td>
                        </tr>
                    </tbody>
                </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Print</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });



      $(".btnCSF").click(function(){
        let id =  $(this).attr("data-id");
        
        $.ajax({
          url: "{{ url('super-admin/dashboard', '') }}" + "/" + id,
          method: "POST",
          success: function(result){
              console.log(result);
          }

        });


      });



    });
</script>


@endsection
