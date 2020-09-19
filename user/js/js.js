function changeImage(){
	document.getElementById("anh-to").;
}
function format_curency(a) {
  	a.value = a.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
}
 function number_format( number, decimals, dec_point, thousands_sep ) {
// http://kevin.vanzonneveld.net
// + original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
// + improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
// + bugfix by: Michael White (http://crestidg.com)
// + bugfix by: Benjamin Lupton
// + bugfix by: Allan Jensen (http://www.winternet.no)
// + revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
// * example 1: number_format(1234.5678, 2, ‘.’, ”);
// * returns 1: 1234.57

var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
var d = dec_point == undefined ? "," : dec_point;
var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;

return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n – i).toFixed(c).slice(2) : "");
}

// Created by: Justin Barlow | http://www.netlobo.com/
// This script downloaded from www.JavaScriptBank.com

// This function formats numbers by adding commas
function numberFormat(nStr){
  nStr += '';
  x = nStr.split('.');
  x1 = x[0];
  x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1))
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  return x1 + x2;
}

// This function removes non-numeric characters
function stripNonNumeric( str ){
  str += '';
  var rgx = /^\d|\.|-$/;
  var out = '';
  for( var i = 0; i < str.length; i++ ){
    if( rgx.test( str.charAt(i) ) ){
      if( !( ( str.charAt(i) == '.' && out.indexOf( '.' ) != -1 ) ||
             ( str.charAt(i) == '-' && out.length != 0 ) ) ){
        out += str.charAt(i);
      }
    }
  }
  return out;
}
