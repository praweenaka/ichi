function GetXmlHttpObject()
{
    var xmlHttp = null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e)
    {
        // Internet Explorer
        try
        {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e)
        {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}


function newent() {
    document.getElementById('user_name').value = "";
    document.getElementById('pass1').value = "";
    document.getElementById('pass2').value = "";
    document.getElementById('umail').value = "";
    document.getElementById('user_type').value = "";

    document.getElementById('msg_box').innerHTML = "";
    getdt();
}

function getdt() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "CheckUsers.php";
    url = url + "?Command=" + "getdt";
    url = url + "&ls=" + "new";

    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);

}


function assign_dt() {
    document.getElementById('itemdetails').innerHTML = xmlHttp.responseText;
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {



    }
}


function getcode(cdata, cdata1, cdata3, cdata4) {


    document.getElementById('user_name').value = cdata;
    document.getElementById('user_type').value = cdata1;
    // document.getElementById('user_depart').value = cdata2;
    document.getElementById('umail').value = cdata3;
    document.getElementById('user_type').value = cdata4;
// hide();
    window.scrollTo(0, 0);

}

//function hide(){
//    document.getElementById('pass1').hide;
//    document.getElementById("pass2").hide;
//}

function select_permission()
{

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }


    var url = "assign_privilages_data.php";
    url = url + "?Command=" + "select_permission";
    url = url + "&user_name=" + document.getElementById("user_name").value;

    xmlHttp.onreadystatechange = passsuppresult_select_permission;


    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);

}

function passsuppresult_select_permission()
{
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("balance_table");
        document.getElementById('privi_table').innerHTML = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("mcount");
        document.getElementById('mcount').value = XMLAddress1[0].childNodes[0].nodeValue;


    }
}

function save_inv()
{

    if (document.getElementById("pass1").value != document.getElementById("pass2").value) {
        alert("Please Confirm Password");
        document.getElementById("pass2").value = "";
        document.getElementById("pass2").focus();
    } else {

        xmlHttp = GetXmlHttpObject();
        if (xmlHttp == null)
        {
            alert("Browser does not support HTTP Request");
            return;
        }

        if (document.getElementById('user_name').value == "") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>User Name  Not Entered</span></div>";
            return false;
        }
        if (document.getElementById('pass1').value == "") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Password  Not Entered</span></div>";
            return false;
        }
        if (document.getElementById('pass2').value == "") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Confirm Password  Not Entered</span></div>";
            return false;
        }

        if (document.getElementById('user_type').value == "") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>User Type Not Selected</span></div>";
            return false;
        }
        document.getElementById('msg_box').innerHTML = "";
        var url = "CheckUsers.php";
        url = url + "?Command=" + "save_inv";
        url = url + "&user_name=" + document.getElementById("user_name").value;
        url = url + "&password=" + document.getElementById("pass1").value;
        url = url + "&user_type=" + document.getElementById("user_type").value;
        url = url + "&U_email=" + document.getElementById("umail").value;

        xmlHttp.onreadystatechange = passsuppresult_save_inv;
        xmlHttp.open("GET", url, true);
        xmlHttp.send(null);


    }

}


function save_inv1()
{
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = 'assign_privilages_data.php';
    var params = 'Command=' + 'save_inv';

    params = params + '&user_name=' + document.getElementById('user_name').value;
    var i = 1;
    while (i < document.getElementById("mcount").value) {
        chkview = "chkview" + i;
        chkfeed = "chkfeed" + i;
        chkmod = "chkmod" + i;
        chkprice = "chkprice" + i;

        params = params + "&" + chkview + "=" + document.getElementById(chkview).checked;
        params = params + "&" + chkfeed + "=" + document.getElementById(chkfeed).checked;
        params = params + "&" + chkmod + "=" + document.getElementById(chkmod).checked;
        params = params + "&" + chkprice + "=" + document.getElementById(chkprice).checked;

        i = i + 1;
    }
    //alert(params);
    xmlHttp.open("POST", url, true);

    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttp.setRequestHeader("Content-length", params.length);
    xmlHttp.setRequestHeader("Connection", "close");

    xmlHttp.onreadystatechange = passsuppresult_save_inv;

    xmlHttp.send(params);




}



function passsuppresult_save_inv()
{
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {


        if (xmlHttp.responseText == "Saved") {
//            document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Saved</span></div>";
            alert('Saved');
            location.reload();
        } else {
//            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";
            alert('Created Account');
            newent();
        }


    }
}

function edit() {
//    if (document.getElementById("pass1").value != document.getElementById("pass2").value) {
//        alert("Please Confirm Password");
//        document.getElementById("pass2").value = "";
//        document.getElementById("pass2").focus();
//    } else {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }

    if (document.getElementById('user_name').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>User  Not Selected</span></div>";
        return false;
    }

    var url = "CheckUsers.php";
    url = url + "?Command=" + "edit";
    url = url + "&user_name=" + document.getElementById("user_name").value; 
    url = url + "&user_type=" + document.getElementById("user_type").value;
    url = url + "&U_email=" + document.getElementById("umail").value; 

    xmlHttp.onreadystatechange = edited;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}
//}
function edited() {
    var XMLAddress1;
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        if (xmlHttp.responseText == "EDIT") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>EDITED</span></div>";
            newent();
        } else {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";
        }
    }
}

function deleteproduct() {
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }
    if (document.getElementById('user_name').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>User  Not Selected</span></div>";
        return false;
    }

    var url = "CheckUsers.php";
    url = url + "?Command=" + "delete";


    url = url + "&user_name=" + document.getElementById('user_name').value;

    xmlHttp.onreadystatechange = dele;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function dele() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        if (xmlHttp.responseText == "Delete") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-danger' role='alert'><span class='center-block'>Deleted</span></div>";
            newent();
        } else {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";
        }
    }
}
