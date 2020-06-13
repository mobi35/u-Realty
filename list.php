<?php include('includes/header.php'); include('includes/dbconfig.php'); ?>

<br>


<div class="container-fluid" >

<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
    <a  href = "insert.php" class="btn btn-primary"> Add Contract</a>   
        </div>
       

</div>

<br>
    <div class="row justify-content-center">

  

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>ID</th>
                <th>Classification</th>
                <th>Building </th>
                <th>Room Details</th>
                <th>Rent</th>
            
                <th>Commission</th>
                <th>Contract Duration</th>
                <th>Brokers Detail</th>
                <th>Manager</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Contract</th>
            </tr>
        </thead>
        <tbody>

<?php
$ref = '/contact';
$fetchdata = $database->getReference($ref)->getValue();
$i =0;

if($fetchdata > 0)
{

foreach($fetchdata as $key => $row){
    $i++;
?>

    <tr>
    <td><?php echo $row['id']; ?> </td>   
    <td><?php echo $row['classification']; ?> </td>   
    <td><?php echo $row['building_name'] . ' - ' . $row['area']; ?> </td>
    <td><?php echo $row['room_number'] . ' - ' . $row['room_type'] . ' / ' . $row['room_size'] . 'SQM'; ?> </td>
    <td><?php echo $row['monthly_rent']; ?> </td>   
    <td><?php echo $row['commission_earn']; if(!isset($row['commission_connection']))  { echo " - N/A"; } else { echo " - Yes";}?>  </td>   
    <td><?php echo $row['contract_start'] .' - '. $row['contract_end'] ; ?> </td>   
    <td><?php echo $row['broker_name'] .' - '. $row['broker_phone'] ; ?> </td>   
    <td><?php echo $row['manager']; ?> </td>   
    <td><a href = "edit.php?token=<?php echo $key ?>" class="btn btn-primary"> Edit</a></td>
    <td><a onclick="return confirm('Are you really sure ?')" href = "code.php?delete=<?php echo $key?>" class="btn btn-primary"> Delete</a></td>
    <td><a class="btn btn-primary" href="contract.php?token=<?php echo $key?>"> Show Contract </a></td>
    <td><a class="btn btn-primary" href="reportdocs.php?token=<?php echo $key?>"> Show Detail </a></td>
    <td><?php if( !isset($row['images'] )){ echo "N/A"; } else { echo "Yes"; }  ?> </td>
</tr>
    
<?php

}


}

?>

           
  
        </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
            <th>Classification</th>
                <th>Building </th>
                <th>Room Details</th>
                <th>Rent</th>
             
                <th>Commission</th>
                <th>Contract Duration</th>
                <th>Brokers Detail</th>
                <th>Manager</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Contract</th>
            </tr>
        </tfoot>
    </table>
 
    
    </div>
</div>

<script>


$(document).ready(function() {
    $('#example').DataTable( {
    "lengthMenu": [50, 100, 500, 1000, 2000, 5000, 10000, 50000, 100000],
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            {
                    extend: 'print',

                    customize: function (win) {
                        $(win.document.body)
                            .css({ 'font-size': '10pt' })
                            .prepend(
                                '<img style= src="idu+.png"  style="position:absolute; height:500px; z-index:5000; width:500px; top:0; left:0;" />'
                            );

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                },
            'pdfHtml5'
        ]
    } );
} );
</script>





<?php include('includes/footer.php'); ?>