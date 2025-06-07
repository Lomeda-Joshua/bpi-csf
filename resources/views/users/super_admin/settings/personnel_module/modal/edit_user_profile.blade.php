<style>
    .form-input {
        padding: 7px;
    }
</style>

<!-- Edit User Modal -->
<div class="modal fade personnel_modal_{{ $item->id }}" id="personnel_modal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <div class="container">
                    <h1 class="modal-title fs-5 text-white">Edit personnel</h1>
                </div>
            </div>

            <div class="modal-body">

                <div class="container csf_info">

                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-input">
                            <label class="header_title">First Name:</label> <span class="first_name"></span>
                            <input class="block mt-1 w-full form-control input_class first_name_input" type="text"
                                required autofocus />
                        </div>

                        <div class="form-input">
                            <label class="header_title">Last name:</label> <span class="last_name"></span>
                            <input class="block mt-1 w-full form-control input_class last_name_input" type="text"
                                required autofocus />
                        </div>
                        <div class="form-input">
                            <span class="header_title">Role:</span> <span class="role"></span>
                            <input class="block mt-1 w-full form-control input_class role_input" type="text" required
                                autofocus />
                        </div>
                        <div class="form-input">
                            <span class="header_title">Office:</span> <span class="office"></span>
                            <input class="block mt-1 w-full form-control input_class office_role" type="text"
                                required autofocus />
                        </div>
                        <div class="form-input">
                            <span class="header_title">User email account:</span> <span class="email"></span>
                            <input class="block mt-1 w-full form-control input_class email_input" type="text"
                                required autofocus />
                        </div>
                    </form>
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
