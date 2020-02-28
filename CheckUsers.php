<?php

session_start();
date_default_timezone_set('Asia/Colombo');
$Command = "";

if (isset($_GET['Command'])) {

    $Command = $_GET["Command"];
    include './connection_sql.php';
}


if ($Command == "CheckUsers") {

    $ResponseXML = "";
    $ResponseXML .= "<salesdetails>";
    $UserName = $_GET["UserName"];
    $Password = $_GET["Password"];
//    $ResponseXML .= "<action><![CDATA[" . $_GET['action'] . "]]></action>";
//    $ResponseXML .= "<form><![CDATA[" . $_GET['form'] . "]]></form>";
    $sql = "SELECT * FROM user_mast WHERE user_name =  '" . $UserName . "' and password =  '" . $Password . "' ";
    $result = $conn->query($sql);

    if ($row = $result->fetch()) {
//        if (true) {

        $sessionId = session_id();
        $_SESSION['sessionId'] = session_id();
        session_regenerate_id();
        $ip = $_SERVER['REMOTE_ADDR'];
        $_SESSION['UserName'] = $UserName;
        $_SESSION['department'] = $row["user_depart"];
        $_SESSION['User_Type'] = $row['user_type'];
        $_SESSION['CURRENT_USER'] = $UserName;
        $_SESSION['company'] = $row["company"];

        $sql1 = "SELECT * FROM invpara WHERE company =  '" . $_SESSION['company'] . "'";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch();
        $_SESSION['companyname'] = $row1["companyname"];
        
        $action = "ok";
        $cookie_name = "user";
        $cookie_value = $UserName;
        //setcookie($cookie_name, $cookie_value, time() + (43200)); // 86400 = 1 day

        $token = substr(hash('sha512', mt_rand() . microtime()), 0, 50);
        $extime = time() + 43200;


        $domain = $_SERVER['HTTP_HOST'];

// set cookie

        setcookie('user', $cookie_value, $extime, "/", $domain);


        $ResponseXML .= "<stat><![CDATA[" . $action . "]]></stat>";
        echo $action;


        $time = mktime(date('h'), date('i'), date('s'));
        $time = date("g.i a");
        $today = date('Y-m-d');
    } else {
        $action = "not";
        $ResponseXML .= "<stat><![CDATA[" . $action . "]]></stat>";
        $ResponseXML .= "</salesdetails>";
        echo $ResponseXML;
    }
}



if ($_GET["Command"] == "save_inv") {


    $sql = "select * from user_mast where user_name='" . $_GET["user_name"] . "'";
    $result = $conn->query($sql);
    if ($row1 = $result->fetch()) {
        echo "User Found !!!";
    } else {
        $sql = "insert into user_mast(user_name,user_type, password,U_email) values ('" . $_GET["user_name"] . "', '" . $_GET["user_type"] . "', '" . $_GET["password"] . "', '" . $_GET["U_email"] . "')";
        $result = $conn->query($sql);
        echo "Saved";
    }
}

if ($Command == "logout") {

    $time_now = mktime(date('h') + 5, date('i') + 30, date('s'));
    $time = date('Y-m-d H:i:s');
    $today = date('Y-m-d');


    $sql = "UPDATE loging
			  SET Logout_Time='" . $time . "'
			  WHERE Sessioan_Id='" . $_SESSION['sessionId'] . "'";

    $result = $conn->query($sql);

    session_unset();
    session_destroy();
    $_SESSION['UserName'] = "";
    $_SESSION["CURRENT_USER"] = "";
}


if ($_GET["Command"] == "getdt") {

    $tb = "";
    $tb .= "<table class='table table-hover'>";


    $sql = "select * from user_mast order by user_name desc";




    $tb .= "<tr>";
    $tb .= "<th style=\"width: 100px;\" class=\"success\">Name</th>";
    $tb .= "<th style=\"width: 200px;\" class=\"success\">User Type</th>";
    $tb .= "<th style=\"width: 100px;\" class=\"success\">User Email</th>";

    $tb .= "</tr>";

    foreach ($conn->query($sql) as $row) {
        $tb .= "<tr>";
        $tb .= "<td onclick=\"getcode('" . $row['user_name'] . "','" . $row['user_type'] . "','" . $row['U_email'] . "')\">" . $row['user_name'] . "</td>";
        $tb .= "<td onclick=\"getcode('" . $row['user_name'] . "','" . $row['user_type'] . "','" . $row['U_email'] . "')\">" . $row['user_type'] . "</td>";
        $tb .= "<td onclick=\"getcode('" . $row['user_name'] . "','" . $row['user_type'] . "','" . $row['U_email'] . "')\">" . $row['U_email'] . "</td>";
        $tb .= "</tr>";
    }
    $tb .= "</table>";

    echo $tb;
}


if ($_GET["Command"] == "edit") {
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql2 = "update user_mast set user_type = '" . $_GET['user_type'] . "' ,U_email = '" . $_GET['U_email'] . "'  where user_name = '" . $_GET['user_name'] . "'";

        $result = $conn->query($sql2);

        $conn->commit();
        echo "EDIT";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}

if ($_GET["Command"] == "delete") {

    $sql = "delete from user_mast where user_name = '" . $_GET['user_name'] . "'";
    $result = $conn->query($sql);

//    $conn->commit();
    echo "Delete";
}
?>
