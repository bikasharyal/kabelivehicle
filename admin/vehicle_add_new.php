<?php include_once ('includes/header.php')?>

<div id="wrapper">


    <!-- Navigation -->
    <?php include_once ('includes/navigation.php')?>




    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Vehicle Management
                        <small>Add New Vehicle</small>
                    </h1>


                    <div class="col-xs-12">
                        <form action="" method="post">
                            <div class="col-xs-6" >
                                <div class="form-group">
                                    <label for="">Vehicle Id (Number Plate):</label>
                                    <input type="text" name="vehicle_id" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="">Brand Name</label>
                                    <input type="text" name="brand" required="required" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label for="">Model Name</label>
                                    <input type="text" name="model_name" required="required" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Picture URL</label>
                                    <input type="text" name="picture_url" required="required" class="form-control" >
                                </div>
                            </div>

                            <div class="col col-xs-12">

                                <div class="col-xs-6">

                                    <div class="form-group">
                                        <label for="">Vehicle Type: </label>
                                        <input type="text" name="type_en" placeholder=" Mention vehicle's type in english.." required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description: </label>
                                        <input type="text" name="description_en" placeholder=" Mention vehicle's description in English.." required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-6">

                                    <div class="form-group">
                                        <label for="">Vehicle Type: </label>
                                        <input type="text" name="type_es" placeholder="Mention vehicle's type in Spanish.." required="required" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description: </label>
                                        <input type="text" name="description_es" placeholder="Mention vehicle's description in Spanish" required="required" class="form-control">
                                    </div>
                                </div>

                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn-lg btn-primary form-control"  name="submit" >Submit</button>
                            </div>

                        </form>

                    </div>





                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->



    <!-- Footer -->

    <?php include_once ('includes/footer.php')?>
