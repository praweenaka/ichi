<?php
require_once("./connection_sql.php");
?>	
<!-- Main content -->
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Assign Privileges</h3>
        </div>
        <form role="form" class="form-horizontal">
            <div class="box-body">
                <input type="hidden" name="mcount" id="mcount" />
                <div class="form-group">
                    <a onclick="newent();" class="btn btn-default">
                        <span class="fa fa-user-plus"></span> &nbsp; New
                    </a>
                    <a onclick="save_inv1();" class="btn btn-success">
                        <span class="fa fa-save"></span> &nbsp; Save
                    </a>

                </div>

                <div id="msg_box"  class="span12 text-center"  >

                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txt_usernm">User Name</label>
                    <div class="col-sm-2">
                        <select name="user_name" id="user_name" onchange="select_permission();"  class="text_purchase3 col-sm-9 form-control" >
                            <option value=""></option>
                            <?php
                            require_once("./connection_sql.php");

                            $sql = "Select user_name from user_mast order by user_name";
                            foreach ($conn->query($sql) as $row) {
                                echo "<option value=\"" . $row["user_name"] . "\">" . $row["user_name"] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div id="privi_table">          
                    <table class="table hidden" >
                        <tr>
                            <th>Form Name</th>
                            <th>Category</th>
                            <th>View</th>
<!--                            <th>Feed</th>
                            <th>Modify</th>
                            <th>Price Edit</th>
                            <th>Print</th>-->
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="center"><input type="checkbox" name="chkview" id="chkview" /></td>
                            <td align="center"><input type="checkbox" name="chkfeed" id="chkfeed" /></td>
                            <td align="center"><input type="checkbox" name="chkmod" id="chkmod" /></td>
                            <td align="center"><input type="checkbox" name="chkprice" id="chkprice" /></td>
                            <td align="center"><input type="checkbox" name="chkprint" id="chkprint" /></td>
                        </tr>
                    </table>
                </div>





            </div>
        </form>
    </div>

</section>

<script src="js1/create_user.js"></script>





