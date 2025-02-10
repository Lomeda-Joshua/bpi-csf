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

    .input_class{
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px !important;
    }

    .modal-header{
        background-color: #5d87ff;
    }

    .modal-title{
        font-weight: bold;
    }

</style>



<!-- Modal -->
    <div class="modal fade" id="personnel_modal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <h1 class="modal-title fs-5 text-white">Edit personnel  </h1>
                    </div>
                
                </div>
                <div class="modal-body">

                  <div class="container csf_info">

                    <table class="table_info_csf">
                        <tr>
                            <td style="width:250px;">
                                <label class="header_title">Name/Pangalan:</label> <span class="name"></span>
                                <input class="block mt-1 w-full form-control input_class" type="text" required autofocus/>                    
                            </td>
                            <td>
                                <span class="header_title">Role:</span> <span class="age"></span>
                                <input class="block mt-1 w-full form-control input_class" type="text" required autofocus/>    
                            </td>
                            <td>
                                <span class="header_title">Office:</span> <span class="gender"></span>
                                <input class="block mt-1 w-full form-control input_class" type="text" required autofocus/>    
                            </td>
                            <td>
                                <span class="header_title">User email account:</span> <span class="contact"></span>
                                <input class="block mt-1 w-full form-control input_class" type="text" required autofocus/>    
                            </td>
                        </tr>
                    </table>

                  </div>
           
                 

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<!-- End Modal -->

