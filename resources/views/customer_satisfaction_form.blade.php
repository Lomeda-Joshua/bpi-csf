<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/bpi_logo.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

<!--  Main wrapper -->
<div class="body-wrapper" style="background-color:blanchedalmond;">
    <div class="container-fluid">


        @if(session('message'))
            <!-- Modal -->
                <div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ session('message') }}
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
        @endif


        <div class="card">
            <div class="card-body">

                <img style="margin-left:auto; margin-right:auto; width:20%; display:block; margin-bottom:13px;" src = "{{ asset('assets/images/logos/bpi_logo.png')}}" />
                <h5 class="fw-semibold text-center"><i>Department of Agriculture</i></h5>
                <h4 class="fw-semibold text-center" style="text-transform: uppercase; font-weight:700">Bureau of Plant Industry</h4>

                <h1 class="fw-semibold text-center">Customer Satisfaction Form</h1>
                <h3 class="fw-semibold text-center">Personal Information Protection Statement</h3>
                <p class="fw-semibold text-center" style="text-align:justify !important; width:90%; margin-left:auto; margin-right:auto;">We value your privacy and we will keep your personal information confidential. In signing hereof, you authorize the Bureau of Plant Industry to use your information for the purpose of continuous improvement of our goods and services and quality management system. Your personal information may only be disclosed by BPI to relevant government agencies for the same purpose as stated above. The information will be managed in accordance with Data Privacy Act of 2012.</p>
        
                <form method="post" action="{{ route('csf.store') }}" id="csf_form" data-parsley-validate="true" class="form-horizontal form-label-left" role="form">
                    @csrf
                    @method('post')

                            <div style="">
                                <label for="office_id"><span class="fw-semibold" style="font-weight:700">Section where services is catered:</span></label>
                                <select name="office_id" class="form-control" style="padding:10px;" required>
                                    <option selected disabled>-- Select section services catered --</option>
                                    @foreach( $office_data as $item )
                                    <option value="{{$item->id}}">{{ $item->office_name }}</option>
                                    @endforeach
                                </select>
                                <br>

                                <label for="time"><span class="fw-semibold" style="font-weight:700">Time/</span>Oras :</label>
                                <input type="time" class="form-control" name="csf_time" id="csf_time" value="" aria-describedby="time" />
                                
                                <br>

                                <label for="date"><span class="fw-semibold" style="font-weight:700">Date/</span>Petsa :</label>
                                <input type="date" class="form-control" id="csf_date" name="csf_date" aria-describedby="date">
                                <br>

                                <label for="name"><span class="fw-semibold" style="font-weight:700">Name/</span>Pangalan :</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                                <br>

                                <label for="age"><span class="fw-semibold" style="font-weight:700">Age/ Edad*</span></label>
                                <input type="number" class="form-control" name="age" id="age" aria-describedby="age">
                                <br>

                                <label for="gender"><span class="fw-semibold" style="font-weight:700">Gender/ kasarian*</span></label>
                                <select class="form-control" name="gender" id="gender" aria-describedby="gender" >
                                    <option selected disabled>-- Select Gender --</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                
                                <br>

                                <label><span class="fw-semibold" style="font-weight:700">Contact details (e-mail address or contact no.)</label>
                                <input type="text" class="form-control" id="contact_details" name="contact_details" aria-describedby="contactDetails">
                                <br>

                                <label><span class="fw-semibold" style="font-weight:700">Select your classification</span>:</label><br>

                                <input type="radio" name="individual_group" id="individual" value = "1">
                                <label style="font-size:17px; font-weight:bold;" class="form-check-label" for="individual">Individual/ Indibidwal</label>
                                <br>
                                <input type="radio" name="individual_group" id="group" value = "2">
                                <label style="font-size:17px; font-weight:bold;" class="form-check-label" for="group">Group/ Grupo</label>
                                <br><br>

                            <div id = "group_selected" style="display:none;">
                                <label><span class="fw-semibold" style="font-weight:700">If Group, name of your Agency or Association/<i>Kung Grupo, pangalan ng iyong Ahensya/ Asosasyon.<br> Put N/A if Individual/ Ilagay N/A kung ikaw indibidwal.</i>*</span></label><br><br>
                                <label class="form-check-label" for="nameOFAgency"><b>Name of Agency:</b></label>
                                <input type="text" class="form-control" name="nameOFAgency" id="nameOFAgency" aria-describedby="nameOFAgency">
                                <br>
                                
                        
                                <label><b>If Group/ Kung Grupo:</b></label><br>
                                <input type="radio" name="private_government" id="Private" value = "1">
                                <label class="form-check-label" for="Private">Private/ Pribado</label>
                                <br>
                                <input type="radio" name="private_government" id="Government" value = "2">
                                <label class="form-check-label" for="Government">Government/ Gobyerno</label>
                                <br>
                                <br>
                            </div>

                                
                                <label><b>Please choose your answer/ Piliin ang iyong sagot:*</b></label><br>
                                <input type="radio" name="internal_external" id="external" value = "1">
                                <label class="form-check-label" for="external">External Customer</label>
                                <br>
                                <input type="radio" name="internal_external" id="internal" value = "2">
                                <label class="form-check-label" for="internal">Internal Customer (BPI Employee)</label>
                                <br>
                                <br>

                                <h5>Specific Type and Quantity of goods or services received/ Uri at dami ng mga bagay at serbisyong natanggap:* <br>(Ex. 1 pack of  seeds/ 3 Certificates of Accreditation or Permits)</h5>
                                <input type="text" class="form-control" name="type_and_quantity" id="type_and_quantity" aria-describedby="typeOfQuantity">
                                <br><br>

                                <h5>Please check (✓) the appropriate column from 1 - 5, with 1 is being the lowest and 5 as the highest.</h5>
                                <h5><i>Lagyan ng (✓) and napiling "kolum" mula 1 - 5, 1 bilang pinakamababa at 5 bilang pinakamataas,*</i></h5>
                                
                                <div class="container-fluid">
                                    <table class="table mb-0 align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td style="width:30%"></td>
                                                <td>
                                                    <label><b>Very Satisfied/ Lubos na nasiyahan</b></label>
                                                </td>
                                                <td>
                                                    <label><b>Satisfied/ Nasiyahan</b></label>
                                                </td>
                                                <td>
                                                    <label><b>Neutral</b></label>
                                                </td>
                                                <td>
                                                    <label><b>Hindi Nasiyahan</b></label>
                                                </td>
                                                <td>
                                                    <label><b>Very Dissatisfied/ Lubos na hindi Nasiyahan</b></label>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label><b>1. Quality of goods or services provided</b>/ <i>Kalidad ng produkto o serbisyong natanggap?</i></label>
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_quality_of_goods" value = "5">
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_quality_of_goods" value = "4">
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_quality_of_goods" value = "3">
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_quality_of_goods" value = "2">
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_quality_of_goods" value = "1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label><b>2. Courteousness</b>/ <i>Pagiging magalang?</i></label>
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_courteousness" id="courteousness" value = "5">
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_courteousness" id="courteousness" value = "4">
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_courteousness" id="courteousness" value = "3">
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_courteousness" id="courteousness" value = "2">
                                                </td>
                                                <td>
                                                    <input type="radio" name="criteria_courteousness" id="courteousness" value = "1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label><b>3. Responsiveness </b>/ <i>Mabilis na pagtugon?</i></label>
                                                </td>
                                                <td><input type="radio" name="criteria_responsiveness" id="internal" value = "5"></td>
                                                <td><input type="radio" name="criteria_responsiveness" id="internal" value = "4"></td>
                                                <td><input type="radio" name="criteria_responsiveness" id="internal" value = "3"></td>
                                                <td><input type="radio" name="criteria_responsiveness" id="internal" value = "2"></td>
                                                <td><input type="radio" name="criteria_responsiveness" id="internal" value = "1"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label><b>4. Overall customer goods or services provided</b>/ <i>Kabuoang serbisyong natanggap?</i></label>
                                                </td>
                                                <td><input type="radio" name="criteria_overall_experience" id="internal" value = "5"></td>
                                                <td><input type="radio" name="criteria_overall_experience" id="internal" value = "4"></td>
                                                <td><input type="radio" name="criteria_overall_experience" id="internal" value = "3"></td>
                                                <td><input type="radio" name="criteria_overall_experience" id="internal" value = "2"></td>
                                                <td><input type="radio" name="criteria_overall_experience" id="internal" value = "1"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label><b>Promoter score</b></label>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label><b>5. BPI products and services are worth promotable</b> / <i>Ang mga produkto at serbisyo ng BPI ay karapat-dapat mapalaganap</i></label>
                                                </td>
                                                <td><input type="radio" name="promoter_score" id="internal" value = "5"></td>
                                                <td><input type="radio" name="promoter_score" id="internal" value = "4"></td>
                                                <td><input type="radio" name="promoter_score" id="internal" value = "3"></td>
                                                <td><input type="radio" name="promoter_score" id="internal" value = "2"></td>
                                                <td><input type="radio" name="promoter_score" id="internal" value = "1"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <label><span class="fw-semibold" style="font-weight:700">Other comments or suggestions on how we can further improve our goods/services?/ <i>Iba pang komento o mungkahi upang lalong mapaganda ang aming produkto at serbisyo?</i></span></label> <br>
                                <label><span class="fw-semibold" style="font-weight:700">Put NONE if you don't have comments or suggestion/ <i>Ilagay WALA kung walang nais na ikomento o imungkahi.</i></span></label><br>
                                <input type="text" class="form-control" id="comments_suggestions" name = "comments_suggestions" aria-describedby="comments">
                                <br>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
            
                                <br><br>
                                <small>EFFECTIVITY DATE:</small>
                                <small>September 15, 2022</small><br>
                                <small>DOCUMENT NO.: BPI-QMS-KMT-F9</small><br>
                                <small>REVISION NO.: 3</small>
                        <div>
                </form>
            </div>
        </div>
    </div>
</div>




<script>
    

    $('document').ready(function(){

        /* Set current date in ris-form for mysql input box */
        let risDate = new Date().toISOString().substr(0, 10);
        document.getElementById("csf_date").setAttribute("value", risDate);

        
        let getTime = new Date();      
        let setTime = getTime.getHours() + ":" + getTime.getMinutes();
        $('#csf_time').val(setTime); 

        $('#csf_form').on('change', function() {
            let selected = $('input[name=individual_group]:checked', '#csf_form').val();
            let group_box = $('#group_selected');
            if( selected == 2){
                group_box.css('display','block');
            }else{
                group_box.css('display','none');
            }
            
        });

        

    });
</script>
</body>
</html>