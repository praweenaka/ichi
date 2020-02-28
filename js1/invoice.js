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


    document.getElementById('invoiceno').value = "";
    document.getElementById('fname').value = "";
    document.getElementById('lname').value = "";
    document.getElementById('nic').value = "";
    document.getElementById('male').checked = false;
    document.getElementById('female').checked = false;
    document.getElementById('coursename').value = "";
    document.getElementById('country').value = "";
    document.getElementById('dob').value = "";
    document.getElementById('age').value = "";
    document.getElementById('address').value = "";
    document.getElementById('contactp').value = "";
    document.getElementById('contacth').value = "";
    document.getElementById('note').value = "";
    document.getElementById('tot').value = "";
    document.getElementById('advance').value = "";
    document.getElementById('discount').value = "";
    document.getElementById('regfee').value = "";
    document.getElementById('lvl1').value = "";
    document.getElementById('lvl2').value = "";
    document.getElementById('msg_box').innerHTML = "";

    getdt();
}

function getdt() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "invoice_data.php";
    url = url + "?Command=" + "getdt";
    url = url + "&ls=" + "new";
    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}



function assign_dt() {
    var XMLAddress1;
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
        var idno = XMLAddress1[0].childNodes[0].nodeValue;
        if (idno.length === 1) {
            idno = "HUC/0000" + idno;
        } else if (idno.length === 2) {
            idno = "HUC/000" + idno;
        } else if (idno.length === 3) {
            idno = "HUC/00" + idno;
        } else if (idno.length === 4) {
            idno = "HUC/0" + idno;
        } else if (idno.length === 5) {
            idno = "HUC/" + idno;
        }

        document.getElementById("invoiceno").value = idno;
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("uniq");
        document.getElementById("uniq").value = XMLAddress1[0].childNodes[0].nodeValue;
    }
}



function save_inv() {
 

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    if (document.getElementById('invoiceno').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Plz Click New...</span></div>";
        return false;
    }
    if (document.getElementById('fname').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>First Name Not Entered</span></div>";
        return false;
    }
    if (document.getElementById('lname').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Last Name Not Entered</span></div>";
        return false;
    }
    if (document.getElementById('nic').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Nic Not Entered</span></div>";
        return false;
    }
     if (document.getElementById('coursename').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Course Is Note Selected</span></div>";
        return false;
    }
    if (document.getElementById('tot').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Course Fee Not Entered</span></div>";
        return false;
    }
    if (document.getElementById('regfee').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Regi Fee Not Entered</span></div>";
        return false;
    }
    document.getElementById('msg_box').innerHTML = "";
//  if (parseFloat(document.getElementById('tot').value) >= parseFloat(document.getElementById('advance').value) + parseFloat(document.getElementById('discount').value)) {
    var url = "invoice_data.php";
    url = url + "?Command=" + "save";
    url = url + "&uniq=" + document.getElementById('uniq').value;
    url = url + "&invoiceno=" + document.getElementById('invoiceno').value;
    url = url + "&sdate=" + document.getElementById('sdate').value;
    url = url + "&fname=" + document.getElementById('fname').value;
    url = url + "&lname=" + document.getElementById('lname').value;
    url = url + "&nic=" + document.getElementById('nic').value;
    if (document.getElementById('male').checked == true) {
        sex = "male";
    } else {
        sex = "female";
    }
    url = url + "&sex=" + sex;
    url = url + "&coursename=" + document.getElementById('coursename').value;
    url = url + "&country=" + document.getElementById('country').value;
    url = url + "&dob=" + document.getElementById('dob').value;
    url = url + "&age=" + document.getElementById('age').value;
    url = url + "&address=" + document.getElementById('address').value;
    url = url + "&contactp=" + document.getElementById('contactp').value;
    url = url + "&contacth=" + document.getElementById('contacth').value;
    url = url + "&note=" + document.getElementById('note').value;
    url = url + "&tot=" + document.getElementById('tot').value;
    url = url + "&advance=" + document.getElementById('advance').value;
    url = url + "&discount=" + document.getElementById('discount').value;
    url = url + "&regfee=" + document.getElementById('regfee').value;
    url = url + "&lvl1=" + document.getElementById('lvl1').value;
    url = url + "&lvl2=" + document.getElementById('lvl2').value;
    
    imgup();
    // } else {
    //     document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Course Fee Is Wrong</span></div>";
    //     return false; 
    // }
    xmlHttp.onreadystatechange = re_save;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function re_save() {
    var XMLAddress1;
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        if (xmlHttp.responseText == "Save") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Save</span></div>";
            setTimeout("location.reload(true);", 500);
        } else {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";
        }
    }

}

function custno(code)
{
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }
    var url = "invoice_data.php";
    url = url + "?Command=" + "pass_quot";
    url = url + "&custno=" + code;


    xmlHttp.onreadystatechange = passcusresult_quot;

    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);


}



function passcusresult_quot()
{
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("invoiceno");
        opener.document.form1.invoiceno.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("sdate");
        opener.document.form1.sdate.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("fname");
        opener.document.form1.fname.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("lname");
        opener.document.form1.lname.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("nic");
        opener.document.form1.nic.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("sex");
        if (XMLAddress1[0].childNodes[0].nodeValue == "male") {
            opener.document.getElementById('male').checked = true;
        } else {
            opener.document.getElementById('female').checked = true;
        }

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("coursename");
        opener.document.form1.coursename.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("country");
        opener.document.form1.country.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("dob");
        opener.document.form1.dob.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("age");
        opener.document.form1.age.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("address");
        opener.document.form1.address.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("contactp");
        opener.document.form1.contactp.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("contacth");
        opener.document.form1.contacth.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("note");
        opener.document.form1.note.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("tot");
        opener.document.form1.tot.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("advance");
        opener.document.form1.advance.value = XMLAddress1[0].childNodes[0].nodeValue;
        
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("discount");
        opener.document.form1.discount.value = XMLAddress1[0].childNodes[0].nodeValue;
        
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("regfee");
        opener.document.form1.regfee.value = XMLAddress1[0].childNodes[0].nodeValue;
        
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("lvl1");
        opener.document.form1.lvl1.value = XMLAddress1[0].childNodes[0].nodeValue;
        
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("lvl2");
        opener.document.form1.lvl2.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("cancel");
        if (XMLAddress1[0].childNodes[0].nodeValue == "1") {
            opener.document.getElementById('msg_box').innerHTML = "<div class='alert alert-danger' role='alert'><span class='center-block'>Canceled</span></div>";
        } else {

        }

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("img");
        opener.document.form1.blah.src = XMLAddress1[0].childNodes[0].nodeValue;

        self.close();
    }
}

function update_cust_list(stname)
{


    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }


    var url = "invoice_data.php";
    url = url + "?Command=" + "search_custom";
    if (document.getElementById('cusno').value != "") {
        url = url + "&mstatus=cusno";
    } else if (document.getElementById('customername').value != "") {
        url = url + "&mstatus=customername";
    } else if (document.getElementById('nic').value != "") {
        url = url + "&mstatus=nic";
    }


    url = url + "&invoiceno=" + document.getElementById('cusno').value;
    url = url + "&fname=" + document.getElementById('customername').value;
    url = url + "&nic=" + document.getElementById('nic').value;
    url = url + "&stname=" + stname;

    xmlHttp.onreadystatechange = showcustresult;

    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);


}


function showcustresult()
{
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {
        document.getElementById('filt_table').innerHTML = xmlHttp.responseText;

    }
}

function print_inv() {

    var url = "invoice_print.php";
    url = url + "?invoiceno=" + document.getElementById('invoiceno').value;
    url = url + "&fname=" + document.getElementById('fname').value;
    url = url + "&address=" + document.getElementById('address').value;
    url = url + "&nic=" + document.getElementById('nic').value;
    url = url + "&sdate=" + document.getElementById('sdate').value;

    window.open(url, '_blank');
}

function cancel_inv() {
    var msg = confirm("Do you want to CANCEL this Invoice ! ");
    if (msg == true) {
        xmlHttp = GetXmlHttpObject();
        if (xmlHttp == null)
        {
            alert("Browser does not support HTTP Request");
            return;
        }
        if (document.getElementById('invoiceno').value == "") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>invoice Is Not Selected</span></div>";
            return false;
        }


        var url = "invoice_data.php";
        url = url + "?Command=" + "cancelItem";
        url = url + "&invoiceno=" + document.getElementById('invoiceno').value;

        xmlHttp.onreadystatechange = showarmyresult_can;
        xmlHttp.open("GET", url, true);
        xmlHttp.send(null);
    }

}

function showarmyresult_can() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        if (xmlHttp.responseText == "Cancel") {

            document.getElementById('msg_box').innerHTML = "<div class='alert alert-danger' role='alert'><span class='center-block'>Canceled</span></div>";
            setTimeout("location.reload(true);", 500);
        } else {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";
        }
    }
}


function imgup(cdata) {

    var files = $('#file-3')[0].files; //where files would be the id of your multi file input
//or use document.getElementById('files').files;

    for (var i = 0, f; f = files[i]; i++) {
        var name = document.getElementById('file-3');
        var alpha = name.files[i];
        console.log(alpha.name);
        var data = new FormData();
        var invoiceno = document.getElementById('invoiceno').value;
        data.append('Command', "imageup");
        data.append('file', alpha);
        data.append('invoiceno', invoiceno);
        $.ajax({
            url: 'invoice_data.php',
            data: data,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (msg) {
                alert(msg);

            }
        });
    }
}