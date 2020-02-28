<?php
include './connection_sql.php';
?>

<!-- Main content -->
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sales Reports</h3>
        </div>
        <form name= "form1" role="form" target="_blank" action="sales_report_data.php" method="GET" class="form-horizontal">
            <div class="box-body">


                <div id="msg_box"  class="span12 text-center"  ></div>
                <div class="form-group"> 
                    <label class="col-sm-1 control-label" for="dtfrom">Date From</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Date" name="dtfrom" id="dtfrom" value="<?php echo date('Y-m-d'); ?>" class="form-control dt input-sm">
                    </div> 
                    <label class="col-sm-1 control-label" for="dtto">Date To</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Date" name="dtto" id="dtto" value="<?php echo date('Y-m-d'); ?>" class="form-control dt input-sm">
                    </div>
                    <label class="col-sm-1 control-label" for="dtto">Type</label>
                    <div class="col-sm-2">
                        <select name="type1" id="type1" class="form-control input-sm"> 
                            <option value="Invoice Wise">Invoice Wise</option> 
                            <option value="Receipt Wise">Receipt Wise</option> 
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" value="View"> View</button>
                </div> 


            </div>
        </form>
        <form name= "form1" role="form" target="_blank" action="sales_report_data1.php" method="GET" class="form-horizontal">
            <div class="box-header with-border">
                <h3 class="box-title">Oustanding Report</h3>
            </div>
            <div class="box-body"> 
                <div id="msg_box"  class="span12 text-center"  ></div>
                <div class="form-group"> 
                    <label class="col-sm-1 control-label" for="dtfrom">Date From</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Date" name="dtfrom" id="dtfrom" disabled value="<?php echo date('Y-m-d'); ?>" class="form-control dt input-sm">
                    </div> 
                    <label class="col-sm-1 control-label" for="dtto">Date To</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Date" name="dtto" id="dtto" disabled value="<?php echo date('Y-m-d'); ?>" class="form-control dt input-sm">
                    </div>

                    <button type="submit" class="btn btn-primary" value="View"> View</button>
                </div> 


            </div>
        </form>
    </div>

</section>  
