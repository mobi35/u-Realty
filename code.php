<?php
session_start();

include('includes/dbconfig.php');


$phpFileUploadErrors = array(

    0 => 'There is no error, the file upload with success',
    1 => 'The uploadfile exceeds the upload_max_filesize directive in php.ini',
    2 => 'The upload file exceeds the MAX_FILE-SIZE directive that was specified in the HTML forms',
    3 => 'The upload file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk',
    8 => 'A PHP extension stopped the file upload.',

);

if (isset($_POST["save_push_data"])) {

    $id = $_POST["id"];


    $classification = $_POST["classification"];
    $area = $_POST["area"];
    $building_name = $_POST["building_name"];
    $room_number = $_POST["room_number"];
    $room_type = $_POST["room_type"];
    $room_size = $_POST["room_size"];
    $monthly_rent = $_POST["monthly_rent"];
    $commission_rate = $_POST["commission_rate"];
    $commission_earn = $_POST["commission_earn"];
    $contract_start = $_POST["contract_start"];
    $contract_end = $_POST["contract_end"];
    $contract_notary = $_POST["contract_notary"];
    $commission_collection = $_POST["commission_collection"];
    $broker_name = $_POST["broker_name"];
    $broker_phone = $_POST["broker_phone"];
    $manager = $_POST["manager"];
  
$newImage = array();
    if (isset($_FILES['contract_image'])) {

        $file_array = reArrayFiles($_FILES['contract_image']);
        // print_r($file_array);
        for ($i = 0; $i < count($file_array); $i++) {
            if ($file_array[$i]['error']) {
    
    ?> <div class="alert alert-danger">
                    <?php echo $file_array[$i]['name'] . ' - ' . $phpFileUploadErrors[$file_array[$i]['error']];
                    ?>
    
                </div> <?php
    
                    } else {
                        $extensions = array('jpg', 'png', 'gif', 'jpeg');
                        $file_ext = explode('.', $file_array[$i]['name']);
                        $file_ext = end($file_ext);
    
                        if (!in_array($file_ext, $extensions)) {
                        ?> <div class="alert alert-danger">
                        <?php echo "{$file_array[$i]['name']} Invalid File Extension!" ?>
                    </div> <?php
                        } else {
                            $fileName = uniqid() . $file_array[$i]['name'];
                            array_push($newImage,$fileName);
                            move_uploaded_file($file_array[$i]['tmp_name'], "files/" .$fileName);
                            ?> <div class="alert alert-success">
                        <?php echo $file_array[$i]['name'] . ' - ' . $phpFileUploadErrors[$file_array[$i]['error']];
                        ?> </div> <?php
                                }
                            }
                        }
                    }



                    

    $data = [
       
        'id' => $id,
        'classification' => $classification,
        'area' => $area,
        'building_name' => $building_name,
        'room_number' => $room_number,
        'room_type' => $room_type,
        'room_size' => $room_size,
        'monthly_rent' => $monthly_rent,
        'commission_rate' => $commission_rate,
        'commission_earn' => $commission_earn,
        'contract_start' => $contract_start,
        'contract_end' => $contract_end,
        'contract_notary' => $contract_notary,
        'commission_collection' => $commission_collection,
        'broker_name' => $broker_name,
        'broker_phone' => $broker_phone,
        'manager' => $manager

    ];  
 

    $imageArr = array('images' => $newImage);
    $res = array_merge($data,$imageArr);

    $ref = "contact/";
    $postData = $database->getReference($ref)->push($res);


    if ($postData) {
        $_SESSION["status"] = "Data Inserted Successfully";
        header("Location: list.php");
    } else {
        $_SESSION["status"] = "Data Inserted Fail";
        header("Location: list.php");
    }
}




if (isset($_POST["update_data"])) {


    $token = $_POST["token"];
    $classification = $_POST["classification"];
    $area = $_POST["area"];
    $building_name = $_POST["building_name"];
    $room_number = $_POST["room_number"];
    $room_type = $_POST["room_type"];
    $room_size = $_POST["room_size"];
    $monthly_rent = $_POST["monthly_rent"];
    $commission_rate = $_POST["commission_rate"];
    $commission_earn = $_POST["commission_earn"];
    $contract_start = $_POST["contract_start"];
    $contract_end = $_POST["contract_end"];
    $contract_notary = $_POST["contract_notary"];
    $commission_collection = $_POST["commission_collection"];
    $broker_name = $_POST["broker_name"];
    $broker_phone = $_POST["broker_phone"];
    $manager = $_POST["manager"];
  
$newImage = array();
    if (isset($_FILES['contract_image'])) {

        $file_array = reArrayFiles($_FILES['contract_image']);
        // print_r($file_array);
        for ($i = 0; $i < count($file_array); $i++) {
            if ($file_array[$i]['error']) {
    
    ?> <div class="alert alert-danger">
                    <?php echo $file_array[$i]['name'] . ' - ' . $phpFileUploadErrors[$file_array[$i]['error']];
                    ?>
    
                </div> <?php
    
                    } else {
                        $extensions = array('jpg', 'png', 'gif', 'jpeg');
                        $file_ext = explode('.', $file_array[$i]['name']);
                        $file_ext = end($file_ext);
    
                        if (!in_array($file_ext, $extensions)) {
                        ?> <div class="alert alert-danger">
                        <?php echo "{$file_array[$i]['name']} Invalid File Extension!" ?>
                    </div> <?php
                        } else {
                            $fileName = uniqid() . $file_array[$i]['name'];
                            array_push($newImage,$fileName);

                            move_uploaded_file($file_array[$i]['tmp_name'], "files/" .  $fileName);
                            ?> <div class="alert alert-success">
                        <?php echo $file_array[$i]['name'] . ' - ' . $phpFileUploadErrors[$file_array[$i]['error']];
                        ?> </div> <?php
                                }
                            }
                        }
                    }

   
                    $data = [
       
                        'classification' => $classification,
                        'area' => $area,
                        'building_name' => $building_name,
                        'room_number' => $room_number,
                        'room_type' => $room_type,
                        'room_size' => $room_size,
                        'monthly_rent' => $monthly_rent,
                        'commission_rate' => $commission_rate,
                        'commission_earn' => $commission_earn,
                        'contract_start' => $contract_start,
                        'contract_end' => $contract_end,
                        'contract_notary' => $contract_notary,
                        'commission_collection' => $commission_collection,
                        'broker_name' => $broker_name,
                        'broker_phone' => $broker_phone,
                        'manager' => $manager
                
                    ];
                
  $ref = "contact/" . $token;

                if ( $_FILES['contract_image']['name'][0] != ""  ) {
                    //DELETE OLD IMAGE
                    $getImage = $database->getReference($ref)->getValue();
                    foreach($getImage['images'] as $img){
                        
                        unlink('files/'.$img);

                    }

                    $imageArr = array('images' => $newImage);
                    $res = array_merge($data,$imageArr);
                    $data = $res;
                    
                }else {

                    $getImage = $database->getReference($ref)->getValue();
                    $imageArr = array('images' => $getImage['images'] );
                    $res = array_merge($data,$imageArr);
                    $data = $res;
                }






    $postData = $database->getReference($ref)->update($data);

    

    if ($postData) {
        $_SESSION["status"] = "Data Updated Successfully";
        header("Location: list.php");
    } else {
        $_SESSION["status"] = "Data Updated Fail";
        header("Location: list.php");
    }
}


if (isset($_GET["delete"])) {
    $token = $_GET['delete'];
    $ref = "contact/" . $token;
    $deleteData = $database->getReference($ref)->remove($data);

    if ($deleteData) {
        $_SESSION["status"] = "Data Deleted Successfully";
        header("Location: list.php");
    } else {
        $_SESSION["status"] = "Data Deleted Fail";
        header("Location: list.php");
    }
}

?>

<?php

                function reArrayFiles($file_post)
                {

                    $file_ary = array();
                    $file_count = count($file_post['name']);
                    $file_keys = array_keys($file_post);

                    for ($i = 0; $i < $file_count; $i++) {
                        foreach ($file_keys as $key) {
                            $file_ary[$i][$key] = $file_post[$key][$i];
                        }
                    }

                    return $file_ary;
                }

                function pre_r($array)
                {

                    echo '<pre>';
                    print_r($array);

                    echo '</pre>';
                }


                                ?>