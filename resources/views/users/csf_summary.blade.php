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
  
    <div class="printable_area">

        <div class="content">
            
            <table>
                <tr>
                    <td>DIVISION/OFFICE/UNIT:</td>
                    <td>{{ $csf_data }}</td>
                </tr>
                <tr>
                    <td>SECTION/STATION: </td>
                    <td></td>
                </tr>
            </table>  

        </div>

        <table class="table">
            <thead>
                <tr>
                    <td class="text-center align-middle" rowspan="2">Control Number</td>
                    <td class="text-center align-middle" rowspan="2"> Name of Customer/ Company (Last Name, First Name, Middle Initial)</td>
                    <td class="text-center align-middle" rowspan="2"> AGE GROUP (≤ 17/18-59/≥ 60)</td>
                    <td style="background-color:#8bb768; color:white;">Individual</td>
                    <td class="text-center" style="background-color:#8bb768; color:white;">Group</td>
                    <td class="text-center align-middle" rowspan="2">Private (P) or Government (G)</td>
                    <td class="text-center" colspan="5" style="background-color:#d3db3d;">Criteria</td>
                </tr>

                <tr>
                    <td class="text-center align-middle">Individual (I) or Group (G)</td>
                    <td class="text-center align-middle">Male (M) or Female (F)</td>
                    <td class="text-center align-middle">1.  Quality of goods/services provided</td>
                    <td class="text-center align-middle">2. Courteousness</td>
                    <td class="text-center align-middle">3. Responsiveness</td>
                    <td class="text-center align-middle">4. Over-all customer service provided</td>
                    <td class="text-center align-middle">5. Promotability of BPI goods and services</td>
                    <td class="text-center align-middle">TOTAL SCORE per customer</td>
                    <td class="text-center align-middle">AVERAGE per customer</td>
                    <td class="text-center align-middle">ADJECTIVAL RATING</td>
                </tr>   
            </thead>
            <tbody>
                @foreach( $csf_data as $item )
                <tr>
                    <td>CSF-03-2024-211</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age  }}</td>
                    <td>{{ $item->individual_group  }}</td>
                    <td>{{ $item->gender  }}</td>
                    <td>{{ $item->private_government  }}</td>
                    <td>{{ $item->criteria_quality_of_goods  }}</td>
                    <td>{{ $item->criteria_courteousness  }}</td>
                    <td>{{ $item->criteria_responsiveness  }}</td>
                    <td>{{ $item->criteria_overall_experience  }}</td>
                    <td>{{ $item->promoter_score  }}</td>
                    <td>{{ $totalCriteria = $item->criteria_quality_of_goods + $item->criteria_courteousness + $item->criteria_responsiveness + $item->criteria_overall_experience + $item->promoter_score }} </td>
                    <td>{{ $AdjectivalRating = $totalCriteria/5 }} </td>
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
            </tbody>
        </table>
    </div>

    <script>

    </script>

</body>

</html> 