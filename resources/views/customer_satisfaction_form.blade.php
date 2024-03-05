<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Satisfaction Form | BPI</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
</head>

<body>

<!--  Main wrapper -->
<div class="body-wrapper">
    <div class="container-fluid">



        <div class="card">
            <div class="card-body">

                <h5 class="fw-semibold text-center"><i>Department of Agriculture</i></h5>
                <h4 class="fw-semibold text-center" style="text-transform: uppercase; font-weight:700"><u>Bureau of Plant Industry</u></h4>
                <h4 class="fw-semibold text-center" style="text-transform: uppercase; font-weight:700"><u>Information and Computer Section</u></h4>
                <h1 class="fw-semibold text-center">Customer Satisfaction Form</h1>
                <h3 class="fw-semibold text-center">Personal Information Protection Statement</h3>
                <p class="fw-semibold text-center">We value your privacy and we will keep your personal information confidential. In signing hereof, you authorize the Bureau of Plant Industry to use your information for the purpose of continuous improvement of our goods and services and quality management system. Your personal information may only be disclosed by BPI to relevant government agencies for the same purpose as stated above. The information will be managed in accordance with Data Privacy Act of 2012.</p>
        
                <label for="time"><span class="fw-semibold" style="font-weight:700">Time/</span>Oras :</label>
                <input type="time" class="form-control" id="time" aria-describedby="time">
                <br>

                <label for="date"><span class="fw-semibold" style="font-weight:700">Date/</span>Petsa :</label>
                <input type="date" class="form-control" id="date" aria-describedby="date">
                <br>

                <label for="name"><span class="fw-semibold" style="font-weight:700">Name/</span>Pangalan :</label>
                <input type="email" class="form-control" id="name" aria-describedby="emailHelp">
                <br>

                <label><span class="fw-semibold" style="font-weight:700">Contact details (e-mail address or contact no.)</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
                <input type="radio" name="category" id="Individual" value = "1">
                <label class="form-check-label" for="Individual">Individual/ Indibidwal</label>
                <br>
                <input type="radio" name="category" id="Group" value = "2">
                <label class="form-check-label" for="Group">Group/ Grupo</label>
                <br><br>
                <h4>If Group/ Kung Grupo:</h4>
                <input type="radio" name="ifGroup" id="Private" value = "1">
                <label class="form-check-label" for="Private">Private/ Pribado</label>
                <br>
                <input type="radio" name="ifGroup" id="Government" value = "2">
                <label class="form-check-label" for="Government">Government/ Gobyerno</label>


                <p>Not applicable/ Hindi angkop  (If Individual/ Kung indibidwal)</p>
        
                <h4>Please choose your answer/ Piliin ang iyong sagot:*</h4>
                <input type="radio" name="classification" id="external" value = "1">
                <label class="form-check-label" for="external">External Customer</label>
                <br>
                <input type="radio" name="classification" id="internal" value = "2">
                <label class="form-check-label" for="internal">Internal Customer (BPI Employee)</label>
                <br>
                <br>
                <label><span class="fw-semibold" style="font-weight:700">If Group, name of your Agency or Association/ Kung Grupo, pangalan ng iyong Ahensya/ Asosasyon. Put N/A if Individual/ Ilagay N/A kung ikaw indibidwal.*</span></label>
                <input type="text" class="form-control" id="nameOFAgency" aria-describedby="nameOFAgency">
                <br>
                <br>

                <h4>Specific Type and Quantity of goods or services received/ Uri at dami ng mga bagay at serbisyong natanggap:*(Ex. 1 pack of  seeds/ 3 Certificates of Accreditation or Permits)</h4>
                <input type="text" class="form-control" id="nameOFAgency" aria-describedby="nameOFAgency">
                <br><br>

                <h4>Please check (✓) the appropriate column from 1-5, with 1 is being the lowest and 5 as the highest.Lagyan ng (✓) and napiling "kolum" mula 1-5, 1 bilang pinakamababa at 5 bilang pinakamataas,*</h4>
                
                <h5>Quality of goods or services provided/ Kalidad ng produkto o serbisyong natanggap?</h5>
                <input type="radio" name="qualityOfGoods" value = "5">
                <input type="radio" name="qualityOfGoods" value = "4">
                <input type="radio" name="qualityOfGoods" value = "3">
                <input type="radio" name="qualityOfGoods" value = "2">
                <input type="radio" name="qualityOfGoods" value = "1">

                <h5>Courteousness/ Pagiging magalang?</h5>
                <input type="radio" name="courteousness" id="internal" value = "5">
                <input type="radio" name="courteousness" id="internal" value = "4">
                <input type="radio" name="courteousness" id="internal" value = "3">
                <input type="radio" name="courteousness" id="internal" value = "2">
                <input type="radio" name="courteousness" id="internal" value = "1">

                <h5>Responsiveness/ Mabilis na pagtugon?</h5>
                <input type="radio" name="Responsiveness" id="internal" value = "5">
                <input type="radio" name="Responsiveness" id="internal" value = "4">
                <input type="radio" name="Responsiveness" id="internal" value = "3">
                <input type="radio" name="Responsiveness" id="internal" value = "2">
                <input type="radio" name="Responsiveness" id="internal" value = "1">

                <h5>Overall customer goods or services provided/ Kabuoang serbisyong natanggap?</h5>
                <input type="radio" name="classification" id="internal" value = "5">
                <input type="radio" name="classification" id="internal" value = "4">
                <input type="radio" name="classification" id="internal" value = "3">
                <input type="radio" name="classification" id="internal" value = "2">
                <input type="radio" name="classification" id="internal" value = "1">
        
                <h3>Promoter score</h3>
                <p>BPI products and services are worth promotable / Ang mga produkto at serbisyo ng BPI ay karapat-dapat mapalaganap</p>
                <input type="radio" name="classification" id="internal" value = "5">
                <input type="radio" name="classification" id="internal" value = "4">
                <input type="radio" name="classification" id="internal" value = "3">
                <input type="radio" name="classification" id="internal" value = "2">
                <input type="radio" name="classification" id="internal" value = "1">

                <label><span class="fw-semibold" style="font-weight:700">Other comments or suggestions on how we can further improve our goods/services?/ <i>Iba pang komento o mungkahi upang lalong mapaganda ang aming produkto at serbisyo?</i></span></label> 
                <label><span class="fw-semibold" style="font-weight:700">Put NONE if you don't have comments or suggestion/ <i>Ilagay WALA kung walang nais na ikomento o imungkahi.</i></span></label>
                <input type="text" class="form-control" id="comments" aria-describedby="comments">
                <br>

                <p>EFFECTIVITY DATE:</p>
                <p>September 15, 2022</p>
                <p>DOCUMENT NO.: BPI-QMS-KMT-F9</p>
                <p>REVISION NO.: 3</p>

            </div>
        </div>


        

    </div>
</div>

</body>
</html>