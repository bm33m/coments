alert("1 Comments..");
var token1 = "";
var token2 = "";
var token = "";
var tokenx = "";
var tokeny = "";

function init () {
  alert("2 Comments 2..");
  token1 = document.getElementById("token");
  token2 = document.getElementById("token2");
  getToken();
}

var checkToken = async () => {
  var url1 = window.location.href;
  var dy = new Date();
  var url = "http://127.0.0.1:8000/info";
  var db = await fetch(url, {
      method: 'GET',
      headers: {'Content-type':'application/json; charset=UTF-8'}
    }).then((response) => {
    //token.innerHTML = response;
    console.log("response: ", response);
    return response.text();
  }).then((dbtoken) => {
    console.log("dbtoken: ", dbtoken);
    tokenx = dbtoken.split("value=");
    tokeny = tokenx[1].split('"');
    token2.value = tokeny[1];
    token1.value = tokeny[1];
  }).catch((error) => {
    console.log("db3: @", error);
  }).finally(() => {
    var d2 = new Date();
    var d3 = d2 - dy;
    console.log(d2+"# @"+d3);
  });
}

function getToken(){
  console.log(checkToken());
}

window.onload = function(){
  init();
}
