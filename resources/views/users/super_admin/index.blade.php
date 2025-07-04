@extends('users.super_admin.layouts.layout')

@section('contents')
@vite('resources/assets/css/super_admin/super_admin_custom_styles.css')
<style>
    .btnCSF:hover{
        cursor:pointer;
        background-color: rgba(20, 170, 143);
    }
</style>

    <div class="row">

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row alig n-items-start">
                        <div class="col-12">
                            <h5 class="card-title mb-9 fw-semibold"> Total CS form</h5>
                            <h4 class="fw-semibold mb-3">{{ $csf_data->count('id') ? $csf_data->count('id') : 0 }}</h4>
                            <div class="d-flex align-items-center pb-1">
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
                        <div class="col-12">
                            <h5 class="card-title mb-9 fw-semibold"> Total Internal CSF </h5>
                            <h4 class="fw-semibold mb-3">{{ $internal_total ? $internal_total : 0 }}</h4>
                            <div class="d-flex align-items-center pb-1">
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
                        <div class="col-12">
                            <h5 class="card-title mb-9 fw-semibold"> Total External CSF </h5>
                            <h4 class="fw-semibold mb-3">{{ $external_total ? $external_total : 0 }}</h4>
                            <div class="d-flex align-items-center pb-1">
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
                        <div class="col-12">
                            <h5 class="card-title mb-9 fw-semibold"> Office with the most CSF </h5>
                            <h4 class="fw-semibold mb-3">{{ $user_count }}</h4>
                            <div class="d-flex align-items-center pb-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card">
        <div class="card-header mt-4">
            <h5 class="card-title fw-semibold mb-4">10 Recent Customer forms </h5>
        </div>
        <div class="card-body p-4">
            

            <div class="table-responsive">

                <table id="table_csf" class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Actions</h6>
                            </th>
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
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if ($csf->count() != 0)
                            @foreach ($csf as $items)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success rounded-3 fw-semibold btnCSF" data-bs-toggle="modal" data-bs-target="#viewModal" data-id="{{$items->id}}" >View</span>
                                            </div>
                                        </td>
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
                                            <p class="mb-0 fw-normal">
                                                @switch($items->age)
                                                    @case(1)
                                                        < 17 (Under 17 years old')
                                                    @break
                                                    @case(2) 
                                                        18 - 59
                                                    @break
                                                    @case(3)
                                                        60 > (60 years old and over) 
                                                    @break
                                                @endswitch
                                                
                                            </p>
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
                                    </tr>
                                @endforeach
                        @endif

                    </tbody>
                </table>
                
            </div>
        </div>
    </div>


    @include('users.super_admin.modal.view_csf_customer')



<script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            }
        });


        $(".btnCSF").click(function(){
            let id =  $(this).attr("data-id");

            $.ajax({
            url: "{{ route('dashboard.getId', '') }}" + "/" + id,
            method: "POST",
            success: function(result){

                let result_test = JSON.parse(result);
 

                $('.name_title').text(result_test.name);

                $('.name').text(result_test.name);
                
                switch(result_test.age){
                    case 1:
                        $('.age').text("< 17 (under 17 years old)");
                    break;
                    case 2:
                        $('.age').text("18 - 59");
                    break;
                    case 3:
                        $('.age').text("> 60 (60 years old and over)");
                    break;    
                }   
                
                switch(result_test.gender){
                    case 1:
                        $('.gender').text('Male');
                    break;
                    case 2:
                        $('.gender').text('Female');
                    break;
                }

                $('.contact').text(result_test.contact_details);

                switch(result_test.individual_group){
                    case 1:
                        $('.individual_group').text('Individual');
                    break;
                    case 2:
                        $('.individual_group').text('Group');
                    break;
                }

                switch(result_test.internal_external){
                    case 1:
                        $('.internal_external').text('Internal');
                    break;
                    case 2:
                        $('.internal_external').text('External');
                    break;
                }

                $('.types_of_goods_received').text(types_of_goods_services);

            }

            });
        });


        new DataTable('#table_csf');

    


    });


</script>


@endsection
