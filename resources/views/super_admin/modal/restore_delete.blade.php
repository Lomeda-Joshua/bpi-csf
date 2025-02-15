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

                    <table id="restore_user_tbl" class="table display text-nowrap mb-0 align-middle" style="width:100%;">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Account Username</h6></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                  </div>

                  <p>sample</p>
                  <p id="hello"></p>


                </div>
               
            </div>
        </div>
    </div>
<!-- End Modal -->


<script>
    $(document).ready(function(){

        $('#restore_user_tbl').DataTable({
            processing: true,
            serverSide: true,
            deferRender: true,
            searching: false,

            ajax: {
                url: "{{ route('super.admin-restore.user') }}",
                type: "GET",

                success: function(data){
                    $('#hello').text(data.name);
                    console.log(data);
                },

                error: function(xhr, status, error){
                    console.log(xhr);
                }
            },

            columns: [
                { data: 'name' }
            ]


        });



    });
</script>


