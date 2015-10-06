<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Address</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <?php
        // put your code here
        require_once './functions/dbconnect.php';
        require_once './functions/until.php';
        
        $name = filter_input(INPUT_POST, 'name');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST,'city');
        $state = filter_input(INPUT_POST,'state');
        $zip = filter_input(INPUT_POST,'zip');
        $birthday = filter_input(INPUT_POST,'birthday');
        
        $addresses = getAllAddress();
        
        include './templates/messages.html.php';
        include './templates/address-form.html.php';
        include './templates/view-addresses.html.php';
        ?>
    </body>
</html>
