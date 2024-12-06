@php
    $x = 0;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monthly Report</title>

    <link rel="stylesheet" href="/css/style2.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        #report-title {
            text-align: center;
            font-weight: bolder;
            font-size: x-large;
        }
        
        #report-content {
            margin: 2px;
            border: 2px solid black;
            padding: 10px 25px;
        }
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
          
           color: black;
           text: center;
           height: 20%;
         
        }
        .inline {
          display: inline;
        }
        div.c {
          text-align: right;
        } 
      
        div.a {
          text-align: center;
        }
    </style>
</head>
<body>
        	<!--HEADER BEGIN-->
            <header>
        	<div style="text-align: center;">
            	<img src="{{ public_path('img/logonew.png') }}" style="width: 250px; height: 150px">
        	</div>
        	<br>
            	<h5 style = "float:left;"> Address : No. 600, Athurugiriya Road, Colombo, Sri Lanka</h5>
            	<h5 style = "float:right;"> Telephone: +9411 2123789/+9411 2729568</h5>
            	<br><br>
       		 <hr>
    	</header>
	<!--HEADER END-->
    <br>
    <div id="report-title">
        Monthly Report
    </div>
    <div id="report-content">
        <strong>Week {{ ++$x }}</strong>
        @foreach ($weekData as $weekData)
            <ol style="margin-top: 3px;">
                <li>Supplier Name: {{ $weekData->supplierName }}</li>
                <li>Company Name: {{ $weekData->companyName }}</li>
                <li>Order Status: {{ $weekData->orderStatus }}</li>
                <li>Date: {{ $weekData->dates }}</li>
            </ol>
            <hr><br>
        @endforeach
    </div>
<!--FOOTER BEGIN-->
<footer>
    		<div class="footer">
        	<hr>
            		<div class="inline"  style="float:left;">  
                		<p  style="font-size:12px"> Arai Auto Spare Parts<br>No. 600,<br>Athurugiriya Road,<br>Colombo, Sri Lanka</p>
           		 </div>

        		<div class="c" style="display:inline;">
            			<p style="LINE-HEIGHT:10px; font-size:12px"> +9411 2729568</p>
            			<p style="LINE-HEIGHT:10px; font-size:12px"> +9411 2123789</p>
            			<p  style="LINE-HEIGHT:10px; font-size:12px"> E-mail: araispareparts@gmail.com </p><br>
       			</div>
    		</div>
	</footer>
	<!--FOOTER END-->
</body>
</html>