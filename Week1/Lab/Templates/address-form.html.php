<br />

<div class="container">
    <h1>Add Address</h1>
    <form action="#" method="post">   
        Name: <input type="text" name="name" value="<?php echo $name; ?>" /> <br />
       Email: <input type="text" name="email" value="<?php echo $email; ?>" /> <br />
       Address Line 1: <input type="text" name="addressline1" value="<?php echo $addressline1; ?>" /> <br />
       City: <input name="city" type="text" value="<?php echo $city; ?>" /> <br />
       State: <input name="state" type="text" value="<?php echo $state; ?>" /> <br />
       Zip: <input name="zip" type="text" value="<?php echo $zip; ?>" /> <br />
       Birthday: <input name="birthday" type="date" value="<?php echo $birthday; ?>" /> <br />
       <input type="submit" value="submit" class="btn btn-primary" />
    </form>
</div>