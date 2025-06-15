<!-- Modal Total number of customers -->
<div class="modal fade" id="total_number_customers" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header bg-danger" style="background-color:#0096FF !important;">
                <div class="container">
                    <h1 class="modal-title fs-5 text-white">Total number of customers</h1>
                </div>
            </div>

            <div class="modal-body">
                <div class="container">

                    {{-- Number of Customers --}}
                    <div class="card" style="overflow-x:auto; width:1400px;">
                        <table id="Overall_submission">
                            <tr>
                                <td style="background-color:orange; color:white;">Operating Units</td>
                                <td style="background-color:#0096FF; color:white;">AVERAGE per office</td>
                            </tr>

                            <tr>
                                <td></td>
                            </tr>
                        </table>


                        <div class="container_card">
                            
                            <table id="csf_table" class="table align-middle striped">
                                <thead>
                                    <tr style="background-color:gray; color:white;" rowspan="2">
                                        <th class="text-center" rowspan="2" style="width:190px;">NAME OF OPERATING UNITS</th>
                                        <th class="text-center" colspan="12">PERIOD FOR EVALUATION <span class = "year_copyright"
                                                style="font-weight:bold;"></span></th>
                                        <th rowspan="2">TOTAL</th>
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
                                        <td class="colAverage" data-col="12">0</td>
                                    </tr>
                                    
                                </tfoot>
                            </table>


                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->


<!-- Modal Latest feedback -->
<div class="modal fade" id="latest_feedbacks" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-danger" style="background-color:#0096FF !important;">
                <div class="container">
                    <h1 class="modal-title fs-5 text-white">Latest feedbacks</h1>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">

                        {{-- Feedback --}}
                        <div class="card" style="width:1400px;">

                            

                            <h3 class="header_sub_table"><b> Latest feedbacks </b></h3>

                            <div class="container_card">

                                <h5>Positive and Negative Feedbacks - ( latest every month )</h5>
                                <h5>If any (in words: In tagalog or english)</h5>

                                        
                                <div class="table-responsive">
                                    <table id="csf_table" class="table align-middle striped">
                                        <thead>
                                            <tr style="background-color:gray; color:white;" rowspan="2">
                                                <th class="text-center" rowspan="2" style="width:190px;">NAME OF OPERATING UNITS</th>
                                                <th class="text-center" colspan="13">PERIOD FOR EVALUATION FOR <span class = "year_copyright"
                                                        style="font-weight:bold;"></span></th>
                                            </tr>
                                            <tr>
                                                <th>January</th>
                                                <th>February</th>
                                                <th>March</th>
                                                <th>April</th>
                                                <th>May</th>
                                                <th>June</th>
                                                <th>July</th>
                                                <th>August</th>
                                                <th>September</th>
                                                <th>October</th>
                                                <th>November</th>
                                                <th>December</th>
                                            </tr>
                                        </thead>
                        
                                        <tbody>
                                            @foreach ($officeData as $officeName => $months)
                                                <tr>
                                                    <td><span style="font-weight:bold;">{{ $officeName }}</span></td>
                                                    @foreach ($months as $month => $comment)
                                                        <td>{{ $comment }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                        
                                    </table>
                                </div>

                            

                            </div>



                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->


<!-- Modal Reasons for no submission -->
<div class="modal fade" id="reasons_no_submission" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-danger" style="background-color:#0096FF !important;">
                <div class="container">
                    <h1 class="modal-title fs-5 text-white">Reasons for no submission</h1>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">

                           {{-- Reasons for No submission --}}
                            <div class="card" style="width:1400px;">

                                <h3 class="header_sub_table"><b> Reasons for no submission </b></h3>

                                <div class="container_card">
                                    <h5>Late Submissions (Submission: 25th to 31st of the month)</h5>
                                    <h5>No customers for the month</h5>
                                    <h5>No operation due to holidays or events</h5>
                                    <h5>Other reasons: pls specify</h5>

                                    <div class="table-responsive">
                                        <table id="csf_table" class="table align-middle striped">
                                            <thead>
                                                <tr style="background-color:gray; color:white;" rowspan="2">
                                                    <th class="text-center" rowspan="2" style="width:190px;">NAME OF OPERATING UNITS</th>
                                                    <th class="text-center" colspan="13">SUBMISSION PERIODS</th>
                                                </tr>
                                                <tr>
                                                    <th>January</th>
                                                    <th>February</th>
                                                    <th>March</th>
                                                    <th>April</th>
                                                    <th>May</th>
                                                    <th>June</th>
                                                    <th>July</th>
                                                    <th>August</th>
                                                    <th>September</th>
                                                    <th>October</th>
                                                    <th>November</th>
                                                    <th>December</th>
                                                </tr>
                                            </thead>
                            
                                            <tbody>
                                                @foreach ($officeData as $officeName => $months)
                                                    <tr>
                                                        <td><span style="font-weight:bold;">{{ $officeName }}</span></td>
                                                        @foreach ($months as $month => $comment)
                                                            <td>{{ $comment }}</td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </tbody>
                            
                                        </table>
                                    </div>

                                </div>

                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->



<!-- Modal Criteria -->
<div class="modal fade" id="criteria" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-danger" style="background-color:#0096FF !important;">
                <div class="container">
                    <h1 class="modal-title fs-5 text-white">Criteria</h1>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">

                    {{-- CRITERIA --}}
                    <div class="card" style="overflow-x:auto; width:1400px;">
                        <h3 class="header_sub_table"><b> Criteria </b></h3>
                            <div class="container_card">
                                <div class="table-responsive">
                                        <table id="csf_table" class="table align-middle striped">
                                            <thead>
                                                <tr style="background-color:gray; color:white;" rowspan="2">
                                                    <th class="text-center" rowspan="2" style="width:190px;">NAME OF OPERATING UNITS</th>
                                                    <th class="text-center" colspan="13">PERIOD FOR EVALUATION FOR <span class = "year_copyright"
                                                            style="font-weight:bold;"></span></th>
                                                </tr>
                                                <tr>
                                                    <th>January</th>
                                                    <th>February</th>
                                                    <th>March</th>
                                                    <th>April</th>
                                                    <th>May</th>
                                                    <th>June</th>
                                                    <th>July</th>
                                                    <th>August</th>
                                                    <th>September</th>
                                                    <th>October</th>
                                                    <th>November</th>
                                                    <th>December</th>
                                                </tr>
                                            </thead>
                            
                                            <tbody>
                                                @foreach ($officeData as $officeName => $months)
                                                    <tr>
                                                        <td><span style="font-weight:bold;">{{ $officeName }}</span></td>
                                                        @foreach ($months as $month => $comment)
                                                            <td>{{ $comment }}</td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </tbody>
                            
                                        </table>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->