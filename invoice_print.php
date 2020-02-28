<?php
session_start();
if (!isset($_SESSION["UserName"])) {
    echo "Invalid Login";
    exit();
}
date_default_timezone_set('Asia/Colombo');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Print Invoice</title>
        <style type="text/css">
            <!--
            .style2 {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
            }
            .style4 {
                font-size: 14px;
                font-weight: bold;
            }
            .style5 {
                font-size: 18px;
                font-weight: bold;
            }
            .style6 {
                font-size: 24px;
                font-weight: bold;
            }
            .style7 {font-size: 24px}

            .style8 {
                font-size: 18px;
                font-weight: bold;
            }

            .style10 {
                font-size: 18px;
                font-weight: bold;
            }
            -->

        </style>
    </head>

    <body><center>
            <?php
            require_once ("connection_sql.php");

            $sql = "select * from invoice where invoiceno='" . $_GET["invoiceno"] . "'";
            $sql = $conn->query($sql);
            if (!$row = $sql->fetch()) {
                exit("Not Saved Invoice...!!!");
            }
            $sql1 = "select * from course where code='" . $row['coursename'] . "'";
            $sql1 = $conn->query($sql1);
            $row1 = $sql1->fetch();
            ?>

            <table width="1000"  border="0">
                <tr> 
                    <td colspan="5" align="left">
                        <table  border="0"> 
                            <tr style="text-align:left;"> 
                                <td width="50px;"><img  style="width: 80px;height: 80px;"src="../images/logo 1.png" /></td>
                                <td >
                                    <span class="style6" style="color: #00a1e5;"><?php echo 'HUC' ?></br></span><span class="style8"><?php echo 'N0.500-3/2,Galle Road,' ?></br> <?php echo 'Colombo - 06' ?></span>
                                </td>
                            </tr> 
                        </table>
                    </td>
                    <td colspan="6" align="right">
                        <table  border="0"> 
                            <tr style="text-align:left;">  
                                <td >
                                    <td ><span class="style8"  ><?php echo '0112-5 995 900' ?></br><?php echo 'info@hucedu.com' ?></br> <?php echo 'www.hucedu.com' ?></span></td>
                                </td>
                            </tr> 
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="44" colspan="3" align="right"><span class="style6"><u>INVOICE</u></span></td>
                    <td width="60" align="right" height="44" align="center">Entered By:</td>
                    <td width="41" align="center"> <?php echo $row['user1']; ?></td>
                    <td width="60" align="right">Printed By: </td>
                    <td width="56" align="center"><?php echo $_SESSION["UserName"]; ?></td>
                </tr>
                <tr>
                    <td height="110" colspan="3" valign="top"><table border="1" bordercolor="#000000" cellpadding="0" cellspacing="0"><tr><td width="428"><table width="500" border="0" >
                                        <tr>
                                            <td width="91"><span class="style4">STUDENT</span></td>
                                            <td width="8"><strong>:</strong></td>
                                            <td width="443"><?php echo $row['fname'].'&nbsp;'.$row['lname']; ?></td>
                                        </tr>
                                         <tr>
                                            <td width="91"><span class="style4">STUDENT ID</span></td>
                                            <td width="8"><strong>:</strong></td>
                                            <td width="443"><?php echo $row['stu_id']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="91"><span class="style4">ADDRESS</span></td>
                                            <td width="8"><strong>:</strong></td>
                                            <td width="443"><?php echo $row['address']; ?></td>
                                        </tr> 
                                        <tr>
                                            <td height="21">&nbsp;</td>
                                            <td>&nbsp;</td> 
                                        </tr>
                                    </table></td></tr></table></td>
                    <td colspan="4" valign="top">
                        <table border="1" bordercolor="#000000" cellpadding="0" cellspacing="0"><tr><td><table width="500" border="0">
                                        <tr>
                                            <td width="108"><span class="style4">INV. NO</span></td>
                                            <td width="9">:</td>
                                            <td width="146"><?php echo $_GET["invoiceno"]; ?></td>
                                            <td width="82"><span class="style4">INV. DATE</span></td>
                                            <td width="12">:</td>
                                            <td width="201"><?php echo $row["sdate"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="108"><span class="style4">NIC. NO</span></td>
                                            <td width="9">:</td>
                                            <td width="146"><?php echo $row["nic"]; ?></td>

                                        </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>

                                    </table></td></tr></table>
                    </td>
                </tr>
            </table> 
            <td height="110"  colspan="6" valign="top"><table border="1" bordercolor="#000000" cellpadding="0" cellspacing="0"><tr><td width="428"><table width="1000" border="0" >

                                <tr>
                                    <td  width="208" align="left"> Course Name </td>
                                    <td width="8"><strong>:</strong></td>
                                    <td  align="left"> <?php echo $row1['name']; ?></td>
                                </tr> 


                            </table></td></tr></table></td>
            <table width="1000" border="0">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

            </table>
            <table width="1000" border="0">
                <tr>
                    <td width="941" align="right"><span class="style4">TOTAL :</span></td>
                    <td width="50" ><table border="1"  width="150" cellspacing="0"><tr><td align="right"><span class="style4"><?php echo number_format($row["tot"], 2, ".", ","); ?></span></td></tr></table></td>
                </tr> 
                <tr>
                    <td width="941" align="right"><span class="style4">Reg Fee :</span></td>
                    <td width="50" ><table border="1"  width="150" cellspacing="0"><tr><td align="right"><span class="style4"><?php echo number_format($row["advance"], 2, ".", ","); ?></span></td></tr></table></td>
                </tr>
                <tr>
                    <td width="941" align="right"><span class="style4">Down Payment :</span></td>
                    <td width="50" ><table border="1"  width="150" cellspacing="0"><tr><td align="right"><span class="style4"><?php echo number_format($row["advance"], 2, ".", ","); ?></span></td></tr></table></td>
                </tr>
                <tr>
                    <td width="941" align="right"><span class="style4">Discount :</span></td>
                    <td width="50" ><table border="1"  width="150" cellspacing="0"><tr><td align="right"><span class="style4"><?php echo number_format($row["discount"], 2, ".", ","); ?></span></td></tr></table></td>
                </tr>
                <tr>
                    <td width="941" align="right"><span class="style4">Balance :</span></td>
                    <td width="50" ><table border="1"  width="150" cellspacing="0"><tr><td align="right"><span class="style4"><?php echo number_format($row["tot"] - $row["advance"] - $row["discount"], 2, ".", ","); ?></span></td></tr></table></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>

                    <td>_____________________</td> 
                    <td>_____________________</td>
                </tr>
                <tr> 
                    <td>Signature Of Student</td> 
                    <td>Authorised Signature </td>
                </tr>
            </table>

    </body>
</html>
