@extends('users.layouts.layout')

@section('contents')

  <!-- Modal -->
  <div class="modal fade" id="csfFormWindow" tabindex="-1" aria-labelledby="csfFormWindow" aria-hidden="true" >
   
    <div class="modal-dialog" style="margin-left:24vw !important; margin-right:auto !important;">

      <div class="modal-content" style="width:1000px !important; margin-left:0px !important;">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                <table class="table mb-0 align-middle" style="width:100%; font-size:13px;">
                  <thead class="text-center align-middle">
                      <tr class="col">
                          <td style="width:30%; background-color:#3c835c; color:white;"><b>Criteria/</b><i>Kriterya</i></td>
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
                          <td class="text-center">
                              <input type="radio" name="criteria_quality_of_goods" value = "5">
                          </td>
                          <td class="text-center">
                              <input type="radio" name="criteria_quality_of_goods" value = "4">
                          </td>
                          <td class="text-center">
                              <input type="radio" name="criteria_quality_of_goods" value = "3">
                          </td>
                          <td class="text-center">
                              <input type="radio" name="criteria_quality_of_goods" value = "2">
                          </td>
                          <td class="text-center">
                              <input type="radio" name="criteria_quality_of_goods" value = "1">
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
          <button type="button" class="btn btn-primary">Print</button>
        </div>
      </div>


    </div>
    
  </div>

<div class="card">
    <div class="card-body">
        <h2>Customer Satisfaction Form List</h2>
        <br>

        <form action="{{route('print-summary-user')}}" method="post" >

          @csrf
          @method('post')

        <label><b>Select Date range:</b></label>
        <input style="width:250px" type="text" id="datefilter" name="datefilter" class="form-control" value="" autocomplete="false" />
        <br>

        @if( !empty( count($csf) ) )
              <button type="submit" class='btn btn-primary' id="PrintBtn" disabled >Print</button>

        </form>
        @else
              <h5 class="text-danger">No CSF data yet</h5>
        @endif
      
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
              

              

              @if( !empty(count($csf)) )
                  @foreach( $csf as $items)
                    <tr>
                          <td class="border-bottom-0 p-3">
                              <h6 class="fw-semibold mb-1">{{ $items->name }}</h6>                   
                          </td>
                          <td class="border-bottom-0">
                          <p class="mb-0 fw-normal text-center">{{ $items->gender == 1 ? "Male" : "Female" }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal text-center">{{ $items->contact_details }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal text-center">
                              @if($items->age == 1)
                                  {{"< 17"}}
                              @elseif($items->age == 2)
                                  {{"18 - 59"}}
                              @elseif($items->age == 3)
                                  {{"> 60"}}
                              @endif
                              
                            </p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $items->csf_date }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $items->csf_time }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2 ">
                                <button class="badge bg-success rounded-3 fw-semibold text-center" data-bs-toggle="modal" data-bs-target="#csfFormWindow">View</button>
                            </div>
                          </td>
                      </tr>    
                    @endforeach  
              @endif
            </tbody>
        </table>

    </div>
</div>

<script>
  
    $("document").ready(function(){
        
      /** Data Table IMplementation **/
        new DataTable('#csf_table');

      

    });

    /** Date Range Picker **/
    $(function() {

          $('input[name="datefilter"]').daterangepicker({
              autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
          });

          $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
              $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
              $("#PrintBtn").removeAttr("disabled");
          });

          $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
              $(this).val('');
          });

       

    });

</script>


@endsection