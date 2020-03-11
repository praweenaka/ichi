<?php
session_start();
?> 
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Invoice ..</b></h3>
            <h4 style="float: right;height: 3px;"><b id="time"></b></h4> 
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">

                <input type="hidden" id="uniq" class="form-control">

                <input type="hidden" id="item_count" class="form-control">
                <div class="form-group">

                    <a onclick="newent();" class="btn btn-default  ">
                        <span class="fa fa-user-plus"></span> &nbsp; New
                    </a>

                    <a onclick="save_inv();" class="btn btn-success  ">
                        <span class="fa fa-save"></span> &nbsp; Save
                    </a>
                    <a onclick="print_inv();" class="btn btn-primary  ">
                        <span class="fa fa-print"></span> &nbsp; Print
                    </a>

                    <a onclick="cancel_inv();" class="btn btn-danger  ">
                        <span class="fa fa-trash"></span> &nbsp; Cancel
                    </a>


                </div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div id="msg_box"  class="span12 text-center"  ></div>

                <div class="form-group">
                    <label class="col-md-2" for="txt_usernm">Invoice No</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Invoice No" disabled="" id="invoiceno" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <a href="search_invoice.php" onclick="NewWindow(this.href, 'mywin', '800', '700', 'yes', 'center');
                                return false" onfocus="this.blur()">
                            <input type="button" name="searchitem" id="searchitem" value="..." class="btn btn-primary btn-sm">
                        </a>
                    </div>
                    <div class="col-sm-1"></div>
                    <label class="col-sm-2 " for="txt_usernm">Applied Date</label>
                    <div class="col-sm-2">
                        <input type="text"   value="<?php echo date('Y-m-d'); ?>"   id="sdate" class="form-control dt">
                    </div>
                </div> 



                <div class="form-group">
                    <label class="col-sm-2" for="txt_usernm">First Name</label>
                    <div class="col-sm-3">
                        <input type="text" placeholder="First Name" id="fname" class="form-control">
                    </div>
                    <label class="col-sm-2" for="txt_usernm">Last Name</label>
                    <div class="col-sm-3">
                        <input type="text" placeholder="Last Name" id="lname" class="form-control">
                    </div> 
                </div> 
                <div class="form-group">

                    <label class="col-sm-2" for="txt_usernm">Nic</label>
                    <div class="col-sm-3">
                        <input type="text" placeholder="Nic" id="nic" class="form-control">
                    </div> 
                    <label class="col-sm-2 " for="txt_usernm">Sex</label>
                    <div class="col-sm-1">
                        <input type="checkbox" id="male">Male 
                    </div> 
                    <div class="col-sm-2">
                        <input type="checkbox" id="female">Female
                    </div> 
                </div> 
                <div class="form-group"> 
                    <label class="col-sm-2" for="c_code">Course Name</label>
                    <div class="col-sm-3">
                        <select name="coursename" id="coursename"   class="form-control input-sm">
                            <option value=""></option>
                            <?php
                            require_once("./connection_sql.php");

                            $sql = "Select * from course  where active ='0'";
                            foreach ($conn->query($sql) as $row) {
                                echo "<option value='" . $row["code"] . "'>" . $row["name"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>  
                    <label class="col-sm-2" for="txt_usernm">Student ID</label>
                    <div class="col-sm-3">
                        <input type="text" placeholder="Student ID" id="age" class="form-control">
                    </div>
                </div> 
                <div class="form-group"> 
                    <label class="col-sm-2" for="c_code">Level1</label>
                    <div class="col-sm-3">
                        <select name="lvl1" id="lvl1"   class="form-control input-sm">
                            <option value=""></option>
                            <?php
                            require_once("./connection_sql.php");

                            $sql = "Select lvl1 from course  where active ='0' group by lvl1";
                            foreach ($conn->query($sql) as $row) {
                                echo "<option value='" . $row["lvl1"] . "'>" . $row["lvl1"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>  
                    <label class="col-sm-2" for="txt_usernm">Level2</label>
                    <div class="col-sm-3">
                        <select name="lvl2" id="lvl2"   class="form-control input-sm">
                            <option value=""></option>
                            <?php
                            require_once("./connection_sql.php");

                            $sql = "Select lvl2 from course  where active ='0' group by lvl2";
                            foreach ($conn->query($sql) as $row) {
                                echo "<option value='" . $row["lvl2"] . "'>" . $row["lvl2"] . "</option>";
                            }
                            ?>
                        </select> 
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-2" for="txt_usernm">Date Of Birth</label>
                    <div class="col-sm-3">
                        <input type="datetime"  id="dob" class="form-control dt">
                    </div> 
                    <label class="col-sm-2" for="txt_usernm">Country</label>
                    <div class="col-sm-3">
                        <input type="text" placeholder="Country" id="country" class="form-control">
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="txt_usernm">Address</label>
                    <div class="col-sm-3">
                        <textarea style="resize: none" class="form-control" id="address" placeholder="Address"  rows="2"></textarea> 
                    </div>  
                    <label class="col-sm-2" for="txt_usernm">Contact Personal</label>
                    <div class="col-sm-3">
                        <input type="number" placeholder="Contact" id="contactp" class="form-control">
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-md-2" for="contact">Note</label>
                    <div class="col-md-3">
                        <textarea style="resize: none" class="form-control" id="note" placeholder="Note"  rows="2"></textarea> 
                    </div> 
                    <label class="col-sm-2" for="txt_usernm">Contact Home</label>
                    <div class="col-sm-3">
                        <input type="number" placeholder="Contact" id="contacth" class="form-control">
                    </div>   
                </div>  
                <div class="form-group">
                    <label class="col-sm-2 " for="txt_usernm">Course Fee</label>
                    <div class="col-sm-3">
                        <input type="number" placeholder="Course Fee" id="tot" class="form-control">
                    </div>
                    <label class="col-sm-2 " for="txt_usernm">Reg Fee</label>
                    <div class="col-sm-2">
                        <input type="number" placeholder="Reg Fee" id="regfee" class="form-control">
                    </div> 
                </div> 
                <div class="form-group">
                    <label class="col-sm-2 " for="txt_usernm">Discount</label>
                    <div class="col-sm-3">
                        <input type="number" placeholder="Discount" id="discount" class="form-control">
                    </div> 
                    <label class="col-sm-2 " for="txt_usernm">Down Payment</label>
                    <div class="col-sm-2">
                        <input type="number" placeholder="Down Payment" id="advance" class="form-control">
                    </div> 
                </div> 
                <div class="form-group" id="filup" style="visibility: visible;">
                    <label class="col-sm-2" for="file-3">Image</label>&nbsp;&nbsp;&nbsp;
                    <label class="btn btn-default" for="file-3">
                        <input id="file-3"  onchange="readURL(this);" name="file-3" multiple="true" type="file">
                        Select Files

                    </label>

                    <a class="btn btn-primary" style="visibility: hidden;" id="upbut" onclick="imgup('img');">Upload</a>
                </div>    
                <div class="form-group" >
                    <label class="col-md-2" for="contact"> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img id="blah" src="http://placehold.it/180" style="width: 300px;height: 300px;" alt="your image" />

                </div>   
            </div>
        </form>
    </div>

</section> 
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                        .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<style>
    img{
        max-width:280px;
    }
    input[type=file]{
        padding:10px;
        background:white;}
</style>

<script src="js1/invoice.js" type="text/javascript"></script>
<script>newent();</script>
