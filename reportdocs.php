
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<?php

require_once __DIR__ . '/includes/vendor/autoload.php';

$token = $_GET['token'];

include ('includes/dbconfig.php');

$ref = "/contact";

$getData = $database->getReference($ref)->getChild($token)->getValue();

$row =  $getData;

$mpdf = new \Mpdf\Mpdf();


$data = '';



$data .= ' <div style="text-align:center;"> <img src = "idu+.png" style="width:10%;"/> <br> <h4> U+ REALTY CONSULTATION GENERAL SERVICES INC.</h4>  <p>#3203-B East Tower, Philippine Stock Exchange Centre, Exchange Road, Ortigas Center San Antonio, Pasig City</p> </div>';


$data .= '
<br>
<h3 style="text-align:center;">  '.$row["area"].' - '.$row["building_name"].' - '.$row["room_number"].' </h3>

<table style="font-size:16px; text-align:center; border:1px solid black; border-collapse: collapse;" width="700px" cellpadding="12" >


<tr >  <td  style="background-color:lightgreen; border:1px solid black" >Classification </td> <td style="border:1px solid black">'.$row["classification"].'</td>  </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">Area </td> <td style="border:1px solid black">'.$row["area"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">Building Name </td> <td style="border:1px solid black">'.$row["building_name"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">room_number </td> <td style="border:1px solid black">'.$row["room_number"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">room_type </td> <td style="border:1px solid black">'.$row["room_type"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">room_size </td> <td style="border:1px solid black">'.$row["room_size"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">monthly_rent </td> <td style="border:1px solid black">'.$row["monthly_rent"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">commission_rate </td> <td style="border:1px solid black">'.$row["commission_rate"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">commission_earn </td> <td style="border:1px solid black">'.$row["commission_earn"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">contract_start </td> <td style="border:1px solid black">'.$row["contract_start"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">contract_end </td> <td style="border:1px solid black">'.$row["contract_end"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">contract_notary </td> <td style="border:1px solid black">'.$row["contract_notary"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">commission_collection </td> <td style="border:1px solid black">'.$row["commission_collection"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">broker_name </td> <td style="border:1px solid black">'.$row["broker_name"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">broker_phone </td> <td style="border:1px solid black">'.$row["broker_phone"].' </td> </tr>

<tr >  <td style="background-color:lightgreen;border:1px solid black">manager </td> <td style="border:1px solid black">'.$row["manager"].' </td> </tr>


</table>


';



$data .= '<table>';


$mpdf->WriteHTML($data);

$mpdf->Output('uplus.pdf','D');

?>