{{-- <link href="{{ asset('users.super_admin.modal.mnodal_custom_style.css') }}" rel="stylesheet" /> --}}

<!-- Modal -->
    <div class="modal fade" id="personnel_modal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <h1 class="modal-title fs-5 text-white">Edit personnel</h1>
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

