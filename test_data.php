<?php

session_start();


require_once ("connection_sql.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "getdt") {
    header('Content-Type: text/xml');
    echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT inner_stock FROM invpara";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $no = $row['inner_stock'];

    $tmpinvno = "000000" . $row["inner_stock"];
    $lenth = strlen($tmpinvno);
    $no = trim("IST/") . substr($tmpinvno, $lenth - 7);


    $uniq = uniqid();

    $ResponseXML .= "<id><![CDATA[$no]]></id>";
    $ResponseXML .= "<uniq><![CDATA[$uniq]]></uniq>";
    $ResponseXML .= "</new>";

    echo $ResponseXML;
}




if ($_GET["Command"] == "save_item") {


    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql1 = "select * from stk_transfer where refno = '" . $_GET['refno'] . "'";
        $result1 = $conn->query($sql1);
        //echo $sql;
        if ($row1 = $result1->fetch()) {
            exit("Duplicate ....!!!");
        }


        $sql = "Insert into stk_transfer(refno,uniq,sdate,itemcode,item_descript)values
                        ('" . $_GET['refno'] . "','" . $_GET['uniq'] . "','" . $_GET['date_txt'] . "','" . $_GET['itemcodein_txt'] . "','" . $_GET['itemdescriptin_txt'] . "')";
        $result = $conn->query($sql);

        // Table1

        $tableAry1 = json_decode($_GET['Jtable1'], true);

        $size1 = sizeof(json_decode($_GET['Jtable1'], true));


        for ($i = 0; $i < $size1; $i++) {
            $tableArysub = $tableAry1[i];
            $sql = "Insert into stk_transfer_table(refno,stk_no,name,stk_qty,WAC,value,flag,split_QTY)values
                        ('" . $_GET['refno'] . "','" . $tableAry1[$i]['Stock Code'] . "','" . $tableAry1[$i][Name] . "','" . $tableAry1[$i][Qty] . "','" . $tableAry1[$i][WAC] . "','" . $tableAry1[$i]['Stock Value'] . "','IN','" . $tableAry1[$i]['Split QTY'] . "')";
            $result = $conn->query($sql);
        }
        // end Table1
        // Table2

        $tableAry2 = json_decode($_GET['Jtable2'], true);

        $size2 = sizeof(json_decode($_GET['Jtable2'], true));


        for ($i = 0; $i < $size2; $i++) {
            $tableArysub = $tableAry2[i];
            $sql = "Insert into stk_transfer_table(refno,stk_no,name,stk_qty,WAC,value,flag)values
                        ('" . $_GET['refno'] . "','" . $tableAry2[$i]['Stock Code'] . "','" . $tableAry2[$i][Name] . "','" . $tableAry2[$i]['Stock Qty'] . "','" . $tableAry2[$i][WAC] . "','" . $tableAry2[$i][Value] . "','OUT')";
            $result = $conn->query($sql);
        }
        // end table2

        $sql = "SELECT inner_stock FROM invpara";
        $resul = $conn->query($sql);
        $row = $resul->fetch();
        $no = $row['inner_stock'];
        $no2 = $no + 1;
        $sql = "update invpara set inner_stock = $no2 where inner_stock = $no";
        $result = $conn->query($sql);

        $conn->commit();
        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}
?>