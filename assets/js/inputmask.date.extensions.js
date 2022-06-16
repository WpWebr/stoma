!function(e){"function"==typeof define&&define.amd?define(["./dependencyLibs/inputmask.dependencyLib","./inputmask"],e):"object"==typeof exports?module.exports=e(require("./dependencyLibs/inputmask.dependencyLib"),require("./inputmask")):e(window.dependencyLib||jQuery,window.Inputmask)}(function(e,r){function a(e){return isNaN(e)||29===new Date(e,2,0).getDate()}return r.extendAliases({"dd/mm/yyyy":{mask:"1/2/y",placeholder:"dd/mm/yyyy",regex:{val1pre:new RegExp("[0-3]"),val1:new RegExp("0[1-9]|[12][0-9]|3[01]"),val2pre:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[1-9]|[12][0-9]|3[01])"+a+"[01])")},val2:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[1-9]|[12][0-9])"+a+"(0[1-9]|1[012]))|(30"+a+"(0[13-9]|1[012]))|(31"+a+"(0[13578]|1[02]))")}},leapday:"29/02/",separator:"/",yearrange:{minyear:1900,maxyear:2099},isInYearRange:function(e,r,a){if(isNaN(e))return!1;var t=parseInt(e.concat(r.toString().slice(e.length))),n=parseInt(e.concat(a.toString().slice(e.length)));return!isNaN(t)&&r<=t&&t<=a||!isNaN(n)&&r<=n&&n<=a},determinebaseyear:function(e,r,a){var t=(new Date).getFullYear();if(e>t)return e;if(r<t){for(var n=r.toString().slice(0,2),y=r.toString().slice(2,4);r<n+a;)n--;var i=n+y;return e>i?e:i}if(e<=t&&t<=r){for(var s=t.toString().slice(0,2);r<s+a;)s--;var m=s+a;return m<e?e:m}return t},onKeyDown:function(a,t,n,y){var i=e(this);if(a.ctrlKey&&a.keyCode===r.keyCode.RIGHT){var s=new Date;i.val(s.getDate().toString()+(s.getMonth()+1).toString()+s.getFullYear().toString()),i.trigger("setvalue")}},getFrontValue:function(e,r,a){for(var t=0,n=0,y=0;y<e.length&&"2"!==e.charAt(y);y++){var i=a.definitions[e.charAt(y)];i?(t+=n,n=i.cardinality):n++}return r.join("").substr(t,n)},postValidation:function(e,r,t){var n,y,i=e.join("");return 0===t.mask.indexOf("y")?(y=i.substr(0,4),n=i.substring(4,10)):(y=i.substring(6,10),n=i.substr(0,6)),r&&(n!==t.leapday||a(y))},definitions:{1:{validator:function(e,r,a,t,n){var y=n.regex.val1.test(e);return t||y||e.charAt(1)!==n.separator&&-1==="-./".indexOf(e.charAt(1))||!(y=n.regex.val1.test("0"+e.charAt(0)))?y:(r.buffer[a-1]="0",{refreshFromBuffer:{start:a-1,end:a},pos:a,c:e.charAt(0)})},cardinality:2,prevalidator:[{validator:function(e,r,a,t,n){var y=e;isNaN(r.buffer[a+1])||(y+=r.buffer[a+1]);var i=1===y.length?n.regex.val1pre.test(y):n.regex.val1.test(y);if(!t&&!i){if(i=n.regex.val1.test(e+"0"))return r.buffer[a]=e,r.buffer[++a]="0",{pos:a,c:"0"};if(i=n.regex.val1.test("0"+e))return r.buffer[a]="0",a++,{pos:a}}return i},cardinality:1}]},2:{validator:function(e,r,a,t,n){var y=n.getFrontValue(r.mask,r.buffer,n);-1!==y.indexOf(n.placeholder[0])&&(y="01"+n.separator);var i=n.regex.val2(n.separator).test(y+e);return t||i||e.charAt(1)!==n.separator&&-1==="-./".indexOf(e.charAt(1))||!(i=n.regex.val2(n.separator).test(y+"0"+e.charAt(0)))?i:(r.buffer[a-1]="0",{refreshFromBuffer:{start:a-1,end:a},pos:a,c:e.charAt(0)})},cardinality:2,prevalidator:[{validator:function(e,r,a,t,n){isNaN(r.buffer[a+1])||(e+=r.buffer[a+1]);var y=n.getFrontValue(r.mask,r.buffer,n);-1!==y.indexOf(n.placeholder[0])&&(y="01"+n.separator);var i=1===e.length?n.regex.val2pre(n.separator).test(y+e):n.regex.val2(n.separator).test(y+e);return t||i||!(i=n.regex.val2(n.separator).test(y+"0"+e))?i:(r.buffer[a]="0",a++,{pos:a})},cardinality:1}]},y:{validator:function(e,r,a,t,n){return n.isInYearRange(e,n.yearrange.minyear,n.yearrange.maxyear)},cardinality:4,prevalidator:[{validator:function(e,r,a,t,n){var y=n.isInYearRange(e,n.yearrange.minyear,n.yearrange.maxyear);if(!t&&!y){var i=n.determinebaseyear(n.yearrange.minyear,n.yearrange.maxyear,e+"0").toString().slice(0,1);if(y=n.isInYearRange(i+e,n.yearrange.minyear,n.yearrange.maxyear))return r.buffer[a++]=i.charAt(0),{pos:a};if(i=n.determinebaseyear(n.yearrange.minyear,n.yearrange.maxyear,e+"0").toString().slice(0,2),y=n.isInYearRange(i+e,n.yearrange.minyear,n.yearrange.maxyear))return r.buffer[a++]=i.charAt(0),r.buffer[a++]=i.charAt(1),{pos:a}}return y},cardinality:1},{validator:function(e,r,a,t,n){var y=n.isInYearRange(e,n.yearrange.minyear,n.yearrange.maxyear);if(!t&&!y){var i=n.determinebaseyear(n.yearrange.minyear,n.yearrange.maxyear,e).toString().slice(0,2);if(y=n.isInYearRange(e[0]+i[1]+e[1],n.yearrange.minyear,n.yearrange.maxyear))return r.buffer[a++]=i.charAt(1),{pos:a};if(i=n.determinebaseyear(n.yearrange.minyear,n.yearrange.maxyear,e).toString().slice(0,2),y=n.isInYearRange(i+e,n.yearrange.minyear,n.yearrange.maxyear))return r.buffer[a-1]=i.charAt(0),r.buffer[a++]=i.charAt(1),r.buffer[a++]=e.charAt(0),{refreshFromBuffer:{start:a-3,end:a},pos:a}}return y},cardinality:2},{validator:function(e,r,a,t,n){return n.isInYearRange(e,n.yearrange.minyear,n.yearrange.maxyear)},cardinality:3}]}},insertMode:!1,autoUnmask:!1},"mm/dd/yyyy":{placeholder:"mm/dd/yyyy",alias:"dd/mm/yyyy",regex:{val2pre:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[13-9]|1[012])"+a+"[0-3])|(02"+a+"[0-2])")},val2:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+a+"(0[1-9]|[12][0-9]))|((0[13-9]|1[012])"+a+"30)|((0[13578]|1[02])"+a+"31)")},val1pre:new RegExp("[01]"),val1:new RegExp("0[1-9]|1[012]")},leapday:"02/29/",onKeyDown:function(a,t,n,y){var i=e(this);if(a.ctrlKey&&a.keyCode===r.keyCode.RIGHT){var s=new Date;i.val((s.getMonth()+1).toString()+s.getDate().toString()+s.getFullYear().toString()),i.trigger("setvalue")}}},"yyyy/mm/dd":{mask:"y/1/2",placeholder:"yyyy/mm/dd",alias:"mm/dd/yyyy",leapday:"/02/29",onKeyDown:function(a,t,n,y){var i=e(this);if(a.ctrlKey&&a.keyCode===r.keyCode.RIGHT){var s=new Date;i.val(s.getFullYear().toString()+(s.getMonth()+1).toString()+s.getDate().toString()),i.trigger("setvalue")}}},"dd.mm.yyyy":{mask:"1.2.y",placeholder:"dd.mm.yyyy",leapday:"29.02.",separator:".",alias:"dd/mm/yyyy"},"dd-mm-yyyy":{mask:"1-2-y",placeholder:"dd-mm-yyyy",leapday:"29-02-",separator:"-",alias:"dd/mm/yyyy"},"mm.dd.yyyy":{mask:"1.2.y",placeholder:"mm.dd.yyyy",leapday:"02.29.",separator:".",alias:"mm/dd/yyyy"},"mm-dd-yyyy":{mask:"1-2-y",placeholder:"mm-dd-yyyy",leapday:"02-29-",separator:"-",alias:"mm/dd/yyyy"},"yyyy.mm.dd":{mask:"y.1.2",placeholder:"yyyy.mm.dd",leapday:".02.29",separator:".",alias:"yyyy/mm/dd"},"yyyy-mm-dd":{mask:"y-1-2",placeholder:"yyyy-mm-dd",leapday:"-02-29",separator:"-",alias:"yyyy/mm/dd"},datetime:{mask:"1/2/y h:s",placeholder:"dd/mm/yyyy hh:mm",alias:"dd/mm/yyyy",regex:{hrspre:new RegExp("[012]"),hrs24:new RegExp("2[0-4]|1[3-9]"),hrs:new RegExp("[01][0-9]|2[0-4]"),ampm:new RegExp("^[a|p|A|P][m|M]"),mspre:new RegExp("[0-5]"),ms:new RegExp("[0-5][0-9]")},timeseparator:":",hourFormat:"24",definitions:{h:{validator:function(e,r,a,t,n){if("24"===n.hourFormat&&24===parseInt(e,10))return r.buffer[a-1]="0",r.buffer[a]="0",{refreshFromBuffer:{start:a-1,end:a},c:"0"};var y=n.regex.hrs.test(e);if(!t&&!y&&(e.charAt(1)===n.timeseparator||-1!=="-.:".indexOf(e.charAt(1)))&&(y=n.regex.hrs.test("0"+e.charAt(0))))return r.buffer[a-1]="0",r.buffer[a]=e.charAt(0),a++,{refreshFromBuffer:{start:a-2,end:a},pos:a,c:n.timeseparator};if(y&&"24"!==n.hourFormat&&n.regex.hrs24.test(e)){var i=parseInt(e,10);return 24===i?(r.buffer[a+5]="a",r.buffer[a+6]="m"):(r.buffer[a+5]="p",r.buffer[a+6]="m"),i-=12,i<10?(r.buffer[a]=i.toString(),r.buffer[a-1]="0"):(r.buffer[a]=i.toString().charAt(1),r.buffer[a-1]=i.toString().charAt(0)),{refreshFromBuffer:{start:a-1,end:a+6},c:r.buffer[a]}}return y},cardinality:2,prevalidator:[{validator:function(e,r,a,t,n){var y=n.regex.hrspre.test(e);return t||y||!(y=n.regex.hrs.test("0"+e))?y:(r.buffer[a]="0",a++,{pos:a})},cardinality:1}]},s:{validator:"[0-5][0-9]",cardinality:2,prevalidator:[{validator:function(e,r,a,t,n){var y=n.regex.mspre.test(e);return t||y||!(y=n.regex.ms.test("0"+e))?y:(r.buffer[a]="0",a++,{pos:a})},cardinality:1}]},t:{validator:function(e,r,a,t,n){return n.regex.ampm.test(e+"m")},casing:"lower",cardinality:1}},insertMode:!1,autoUnmask:!1},datetime12:{mask:"1/2/y h:s t\\m",placeholder:"dd/mm/yyyy hh:mm xm",alias:"datetime",hourFormat:"12"},"mm/dd/yyyy hh:mm xm":{mask:"1/2/y h:s t\\m",placeholder:"mm/dd/yyyy hh:mm xm",alias:"datetime12",regex:{val2pre:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[13-9]|1[012])"+a+"[0-3])|(02"+a+"[0-2])")},val2:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+a+"(0[1-9]|[12][0-9]))|((0[13-9]|1[012])"+a+"30)|((0[13578]|1[02])"+a+"31)")},val1pre:new RegExp("[01]"),val1:new RegExp("0[1-9]|1[012]")},leapday:"02/29/",onKeyDown:function(a,t,n,y){var i=e(this);if(a.ctrlKey&&a.keyCode===r.keyCode.RIGHT){var s=new Date;i.val((s.getMonth()+1).toString()+s.getDate().toString()+s.getFullYear().toString()),i.trigger("setvalue")}}},"hh:mm t":{mask:"h:s t\\m",placeholder:"hh:mm xm",alias:"datetime",hourFormat:"12"},"h:s t":{mask:"h:s t\\m",placeholder:"hh:mm xm",alias:"datetime",hourFormat:"12"},"hh:mm:ss":{mask:"h:s:s",placeholder:"hh:mm:ss",alias:"datetime",autoUnmask:!1},"hh:mm":{mask:"h:s",placeholder:"hh:mm",alias:"datetime",autoUnmask:!1},date:{alias:"dd/mm/yyyy"},"mm/yyyy":{mask:"1/y",placeholder:"mm/yyyy",leapday:"donotuse",separator:"/",alias:"mm/dd/yyyy"},shamsi:{regex:{val2pre:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+a+"[0-3])")},val2:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+a+"(0[1-9]|[12][0-9]))|((0[1-9]|1[012])"+a+"30)|((0[1-6])"+a+"31)")},val1pre:new RegExp("[01]"),val1:new RegExp("0[1-9]|1[012]")},yearrange:{minyear:1300,maxyear:1499},mask:"y/1/2",leapday:"/12/30",placeholder:"yyyy/mm/dd",alias:"mm/dd/yyyy",clearIncomplete:!0},"yyyy-mm-dd hh:mm:ss":{mask:"y-1-2 h:s:s",placeholder:"yyyy-mm-dd hh:mm:ss",alias:"datetime",separator:"-",leapday:"-02-29",regex:{val2pre:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[13-9]|1[012])"+a+"[0-3])|(02"+a+"[0-2])")},val2:function(e){var a=r.escapeRegex.call(this,e);return new RegExp("((0[1-9]|1[012])"+a+"(0[1-9]|[12][0-9]))|((0[13-9]|1[012])"+a+"30)|((0[13578]|1[02])"+a+"31)")},val1pre:new RegExp("[01]"),val1:new RegExp("0[1-9]|1[012]")},onKeyDown:function(e,r,a,t){}}}),r});