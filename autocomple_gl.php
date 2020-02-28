<link href="js/pages/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<script src="js/pages/jquery-ui.min.js" type="text/javascript"></script> 
<script>
    $(function () {
        if ($('#nameOfVisitorTxt').length > 0) {
            $("#nameOfVisitorTxt").autocomplete({
                source: "kotEntry_data.php?Command=get_list&gl_name=" + document.getElementById('nameOfVisitorTxt').value,
                minLength: 1,
                select: function (event, ui) {
//                                            $("#txt_gl_code").val(ui.item.id);
                    $("#nameOfVisitorTxt").val(ui.item.name);
//                                            $("#itemPrice").focus();
                    return false;
                }
            });
        }
    });

    $(function () {
        if ($('#savinglockTxt').length > 0) {
            $("#savinglockTxt").autocomplete({
                source: "kotEntry_data.php?Command=get_list1&gl_name=" + document.getElementById('savinglockTxt').value,
                minLength: 1,
                select: function (event, ui) {
//                                            $("#txt_gl_code").val(ui.item.id);
                    $("#savinglockTxt").val(ui.item.name);
//                                            $("#itemPrice").focus();
                    return false;
                }
            });
        }
    });
</script>















