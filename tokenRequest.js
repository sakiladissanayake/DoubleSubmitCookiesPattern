
function tokenRequest(cookie) {

  var cookieSet = document.cookie;

  var EditedcookieSet = cookieSet.replace(/ /g,"");
  var arr = EditedcookieSet.split(";");
  var arrSize = arr.length;
  var csrfToken = "";
  var csrfCookie = "";
  var i = 0;

  while(i <= arrSize){
    var element = arr[i];
    var result = element.match(cookie+"=");
    if(result != null){
      var arr2 = arr[i].split("=");
      csrfToken = arr2[1];
      csrfCookie = arr2[0];
      break;
    }
    i++;
  }
  document.getElementById("token").setAttribute("value", csrfToken);
  document.getElementById("cookie").setAttribute("value", csrfCookie);
}