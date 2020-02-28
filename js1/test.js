// new Vue({
//   el: '#app',
//   data: {
//     message: 'Hello Vue.js!',
//     H1: 'Stock Code',
//     H2: 'Name',
//     H3: 'Qty',
//     H4: 'WAC',
//     H5: 'Stock Value',
//     H6: 'Split QTY',
//   }
// });

// new Vue({
//   el: '#app1',
//   data: {
//     message: 'Hello Vue.js!',
//     H1: 'Stock Code',
//     H2: 'Name',
//     H3: 'Stock Qty',
//     H4: 'WAC',
//     H5: 'Value',
//     H6: 'Hello Vue.js!'
//   }
// });

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



function getdt() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "test_data.php";
    url = url + "?Command=" + "getdt";
    url = url + "&ls=" + "new";

    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function assign_dt() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
        document.getElementById('refno').value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("uniq");
        document.getElementById('uniq').value = XMLAddress1[0].childNodes[0].nodeValue;

    }
}






function save_inv()
{

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }
    if (document.getElementById('refno').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Factry Name  Not Entered</span></div>";
        return false;
    }



    var table1 = $('#myTable').tableToJSON();
    var table2 = $('#myTable1').tableToJSON();

    var Jtable1 = JSON.stringify(table1);
    var Jtable2 = JSON.stringify(table2);

    var url = "test_data.php";
    url = url + "?Command=" + "save_item";
    url = url + "&refno=" + document.getElementById("refno").value;
    url = url + "&uniq=" + document.getElementById("uniq").value;
    url = url + "&date_txt=" + document.getElementById("date_txt").value;
    url = url + "&itemcodein_txt=" + document.getElementById("itemcodein_txt").value;
    url = url + "&itemdescriptin_txt=" + document.getElementById("itemdescriptin_txt").value;


// // do not change {
//     url = url + "&H1=" + document.getElementById("H1").value;
//     url = url + "&H2=" + document.getElementById("H2").value;
//     url = url + "&H3=" + document.getElementById("H3").value;
//     url = url + "&H4=" + document.getElementById("H4").value;
//     url = url + "&H5=" + document.getElementById("H5").value;
    url = url + "&Jtable1=" + Jtable1;
    url = url + "&Jtable2=" + Jtable2;
// } do not change

    console.log(Jtable1);
    console.log(Jtable2);

    xmlHttp.onreadystatechange = salessaveresult;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);



}


function salessaveresult() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        if (xmlHttp.responseText == "Saved") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Saved</span></div>";
            $("#msg_box").hide().slideDown(400).delay(2000);
            $("#msg_box").slideUp(400);
        } else {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";
            $("#msg_box").hide().slideDown(400).delay(2000);
            $("#msg_box").slideUp(400);
        }
    }
}


function addRow() {

    var table = document.getElementById("myTable");

    var row = table.insertRow(table.length);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);


    cell1.setAttribute("contenteditable", "true");
    cell2.setAttribute("contenteditable", "true");
    cell3.setAttribute("contenteditable", "true");
    cell4.setAttribute("contenteditable", "true");
    cell5.setAttribute("contenteditable", "true");
    cell6.setAttribute("contenteditable", "true");
    // cell7.setAttribute("contenteditable", "true");

    cell1.innerHTML = "";
    cell2.innerHTML = "";
    cell3.innerHTML = "";
    cell4.innerHTML = "";
    cell5.innerHTML = "";
    cell6.innerHTML = "";
    cell7.innerHTML = '<input type="button" value="-" onclick="deleteRow(this)">';

    qtyTot();
}

function deleteRow(r) {

    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);

    qtyTot();
}

function addRow1() {

    var table = document.getElementById("myTable1");

    var row = table.insertRow(table.length);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);


    cell1.setAttribute("contenteditable", "true");
    cell2.setAttribute("contenteditable", "true");
    cell3.setAttribute("contenteditable", "true");
    cell4.setAttribute("contenteditable", "true");
    cell5.setAttribute("contenteditable", "true");
    // cell6.setAttribute("contenteditable", "true");

    cell1.innerHTML = "";
    cell2.innerHTML = "";
    cell3.innerHTML = "";
    cell4.innerHTML = "";
    cell5.innerHTML = "";
    cell6.innerHTML = '<input type="button" value="-" onclick="deleteRow1(this)">';

    qtyTot();
}

function deleteRow1(r) {

    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable1").deleteRow(i);

    qtyTot();
}

function qtyTot() {

    var table = $('#myTable').tableToJSON();
    console.log(table);
    var qtyTot = 0.00;
    var tempqty = 0.00;
    for (var i = table.length - 1; i >= 0; i--) {

        tempqty = parseFloat(table[i].Qty) || 0;
        qtyTot = tempqty + qtyTot;
    }

    document.getElementById("totQty").value = qtyTot;

}