function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
// Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

function keyset(key, e) {

    if (e.keyCode == 13) {
        document.getElementById(key).focus();
    }
}

function got_focus(key) {
    document.getElementById(key).style.backgroundColor = "#000066";
}

function lost_focus(key) {
    document.getElementById(key).style.backgroundColor = "#000000";
}

function newent() {
//    document.getElementById('trip_ref').value = "";
//    document.getElementById('vehicle_ref').value = "";
//    document.getElementById('date').value = "";
//    document.getElementById('opening_km').value = "";
//    document.getElementById('closing_km').value = "";
//    document.getElementById('mileage').value = "";
//    document.getElementById('item_ref').value = "";
//    document.getElementById('item_name').value = "";
//    document.getElementById('department').value = "";
//    document.getElementById('run_no').value = "";


}


function create() {

    var e_name = document.getElementById("e_name").value;
    var attri = document.getElementById("Name").value;


    var name = attri.split("+");




    console.log(e_name + ".php");
    console.log("");

    for (var i = 0; i < name.length; i++) {
        console.log("<div class='form-group'></div>");
        console.log("<div class='form-group-sm'>");
        console.log("<label class='col-sm-2' for='c_code'>" + name[i] + "</label>");
        console.log("<div class='col-sm-2'>");
        console.log("<input type='text' placeholder='" + name[i] + "'  id='" + name[i] + "' class='form-control Name  input-sm'>");
        console.log("</div>");
        console.log("</div>");
        console.log("");

    }


    console.log(e_name + ".js");
    console.log("");

    console.log("NEW");

    for (var i = 0; i < name.length; i++) {
        console.log('document.getElementById("' + name[i] + '").value = "";');

    }

    console.log("");
    console.log("");
    console.log("");
    console.log("SAVE");


    console.log('var url = "' + e_name + "_data.php" + '";');
    console.log('url = url + "?Command=" + "save_content";');
    for (var i = 0; i < name.length; i++) {
        console.log('url = url + "&' + name[i] + '=" + document.getElementById("' + name[i] + '").value;');

    }

    console.log("");
    console.log("");
    console.log(e_name + "_data.php");
    console.log("");

    var sql = '$saveContentSql = "Insert into ' + e_name + '(';

    for (var i = 0; i < name.length; i++) {
        sql = sql + name[i]+",";
    }
  
    sql = sql + ')values(';

    for (var i = 0; i < name.length; i++) {
        sql = sql + '\'" .  $_GET[\'' + name[i] + '\'] . "\''+",";
    }
 sql = sql + ') "; $result = $conn->query($saveContentSql);';
 
console.log(sql);

//
//    for (var i = 0; i < names.length; i++) {
//        console.log(names[i]);
//    }
//



}

function addAttribute() {



}

