<style>

    .csf_info{
      padding:10px;
    }

    .name_title{
      font-size:20px;
      font-weight:600;
    }

    .header_title{
      font-weight:bold !important;
      font-size:15px !important;
    }

    .table_info_csf td{
      padding:10px;
    }

    #viewModalLabel{
      display: inline-block;
      margin-right: 5px;
    }

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

</style>

<!-- Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <h1 class="modal-title fs-5" id="viewModalLabel">Customer Satisafaction form of: </h1><span class="name_title"></span>
                    </div>
                    
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">

                  <div class="container csf_info">

                    <table class="table_info_csf">
                        <tr>
                            <td style="width:250px;"><label class="header_title">Name/Pangalan:</label> <span class="name"></span></td>
                            <td><span class="header_title">Age/Edad:</span> <span class="age"></span></td>
                            <td><span class="header_title">Gender/Kasarian:</span> <span class="gender"></span></td>
                            <td><span class="header_title">Contact details:</span> <span class="contact"></span></td>
                        </tr>
                        <tr>
                            <td><span class="header_title">Classification:</span> <span class="individual_group"></span></td>
                            <td><span class="header_title">Customer type:</span> <span class="internal_external"></span></td>
                            <td><span class="header_title">Type of goods:</span> <span class="types_of_goods_received"></span></td>
                        </tr>
                    </table>

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


