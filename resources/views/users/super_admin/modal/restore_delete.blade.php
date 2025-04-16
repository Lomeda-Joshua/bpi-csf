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
      box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px !important;
    }

    .modal-header{
        background-color: #5d87ff;
    }

    .modal-title{
        font-weight: bold !important;
        text-transform: uppercase !important;
    }

</style>


<!-- Modal -->
    <div class="modal fade" id="restore_deleted_modal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header bg-danger">
                    <div class="container">
                        <h1 class="modal-title fs-5 text-white">Restore Personnel </h1>
                    </div>
                </div>

                <div class="modal-body">
                  <div class="container">

                    <div class="table-responsive">

                      <table id="restore_user_tbl" class="table display text-nowrap mb-0 align-middle" style="width:100%;">
                        <thead class="text-dark fs-4" style="background-color:gray;">
                            <tr>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0 text-white text-center">Actions</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0 text-white text-center">Account Username</h6></th>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0 text-white text-center">Deleted date stamp</h6></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        </tbody>
                    </table>
                    </div>
                    



                  </div>

                </div>
               
            </div>
        </div>
    </div>
<!-- End Modal -->


<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#restore_user_tbl').DataTable({
            processing: true,
            serverSide: true,
            deferRender: true,
            searching: false,

            ajax: {
                url: "{{ route('super.admin-restore.user') }}",
                type: "GET",

                error: function(xhr, status, error){
                    console.log(xhr);
                }
            },

            columns: [
                { 
                  data: 'id',
                  render: function(data, type, row) {
                  return `<button class="btn btn-primary restore-btn" data-id="${data}">
                            Restore
                        </button>`;
                  }
                },
                { 
                  data: null,
                  render: function(data, type, row){
                      return `${row.last_name} ${row.first_name}`;
                  }
                },
                { 
                  data: 'deleted_at'
                }
            ]
        });


        $(document).on('click', '.restore-btn', function(){
            let userId = $(this).data('id'); // Get the ID from data-id attribute

            $.ajax({
                url: "{{ route('super.admin-restore-user') }}",
                type: 'POST',
                data: {
                    userid: userId,
                },

                success: function(result){

                    Swal.fire({
                        icon: "success",
                        title: "Restored!",
                        text: result.message,

                    }).then( (result) => {
                        if(result.isConfirmed){
                          $('#restore_user_tbl').DataTable().ajax.reload(); // Refresh DataTable
                        }
                    });
                        

                },
                error: function(xhr, status, error){
                    console.error("Error restoring user:", error);
                }
            });


        });


    });
</script>


