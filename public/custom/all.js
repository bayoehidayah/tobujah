$.ajaxSetup({
    headers: { 
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') 
    }
});

var userFoto = $("meta[name=userFotoRoute]");
//Loader & Notification
function toast(title, msg, type, reload = false, hideTimer = 2000) {
	resetToastPosition();let icons, bgcolor;if (type === "success") {icons = "success";bgcolor = "#f96868";} else if (type === "info") {icons = "info";bgcolor = "#46c35f";} else if (type === "warning") {icons = "warning";bgcolor = "#57c7d4";} else if (type === "danger") {icons = "error";bgcolor = "#f2a654";}$.toast({heading: String(title),text: String(msg),showHideTransition: 'slide',icon: icons,loaderBg: bgcolor,position: 'top-right',hideAfter: hideTimer,afterHidden: () => {if (reload) {location.reload();}}});
}

var swalLoader;
function loadData() {
	swalLoader = swal.fire({html: '<div class="dot-opacity-loader"><span></span><span></span><span></span></div>',showConfirmButton: false,allowEscapeKey: false,allowOutsideClick: false});
}

function closeLoad() {
	swalLoader.close();
}

function resetToastPosition() {
	$('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center');$(".jq-toast-wrap").css({"top": "","left": "","bottom": "","right": ""});
}

function showAlert(titleMsg, msg, msgType){
	swal.fire({title : titleMsg,text : msg,icon : msgType});
}

//Table & Form Control
var tableCustom;
function table(element, columnData) {
	var url = $(element).data("url");$.fn.dataTable.ext.errMode = 'none';tableCustom = $(element).DataTable({"processing": true,"serverSide": true,"ordering": true,"order": [[0, 'asc']],"ajax": {"url": url,"type": "POST"},"deferRender": true,"aLengthMenu": [[10, 50, 100],[10, 50, 100]],"columns": columnData,"iDisplayLength": 10,"language": {search: ""},"errMode" : "throw"});$(element).each(function () {var datatable = $(this);var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');search_input.attr('placeholder', 'Search');search_input.removeClass('form-control-sm');var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');length_sel.removeClass('form-control-sm');});
}

function refreshTable() {
	setTimeout(function () {tableCustom.ajax.reload();}, 1000);
}

function submitForm(element, urlForm, dataForm, isFile = false) {
	if(isFile){ 
		$.ajax({type: "POST",url: urlForm,data: dataForm,dataType: "JSON",processData : false,contentType : false,beforeSend: function () {loadData();},success: function (response) { setTimeout(function(){closeLoad();if(response.status){toast("Success!", response.msg, "success");$(element)[0].reset(); refreshTable();}else{toast("Oops!", response.msg, "danger");}}, 1000);},error: function (textStatus) {setTimeout(function () {closeLoad();toast("Oops!", "Terjadi kesalahan sistem", "danger");}, 1000);}});
	}
	else{
		$.ajax({type: "POST",url: urlForm,data: dataForm,dataType: "JSON",beforeSend: function () {loadData();},success: function (response) {setTimeout(function () {closeLoad();if (response.status) {toast("Success!", response.msg, "success");$(element)[0].reset();refreshTable();} else {toast("Oops!", response.msg, "danger");}}, 1000);},error: function (textStatus) {setTimeout(function () {closeLoad();toast("Oops!", "Terjadi kesalahan sistem", "danger");}, 1000);}});
	}
}

function delData(element, value) {
	var urlDel = $(element).data("del") + "/" + value;swal.fire({title: "Warning!",html: "Data tidak dapat dikembalikan",icon: "warning",showCancelButton: true,showLoaderOnConfirm: true,}).then((results) => {if (results.value) {$.ajax({type: "DELETE",url: urlDel,dataType: "JSON",beforeSend: function () {loadData();},success: function (response) {setTimeout(function () {closeLoad();}, 1300);setTimeout(function () {if (response.status) {refreshTable();toast("Success!", "Data telah berhasil dihapus", "success");} else {toast("Oops!", response.msg, "danger");}}, 1000);},error: function (textStatus) {setTimeout(function () {closeLoad();toast("Oops!", "Terjadi kesalahan dalam menghapus data", "danger");}, 1000);}});}})
}

function actionBtn(element, form, edit = false) {
	if (edit) {$(form).attr("data-edit", "true");}else{$(form).attr("data-edit", "false");}$(element).modal("show");
}

function showModal(element){
	$(element).modal("show");
}
function closeModal(element){
	$(element).modal("close");
}

function formatCurrency(amount, decimalCount = 2, decimal = ",", thousands = ".") {
	try { decimalCount = Math.abs(decimalCount); decimalCount = isNaN(decimalCount) ? 2 : decimalCount; const negativeSign = amount < 0 ? "-" : ""; let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString(); let j = (i.length > 3) ? i.length % 3 : 0;return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");} catch (e) {console.log(e)}
}