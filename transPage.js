function transTo() {
  setCookie("transWay", "to");
  document.getElementById("transForm").submit();
}

function transBack() {
  setCookie("transWay", "back");
  document.getElementById("transForm").submit();
}

function setCookie(name, value) {
  document.cookie = name + '=' + escape(value);
}

function getCookie(name) {
  var reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)"); //正则匹配
  var arr = document.cookie.match(reg);
  if (arr) return unescape(arr[2]);
  else return null;
} 

$(document).ready(function(){
  $("#transToButton").mouseover(function(){
    $("#transToButton").css("background-color","rgba(34, 139, 34, 1)");
  });
  $("#transToButton").mouseout(function(){
    $("#transToButton").css("background-color","rgba(34, 139, 34, 0.4)");
  });
  $("#transBackButton").mouseover(function(){
    $("#transBackButton").css("background-color","rgba(255, 114, 114, 1)");
  });
  $("#transBackButton").mouseout(function(){
    $("#transBackButton").css("background-color","rgba(255, 114, 114, 0.4)");
  });
});
