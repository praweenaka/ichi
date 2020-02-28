<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Inner Stock Transfer</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">


                <div class="form-group-sm">

                  
                    <a  onclick="save_inv();" class="btn btn-success btn-sm">
                        <span class="fa fa-save"></span> &nbsp; SAVE
                    </a>
    

                    <a onclick="NewWindow('search_deliverynote.php?stname=code', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; FIND
                    </a>

            
                </div>
                <hr>
                <div id="msg_box" class="span12 text-center"></div>



                <div class="form-group"></div>
                <div class="form-group-sm">
                    <label class="col-sm-2" for="c_code">Reference</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Job Code"  id="refno" class="form-control  input-sm" disabled="">
                        <input type="text" placeholder="Job Code"  id="uniq" class="form-control hidden input-sm" disabled="">
                    </div>

                    <label class="col-sm-1" for="c_code">Date</label>

                    <div class="col-sm-2">
                        <input type="date" placeholder="Date" onchange="" id="date_txt" class="form-control  input-sm">
                    </div>
                </div>


                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-2" for="c_code">Item</label>
                        <div class="col-sm-1">
                            <input type="text" placeholder="Item Code" onchange="" id="itemcodein_txt" class="form-control  input-sm">
                        </div>
                        
                        <div class="col-sm-2">
                            <input type="text" placeholder="Item Description" onchange="" id="itemdescriptin_txt" class="form-control  input-sm">
                        </div>

                        <div class="col-sm-1">
                        <a onfocus="this.blur()" onclick="NewWindow('search_joborder.php?stname=DEL_note', 'mywin', '800', '700', 'yes', 'center');
                                return false" href="">
                            <input type="button" class="btn btn-default" value="...">
                        </a>
                    </div>
                    </div>
                </div>
        </form>


<br>
<div class="Container" >

                <table id="inputheader" class="table table-bordered" hidden="">
                    <thead>
                        <tr>
                            <th style="width: 20%;"><input v-model="H1" id="H1"></th>
                            <th style="width: 20%;"><input v-model="H2" id="H2"></th>
                            <th style="width: 10%;"><input v-model="H3" id="H3"></th>
                            <th style="width: 50%;"><input v-model="H4" id="H4"></th>
                            <th style="width: 20%;"><input v-model="H5" id="H5"></th>
                            <th style="width: 50%;"><input v-model="H6" id="H6"></th>
                        </tr>
                    </thead>                  
                </table>


        <div id="beTable">
            <div id="getTable">
                <table id="myTable" class="table table-bordered" >
                    <thead>
                        <tr>
                            <th style="width: 20%;" contenteditable="false">Stock Code</th>
                            <th style="width: 20%;" contenteditable="false">Name</th>
                            <th style="width: 10%;" contenteditable="false">Qty</th>
                            <th style="width: 30%;" contenteditable="false">WAC</th>
                            <th style="width: 20%;" contenteditable="false">Stock Value</th>
                            <th style="width: 50%;" contenteditable="false">Split QTY</th>
                            <th style="width: 50%;" onclick="addRow();" >+</th>
                        </tr>
                    </thead>
                   

                </table>

              </div>
          </div>

            




        <div class="row">
            <div class="col-md-8" id="mattable">

            </div>


        </div>
    </div>



    <br>

    <div class="Container" >

        
            
                <table id="inputheader" class="table table-bordered" hidden="">
                    <thead>
                        <tr>
                            <th style="width: 20%;"><input v-model="H1" id="H1"></th>
                            <th style="width: 20%;"><input v-model="H2" id="H2"></th>
                            <th style="width: 10%;"><input v-model="H3" id="H3"></th>
                            <th style="width: 50%;"><input v-model="H4" id="H4"></th>
                            <th style="width: 20%;"><input v-model="H5" id="H5"></th>
                        </tr>
                    </thead>
                   

                </table>

             
          


        <div id="beTable">
            <div id="getTable">
                <table id="myTable1" class="table table-bordered" >
                    <thead>
                        <tr>
                            <th style="width: 20%;" contenteditable="false">Stock Code</th>
                            <th style="width: 20%;" contenteditable="false">Name</th>
                            <th style="width: 10%;" contenteditable="false">Stock Qty</th>
                            <th style="width: 30%;" contenteditable="false">WAC</th>
                            <th style="width: 20%;" contenteditable="false">Value</th>
                            <th style="width: 50%;" onclick="addRow1();" >+</th>
                        </tr>
                    </thead>
                   

                </table>

              </div>
          </div>

            
</div>



        <div class="row">
            <div class="col-md-8" id="mattable">

            </div>
<div class="form-group"></div>
                    <div class="form-grou-sm">
                      <label class="col-sm-2" for="c_code"></label>
                        <div class="col-sm-2 form-group-sm">
                          
                        </div>
                    <div class="col-sm-1">
                       
                    </div>
                     <div class="col-sm-3"></div>
                     <label class="col-sm-2" for="c_code">Total Qty</label>
                        <div class="col-sm-2 form-group-sm">
                            <input type="text" id="totQty" class="form-control  input-sm">
                </div>
            </div>
            <br>
            <br>
            <br>

        </div>
    </div>
</div>

</section>
<script src="js1/test.js"></script>


<?php
// include 'autocompleJUI/disp_packlist_PATH.php';
?>

<script type="text/javascript">
</script>
<script src="js/tableToJsonMini.js"></script>
<script src="js/tableToJson.js"></script>


<script>getdt();</script>