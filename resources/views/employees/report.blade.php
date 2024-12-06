<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly report</title>

    <style>
      
.table {
  font-family: sans-serif;
  border-collapse: collapse;
  width: 90%;
  font-size: 13px;
  margin-left: 50px;
}

td, th {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 12px;
}
.inline {
          display: inline;
          margin: 20px;
        }
        div.c {
          text-align: right;
          margin: 20px;
        } 
      
        div.a {
          text-align: center;
       
        }


</style>
</head>
<body><br>
<center><img src="{{ public_path('\images\logonew.jpg') }}" style="width: 250px; height: 150px;"></center><br>
<p style="float:left; font-size:15px;"> Address: No. 600,Athurugiriya Road, Colombo, Srilanka</p>
<p style="float:right; font-size:15px;">
    Telephone: +9411 2123789/+9411 2729568</p><br><br>
    <hr width="100%">

<h1 style="text-align: center; font-size: 20px;">All the registered employees in this month</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee name</th>
                <th>Contact number</th>
                <th>Email</th>
                <th>Desigantion</th>
                <th>Address</th>
            </tr>
        </thead><br>
        <tbody>
            @foreach($reports as $report)
            <tr>
                <td>{{$report->empid}}</td>
                <td>{{$report->name}}</td>
                <td>{{$report->contact_no}}</td>
                <td>{{$report->email}}</td>
                <td>{{$report->designation}}</td>
                <td>{{$report->address}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<b style="font-size: 18px; font-family:sans-serif; float:left; margin-left:50px">Total registered employees: {{$sum}}</b>

 <br> 
<footer style = "padding: 5px; font-size:10px;" >
<hr width="100%">	<br><br>
<center><table style="width: 100%;" >
    <tr>
        <td>
            <p><b>Arai Auto Spare Parts</b><br> No 600, <br> Athurugiriya Road,<br>Colombo, Srilanka</p>
        </td>
        <td>
                <center><p style="text-align: center;">Copyright 2021 @ Arai(PVT)LTD.
            <br>All rights reserved
            <br>Website Developed and Designed by B6-02-07 Project Group
             </p></center>
        </td>
        <td>
        <p style="text-align: right;"><br> +9411 2729568<br>+9411 2123789<br>E-mail: araispareparts@gmail.com <br>  
        </td>
       
    </tr>
</table></center>		


    
						
</footer>
</body>
</html>