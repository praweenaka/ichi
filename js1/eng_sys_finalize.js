/* global url, params, salessaveresult */
 
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

    document.getElementById('refno').value = "";
    var d = new Date('Y-m-d');
    document.getElementById('sdate').innerHTML = d;
    document.getElementById('estockno').value = "";
    document.getElementById('imno').value = "";
    document.getElementById('complete').value = "";
    document.getElementById('headblock').value = "";
    document.getElementById('vmodel').value = "";
    document.getElementById('emodel').value = "";
    document.getElementById('engno').value = "";
    document.getElementById('mfyear').value = "";
    document.getElementById('engcapa').value = "";
    document.getElementById('ceyli').value = "";
    document.getElementById('fuel').value = "";
    document.getElementById('fuelsys').value = "";
    document.getElementById('sucharge').value = "";
    document.getElementById('vvti').value = "";
    document.getElementById('itech').value = "";
    document.getElementById('vtech').value = "";
    document.getElementById('val16').value = "";
    document.getElementById('camshft').value = "";
    document.getElementById('inletmani').value = "";
    document.getElementById('clufan').value = "";

    document.getElementById('gditech').value = "";
    document.getElementById('gdipump').value = "";
    document.getElementById('gdipline').value = "";
    document.getElementById('gdifpsense').value = "";

    document.getElementById('ignisys').value = "";
    document.getElementById('delco').value = "";
    document.getElementById('delcotype').value = "";
    document.getElementById('coilpack').value = "";
    document.getElementById('coilpacktype').value = "";

    document.getElementById('turbosys').value = "";
    document.getElementById('turbowgate').value = "";
    document.getElementById('turbocooler').value = "";
    document.getElementById('turbohoseqty').value = "";

    document.getElementById('deselinjtype').value = "";
    document.getElementById('deselinjpup').value = "";
    document.getElementById('deselinjenosel').value = "";
    document.getElementById('gloplug').value = "";

    document.getElementById('throbody').value = "";
    document.getElementById('throbodysense').value = "";
    document.getElementById('tpssesnse').value = "";
    document.getElementById('mapsense').value = "";
    document.getElementById('idleupsense').value = "";
    document.getElementById('throdrmotr').value = "";
    document.getElementById('coolcavcover').value = "";
    document.getElementById('idlairhou').value = "";
    document.getElementById('hose').value = "";

    document.getElementById('airclebox').value = "";
    document.getElementById('airclehose').value = "";
    document.getElementById('airflosense').value = "";
    document.getElementById('aircleduck').value = "";
    document.getElementById('airfilt').value = "";

    document.getElementById('camsense').value = "";
    document.getElementById('cranksense').value = "";
    document.getElementById('camangsense').value = "";
    document.getElementById('knocsense').value = "";
    document.getElementById('heatsense').value = "";
    document.getElementById('airflosense1').value = "";
    document.getElementById('oilpressense').value = "";
    document.getElementById('thomasstuval').value = "";
    document.getElementById('idelupval').value = "";

    document.getElementById('outletmani').value = "";
    document.getElementById('chobar').value = "";
    document.getElementById('sensepri2').value = "";
    document.getElementById('sensesec2').value = "";
    document.getElementById('egrval').value = "";

    document.getElementById('petijjsys').value = "";
    document.getElementById('injrail').value = "";
    document.getElementById('injhospip').value = "";
    document.getElementById('injnoz').value = "";
    document.getElementById('injrasense').value = "";
    document.getElementById('injfupresense').value = "";

    document.getElementById('wirehorn').value = "";
    document.getElementById('combox').value = "";
    document.getElementById('controbox').value = "";
    document.getElementById('fusebox').value = "";

    document.getElementById('waterhose').value = "";
    document.getElementById('waterpipe').value = "";
    document.getElementById('watermouth').value = "";
    document.getElementById('watermoucap').value = "";
    document.getElementById('tomasstuval').value = "";
    document.getElementById('waterpump').value = "";

    document.getElementById('enggelmou').value = "";
    document.getElementById('engmou').value = "";
    document.getElementById('engmoubarck').value = "";
    document.getElementById('engmoubar').value = "";

    document.getElementById('accompre').value = "";
    document.getElementById('alternat').value = "";
    document.getElementById('powerstepump').value = "";
    document.getElementById('oilbottle').value = "";
    document.getElementById('oilhose').value = "";
    document.getElementById('bracket1').value = "";

    document.getElementById('pullynut').value = "";
    document.getElementById('campully').value = "";
    document.getElementById('crankpully').value = "";
    document.getElementById('testblepully').value = "";
    document.getElementById('bracket2').value = "";
    document.getElementById('belt').value = "";

    document.getElementById('taptcover').value = "";
    document.getElementById('breavalhose').value = "";
    document.getElementById('beltpullycov').value = "";
    document.getElementById('oilcap').value = "";
    document.getElementById('oilstick').value = "";
    document.getElementById('oilfilter').value = "";

    document.getElementById('gearbox').value = "";
    document.getElementById('trasmi').value = "";
    document.getElementById('wd2wd4').value = "";
    document.getElementById('gearboxcvtsens').value = "";
    document.getElementById('reversen').value = "";
    document.getElementById('sensor').value = "";
    document.getElementById('speedmetsencab').value = "";
    document.getElementById('gearsele').value = "";
    document.getElementById('gearselsoccou').value = "";
    document.getElementById('gearselpicou').value = "";
    document.getElementById('gearseltype').value = "";
    document.getElementById('gearcable').value = "";
    document.getElementById('gearboxmou').value = "";
    document.getElementById('convert').value = "";
    document.getElementById('flywheel').value = "";
    document.getElementById('clutplate').value = "";
    document.getElementById('presplate').value = "";

    document.getElementById('msg_box').innerHTML = "";

    getdt();
}

function getdt() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "eng_sys_finalize_data.php";
    url = url + "?Command=" + "getdt";
    url = url + "&ls=" + "new";
    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}



function assign_dt() {
    var XMLAddress1;
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        var com = "";
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
        var idno = XMLAddress1[0].childNodes[0].nodeValue;
//        if (idno.length === 1) {
//            com = $_SESSION['company'];
//            idno = "E/" + com + "0000" + idno;
//        } else if (idno.length === 2) {
//            idno = "E/" + com + "000" + idno;
//        } else if (idno.length === 3) {
//            idno = "E/" + com + "00" + idno;
//        } else if (idno.length === 4) {
//            idno = "E/" + com + "0" + idno;
//        } else if (idno.length === 5) {
//            idno = "E/" + com + "" + idno;
//        }

        document.getElementById("refno").value = idno;
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

    if (document.getElementById('refno').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Plz Click New...</span></div>";
        return false;
    }
    if (document.getElementById('estockno').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Engine Stock No Not Entered</span></div>";
        return false;
    }
    if (document.getElementById('imno').value == "") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>IM Not Entered</span></div>";
        return false;
    }
    document.getElementById('msg_box').innerHTML = "";

    var url = "eng_sys_finalize_data.php";
    url = url + "?Command=" + "save";

    url = url + "&uniq=" + document.getElementById('uniq').value;
    url = url + "&refno=" + document.getElementById('refno').value;
    url = url + "&sdate=" + document.getElementById('sdate').value;
    url = url + "&estockno=" + document.getElementById('estockno').value;
    url = url + "&imno=" + document.getElementById('imno').value;

    url = url + "&headblock=" + document.getElementById('headblock').value;
    url = url + "&vmodel=" + document.getElementById('vmodel').value;
    url = url + "&emodel=" + document.getElementById('emodel').value;
    url = url + "&engno=" + document.getElementById('engno').value;
    url = url + "&mfyear=" + document.getElementById('mfyear').value;
    url = url + "&engcapa=" + document.getElementById('engcapa').value;
    url = url + "&ceyli=" + document.getElementById('ceyli').value;
    url = url + "&fuel=" + document.getElementById('fuel').value;
    url = url + "&fuelsys=" + document.getElementById('fuelsys').value;
    url = url + "&complete=" + document.getElementById('complete').value;
    url = url + "&sucharge=" + document.getElementById('sucharge').value;
    url = url + "&vvti=" + document.getElementById('vvti').value;
    url = url + "&itech=" + document.getElementById('itech').value;
    url = url + "&vtech=" + document.getElementById('vtech').value;
    url = url + "&val16=" + document.getElementById('val16').value;
    url = url + "&camshft=" + document.getElementById('camshft').value;
    url = url + "&inletmani=" + document.getElementById('inletmani').value;
    url = url + "&clufan=" + document.getElementById('clufan').value;

    url = url + "&gditech=" + document.getElementById('gditech').value;
    url = url + "&gdipump=" + document.getElementById('gdipump').value;
    url = url + "&gdipline=" + document.getElementById('gdipline').value;
    url = url + "&gdifpsense=" + document.getElementById('gdifpsense').value;

    url = url + "&ignisys=" + document.getElementById('ignisys').value;
    url = url + "&delco=" + document.getElementById('delco').value;
    url = url + "&delcotype=" + document.getElementById('delcotype').value;
    url = url + "&coilpack=" + document.getElementById('coilpack').value;
    url = url + "&coilpacktype=" + document.getElementById('coilpacktype').value;

    url = url + "&turbosys=" + document.getElementById('turbosys').value;
    url = url + "&turbowgate=" + document.getElementById('turbowgate').value;
    url = url + "&turbocooler=" + document.getElementById('turbocooler').value;
    url = url + "&turbohoseqty=" + document.getElementById('turbohoseqty').value;

    url = url + "&deselinjtype=" + document.getElementById('deselinjtype').value;
    url = url + "&deselinjpup=" + document.getElementById('deselinjpup').value;
    url = url + "&deselinjenosel=" + document.getElementById('deselinjenosel').value;
    url = url + "&gloplug=" + document.getElementById('gloplug').value;

    url = url + "&throbody=" + document.getElementById('throbody').value;
    url = url + "&throbodysense=" + document.getElementById('throbodysense').value;
    url = url + "&tpssesnse=" + document.getElementById('tpssesnse').value;
    url = url + "&mapsense=" + document.getElementById('mapsense').value;
    url = url + "&idleupsense=" + document.getElementById('idleupsense').value;
    url = url + "&throdrmotr=" + document.getElementById('throdrmotr').value;
    url = url + "&coolcavcover=" + document.getElementById('coolcavcover').value;
    url = url + "&idlairhou=" + document.getElementById('idlairhou').value;
    url = url + "&hose=" + document.getElementById('hose').value;

    url = url + "&airclebox=" + document.getElementById('airclebox').value;
    url = url + "&airclehose=" + document.getElementById('airclehose').value;
    url = url + "&airflosense=" + document.getElementById('airflosense').value;
    url = url + "&aircleduck=" + document.getElementById('aircleduck').value;
    url = url + "&airfilt=" + document.getElementById('airfilt').value;

    url = url + "&camsense=" + document.getElementById('camsense').value;
    url = url + "&cranksense=" + document.getElementById('cranksense').value;
    url = url + "&camangsense=" + document.getElementById('camangsense').value;
    url = url + "&knocsense=" + document.getElementById('knocsense').value;
    url = url + "&heatsense=" + document.getElementById('heatsense').value;
    url = url + "&airflosense1=" + document.getElementById('airflosense1').value;
    url = url + "&oilpressense=" + document.getElementById('oilpressense').value;
    url = url + "&thomasstuval=" + document.getElementById('thomasstuval').value;
    url = url + "&idelupval=" + document.getElementById('idelupval').value;

    url = url + "&outletmani=" + document.getElementById('outletmani').value;
    url = url + "&chobar=" + document.getElementById('chobar').value;
    url = url + "&sensepri2=" + document.getElementById('sensepri2').value;
    url = url + "&sensesec2=" + document.getElementById('sensesec2').value;
    url = url + "&egrval=" + document.getElementById('egrval').value;

    url = url + "&petijjsys=" + document.getElementById('petijjsys').value;
    url = url + "&injrail=" + document.getElementById('injrail').value;
    url = url + "&injhospip=" + document.getElementById('injhospip').value;
    url = url + "&injnoz=" + document.getElementById('injnoz').value;
    url = url + "&injrasense=" + document.getElementById('injrasense').value;
    url = url + "&injfupresense=" + document.getElementById('injfupresense').value;

    url = url + "&wirehorn=" + document.getElementById('wirehorn').value;
    url = url + "&combox=" + document.getElementById('combox').value;
    url = url + "&controbox=" + document.getElementById('controbox').value;
    url = url + "&fusebox=" + document.getElementById('fusebox').value;

    url = url + "&waterhose=" + document.getElementById('waterhose').value;
    url = url + "&waterpipe=" + document.getElementById('waterpipe').value;
    url = url + "&watermouth=" + document.getElementById('watermouth').value;
    url = url + "&watermoucap=" + document.getElementById('watermoucap').value;
    url = url + "&tomasstuval=" + document.getElementById('tomasstuval').value;
    url = url + "&waterpump=" + document.getElementById('waterpump').value;

    url = url + "&enggelmou=" + document.getElementById('enggelmou').value;
    url = url + "&engmou=" + document.getElementById('engmou').value;
    url = url + "&engmoubarck=" + document.getElementById('engmoubarck').value;
    url = url + "&engmoubar=" + document.getElementById('engmoubar').value;

    url = url + "&accompre=" + document.getElementById('accompre').value;
    url = url + "&alternat=" + document.getElementById('alternat').value;
    url = url + "&powerstepump=" + document.getElementById('powerstepump').value;
    url = url + "&oilbottle=" + document.getElementById('oilbottle').value;
    url = url + "&oilhose=" + document.getElementById('oilhose').value;
    url = url + "&bracket1=" + document.getElementById('bracket1').value;

    url = url + "&pullynut=" + document.getElementById('pullynut').value;
    url = url + "&campully=" + document.getElementById('campully').value;
    url = url + "&crankpully=" + document.getElementById('crankpully').value;
    url = url + "&testblepully=" + document.getElementById('testblepully').value;
    url = url + "&bracket2=" + document.getElementById('bracket2').value;
    url = url + "&belt=" + document.getElementById('belt').value;

    url = url + "&taptcover=" + document.getElementById('taptcover').value;
    url = url + "&breavalhose=" + document.getElementById('breavalhose').value;
    url = url + "&beltpullycov=" + document.getElementById('beltpullycov').value;
    url = url + "&oilcap=" + document.getElementById('oilcap').value;
    url = url + "&oilstick=" + document.getElementById('oilstick').value;
    url = url + "&oilfilter=" + document.getElementById('oilfilter').value;

    url = url + "&gearbox=" + document.getElementById('gearbox').value;
    url = url + "&trasmi=" + document.getElementById('trasmi').value;
    url = url + "&wd2wd4=" + document.getElementById('wd2wd4').value;
    url = url + "&gearboxcvtsens=" + document.getElementById('gearboxcvtsens').value;
    url = url + "&reversen=" + document.getElementById('reversen').value;
    url = url + "&sensor=" + document.getElementById('sensor').value;
    url = url + "&speedmetsencab=" + document.getElementById('speedmetsencab').value;
    url = url + "&gearsele=" + document.getElementById('gearsele').value;
    url = url + "&gearselsoccou=" + document.getElementById('gearselsoccou').value;
    url = url + "&gearselpicou=" + document.getElementById('gearselpicou').value;
    url = url + "&gearseltype=" + document.getElementById('gearseltype').value;
    url = url + "&gearcable=" + document.getElementById('gearcable').value;
    url = url + "&gearboxmou=" + document.getElementById('gearboxmou').value;
    url = url + "&convert=" + document.getElementById('convert').value;
    url = url + "&flywheel=" + document.getElementById('flywheel').value;
    url = url + "&clutplate=" + document.getElementById('clutplate').value;
    url = url + "&presplate=" + document.getElementById('presplate').value;


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
    var url = "eng_sys_finalize_data.php";
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
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
        var obj = JSON.parse(XMLAddress1[0].childNodes[0].nodeValue);

        opener.document.getElementById('refno').value = obj.refno;
        opener.document.getElementById('sdate').value = obj.sdate;
        opener.document.getElementById('estockno').value = obj.estockno;
        opener.document.getElementById('imno').value = obj.imno;
        opener.document.getElementById('complete').value = obj.complete;
        opener.document.getElementById('headblock').value = obj.headblock;
        opener.document.getElementById('vmodel').value = obj.vmodel;
        opener.document.getElementById('emodel').value = obj.emodel;
        opener.document.getElementById('engno').value = obj.engno;
        opener.document.getElementById('mfyear').value = obj.mfyear;
        opener.document.getElementById('engcapa').value = obj.engcapa;
        opener.document.getElementById('ceyli').value = obj.ceyli;
        opener.document.getElementById('fuel').value = obj.fuel;
        opener.document.getElementById('fuelsys').value = obj.fuelsys;
        opener.document.getElementById('sucharge').value = obj.sucharge;
        opener.document.getElementById('vvti').value = obj.vvti;
        opener.document.getElementById('itech').value = obj.itech;
        opener.document.getElementById('vtech').value = obj.vtech;
        opener.document.getElementById('val16').value = obj.val16;
        opener.document.getElementById('camshft').value = obj.camshft;
        opener.document.getElementById('inletmani').value = obj.inletmani;
        opener.document.getElementById('clufan').value = obj.clufan;

        opener.document.getElementById('gditech').value = obj.gditech;
        opener.document.getElementById('gdipump').value = obj.gdipump;
        opener.document.getElementById('gdipline').value = obj.gdipline;
        opener.document.getElementById('gdifpsense').value = obj.gdifpsense;

        opener.document.getElementById('ignisys').value = obj.ignisys;
        opener.document.getElementById('delco').value = obj.delco;
        opener.document.getElementById('delcotype').value = obj.delcotype;
        opener.document.getElementById('coilpack').value = obj.coilpack;
        opener.document.getElementById('coilpacktype').value = obj.coilpacktype;

        opener.document.getElementById('turbosys').value = obj.turbosys;
        opener.document.getElementById('turbowgate').value = obj.turbowgate;
        opener.document.getElementById('turbocooler').value = obj.turbocooler;
        opener.document.getElementById('turbohoseqty').value = obj.turbohoseqty;

        opener.document.getElementById('deselinjtype').value = obj.deselinjtype;
        opener.document.getElementById('deselinjpup').value = obj.deselinjpup;
        opener.document.getElementById('deselinjenosel').value = obj.deselinjenosel;
        opener.document.getElementById('gloplug').value = obj.gloplug;

        opener.document.getElementById('throbody').value = obj.throbody;
        opener.document.getElementById('throbodysense').value = obj.throbodysense;
        opener.document.getElementById('tpssesnse').value = obj.tpssesnse;
        opener.document.getElementById('mapsense').value = obj.mapsense;
        opener.document.getElementById('idleupsense').value = obj.idleupsense;
        opener.document.getElementById('throdrmotr').value = obj.throdrmotr;
        opener.document.getElementById('coolcavcover').value = obj.coolcavcover;
        opener.document.getElementById('idlairhou').value = obj.idlairhou;
        opener.document.getElementById('hose').value = obj.hose;

        opener.document.getElementById('airclebox').value = obj.airclebox;
        opener.document.getElementById('airclehose').value = obj.airclehose;
        opener.document.getElementById('airflosense').value = obj.airflosense;
        opener.document.getElementById('aircleduck').value = obj.aircleduck;
        opener.document.getElementById('airfilt').value = obj.airfilt;

        opener.document.getElementById('camsense').value = obj.camsense;
        opener.document.getElementById('cranksense').value = obj.cranksense;
        opener.document.getElementById('camangsense').value = obj.camangsense;
        opener.document.getElementById('knocsense').value = obj.knocsense;
        opener.document.getElementById('heatsense').value = obj.heatsense;
        opener.document.getElementById('airflosense1').value = obj.airflosense1;
        opener.document.getElementById('oilpressense').value = obj.oilpressense;
        opener.document.getElementById('thomasstuval').value = obj.thomasstuval;
        opener.document.getElementById('idelupval').value = obj.idelupval;

        opener.document.getElementById('outletmani').value = obj.outletmani;
        opener.document.getElementById('chobar').value = obj.chobar;
        opener.document.getElementById('sensepri2').value = obj.sensepri2;
        opener.document.getElementById('sensesec2').value = obj.sensesec2;
        opener.document.getElementById('egrval').value = obj.egrval;

        opener.document.getElementById('petijjsys').value = obj.petijjsys;
        opener.document.getElementById('injrail').value = obj.injrail;
        opener.document.getElementById('injhospip').value = obj.injhospip;
        opener.document.getElementById('injnoz').value = obj.injnoz;
        opener.document.getElementById('injrasense').value = obj.injrasense;
        opener.document.getElementById('injfupresense').value = obj.injfupresense;

        opener.document.getElementById('wirehorn').value = obj.wirehorn;
        opener.document.getElementById('combox').value = obj.combox;
        opener.document.getElementById('controbox').value = obj.controbox;
        opener.document.getElementById('fusebox').value = obj.fusebox;

        opener.document.getElementById('waterhose').value = obj.waterhose;
        opener.document.getElementById('waterpipe').value = obj.waterpipe;
        opener.document.getElementById('watermouth').value = obj.watermouth;
        opener.document.getElementById('watermoucap').value = obj.watermoucap;
        opener.document.getElementById('tomasstuval').value = obj.tomasstuval;
        opener.document.getElementById('waterpump').value = obj.waterpump;

        opener.document.getElementById('enggelmou').value = obj.enggelmou;
        opener.document.getElementById('engmou').value = obj.engmou;
        opener.document.getElementById('engmoubarck').value = obj.engmoubarck;
        opener.document.getElementById('engmoubar').value = obj.engmoubar;

        opener.document.getElementById('accompre').value = obj.accompre;
        opener.document.getElementById('alternat').value = obj.alternat;
        opener.document.getElementById('powerstepump').value = obj.powerstepump;
        opener.document.getElementById('oilbottle').value = obj.oilbottle;
        opener.document.getElementById('oilhose').value = obj.oilhose;
        opener.document.getElementById('bracket1').value = obj.bracket1;

        opener.document.getElementById('pullynut').value = obj.pullynut;
        opener.document.getElementById('campully').value = obj.campully;
        opener.document.getElementById('crankpully').value = obj.crankpully;
        opener.document.getElementById('testblepully').value = obj.testblepully;
        opener.document.getElementById('bracket2').value = obj.bracket2;
        opener.document.getElementById('belt').value = obj.belt;

        opener.document.getElementById('taptcover').value = obj.taptcover;
        opener.document.getElementById('breavalhose').value = obj.breavalhose;
        opener.document.getElementById('beltpullycov').value = obj.beltpullycov;
        opener.document.getElementById('oilcap').value = obj.oilcap;
        opener.document.getElementById('oilstick').value = obj.oilstick;
        opener.document.getElementById('oilfilter').value = obj.oilfilter;

        opener.document.getElementById('gearbox').value = obj.gearbox;
        opener.document.getElementById('trasmi').value = obj.trasmi;
        opener.document.getElementById('wd2wd4').value = obj.wd2wd4;
        opener.document.getElementById('gearboxcvtsens').value = obj.gearboxcvtsens;
        opener.document.getElementById('reversen').value = obj.reversen;
        opener.document.getElementById('sensor').value = obj.sensor;
        opener.document.getElementById('speedmetsencab').value = obj.speedmetsencab;
        opener.document.getElementById('gearsele').value = obj.gearsele;
        opener.document.getElementById('gearselsoccou').value = obj.gearselsoccou;
        opener.document.getElementById('gearselpicou').value = obj.gearselpicou;
        opener.document.getElementById('gearseltype').value = obj.gearseltype;
        opener.document.getElementById('gearcable').value = obj.gearcable;
        opener.document.getElementById('gearboxmou').value = obj.gearboxmou;
        opener.document.getElementById('convert').value = obj.convert;
        opener.document.getElementById('flywheel').value = obj.flywheel;
        opener.document.getElementById('clutplate').value = obj.clutplate;
        opener.document.getElementById('presplate').value = obj.presplate;

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


    var url = "eng_sys_finalize_data.php";
    url = url + "?Command=" + "search_custom";
    if (document.getElementById('cusno').value != "") {
        url = url + "&mstatus=cusno";
    } else if (document.getElementById('customername1').value != "") {
        url = url + "&mstatus=customername1";
    } else if (document.getElementById('customername2').value != "") {
        url = url + "&mstatus=customername2";
    }


    url = url + "&cusno=" + document.getElementById('cusno').value;
    url = url + "&customername1=" + document.getElementById('customername1').value;
    url = url + "&customername2=" + document.getElementById('customername2').value;
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
    url = url + "&sname=" + document.getElementById('sname').value;
    url = url + "&paddress=" + document.getElementById('paddress').value;
    url = url + "&nic=" + document.getElementById('nic').value;
    url = url + "&sdate=" + document.getElementById('sdate').value;

    window.open(url, '_blank');
}

