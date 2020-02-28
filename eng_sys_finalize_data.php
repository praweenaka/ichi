<?php

session_start();


require_once ("connection_sql.php");

header('Content-Type: text/xml');

date_default_timezone_set('Asia/Colombo');
if ($_GET["Command"] == "getdt") {
    echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT esf FROM invpara where company='" . $_SESSION['company'] . "'";
    $result = $conn->query($sql);

    $row = $result->fetch();
    $no = $row['esf'];
    $uniq = uniqid();
    $com = $_SESSION['company'];
    if (strlen($no) == 1) {
        $no = "E/" . $com . '/' . "0000" . $no;
    } else if (strlen($no) == 2) {
        $no = "E/" . $com . '/' . "000" . $no;
    } else if (strlen($no) == 3) {
        $no = "E/" . $com . '/' . "00" . $no;
    } else if (strlen($no) == 4) {
        $no = "E/" . $com . '/' . "0" . $no;
    } else if (strlen($no) == 5) {
        $no = "E/" . $com . '/' . "" . $no;
    }
    $ResponseXML .= "<id><![CDATA[$no]]></id>";
    $ResponseXML .= "<uniq><![CDATA[$uniq]]></uniq>";

    $ResponseXML .= "</new>";

    echo $ResponseXML;
}
if ($_GET["Command"] == "save") {


    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();
        $sql = "SELECT * from enginesysfi where cancel ='0'   and refno  = '" . $_GET['refno'] . "'";
        $sql = $conn->query($sql);
        if ($row = $sql->fetch()) {
            exit("Duplicate Ref No...!!!");
        }

        $sql = "insert into enginesysfi(refno,sdate,estockno,imno,complete,headblock,vmodel,emodel,engno,mfyear,engcapa,ceyli,fuel,fuelsys,sucharge,vvti,itech,vtech,val16,camshft,inletmani,clufan,gditech,gdipump,gdipline,gdifpsense,ignisys,delco,delcotype,coilpack,coilpacktype,turbosys,turbowgate,turbocooler,turbohoseqty,deselinjtype,deselinjpup,deselinjenosel,gloplug,throbody,throbodysense,tpssesnse,mapsense,idleupsense,throdrmotr,coolcavcover,idlairhou,hose,airclebox,airclehose,airflosense,aircleduck,airfilt,camsense,cranksense,camangsense,knocsense,heatsense,airflosense1,oilpressense,thomasstuval,idelupval,
            outletmani,chobar,sensepri2,sensesec2,egrval,petijjsys,injrail,injhospip,injnoz,injrasense,injfupresense,wirehorn,combox,controbox,fusebox,waterhose,waterpipe,watermouth,watermoucap,tomasstuval,waterpump,enggelmou,engmou,engmoubarck,engmoubar,accompre,alternat,powerstepump,oilbottle,oilhose,bracket1,pullynut,campully,crankpully,testblepully,bracket2,belt,taptcover,breavalhose,beltpullycov,oilcap,oilstick,oilfilter,gearbox,trasmi,wd2wd4,gearboxcvtsens,reversen,sensor,speedmetsencab,gearsele,gearselsoccou,gearselpicou,gearseltype,gearcable,gearboxmou,convert1,flywheel,clutplate,presplate,uniq,user,datetime,company) values
          ('" . $_GET['refno'] . "','" . $_GET['sdate'] . "','" . $_GET['estockno'] . "','" . $_GET['imno'] . "','" . $_GET['complete'] . "','" . $_GET['headblock'] . "','" . $_GET['vmodel'] . "','" . $_GET['emodel'] . "','" . $_GET['engno'] . "','" . $_GET['mfyear'] . "','" . $_GET['engcapa'] . "','" . $_GET['ceyli'] . "','" . $_GET['fuel'] . "','" . $_GET['fuelsys'] . "','" . $_GET['sucharge'] . "','" . $_GET['vvti'] . "','" . $_GET['itech'] . "','" . $_GET['vtech'] . "', 
                '" . $_GET['val16'] . "','" . $_GET['camshft'] . "','" . $_GET['inletmani'] . "','" . $_GET['clufan'] . "','" . $_GET['gditech'] . "','" . $_GET['gdipump'] . "','" . $_GET['gdipline'] . "','" . $_GET['gdifpsense'] . "','" . $_GET['ignisys'] . "','" . $_GET['delco'] . "','" . $_GET["delcotype"] . "','" . $_GET['coilpack'] . "','" . $_GET['coilpacktype'] . "','" . $_GET['turbosys'] . "','" . $_GET['turbowgate'] . "','" . $_GET['turbocooler'] . "','" . $_GET['turbohoseqty'] . "',
                '" . $_GET['deselinjtype'] . "','" . $_GET['deselinjpup'] . "','" . $_GET['deselinjenosel'] . "','" . $_GET['gloplug'] . "','" . $_GET['throbody'] . "','" . $_GET['throbodysense'] . "','" . $_GET['tpssesnse'] . "','" . $_GET['mapsense'] . "','" . $_GET['idleupsense'] . "','" . $_GET['throdrmotr'] . "','" . $_GET["coolcavcover"] . "','" . $_GET['idlairhou'] . "','" . $_GET['hose'] . "','" . $_GET['airclebox'] . "','" . $_GET['airclehose'] . "','" . $_GET['airflosense'] . "','" . $_GET['aircleduck'] . "',
                '" . $_GET['airfilt'] . "','" . $_GET['camsense'] . "','" . $_GET['cranksense'] . "','" . $_GET['camangsense'] . "','" . $_GET['knocsense'] . "','" . $_GET['heatsense'] . "','" . $_GET['airflosense1'] . "','" . $_GET['oilpressense'] . "','" . $_GET['thomasstuval'] . "','" . $_GET['idelupval'] . "','" . $_GET["outletmani"] . "','" . $_GET['chobar'] . "','" . $_GET['sensepri2'] . "','" . $_GET['sensesec2'] . "','" . $_GET['egrval'] . "','" . $_GET['petijjsys'] . "','" . $_GET['injrail'] . "',
                '" . $_GET['injhospip'] . "','" . $_GET['injnoz'] . "','" . $_GET['injrasense'] . "','" . $_GET['injfupresense'] . "','" . $_GET['wirehorn'] . "','" . $_GET['combox'] . "','" . $_GET['controbox'] . "','" . $_GET['fusebox'] . "','" . $_GET['waterhose'] . "','" . $_GET['waterpipe'] . "','" . $_GET["watermouth"] . "','" . $_GET['watermoucap'] . "','" . $_GET['tomasstuval'] . "','" . $_GET['waterpump'] . "','" . $_GET['enggelmou'] . "','" . $_GET['engmou'] . "','" . $_GET['engmoubarck'] . "',
                '" . $_GET['engmoubar'] . "','" . $_GET['accompre'] . "','" . $_GET['alternat'] . "','" . $_GET['powerstepump'] . "','" . $_GET['oilbottle'] . "','" . $_GET['oilhose'] . "','" . $_GET['bracket1'] . "','" . $_GET['pullynut'] . "','" . $_GET['campully'] . "','" . $_GET['crankpully'] . "','" . $_GET["testblepully"] . "','" . $_GET['bracket2'] . "','" . $_GET['belt'] . "','" . $_GET['taptcover'] . "','" . $_GET['breavalhose'] . "','" . $_GET['beltpullycov'] . "','" . $_GET['oilcap'] . "',
                '" . $_GET['oilstick'] . "','" . $_GET['oilfilter'] . "','" . $_GET['gearbox'] . "','" . $_GET['trasmi'] . "','" . $_GET['wd2wd4'] . "','" . $_GET['gearboxcvtsens'] . "','" . $_GET['reversen'] . "','" . $_GET['sensor'] . "','" . $_GET['speedmetsencab'] . "','" . $_GET['gearsele'] . "','" . $_GET["gearselsoccou"] . "','" . $_GET['gearselpicou'] . "','" . $_GET['gearseltype'] . "','" . $_GET['gearcable'] . "','" . $_GET['gearboxmou'] . "','" . $_GET['convert'] . "','" . $_GET['flywheel'] . "',
                '" . $_GET['clutplate'] . "','" . $_GET['presplate'] . "','" . $_GET['uniq'] . "','" . $_SESSION["CURRENT_USER"] . "','" . date("Y-m-d H:i:s") . "','" . $_SESSION['company'] . "')";

        $result = $conn->query($sql);

        $sql = "update invpara set esf=esf+1 where company='" . $_SESSION['company'] . "' ";
        $result = $conn->query($sql);

        $conn->commit();
        echo "Save";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}

if ($_GET["Command"] == "pass_quot") {
    $_SESSION["custno"] = $_GET['custno'];

    header('Content-Type: text/xml');
    echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

    $ResponseXML = "";
    $ResponseXML .= "<salesdetails>";

    $cuscode = $_GET["custno"];

    $sql = "Select * from enginesysfi where refno ='" . $cuscode . "'";
    if ($_SESSION['company'] != "") {
        $sql .= " and company like '%" . $_SESSION['company'] . "%'";
    }
    $sql = $conn->query($sql);
    if ($row = $sql->fetch()) {

        $ResponseXML .= "<id><![CDATA[" . json_encode($row) . "]]></id>";
    }

    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
}


if ($_GET["Command"] == "search_custom") {

    $ResponseXML = "";

    $ResponseXML .= "<table   class=\"table table-bordered\">
                <tr>
                     <th>Ref No.</th>
                    <th>Engine Stock No</th>
                    <th>Im No</th> 
                </tr>";

    $sql = "Select * from enginesysfi where refno <> ''";

    if ($_GET['cusno'] != "") {
        $sql .= " and refno like '%" . $_GET['cusno'] . "%'";
    }
    if ($_GET['customername1'] != "") {
        $sql .= " and estockno like '%" . $_GET['customername1'] . "%'";
    }
    if ($_GET['customername2'] != "") {
        $sql .= " and imno like '%" . $_GET['customername2'] . "%'";
    }
    if ($_SESSION['company'] != "") {
        $sql .= " and company like '%" . $_SESSION['company'] . "%'";
    }

    $sql .= " ORDER BY refno limit 50 ";

    foreach ($conn->query($sql) as $row) {
        $cuscode = $row['refno'];
        $stname = $_GET["stname"];

        $ResponseXML .= "<tr>    
                              <td onclick=\"custno('$cuscode', '$stname');\">" . $row['refno'] . "</a></td>
                              <td onclick=\"custno('$cuscode', '$stname');\">" . $row['estockno'] . "</a></td>
                              <td onclick=\"custno('$cuscode', '$stname');\">" . $row['imno'] . "</a></td>
                           
                            </tr>";
    }


    $ResponseXML .= "   </table>";


    echo $ResponseXML;
}
?>