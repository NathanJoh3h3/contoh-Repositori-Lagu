$(document).ready(function () {
  $("#reset").click(function () {
    $("form")[0].reset();
  });
});

function fn_ValForm() {
  var regularExpres = /^-?\d+\.?\d*$/;
  var sMsg = "";
  if (document.getElementById("nama").value == "") {
    sMsg += ("\n* Anda belum mengisikan nama");
  }
  if (document.getElementById("artist").value == "") {
    sMsg += ("\n* Anda belum mengisikan artist");
  }
  if (document.getElementById("tahun").value == "") {
    sMsg += ("\n* Anda belum mengisikan tahun");
  }
  if (document.getElementById("genre").value == "") {
    sMsg += ("\n* Anda belum mengisikan genre");
  }
  if (sMsg != "") {
    alert("Peringatan:\n" + sMsg);
    e.preventDefault();
    return false;
  } else
    return true;
}