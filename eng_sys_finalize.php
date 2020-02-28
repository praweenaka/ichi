<?php
session_start();
?> 
<meta name="viewport" content="width=device-width, initial-scale=1.1">
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Engine System Finalize</b></h3>
            <h4 style="float: right;height: 3px;"><b id="time"></b></h4> 
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">

                <input type="hidden" id="uniq" class="form-control input-sm">

                <input type="hidden" id="item_count" class="form-control input-sm">
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
                <input type="hidden" name="uniq" id="uniq">
                <div id="msg_box"  class="span12 text-center"  ></div>

                <div class="form-group">
                    <label class="col-md-2" for="txt_usernm">REF NO</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="REF NO" disabled="" id="refno" class="form-control input-sm">
                    </div>
                    <div class="col-sm-1">
                        <a href="search_engsysfi.php" onclick="NewWindow(this.href, 'mywin', '800', '700', 'yes', 'center');
                                return false" onfocus="this.blur()">
                            <input type="button" name="searchitem" id="searchitem" value="..." class="btn btn-primary btn-sm">
                        </a>
                    </div>
                    <div class="col-sm-1"></div>
                    <label class="col-sm-2 " for="txt_usernm">DATE</label>
                    <div class="col-sm-2">
                        <input type="text"  disabled="" value="<?php echo date('Y-m-d'); ?>"   id="sdate" class="form-control input-sm">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-2" for="txt_usernm">ENGINE STOCK NO</label>
                    <div class="col-sm-3">
                        <input type="text" placeholder="ENGINE STOCK NO"   id="estockno" class="form-control input-sm">
                    </div>
                    <div class="col-sm-1"></div>
                    <label class="col-md-2" for="txt_usernm">IM NO</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="IM NO"  id="imno" class="form-control input-sm">
                    </div>



                </div> 
                <div class="form-group"></div> 
                <div class="form-group"> 
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#menu1">1</a></li>
                        <li><a data-toggle="tab" href="#menu2">2</a></li>
                        <li><a data-toggle="tab" href="#menu3">3</a></li>
                        <li><a data-toggle="tab" href="#menu4">4</a></li>
                        <li><a data-toggle="tab" href="#menu5">5</a></li>
                        <li><a data-toggle="tab" href="#menu6">6</a></li>
                        <li><a data-toggle="tab" href="#menu7">7</a></li>
                        <li><a data-toggle="tab" href="#menu8">8</a></li>
                        <li><a data-toggle="tab" href="#menu9">9</a></li>
                        <li><a data-toggle="tab" href="#menu10">10</a></li>
                        <li><a data-toggle="tab" href="#menu11">11</a></li>
                        <li><a data-toggle="tab" href="#menu12">12</a></li>
                        <li><a data-toggle="tab" href="#menu13">13</a></li> 
                        <li><a data-toggle="tab" href="#menu14">14</a></li>
                        <li><a data-toggle="tab" href="#menu15">15</a></li>
                        <li><a data-toggle="tab" href="#menu16">16</a></li>
                        <li><a data-toggle="tab" href="#menu17">17</a></li> 
                    </ul>
                </div> 

                <div class="tab-content">
                    <div class="form-group"></div> 

                    <div id="menu1" class="tab-pane fade in active">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">COMPLETE</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="COMPLETE" id="complete" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">HEAD & BLOCK</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="HEAD & BLOCK" id="headblock" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">VEHICLE MODEL</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="VEHICLE MODEL" id="vmodel" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">ENGINE MODEL </label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="ENGINE MODEL" id="emodel" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">ENGINE NO</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="ENGINE NO:" id="engno" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">MF YEAR</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="MF YEAR" id="mfyear" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">ENGINE CAPACITY</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="ENGINE CAPACITY" id="engcapa" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CYLINDER</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="ceyli">
                                    <option value=""></option>
                                    <?php
                                    for ($x = 1; $x <= 8; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?> 
                                </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">FUEL</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="fuel">
                                    <option value=''></option>
                                    <option value='PETROL'>PETROL</option>
                                    <option value='DIESEL'>DIESEL</option>
                                    <option value='GAS'>GAS</option>
                                    <option value='HYBRID'>HYBRID</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">FUEL SYSTEMS</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="fuelsys">
                                    <option value=''></option>
                                    <option value='CARB'>CARB</option>
                                    <option value='EFI'>EFI</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">SUPER CHARGE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="sucharge">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">VVT-I</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="vvti">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">I-TECH</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="itech">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">V-TECH</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="vtech">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">16 VALUE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="val16">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CAM SHAFT</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="camshft">
                                    <option value=''></option>
                                    <option value='SINGLE'>SINGLE</option>
                                    <option value='DOCH TWIN'>DOCH TWIN</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">INLET MANIFOLD</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="inletmani">
                                    <option value=''></option>
                                    <option value='MATEL'>MATEL</option>
                                    <option value='PLASTIC'>PLASTIC</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CLUTCH FAN</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="clufan">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option>                                     
                                </select>
                            </div>
                        </div> 
                    </div>  
                    <!--===========================================================================================================================================================-->
                    <div id="menu2" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GDI TECHNOLOGY</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gditech">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GDI PUMP</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gdipump">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GDI PIPE LINE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gdipline">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GDI FUEL PRESSER SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gdifpsense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu3" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">IGNITION SYSTEMS</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="ignisys">
                                    <option value=''></option>
                                    <option value='DEL-CO'>DEL-CO</option>
                                    <option value='COIL PACK '>COIL PACK </option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">DEL-CO </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="delco">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <?php
                                    for ($x = 1; $x <= 8; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">DEL-CO TYPE</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="DEL-CO TYPE" id="delcotype" class="form-control  input-sm">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">COIL PACK </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="coilpack">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">COIL PACK TYPE</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="COIL PACK TYPE" id="coilpacktype" class="form-control  input-sm">
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu4" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">TURBO SYSTEMS </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="turbosys">
                                    <option value=''></option>
                                    <option value='TURBO'>TURBO</option>
                                    <option value='NON TURBO'>NON TURBO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">TURBO WASTE-GATE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="turbowgate">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">TURBO COOLER</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="turbocooler">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">TURBO HOSE QTY</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="turbohoseqty">
                                    <option value=''></option>
                                    <?php
                                    for ($x = 1; $x <= 4; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu5" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">DIESEL INJECTOR TYPE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="deselinjtype">
                                    <option value=''></option>
                                    <option value='COMMON RAIL'>COMMON RAIL</option>
                                    <option value='NORMAL'>NORMAL</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">DIESEL INJECTOR PUMP</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="deselinjpup">
                                    <option value=''></option>
                                    <option value='MANUAL'>MANUAL</option>
                                    <option value='ELECTRIC'>ELECTRIC</option>
                                    <option value='NORMAL'>NORMAL</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">DIESEL INJECTOR NOSEL</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="deselinjenosel">
                                    <option value=''></option> 
                                    <?php
                                    for ($x = 1; $x <= 8; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GLOW PLUG</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gloplug">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div> 
                    </div> 
                    <!--===========================================================================================================================================================-->
                    <div id="menu6" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">THROTTLE BODY</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="throbody">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='ELECTRIC'>ELECTRIC</option> 
                                    <option value='CABLE'>CABLE</option> 
                                    <option value='MANUAL'>MANUAL</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">THROTTLE BODY SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="throbodysense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">TPS SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="tpssesnse">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">MAP SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="mapsense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">IDLE-UP SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="idleupsense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">THROTTLE DRIVE MOTOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="throdrmotr">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">COOLANT CAVITY COVER</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="coolcavcover">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">IDLE AIR HOUSING</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="idlairhou">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">HOSE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="hose">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div> 
                    </div>  
                    <!--===========================================================================================================================================================-->
                    <div id="menu7" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">AIR CLEANER BOX</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="airclebox">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">AIR CLEANER HOSE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="airclehose">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">AIR FLOW SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="airflosense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">AIR CLEANER DUCK</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="aircleduck">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">AIR FILTER</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="airfilt">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu8" class="tab-pane fade"> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CAM SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="camsense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CRANK SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="cranksense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CAM ANGLE SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="camangsense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">KNOCK SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="knocsense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">HEAT SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="heatsense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">AIR FLOW SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="airflosense1">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">OIL PRESSER SENSOR </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="oilpressense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">THOMAS STUD VALVE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="thomasstuval">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">IDLE-UP VALVE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="idelupval">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                    </div>  
                    <!--===========================================================================================================================================================-->
                    <div id="menu9" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">OUTLET MANIFOLD</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="outletmani">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CHOCO BAR/CATALYTIC CONVERTER</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="chobar">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">O2 SENSOR PRIMARY</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="sensepri2">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">O2 SENSOR SECONDARY</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="sensesec2">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">EGR VALVE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="egrval">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu10" class="tab-pane fade">

                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">PETROL INJECTOR SYSTEM</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="petijjsys">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">INJECTOR RAILING</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="injrail">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">INJECTOR HOSE / PIPE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="injhospip">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">INJECTOR NOZZLE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="injnoz">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <?php
                                    for ($x = 1; $x <= 8; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">INJECTOR RAILING SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="injrasense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">INJECTOR FUEL PRESSER SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="injfupresense">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu11" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">WIRE HORNS</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="wirehorn">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">COMPUTER BOX</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="combox">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CONTROLLER BOX</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="controbox">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">FUSE BOX</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="fusebox">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                    </div> 
                    <!--===========================================================================================================================================================-->
                    <div id="menu12" class="tab-pane fade"> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">WATER HOSE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="waterhose">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">WATER PIPE </label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="waterpipe">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">WATER MOUTH</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="watermouth">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">WATER MOUTH CAP</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="watermoucap">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">THOMAS STUD VALVE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="tomasstuval">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">WATER PUMP</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="waterpump">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div> 
                    </div> 
                    <!--===========================================================================================================================================================-->
                    <div id="menu13" class="tab-pane fade"> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">ENGINE GEL MOUNT</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="enggelmou">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='1'>1</option> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">ENGINE MOUNT</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="engmou">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <?php
                                    for ($x = 1; $x <= 4; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?>
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">ENGINE MOUNT BRACKET</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="engmoubarck">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <?php
                                    for ($x = 1; $x <= 4; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?>
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">ENGINE MOUNT BAR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="engmoubar">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option>  
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu14" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">A/C COMPRESSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="accompre">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='HYBRIDE'>HYBRIDE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">ALTERNATOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="alternat">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <option value='HYBRIDE'>HYBRIDE</option> 
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">POWER STEERING PUMP</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="POWER STEERING PUMP" id="powerstepump" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">OIL BOTTLE</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="OIL BOTTLE" id="oilbottle" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">OIL HOSE</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="OIL HOSE" id="oilhose" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">BRACKET</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="BRACKET" id="bracket1" class="form-control  input-sm">
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu15" class="tab-pane fade"> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">PULLEY NUT</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="PULLEY NUT" id="pullynut" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CAM PULLEY</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="CAM PULLEY" id="campully" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CRANK PULLEY</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="CRANK PULLEY" id="crankpully" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">TESTABLE PULLEY</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="TESTABLE PULLEY" id="testblepully" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">BRACKET</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="BRACKET" id="bracket2" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">BELT</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="BELT" id="belt" class="form-control  input-sm">
                            </div>
                        </div>
                    </div>
                    <!--===========================================================================================================================================================-->
                    <div id="menu16" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">TAPPET COVER</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="TAPPET COVER" id="taptcover" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">BREATHER VALVE & HOSE</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="BREATHER VALVE & HOSE" id="breavalhose" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">BELT PULLEY COVER</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="BELT PULLEY COVER" id="beltpullycov" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">OIL CAP</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="OIL CAP" id="oilcap" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">OIL STICK</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="OIL STICK" id="oilstick" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">OIL FILTER</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="OIL FILTER" id="oilfilter" class="form-control  input-sm">
                            </div>
                        </div>
                    </div> 

                    <!--===========================================================================================================================================================-->
                    <div id="menu17" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GEAR BOX</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gearbox">
                                    <option value=''></option>
                                    <option value='HYBRID MOTOR'>HYBRID MOTOR</option>
                                    <option value='NORMAL'>NORMAL</option> 
                                    <option value='CVT'>CVT</option>
                                    <option value='MULTIMATIC'>MULTIMATIC</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">TRASMISSION</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="trasmi">
                                    <option value=''></option>
                                    <option value='AUTO'>AUTO</option>
                                    <option value='MANUAL'>MANUAL</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">4WD\2WD</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="wd2wd4">
                                    <option value=''></option>
                                    <option value='4WD'>4WD</option>
                                    <option value='2WD'>2WD</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GEAR BOX CVT SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gearboxcvtsens">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <?php
                                    for ($x = 1; $x <= 5; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">REVERS SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="reversen">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">SENSOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="sensor">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">SPEED METER SENSOR \ CABLE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="speedmetsencab">
                                    <option value=''></option>
                                    <option value='SENSER'>SENSER</option>
                                    <option value='CABLE'>CABLE</option>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GEAR SELECTOR</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gearsele">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option>  
                                    <option value='DAMAGE'>DAMAGE</option>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GEAR SELECTOR SOCKET COUNT</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gearselsoccou">
                                    <option value=''></option> 
                                    <?php
                                    for ($x = 1; $x <= 5; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                    <option value='NO'>NO</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GEAR SELECTOR PIN COUNT</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gearselpicou">
                                    <option value=''></option> 
                                    <?php
                                    for ($x = 1; $x <= 100; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GEAR SELECTOR TYPE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gearseltype">
                                    <option value=''></option> 
                                    <option value='KICK DOWN'>KICK DOWN</option> 
                                    <option value='NORMAL'>NORMAL</option> 

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GEAR CABLE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gearcable">
                                    <option value=''></option> 
                                    <option value='YES'>YES</option> 
                                    <option value='NO'>NO</option>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">GEAR BOX MOUNT</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="gearboxmou">
                                    <option value=''></option>
                                    <option value='YES'>YES</option>
                                    <option value='NO'>NO</option> 
                                    <?php
                                    for ($x = 1; $x <= 3; $x++) {
                                        echo "<option value=" . $x . ">$x</option>";
                                    }
                                    ?> 
                                    <option value='DAMAGE'>DAMAGE</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CONVERTER</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="convert">
                                    <option value=''></option> 
                                    <option value='YES'>YES</option> 
                                    <option value='NO'>NO</option>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">FLY WHEEL</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="flywheel">
                                    <option value=''></option> 
                                    <option value='YES'>YES</option> 
                                    <option value='NO'>NO</option>  
                                    <option value='MANUAL'>MANUAL</option>  
                                    <option value='AUTO'>AUTO</option>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">CLUTCH PLATE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="clutplate">
                                    <option value=''></option>  
                                    <option value='NO'>NO</option>  
                                    <option value='DUAL'>DUAL</option>  
                                    <option value='NORMAL'>NORMAL</option>  
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 " for="carrier_code">PRESSER PLATE</label>
                            <div class="col-sm-2">
                                <select class="form-control input-sm" id="presplate">
                                    <option value=''></option> 
                                    <option value='YES'>YES</option> 
                                    <option value='NO'>NO</option>   
                                </select>
                            </div>
                        </div>
                    </div> 
                    <!--=====================================================================================================================-->
                </div>

            </div>
        </form>
    </div>

</section> 

<script src="js1/eng_sys_finalize.js" type="text/javascript"></script>
<script>newent();</script>
