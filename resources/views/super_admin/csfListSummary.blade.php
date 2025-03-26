@extends('super_admin.layouts.layout')

@section('contents')

<style>
    #Overall_submission{
        margin-top:20px; 
        margin-bottom:20px; 
        width:500px; 
        text-align:center;
    }

    #Overall_submission tr td {
         border: 1px solid;
    }

    #csf_table tr td {
        border: 1px solid;
    }

    #csf_table thead th {
        border: 1px solid;
    }

    #csf_table{
        width:100%;
    }

    .block-data{
        width:90px;
    }

    .csf_submiision_per_month{
        display:inline-grid;
        grid-template-columns: auto auto;
        column-gap:30px;
    }

    .header_sub_table{
        background-color : red;
        padding: 10px;
        color:white;
        font-weight: 900;
        text-align: center;
        
    }

    .colSum{
        font-weight:bold; 
        text-align:center;
    }
</style>


<div class="card" style="width:1400px;">
    <div class="card-body">


            <h2 style="text-align: center; background-color:#0096FF; padding:12px; color:white;">BPI (OVERALL) CSF SUBMISSION PER MONTH</h2>
            <h2 style="text-align: center;"><span class = "year_copyright"></span> Analysis</h2>
            <h4 style="color:red;">Deadline of submission: <span style="font-weight:bold;">Every 25th of the month</span></h4>

            <div class="csf_submiision_per_month">

                <div class="panelTable">
                    <table id="Overall_submission">
                        <tr>
                            <td colspan="4" style="background-color:#0096FF; padding:10px; color:white" class="text-center"><b>Average Rating</b></td>
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
                    <table id="Overall_submission">
                        <tr>
                            <td style="text-transform:uppercase; background-color:#0096FF; color:white; padding:6px;">with submission</td>
                        </tr>
                        <tr>
                            <td style="background-color:#DFFF00; text-transform:uppercase; padding:6px;"> late submission (no submission on or before the deadline)</td>
                        </tr>
                        <tr>
                            <td style="background-color:red; color:white; text-transform:uppercase; padding:6px;">no collected CSF</td>
                        </tr>
                    </table> 
                </div>
            
        </div>
             
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
    
                    @foreach($groupedData as $office => $data)
                    <tr class="dataRow">
                                        <td>{{ $office }}</td>
                            @foreach(range(1, 12) as $month)
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
                        <td class="colSum" data-col="12">0</td>
                        <td class="colSum" data-col="13">0</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        



        <table id="Overall_submission">
            <tr>
                <td style="background-color:orange; color:white;">Operating Units</td>
                <td style="background-color:#0096FF; color:white;">AVERAGE per office</td>
            </tr>

            <tr>
                <td></td>
            </tr>
            


        </table>


        <div>
            <canvas id="summaryChart"></canvas>
        </div>

    </div>

</div>


{{-- Feedback --}}
<div class="card" style="width:1400px;">

    <h3 class="header_sub_table"><b> Feedback </b></h3>

    <h3>Positive and Negative Feedbacks - ( latest every month )</h3>
    <h3>If any (in words: In tagalog or english)</h3>

    <table id="csf_table" class="table align-middle striped">
        <thead>
            <tr style="background-color:gray; color:white;" rowspan="2">
                <th class="text-center" rowspan="2" style="width:190px;">NAME OF OPERATING UNITS</th>
                <th class="text-center" colspan="13">PERIOD FOR EVALUATION FOR <span class = "year_copyright" style="font-weight:bold;"></span></th>
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
            @foreach($officeData as $officeName => $months)
                <tr>
                    <td><span style="font-weight:bold;">{{ $officeName }}</span></td>
                    @foreach($months as $month => $comment)
                        <td>{{ $comment }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
        
    </table>

</div>


{{-- Reasons for No submission --}}
<div class="card" style="overflow-x:auto; width:1400px;">

    <h3 class="header_sub_table"><b> Reasons for No submission </b></h3>

    <h3>Positive and Negative Feedbacks</h3>
    <h3>If any (in words: In tagalog or english)</h3>

    <table id="" class="table align-middle striped">
        <thead>
            <tr>
                <th>Operating Unit</th>
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
         
        </tbody>
    </table>
</div>

{{-- Number of Customers --}}
<div class="card" style="overflow-x:auto; width:1400px;">
    
    <h3 class="header_sub_table"><b> Number of customers </b></h3>


    <h3>Positive and Negative Feedbacks</h3>
    <h3>If any (in words: In tagalog or english)</h3>

    <table id="" class="table align-middle striped">
        <thead>
            <tr>
                <th>Operating Unit</th>
                <th>Jan 1 - 15</th>
                <th>Jan 16- Feb 15</th>
                <th> Feb 16- March 15</th>
                <th>Mar 16- Apr 15</th>
                <th>April 16 - May 15</th>
                <th>May 16- June 15</th>
                <th>June 16-July 15</th>
                <th>Jul 16- Aug 15</th>
                <th>Aug 16-Sept 15</th>
                <th>Sept 16-Sept 15</th>
                <th>Oct 16-Nov 15</th>
                <th>Nov 16-Dec 15</th>
                <th>Dec 16-Dec 30</th>
            </tr>
        </thead>
        <tbody>
          
        </tbody>
    </table>
</div>

{{-- Age group --}}
<div class="card" style="overflow-x:auto; width:1400px;">

    <h3 class="header_sub_table"><b> Age group  </b></h3>

    <h3>Positive and Negative Feedbacks</h3>
    <h3>If any (in words: In tagalog or english)</h3>

    <table id="age_group_table" class="table align-middle striped ">
        <thead>
            <tr>
                <th>Operating Unit</th>
              
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>False</td>
            </tr>
        </tbody>
    </table>
</div>

{{-- CRITERIA --}}
<div class="card" style="overflow-x:auto; width:1400px;">

    <h3 class="header_sub_table"><b> Criteria </b></h3>

    <h3>Positive and Negative Feedbacks</h3>
    <h3>If any (in words: In tagalog or english)</h3>

    <table id="criteria_table" class="table align-middle striped">
        <thead>
            <tr>
                <th>Operating Unit</th>
                <th>Feedback</th>
                <th>Number</th>   
                <th>Date Submitted</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Hello</td>
            </tr>

        </tbody>
    </table>
</div>


<script>

    
  
$("document").ready(function(){

    new DataTable('#criteria_table', {
        searching: false
    });    

    new DataTable('#age_group_table', {
        searching: false
    });    



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


    const date = new Date();
    $('.year_copyright').text( date.getFullYear() );



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
            row.querySelector(".rowAverage").innerText = average;
        });

    }


    function sumEachColumn() {
    let rows = $(".dataRow"); // Select all rows
    let columnCount = rows.first().find(".num").length; // Get number of columns
    
        for (let col = 0; col < columnCount; col++) {
            let total = 0;

            // Loop through each row and get the corresponding column value
            rows.each(function () {
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

    // Run when page loads
    sumEachRow();
    sumEachColumn();

});







</script>


@endsection