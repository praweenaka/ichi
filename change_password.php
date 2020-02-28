<?php
include './connection_sql.php';
?>

<!-- Main content -->

<section class="content">



    <div class="box box-primary">

        <div class="box-header with-border">

            <h3 class="box-title">Change Password</h3>

        </div>

        <form  name= "form1"  role="form" class="form-horizontal">

            <div class="box-body">



                <div class="form-group">

                    <a onclick="save();" class="btn btn-success btn-sm">
                        <span class="fa fa-save"></span> &nbsp; Save
                    </a>

                </div>

                <div id="msg_box"  class="span12 text-center"  >
                </div>
                <input type="hidden"  id="tmpno" >

                <div class="form-group">
                    <label class="col-sm-2 control-label">UserName</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="UserName" id="usn" value="<?php echo $_SESSION["CURRENT_USER"]; ?>" class="form-control input-sm" disabled="">

                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label">User Type</label>
                    <div class="col-sm-2">
                        
                        <?php
                        $sql = "select user_type from user_mast where user_name ='" . $_SESSION["CURRENT_USER"] . "'";
                        $result = $conn->query($sql);
                        $row = $result->fetch();
                        echo"<input type=\"text\"  id=\"creditCombo\" value=\"" . $row["user_type"] . "\" disabled class=\"form-control input-sm\"/>";
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-2">

                        <input type="text" placeholder="Password" id="psw" value="" class="form-control input-sm">

                    </div>

                </div>

            </div>

            <div id="itemdetails"></div>

        </form>

    </div>

</section>

<script src="js1/change_password.js">

</script>





