<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
    <title>Document</title>
</head>
<body>
    
<!--{{$fromDate}}
{{$toDate}}-->

<div class="container">
    <div class ="col-md-20">
    <header>
        <div style="text-align: center;">
            <img src="{{ public_path('images/logonew.png') }}" style="width: 250px; height: 150px">
        </div>
        <br>
            <h5 style = "float:left;"> Address : No. 600, Athurugiriya Road, Colombo, Sri Lanka</h5>
            <h5 style = "float:right;"> Telephone: +9411 2123789/+9411 2729568</h5>
            <br><br>
        <hr>
    </header>
       
        
        <p>Total Expense for the period - From <b><i>
            {{$fromDate}}</i></b> To <b><i>{{$toDate}}</i></b> </p><br>
        
        <table width="100%" style="border-collapse: collapse; border: 0px;">
            <thead class="thead-dark">
                <tr>
                    <th  style="border: 1px solid; " scope="col">Reference Number</th>
                    <th  style="border: 1px solid; " scope="col">Transaction Date</th>
                    <th  style="border: 1px solid; " scope="col">Expense Category</th>
                    <th  style="border: 1px solid; " scope="col">Expense Description</th>
                    <th  style="border: 1px solid; " scope="col">Discount in LKR</th>
                    <th  style="border: 1px solid; " scope="col">Amount in LKR</th>    
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $expensesearch)
                <tr> 
                    <td style="border: 1px solid;  text-align:left;">{{$expensesearch -> expense_refno}}</td>
                    <td style="border: 1px solid;  text-align:left;">{{$expensesearch -> transaction_date}}</td>
                    
                    <td style="border: 1px solid;  text-align:left;">{{$expensesearch -> expense_category}}</td>
               
                    <td style="border: 1px solid;  text-align:left;">{{$expensesearch -> expense_description}}</td>
                    <td style="border: 1px solid;  text-align:left;">{{$expensesearch -> expense_discount}}</td>
                    <td style="border: 1px solid;  text-align:left;">{{$expensesearch -> expense_amount}}</td>
                    
                </tr>
                @endforeach

                <tr>
                    <td colspan =4  style="border: 1px solid;  text-align:left;"><b>Total Amount</b></td>
                    <td style="border: 1px solid;  text-align:left;"><b>{{$totalDiscount}}.00</b></td>
                    <td style="border: 1px solid;  text-align:left;"><b>{{$totalExpense}}.00</b></td>           
                </tr>
                    
            </tbody>
        </table>


<footer>
    <div class="footer">
        <hr>
            <div class="inline"  style="float:left;">  
                <p  style="font-size:12px"> Arai Auto Spare Parts<br>No. 600,<br>Athurugiriya Road,<br>Colombo, Sri Lanka</p>
               

            </div>

        <div class="a" style="float:center;">
        <p  style="font-size:12px">&copy; Copyright 2022 @ Arai(PVT)LTD.<br>All rights reserved
            <br></p>
        </div>

        <div class="c" style="display:inline;">
            <p style="LINE-HEIGHT:10px; font-size:12px"> +9411 2729568</p>
            <p style="LINE-HEIGHT:10px; font-size:12px"> +9411 2123789</p>
            <p  style="LINE-HEIGHT:10px; font-size:12px"> E-mail: araispareparts@gmail.com </p><br>
        </div>
    </div>
</footer>
    </div>
</div>

    

</body>
</html>