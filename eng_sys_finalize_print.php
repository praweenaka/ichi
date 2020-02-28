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
            $sql1 = "select * from driving_class where code='" . $row['drivi_class'] . "'";
            $sql1 = $conn->query($sql1);
            $row1 = $sql1->fetch();
            ?>

            <table width="1000"  border="0">
                <tr>
                    <td height="50" colspan="3"><span class="style6"><?php echo 'NEW LANKA LEARNERS' ?></span> </td>
                    <td colspan="4" align="center"><table width="500" border="0">
                            <tr>
                                <?php
                                echo "<td width=\"402\"><span class=\"style8\">105/3 Sri Sangaraja Mawatha,Colombo, Sri Lanka</span></td>";
                                ?>

                            </tr>
                            <tr>
                                <td><span class="style8"><?php echo '077 320 9551' ?></span></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td height="44" colspan="3" align="right"><span class="style6"><u>INVOICE</u></span></td>
                    <td width="60" align="right" height="44" align="center">Entered By:</td>
                    <td width="41" align="center"> <?php echo $row['user']; ?></td>
                    <td width="60" align="right">Printed By: </td>
                    <td width="56" align="center"><?php echo $_SESSION["UserName"]; ?></td>
                </tr>
                <tr>
                    <td height="110" colspan="3" valign="top"><table border="1" bordercolor="#000000" cellpadding="0" cellspacing="0"><tr><td width="428"><table width="500" border="0" >
                                        <tr>
                                            <td width="91"><span class="style4">CUSTOMER</span></td>
                                            <td width="8"><strong>:</strong></td>
                                            <td width="443"><?php echo $row['sname']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="91"><span class="style4">ADDRESS</span></td>
                                            <td width="8"><strong>:</strong></td>
                                            <td width="443"><?php echo $row['paddress']; ?></td>
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

                                    </table></td></tr></table>
                    </td>
                </tr>
            </table> 
            <td height="110"  colspan="6" valign="top"><table border="1" bordercolor="#000000" cellpadding="0" cellspacing="0"><tr><td width="428"><table width="1000" border="0" >

                                <tr>
                                    <td  width="208" align="left"> Driving Licence Class  </td>
                                    <td width="8"><strong>:</strong></td>
                                    <td  align="left"> <?php echo $row1['name']; ?></td>
                                </tr> 
                                <tr>
                                    <td  width="208" align="left"> Training Date   </td>
                                    <td width="8"><strong>:</strong></td>
                                    <td  align="left"> <?php echo $row['train_date']; ?></td>
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
                    <td width="50" ><table border="1"  width="150" cellspacing="0"><tr><td align="center"><span class="style4"><?php echo number_format($row["tot"], 2, ".", ","); ?></span></td></tr></table></td>
                </tr>
                <tr>
                    <td width="941" align="right"><span class="style4">ADVANCE :</span></td>
                    <td width="50" ><table border="1"  width="150" cellspacing="0"><tr><td align="center"><span class="style4"><?php echo number_format($row["advance"], 2, ".", ","); ?></span></td></tr></table></td>
                </tr>
                <tr>
                    <td width="941" align="right"><span class="style4">BALANCE :</span></td>
                    <td width="50" ><table border="1"  width="150" cellspacing="0"><tr><td align="center"><span class="style4"><?php echo number_format($row["tot"] - $row["advance"], 2, ".", ","); ?></span></td></tr></table></td>
                </tr>

            </table>

    </body>
</html>
