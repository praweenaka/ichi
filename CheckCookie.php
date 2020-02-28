<?php

session_start();
date_default_timezone_set('Asia/Colombo');

function chk_cookie($UserName) {
    include './connection_sql.php';

    $sql = "SELECT * FROM user_mast WHERE user_name =  '" . $UserName . "'";
    $result = $conn->query($sql);

    if ($row = $result->fetch()) {

        $sessionId = session_id();
        $_SESSION['sessionId'] = session_id();
        session_regenerate_id();
        $ip = $_SERVER['REMOTE_ADDR'];
        $_SESSION['UserName'] = $UserName;
        $_SESSION["CURRENT_USER"] = $UserName;
        /*
          $_SESSION['User_Type'] = $row['dev'];

          if (is_null($row["sal_ex"]) == false) {
          $_SESSION["CURRENT_REP"] = $row["sal_ex"];
          } else {
          $_SESSION["CURRENT_REP"] = "";
          }
         */
//
//        if (is_null($row["dlr_code"]) == false) {
//            $_SESSION["CURRENT_DLR"] = $row["dlr_code"];
//        } else {
//            $_SESSION["CURRENT_DLR"] = "";
//        }

//        $_SESSION["CURRENT_DLR"] = "A111";

        $action = "ok";
//        $cookie_name = "user";
//        $cookie_value = $UserName;
//        setcookie($cookie_name, $cookie_value, time() + (43200), "/"); // 86400 = 1 day



        $cookie_name = "user";
        $cookie_value = $UserName;

        $token = substr(hash('sha512', mt_rand() . microtime()), 0, 50);
        $extime = time() + 160000000;
        $domain = $_SERVER['HTTP_HOST'];
        setcookie('user', $cookie_value, $extime, "/", $domain);

        //$ResponseXML .= "<stat><![CDATA[" . $action . "]]></stat>";
        $time = date("H:i:s");
        $today = date('Y-m-d');
        $sql = "Insert into loging(Name,User_Type,Date,Logon_Time,Sessioan_Id,ip) values ('" . $UserName . "','" . $_SESSION['User_Type'] . "','" . $today . "','" . $time . "','" . $_SESSION['sessionId'] . "','" . $ip . "')";
        $conn->exec($sql);
        return $action;
    } else {
        //$ResponseXML .= "<stat><![CDATA[" . $action . "]]></stat>";
        //$ResponseXML .= "</salesdetails>";
        //echo $ResponseXML;
        return "not";
        echo 'not';
    }
}
