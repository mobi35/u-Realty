<?php
    require __DIR__.'/vendor/autoload.php';


    use Kreait\Firebase\Factory;
 

    $factory = (new Factory)->withServiceAccount(__DIR__. '/uplusrealty-firebase-adminsdk-67gp1-b90a77dbd0.json');

    $database = $factory->createDatabase();

?>