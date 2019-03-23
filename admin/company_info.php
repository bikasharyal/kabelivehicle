<?php include_once('includes/header.php') ?>

<div id="wrapper">


    <!-- Navigation -->
    <?php include_once('includes/navigation.php') ?>




    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin Page !
                        <small>Author</small>
                    </h1>


                    <div class="col-xs-12">
<?php
if($connection){
    //print_r($connection) ;
    $query = "SELECT * FROM company_details";
    $select_company_info = mysqli_query($connection,$query);
}
?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Zip Code</th>
                                <th>Office Contact</th>
                                <th>Mobile</th>
                                <th>Email 1</th>
                                <th>Email 2</th>

                            </tr>
                            </thead>
                            <tbody>

 <?php
    while($row = mysqli_fetch_assoc($select_company_info)){
        $id=$row['company_id']; $name=$row['company_name'];  $type=$row['company_type']; $street=$row['street'];
        $city=$row['city']; $country=$row['country']; $zip=$row['zip_code'];  $office_contact_no=$row['office_contact_no'];
        $mobile_no=$row['mobile_no']; $email1=$row['email1']; $email2=$row['email2'];
        echo "<tr>";

        echo "<td>{$name}</td>";
        echo "<td>{$type}</td>";
        echo "<td>{$street}</td>";
        echo "<td>{$city}</td>";
        echo "<td>{$country}</td>";
        echo "<td>{$zip}</td>";
        echo "<td>{$office_contact_no}</td>";
        echo "<td>{$mobile_no}</td>";
        echo "<td>{$email1}</td>";
        echo "<td>{$email2}</td>";

        echo "<tr>";

    }
 ?>

                            </tbody>
                        </table>

                    </div>


                </div>
            </div>
            <!-- /.row -->



            <div class="col col-xs-6">

<?php
if(isset($_POST['submit'])){

//print_r($_POST);
    echo $_POST['street'];





}

?>
           <p> <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#edit_form" aria-expanded="false" aria-controls="edit_form">
                Edit Company Information
            </button></p>
            <div class="collapse" id="edit_form">

                <div class="card card-body">


                    <form action="" method="post">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="">Street</label>
                            <input type="text" name="street" required="required" value="<?php echo $street  ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" name="city" required="required" value="<?php echo  $city ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Zip Code</label>
                            <input type="text" name="zipcode" required="required" value="<?php echo $zip ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Office Contact Number: </label>
                            <input type="text" name="office_contact" required="required" value="<?php echo $office_contact_no ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Mobile Number: </label>
                            <input type="text" name="mobile" required="required" value="<?php echo $mobile_no ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email 1</label>
                            <input type="text" name="email1" required="required" value="<?php echo $email1 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email 2</label>
                            <input type="text" name="email2" required="required" value="<?php echo $email2 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-primary form-control"  name="submit" >Submit</button>
                        </div>

                    </form>

                </div>
            </div>

            </div>


        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->



    <!-- Footer -->

    <?php include_once('includes/footer.php') ?>
