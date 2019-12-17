var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}

// object transverse
!function(a){"use strict";function b(a){return a instanceof Object}function c(a){return"number"==typeof a&&!h(a)}function d(a,c,d,e,f,h){var i=[[],0,g(a).sort(),a],j=[];do{var k=i.pop(),l=i.pop(),m=i.pop(),n=i.pop();for(j.push(k);l[0];){var o=l.shift(),p=k[o],q=n.concat(o),r=c.call(d,k,p,o,q,m);if(r!==!0){if(r===!1){i.length=0;break}if(!(m>=h)&&b(p)){if(-1!==j.indexOf(p)){if(f)continue;throw new Error("Circular reference")}if(!e){i.push(n,m,l,k),i.push(q,m+1,g(p).sort(),p);break}i.unshift(q,m+1,g(p).sort(),p)}}}}while(i[0]);return a}function e(a,b,e,g,h,i){var j=b,k=e,l=1===g,m=!!h,n=c(i)?i:f;return d(a,j,k,l,m,n)}var f=100,g=Object.keys,h=a.isNaN;Object.traverse=e}(window);

// object to formdata
!function(a){"use strict";function b(a){return j.call(a).slice(8,-1)}function c(a){var b=l.call(a,function(a){return"["+a+"]"});return b[0]=a[0],b.join("")}function d(a){var d=new h,e=function(a,e,f,g){var h=b(e);switch(h){case"Array":break;case"Object":break;case"FileList":return k.call(e,function(a,b){var e=g.concat(b),f=c(e);d.append(f,a)}),!0;case"File":var i=c(g);return d.append(i,e),!0;case"Blob":var i=c(g);return d.append(i,e,e.name),!0;default:var i=c(g);return d.append(i,e),!0}};return Object.traverse(a,e,null,null,!0),d}var e=a.Blob,f=a.File,g=a.FileList,h=a.FormData,i=e&&f&&g&&h,j=Object.prototype.toString,k=Array.prototype.forEach,l=Array.prototype.map;i&&(Object.toFormData=d)}(window);

Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

Number.prototype.numberFormat = function(c, d, t){
var n = this,
    c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "." : d,
    t = t == undefined ? "," : t,
    s = n < 0 ? "-" : "",
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};