@extends('users.super_admin.layouts.layout')

@section('contents')
@vite('resources/assets/css/super_admin/super_admin_custom_styles.css')

<div class="card" style="width:1400px;">
    <div class="card-body">

        <h4 style="text-align: center; background-color: #29734a; padding:12px; color:white;">OVERALL FORM SUBMISSION
            PER MONTH</h4>
        <h4 style="text-align: center;"><span class = "year_copyright"></span> Analysis</h4>
        <button class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#scoringModal">LEGEND</button>
        
        <h4 style="color:red;">Deadline of submission: <span style="font-weight:bold;">Every 25th of the month</span></h4>

        

        

        <div class="table-container" style="overflow-x:auto; ">
            <table id="csf_table" class="table align-middle striped">
                <thead>
                    <tr style="background-color:orange; color:white;" rowspan="2">
                        <th class="text-center" rowspan="2" style="width:190px;">NAME OF OPERATING UNITS</th>
                        <th class="text-center" colspan="12">PERIOD FOR EVALUATION <span class = "year_copyright" style="font-weight:bold;"></span></th>
                        <th rowspan="2">TOTAL</th>
                        <th rowspan="2">AVERAGE PER OFFICE</th>
                    </tr>
                    <tr>
                        <th class="text-center block-data">January</th>
                        <th class="text-center block-data">February</th>
                        <th class="text-center block-data">March</th>
                        <th class="text-center block-data">April</th>
                        <th class="text-center block-data">May</th>
                        <th class="text-center block-data">June</th>
                        <th class="text-center block-data">July </th>
                        <th class="text-center block-data">August</th>
                        <th class="text-center block-data">September</th>
                        <th class="text-center block-data">October</th>
                        <th class="text-center block-data">Novomber</th>
                        <th class="text-center block-data">December</th>
                    </tr>
                </thead>

                <tbody>

                    @php
                        // Group data by office_name
                        $groupedData = $monthlyCSFCount->groupBy('office_name');
                    @endphp

                    @foreach ($groupedData as $office => $data)
                        <tr class="dataRow">
                            <td>{{ $office }}</td>

                            @foreach (range(1, 12) as $month)
                                @php
                                    // Find the data for the current month, default to 0 if missing
                                    $monthData = $data->firstWhere('month', $month);
                                @endphp

                                <td class="num" style="font-weight:bold; text-align:center;">{{ $monthData ? $monthData->total_forms : 0 }}</td>

                            @endforeach
                            
                            <td class="rowSum" style="font-weight:bold; text-align:center;">0</td>
                            <td class="rowAverage" style="font-weight:bold; text-align:center;">0</td>

                        </tr>
                    @endforeach

                </tbody>

                <tfoot>
                    <tr style="background-color:#0096FF; color:white;">
                        <td style="text-align:center">TOTAL <b>(sum per column)</b></td>
                        <td class="colSum" data-col="0">0</td>
                        <td class="colSum" data-col="1">0</td>
                        <td class="colSum" data-col="2">0</td>
                        <td class="colSum" data-col="3">0</td>
                        <td class="colSum" data-col="4">0</td>
                        <td class="colSum" data-col="5">0</td>
                        <td class="colSum" data-col="6">0</td>
                        <td class="colSum" data-col="7">0</td>
                        <td class="colSum" data-col="8">0</td>
                        <td class="colSum" data-col="9">0</td>
                        <td class="colSum" data-col="10">0</td>
                        <td class="colSum" data-col="11">0</td>
                        <td class="colTotalSum" data-col="12">0</td>
                        <td class="colAverage" data-col="13">0</td>
                    </tr>
                </tfoot>
            </table>
        </div>


            <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#total_number_customers">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-12">
                                        <h5 class="card-title mb-9 fw-semibold" style="font-size:16.5px;">Total number of customers</h5>
                                        <div class="d-flex align-items-center pb-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-xl-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#latest_feedbacks">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-12">
                                        <h5 class="card-title mb-9 fw-semibold" style="font-size:16.5px;"> Latest feedbacks</h5>
                                        {{-- <h4 class="fw-semibold mb-3">{{ $csf_data->count('id') ? $csf_data->count('id') : 0 }}</h4> --}}
                                        <div class="d-flex align-items-center pb-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-xl-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#reasons_no_submission">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-12">
                                        <h5 class="card-title mb-9 fw-semibold" style="font-size:16.5px;"> Reasons for no submission </h5>                            
                                        <div class="d-flex align-items-center pb-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-xl-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#criteria">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-12">
                                        <h5 class="card-title mb-9 fw-semibold" style="font-size:16.5px;">Criteria</h5>
                                        {{-- <h4 class="fw-semibold mb-3">{{ $csf_data->count('id') ? $csf_data->count('id') : 0 }}</h4> --}}
                                        <div class="d-flex align-items-center pb-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>



        <div>
            {{-- Summary table --}}
            <canvas id="summaryChart"></canvas>
        </div>

    </div>

</div>

{{-- Modal sets --}}
@include('users.super_admin.summary_module.modal.summary_module_modals')


<div class="modal fade" id="scoringModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                        <div class="container">
                            <h1 class="modal-title fs-5" id="viewModalLabel">Customer Satisafaction form legends: </h1><span class="name_title"></span>
                        </div>
                </div>
                <div class="modal-body">
                           <div class="csf_submiision_per_month">

                            <div class="panelTable">
                                <table id="Overall_submission">
                                    <tr>
                                        <td colspan="4" style="background-color:#29734a; padding:10px; color:white"
                                            class="text-center"><b>Average Rating</b></td>
                                    </tr>
                                    <tr>
                                        <td>Adjectival Rating</td>
                                        <td>Range</td>
                                        <td>Numerical Rating</td>
                                    </tr>
                                    <tr>
                                        <td>Very Satisfied</td>
                                        <td>4.50 - 5</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Satisfied</td>
                                        <td>3.50 - 4.49</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Neutral</td>
                                        <td>2.50 - 3.49</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Dissatisfied</td>
                                        <td>1.50 - 2.49</td>

                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Very Dissatisfied</td>
                                        <td>1 - 1.49</td>

                                        <td>1</td>
                                    </tr>
                                </table>
                            </div>

                                <div class="panelTable">
                                    <h4>Color Reference:</h4>
                                    <table id="color_reference">
                                        <tr>
                                            <td style="text-transform:uppercase; background-color:#0096FF; color:white; padding:6px;">with
                                                submission</td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:#DFFF00; text-transform:uppercase; padding:6px;"> late submission
                                                (no submission on or before the deadline)</td>
                                        </tr>
                                        <tr>
                                            <td style="background-color:red; color:white; text-transform:uppercase; padding:6px;">no
                                                collected CSF</td>
                                        </tr>
                                    </table>
                                </div>
                        </div>
                </div>
            </div>
        </div>
</div>


<script>
$("document").ready(function() {

    let arraySummary = @json($office_count);
    let officeCountArray = @json($office_count) || [];

    // Extract labels properly
    const officeNames = officeCountArray.map(office => office.office_name);
    const officeNumbers = officeCountArray.map(office => office.customer_satisfaction_count);


    const ctx = document.getElementById('summaryChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: officeNames,
            datasets: [{
                label: 'BPI CSF ANALYSIS OVERALL TOTAL',
                data: officeNumbers,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


  
    function sumEachRow() {
        let rows = document.querySelectorAll(".dataRow"); // Select all rows

        rows.forEach(row => {
            let cells = row.querySelectorAll(".num");
            let total = 0;

            // Sum up all values in the row
            cells.forEach(cell => {
                total += parseFloat(cell.innerText) || 0; // Convert text to number, avoid NaN
            });

            // Compute the average AFTER summing up
            let average = (total / 12).toFixed(2); // Ensures 2 decimal places

            // Update sum and average columns
            row.querySelector(".rowSum").innerText = total;


            let avgCell = row.querySelector(".rowAverage");
            if (avgCell) {
                avgCell.innerText = average;
            } else {
                console.warn("No .rowAverage found in this row:", row); // Debugging log
            }

            // row.querySelector(".rowAverage") ? row.querySelector(".rowAverage").innerText = average : row.querySelector(".rowAverage").innerText = "0" ;
        });
    }


    function sumEachColumn() {
        let rows = $(".dataRow"); // Select all rows
        let columnCount = rows.first().find(".num").length; // Get number of columns
        

        for (let col = 0; col < columnCount; col++) {
            let total = 0;

            // Loop through each row and get the corresponding column value
            rows.each(function() {
                let cell = $(this).find(".num").eq(col); // Get the cell in this column
                total += parseFloat(cell.text()) || 0; // Convert text to number, avoid NaN
            });

            // Find the last row where we will display the sum & average
            let sumCell = $(`.colSum[data-col='${col}']`);
            let avgCell = $(`.colAverage[data-col='${col}']`);

            // Update total sum & average
            sumCell.text(total);
            avgCell.text((total / rows.length).toFixed(2)); // Compute average
        }
    }


    function specificColumn(){
        const table = $("#csf_table");
        const rows = table.rows;
        let sum = 0;

        for(let i = 2; i < rows.length; i++){
            const cellValue = rows[i].cells[columnIndex].textContent.trim();

        }
    }


    const date = new Date();
    $('.year_copyright').text(date.getFullYear());


    // Run when page loads
    sumEachRow();
    sumEachColumn();
    

});
</script>

@endsection
