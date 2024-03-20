<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/bpi_logo.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>  
  
    <style>
        table, th, td
        {
            border: 1px solid black;
            padding:5px;
            font-size:12px;
            
        }

        .body-wrapper{
            padding:15px;
        }
    </style>


    <div class="body-wrapper">

        <div class="printable_area">

            <div class="content row" style = "margin-bottom:20px;">
                <div class="col">
                    <table>
                        
                        <colgroup>
                            <col style="background-color:yellow; width:200px">    
                            <col style="width:400px">
                        </colgroup> 
                        

                        <tr>
                            <td><b>DIVISION/OFFICE/UNIT:</b></td>
                            <td class="text-center">{{ $office_user->office->office_name }}</td>                            
                        </tr>
                        <tr>
                            <td><b>SECTION/STATION:</b></td>
                            <td class="text-center">{{ $office_user->office->office_name }}</td>
                        </tr>
                
                    </table>
                    <br>
                    
                    <table>
                        <colgroup>
                            <col style="background-color:yellow; width:200px;">    
                            <col style="width:200px;">
                        </colgroup>
                        <tr>
                            <td><b>NO. OF INDIVIDUAL: </b></td>
                            <td class ="text-center">{{ count($individual) }}</td>
                        </tr>
                        <tr>
                            <td><b>NO. OF MALE:</b></td>
                            <td class ="text-center">{{ count($male) }}</td>
                        </tr>
                        <tr>
                            <td><b>NO. OF FEMALE:</b></td>
                            <td class ="text-center">{{ count($female) }}</td>
                        </tr>
                    </table>

                    
                    <table style="margin-top:20px;">
                        <tr>
                            <td colspan="4" style="background-color:yellow" class="text-center"><b>Average Rating</b></td>
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

                <div class="col">
                    <table>
                        <colgroup>
                            <col style="background-color:yellow; width:200px">    
                            <col style="width:200px">
                        </colgroup>
                        <tr>
                            <td><b>PERIOD COVERED:</b></td>
                            <td>{{ $startDate }}</td>
                       
                        </tr>
                        <tr>
                            <td><b>Total number of customers</b></td>
                            <td>{{ count($csf_data) }}</td>
                           
                        </tr>
                      
                    </table> 
                    <br>
                    <table>
                        <colgroup>
                            <col style="background-color:yellow; width:200px">    
                            <col style="width:200px">
                        </colgroup>
                        <tr>
                            <td><b>NO. OF GROUP:</b></td>
                            <td>{{ 4 }}</td>
                          
                        </tr>
                        <tr>
                            <td><b>NO. OF GOVERNMENT ENTITY:</b></td>
                            <td>{{ 29 }}</td>
                           
                        </tr>
                        <tr>
                            <td><b>NO. OF PRIVATE ENTITY:</b></td>
                            <td>{{1}}</td>
                        </tr>
                    </table>

                </div>
                
            </div>

        

    <div style="overflow-x:auto;">
            <table class="table">
                <thead>
                    <tr>
                        <td class="text-center align-middle" rowspan="2" style="width:190px"><b>Control Number</b></td>
                        <td class="text-center align-middle" rowspan="2"><b>Name of Customer/ Company (Last Name, First Name, Middle Initial)</b></td>
                        <td class="text-center align-middle" rowspan="2"><b>AGE GROUP (≤ 17/18-59/≥ 60)</b></td>
                        <td style="background-color:#8bb768; color:white; text-align:center;">Individual</td>
                        <td class="text-center" style="background-color:#8bb768; color:white; text-align:center;">Group</td>
                        <td class="text-center align-middle" rowspan="2"><b>Private (P) or Government (G)</b></td>
                        <td class="text-center" colspan="5" style="background-color:#d3db3d; color:white;"><b>Criteria</b></td>
                        <td class="text-center" colspan="3"></td>
                    </tr>

                    <tr>
                        <td class="text-center align-middle"><b>Individual (I) or Group (G)</b></td>
                        <td class="text-center align-middle"><b>Male (M) or Female (F)</b></td>
                        <td class="text-center align-middle"><b>1.  Quality of goods/services provided</b></td>
                        <td class="text-center align-middle"><b>2. Courteousness</b></td>
                        <td class="text-center align-middle"><b>3. Responsiveness</b></td>
                        <td class="text-center align-middle"><b>4. Over-all customer service provided</b></td>
                        <td class="text-center align-middle"><b>5. Promotability of BPI goods and services</b></td>
                        <td class="text-center align-middle"><b>TOTAL SCORE per customer</b></td>
                        <td class="text-center align-middle"><b>AVERAGE per customer</b></td>
                        <td class="text-center align-middle"><b>ADJECTIVAL RATING</b></td>
                        
                    </tr>   
                </thead>
                <tbody>
                    @foreach( $csf_data as $item )
                    <tr>
                        <td>CSF-03-2024-00211</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->age  }}</td>
                        <td>{{ $item->individual_group == 1 ? "I" : "G"  }}</td>
                        <td>{{ $item->gender == 1 ? "Male" : "Female"   }}</td>
                        <td>{{ $item->private_government == 1 ? "Private" : "Government"  }}</td>
                        <td>{{ $item->criteria_quality_of_goods  }}</td>
                        <td>{{ $item->criteria_courteousness  }}</td>
                        <td>{{ $item->criteria_responsiveness  }}</td>
                        <td>{{ $item->criteria_overall_experience  }}</td>
                        <td>{{ $item->promoter_score  }}</td>
                        <td><input type="hidden" id="totalScore[]" value="{{ $totalScore = $item->criteria_quality_of_goods + $item->criteria_courteousness + $item->criteria_responsiveness + $item->criteria_overall_experience + $item->promoter_score }}" /> {{ $totalScore = $item->criteria_quality_of_goods + $item->criteria_courteousness + $item->criteria_responsiveness + $item->criteria_overall_experience + $item->promoter_score }}</td>

                        <td>{{ $AdjectivalRating = $totalScore/5 }} </td>

                        <td> @switch( $AdjectivalRating )

                                    @case( 1 )
                                        Very Dissatisfied
                                    @break

                                    @case( 2 )
                                        Dissatisfied
                                    @break

                                    @case( 3 )
                                        Neutral
                                    @break

                                    @case( 4 )
                                        Satisfied
                                    @break

                                    @case( 5 )
                                        Very Satisfied
                                    @break

                              @endswitch    
                        </td>
                    </tr>   
                    @endforeach
                    <tr>
                        <td class="text-center" colspan="6">TOTAL SCORE PER CRITERIA (sum per column until last customer)</td>
                        <td>{{ $csf_data->sum('criteria_quality_of_goods') }}</td>
                        <td>{{ $csf_data->sum('criteria_courteousness') }}</td>
                        <td>{{ $csf_data->sum('criteria_responsiveness') }}</td>
                        <td>{{ $csf_data->sum('criteria_overall_experience') }}</td>
                        <td>{{ $csf_data->sum('promoter_score') }}</td>
                        <td id="totalScorePerCustomer"></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="6">AVERAGE PER CRITERIA (average per column until last customer)</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>

    <script>
        $(document).ready(function(){

            let inputBox = $("input[id = 'totalScore[]']").map(function(){return $(this).val()}).get();
            let sum = 0;

            for (let i = 0; i < inputBox.length; i++ ){
                sum =  parseInt(inputBox[i]) + sum;
            }

            $("#totalScorePerCustomer").text(sum);

           
        });
    </script>

</body>

</html> 