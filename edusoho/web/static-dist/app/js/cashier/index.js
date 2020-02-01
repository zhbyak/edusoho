webpackJsonp(["app/js/cashier/index"],{0:function(e,t){e.exports=jQuery},"02ad171abc9cada5bff7":function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("cd078759ac479d74803f"),i=n(r),c=a("7ab4a89ebadbfdecc2bf"),o=n(c),d=a("4602c3f5fe7ad9e3e91d"),f=n(d),s=a("1ff717687cc04d94af8f"),u=n(s),l=a("3b1883fc74dc0f9509af"),h=n(l),v=a("4d4dc8c99e38b826f59e"),p=n(v),m=function(e){function t(){return(0,o.default)(this,t),(0,u.default)(this,(t.__proto__||(0,i.default)(t)).apply(this,arguments))}return(0,h.default)(t,e),(0,f.default)(t,[{key:"afterTradeCreated",value:function(e){this.checkOrderStatus(),location.href=e.mwebUrl}},{key:"startInterval",value:function(){return!0}}]),t}(p.default);t.default=m},"0462758757283f323cc5":function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("7ab4a89ebadbfdecc2bf"),i=n(r),c=a("4602c3f5fe7ad9e3e91d"),o=n(c),d=function(){function e(t){(0,i.default)(this,e),this.$container=t.$coinContainer,this.cashierForm=t.cashierForm,this.$form=t.$form,this.priceType=this.$container.data("priceType"),this.coinRate=this.$container.data("coinRate"),this.maxCoinInput=this.$container.data("maxAllowCoin")>this.$container.data("coinBalance")?this.$container.data("coinBalance"):this.$container.data("maxAllowCoin"),this.init()}return(0,o.default)(e,[{key:"init",value:function(){this.initEvent()}},{key:"initEvent",value:function(){var e=this;this.$form.on("change",".js-coin-amount",function(t){return e.changeAmount(t)})}},{key:"changeAmount",value:function(e){var t=$(e.currentTarget),a=t.val();if(parseFloat(a)>parseFloat(this.maxCoinInput)&&(a=this.maxCoinInput),isNaN(parseFloat(a))||parseFloat(a)<=0)return a=0,t.val(""),this.removePasswordValidate(),this.$form.trigger("removePriceItem",["coin-price"]),void this.cashierForm.calcPayPrice(a);t.val(parseFloat(a).toFixed(2)),this.addPasswordValidate();var n=this.$form.data("coin-name"),r=0;if("coin"===this.priceType){r=parseFloat(a).toFixed(2)+" "+n;var i=parseFloat(this.$container.data("maxAllowCoin")),c=parseFloat(i-a).toFixed(2)+" "+n;this.$form.trigger("changeCoinPrice",[c])}else r="￥"+parseFloat(a/this.coinRate).toFixed(2);this.$form.trigger("addPriceItem",["coin-price",n+Translator.trans("order.create.minus"),r]),this.cashierForm.calcPayPrice(a)}},{key:"addPasswordValidate",value:function(){this.$container.find('[name="payPassword"]').rules("add","required es_remote")}},{key:"removePasswordValidate",value:function(){this.$container.find('[name="payPassword"]').rules("remove","required es_remote")}}]),e}();t.default=d},"11e5fc7e9f7d4f25c86a":function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("cd078759ac479d74803f"),i=n(r),c=a("7ab4a89ebadbfdecc2bf"),o=n(c),d=a("1ff717687cc04d94af8f"),f=n(d),s=a("3b1883fc74dc0f9509af"),u=n(s),l=a("e2fcc42cde2f41b58be2"),h=n(l),v=function(e){function t(){return(0,o.default)(this,t),(0,f.default)(this,(t.__proto__||(0,i.default)(t)).apply(this,arguments))}return(0,u.default)(t,e),t}(h.default);t.default=v},"1af657f7645917c6310d":function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("adc6e7d88332518aa1ec"),i=n(r),c=a("7ab4a89ebadbfdecc2bf"),o=n(c),d=a("4602c3f5fe7ad9e3e91d"),f=n(d),s=a("fef17b80bef935ad2682"),u=n(s),l=a("8d6b1145d2f0f7c079ac"),h=n(l),v=a("e2fcc42cde2f41b58be2"),p=n(v),m=a("11e5fc7e9f7d4f25c86a"),b=n(m),y=a("986a76353ac203061fe7"),g=n(y),w=a("a5753a9f265083dbf9c8"),_=n(w),k=a("02ad171abc9cada5bff7"),C=n(k);a("d5e8fa5f17ac5fe79c78");var P=function(){function e(){(0,o.default)(this,e)}return(0,f.default)(e,[{key:"pay",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},a=this.getGateway(e.payment,e.isMobile,e.isWechat);e.gateway=a;var n=this.initPaySdk(a);return n.options=(0,i.default)({showConfirmModal:1},t),n.pay(e),n}},{key:"checkOrderStatus",value:function(){var e=this.initPaySdk();null!=e&&e.checkOrderStatus()}},{key:"cancelCheckOrder",value:function(){var e=this.initPaySdk();null!=e&&e.cancelCheckOrder()}},{key:"initPaySdk",value:function(e){e=void 0===e?store.get("payment_gateway"):e;var t=null;switch(e){case"WechatPay_Native":t=this.wpn?this.wpn:this.wpn=new u.default;break;case"WechatPay_MWeb":t=this.wpm?this.wpm:this.wpm=new C.default;break;case"WechatPay_Js":t=this.wpj?this.wpj:this.wpj=new _.default;break;case"Alipay_LegacyExpress":t=this.ale?this.ale:this.ale=new h.default;break;case"Alipay_LegacyWap":t=this.alw?this.alw:this.alw=new p.default;break;case"Lianlian_Wap":t=this.llwp?this.llwp:this.llwp=new b.default;break;case"Lianlian_Web":t=this.llwb?this.llwb:this.llwb=new g.default}return t}},{key:"getGateway",value:function(e,t,a){var n="";switch(e){case"wechat":n=a?"WechatPay_Js":t?"WechatPay_MWeb":"WechatPay_Native";break;case"alipay":n=t?"Alipay_LegacyWap":"Alipay_LegacyExpress";break;case"lianlianpay":n=t?"Lianlian_Wap":"Lianlian_Web"}return store.set("payment_gateway",n),n}}]),e}();t.default=P},"4d4dc8c99e38b826f59e":function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("98e8346a38f021750136"),i=n(r),c=a("cc2d3198fedcb28c0d05"),o=n(c),d=a("7ab4a89ebadbfdecc2bf"),f=n(d),s=a("4602c3f5fe7ad9e3e91d"),u=n(s),l=a("5eb223de522186da1dd9"),h=n(l);a("d5e8fa5f17ac5fe79c78");var v=a("b334fd7e4c5a19234db2"),p=n(v),m=a("c55e05a178f0ee906431"),b=n(m);a("9415ea13985847610e60");var y=function(){function e(){(0,f.default)(this,e)}return(0,u.default)(e,[{key:"setOptions",value:function(e){this.options=e}},{key:"getOptions",value:function(){return this.options}},{key:"showConfirmModal",value:function(e){this.confirmModal||(this.confirmModal=new b.default),this.confirmModal.show(e)}},{key:"pay",value:function(e){var t=this.createTrade(e);null!=t&&(t.paidSuccessUrl?location.href=t.paidSuccessUrl:(store.set("trade_"+this.getURLParameter("sn"),t.tradeSn),this.afterTradeCreated(t)))}},{key:"afterTradeCreated",value:function(e){}},{key:"customParams",value:function(e){return e}},{key:"checkOrderStatus",value:function(){this.startInterval()&&(window.intervalCheckOrderId=setInterval(this.checkIsPaid.bind(this),2e3))}},{key:"cancelCheckOrder",value:function(){clearInterval(window.intervalCheckOrderId)}},{key:"startInterval",value:function(){return!1}},{key:"checkIsPaid",value:function(){var t=this,a=store.get("trade_"+this.getURLParameter("sn"));e.getTrade(a).then(function(e){e.isPaid&&(store.remove("payment_gateway"),store.remove("trade_"+t.getURLParameter("sn")),location.href=e.paidSuccessUrl)})}},{key:"getURLParameter",value:function(e){return decodeURIComponent((new RegExp("[?|&]"+e+"=([^&;]+?)(&|#|;|$)").exec(location.search)||[null,""])[1].replace(/\+/g,"%20"))||null}},{key:"filterParams",value:function(e){var t={gateway:e.gateway,type:e.type,orderSn:e.orderSn,coinAmount:e.coinAmount,amount:e.amount,openid:e.openid,payPassword:window.XXTEA.encryptToBase64(e.payPassword,"EduSoho")};return t=this.customParams(t),(0,o.default)(t).forEach(function(e){return!t[e]&&void 0!==t[e]&&delete t[e]}),t}},{key:"createTrade",value:function(e){var t=this.filterParams(e),a=null;return h.default.trade.create({data:t,async:!1,promise:!1}).done(function(e){a=e}).error(function(e){var t=JSON.parse(e.responseText);2==t.error.code?(0,p.default)("danger",t.error.message):(0,p.default)("danger",Translator.trans("cashier.pay.error_message"))}),a}}],[{key:"getTrade",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",a={};return void 0==e||""==e?new i.default(function(e,t){e({isPaid:!1})}):(e&&(a.tradeSn=e),t&&(a.orderSn=t),h.default.trade.get({params:a}))}}]),e}();t.default=y},"770ef50e2abf4f1587c8":function(e,t,a){"use strict";var n=a("d2551c5247eab259ba5a");new(function(e){return e&&e.__esModule?e:{default:e}}(n).default)({element:"#cashier-form"})},"8d6b1145d2f0f7c079ac":function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("cd078759ac479d74803f"),i=n(r),c=a("7ab4a89ebadbfdecc2bf"),o=n(c),d=a("4602c3f5fe7ad9e3e91d"),f=n(d),s=a("1ff717687cc04d94af8f"),u=n(s),l=a("3b1883fc74dc0f9509af"),h=n(l),v=a("4d4dc8c99e38b826f59e"),p=n(v),m=function(e){function t(){return(0,o.default)(this,t),(0,u.default)(this,(t.__proto__||(0,i.default)(t)).apply(this,arguments))}return(0,h.default)(t,e),(0,f.default)(t,[{key:"afterTradeCreated",value:function(e){this.checkOrderStatus(),this.getOptions().showConfirmModal?(window.open(e.payUrl,"_blank"),this.showConfirmModal(e.tradeSn)):location.href=e.payUrl}}]),t}(p.default);t.default=m},"9415ea13985847610e60":function(e,t,a){"use strict";!function(e){function t(e,t){var a=e.length,n=a<<2;if(t){var r=e[a-1];if(n-=4,r<n-3||r>n)return null;n=r}for(var i=0;i<a;i++)e[i]=String.fromCharCode(255&e[i],e[i]>>>8&255,e[i]>>>16&255,e[i]>>>24&255);var c=e.join("");return t?c.substring(0,n):c}function a(e,t){var a=e.length,n=a>>2;0!=(3&a)&&++n;var r;t?(r=new Array(n+1),r[n]=a):r=new Array(n);for(var i=0;i<a;++i)r[i>>2]|=e.charCodeAt(i)<<((3&i)<<3);return r}function n(e){return 4294967295&e}function r(e,t,a,n,r,i){return(a>>>5^t<<2)+(t>>>3^a<<4)^(e^t)+(i[3&n^r]^a)}function i(e){return e.length<4&&(e.length=4),e}function c(e,t){var a,i,c,o,d,f,s=e.length,u=s-1;for(i=e[u],c=0,f=0|Math.floor(6+52/s);f>0;--f){for(c=n(c+m),o=c>>>2&3,d=0;d<u;++d)a=e[d+1],i=e[d]=n(e[d]+r(c,a,i,d,o,t));a=e[0],i=e[u]=n(e[u]+r(c,a,i,u,o,t))}return e}function o(e,t){var a,i,c,o,d,f,s=e.length,u=s-1;for(a=e[0],f=Math.floor(6+52/s),c=n(f*m);0!==c;c=n(c-m)){for(o=c>>>2&3,d=u;d>0;--d)i=e[d-1],a=e[d]=n(e[d]-r(c,a,i,d,o,t));i=e[u],a=e[0]=n(e[0]-r(c,a,i,0,o,t))}return e}function d(e){if(/^[\x00-\x7f]*$/.test(e))return e;for(var t=[],a=e.length,n=0,r=0;n<a;++n,++r){var i=e.charCodeAt(n);if(i<128)t[r]=e.charAt(n);else if(i<2048)t[r]=String.fromCharCode(192|i>>6,128|63&i);else{if(!(i<55296||i>57343)){if(n+1<a){var c=e.charCodeAt(n+1);if(i<56320&&56320<=c&&c<=57343){var o=65536+((1023&i)<<10|1023&c);t[r]=String.fromCharCode(240|o>>18&63,128|o>>12&63,128|o>>6&63,128|63&o),++n;continue}}throw new Error("Malformed string")}t[r]=String.fromCharCode(224|i>>12,128|i>>6&63,128|63&i)}}return t.join("")}function f(e,t){for(var a=new Array(t),n=0,r=0,i=e.length;n<t&&r<i;n++){var c=e.charCodeAt(r++);switch(c>>4){case 0:case 1:case 2:case 3:case 4:case 5:case 6:case 7:a[n]=c;break;case 12:case 13:if(!(r<i))throw new Error("Unfinished UTF-8 octet sequence");a[n]=(31&c)<<6|63&e.charCodeAt(r++);break;case 14:if(!(r+1<i))throw new Error("Unfinished UTF-8 octet sequence");a[n]=(15&c)<<12|(63&e.charCodeAt(r++))<<6|63&e.charCodeAt(r++);break;case 15:if(!(r+2<i))throw new Error("Unfinished UTF-8 octet sequence");var o=((7&c)<<18|(63&e.charCodeAt(r++))<<12|(63&e.charCodeAt(r++))<<6|63&e.charCodeAt(r++))-65536;if(!(0<=o&&o<=1048575))throw new Error("Character outside valid Unicode range: 0x"+o.toString(16));a[n++]=o>>10&1023|55296,a[n]=1023&o|56320;break;default:throw new Error("Bad UTF-8 encoding 0x"+c.toString(16))}}return n<t&&(a.length=n),String.fromCharCode.apply(String,a)}function s(e,t){for(var a=[],n=new Array(32768),r=0,i=0,c=e.length;r<t&&i<c;r++){var o=e.charCodeAt(i++);switch(o>>4){case 0:case 1:case 2:case 3:case 4:case 5:case 6:case 7:n[r]=o;break;case 12:case 13:if(!(i<c))throw new Error("Unfinished UTF-8 octet sequence");n[r]=(31&o)<<6|63&e.charCodeAt(i++);break;case 14:if(!(i+1<c))throw new Error("Unfinished UTF-8 octet sequence");n[r]=(15&o)<<12|(63&e.charCodeAt(i++))<<6|63&e.charCodeAt(i++);break;case 15:if(!(i+2<c))throw new Error("Unfinished UTF-8 octet sequence");var d=((7&o)<<18|(63&e.charCodeAt(i++))<<12|(63&e.charCodeAt(i++))<<6|63&e.charCodeAt(i++))-65536;if(!(0<=d&&d<=1048575))throw new Error("Character outside valid Unicode range: 0x"+d.toString(16));n[r++]=d>>10&1023|55296,n[r]=1023&d|56320;break;default:throw new Error("Bad UTF-8 encoding 0x"+o.toString(16))}if(r>=32766){var f=r+1;n.length=f,a[a.length]=String.fromCharCode.apply(String,n),t-=f,r=-1}}return r>0&&(n.length=r,a[a.length]=String.fromCharCode.apply(String,n)),a.join("")}function u(e,t){return(void 0===t||null===t||t<0)&&(t=e.length),0===t?"":/^[\x00-\x7f]*$/.test(e)||!/^[\x00-\xff]*$/.test(e)?t===e.length?e:e.substr(0,t):t<65535?f(e,t):s(e,t)}function l(e,n){return void 0===e||null===e||0===e.length?e:(e=d(e),n=d(n),t(c(a(e,!0),i(a(n,!1))),!1))}function h(t,a){return e.btoa(l(t,a))}function v(e,n){return void 0===e||null===e||0===e.length?e:(n=d(n),u(t(o(a(e,!1),i(a(n,!1))),!0)))}function p(t,a){return void 0===t||null===t||0===t.length?t:v(e.atob(t),a)}void 0===e.btoa&&(e.btoa=function(){var e="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".split("");return function(t){var a,n,r,i,c,o,d;for(n=r=0,i=t.length,c=i%3,i-=c,o=i/3<<2,c>0&&(o+=4),a=new Array(o);n<i;)d=t.charCodeAt(n++)<<16|t.charCodeAt(n++)<<8|t.charCodeAt(n++),a[r++]=e[d>>18]+e[d>>12&63]+e[d>>6&63]+e[63&d];return 1==c?(d=t.charCodeAt(n++),a[r++]=e[d>>2]+e[(3&d)<<4]+"=="):2==c&&(d=t.charCodeAt(n++)<<8|t.charCodeAt(n++),a[r++]=e[d>>10]+e[d>>4&63]+e[(15&d)<<2]+"="),a.join("")}}()),void 0===e.atob&&(e.atob=function(){var e=[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,-1,-1,-1,-1,-1];return function(t){var a,n,r,i,c,o,d,f,s,u;if((d=t.length)%4!=0)return"";if(/[^ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\+\/\=]/.test(t))return"";for(f="="==t.charAt(d-2)?1:"="==t.charAt(d-1)?2:0,s=d,f>0&&(s-=4),s=3*(s>>2)+f,u=new Array(s),c=o=0;c<d&&-1!=(a=e[t.charCodeAt(c++)])&&-1!=(n=e[t.charCodeAt(c++)])&&(u[o++]=String.fromCharCode(a<<2|(48&n)>>4),-1!=(r=e[t.charCodeAt(c++)]))&&(u[o++]=String.fromCharCode((15&n)<<4|(60&r)>>2),-1!=(i=e[t.charCodeAt(c++)]));)u[o++]=String.fromCharCode((3&r)<<6|i);return u.join("")}}());var m=2654435769;e.XXTEA={utf8Encode:d,utf8Decode:u,encrypt:l,encryptToBase64:h,decrypt:v,decryptFromBase64:p}}(window)},"986a76353ac203061fe7":function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("cd078759ac479d74803f"),i=n(r),c=a("7ab4a89ebadbfdecc2bf"),o=n(c),d=a("1ff717687cc04d94af8f"),f=n(d),s=a("3b1883fc74dc0f9509af"),u=n(s),l=a("8d6b1145d2f0f7c079ac"),h=n(l),v=function(e){function t(){return(0,o.default)(this,t),(0,f.default)(this,(t.__proto__||(0,i.default)(t)).apply(this,arguments))}return(0,u.default)(t,e),t}(h.default);t.default=v},a5753a9f265083dbf9c8:function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("cd078759ac479d74803f"),i=n(r),c=a("7ab4a89ebadbfdecc2bf"),o=n(c),d=a("4602c3f5fe7ad9e3e91d"),f=n(d),s=a("1ff717687cc04d94af8f"),u=n(s),l=a("3b1883fc74dc0f9509af"),h=n(l),v=a("4d4dc8c99e38b826f59e"),p=n(v),m=function(e){function t(){return(0,o.default)(this,t),(0,u.default)(this,(t.__proto__||(0,i.default)(t)).apply(this,arguments))}return(0,h.default)(t,e),(0,f.default)(t,[{key:"pay",value:function(e){location.href="/pay/center/wxpay?"+$.param(e)}}]),t}(p.default);t.default=m},c55e05a178f0ee906431:function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("7ab4a89ebadbfdecc2bf"),i=n(r),c=a("4602c3f5fe7ad9e3e91d"),o=n(c),d=a("b334fd7e4c5a19234db2"),f=n(d),s=a("4d4dc8c99e38b826f59e"),u=n(s),l=function(){function e(){(0,i.default)(this,e),this.$container=$("body"),this.modalID="cashier-confirm-modal",this.tradeSn="";var t='\n      <div id="'+this.modalID+'" class="modal">\n        <div class="modal-dialog cd-modal-dialog">\n          <div class="modal-content">\n            <div class="modal-header">\n              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">\n                <i class="cd-icon cd-icon-close"></i>\n              </button>\n              <h4 class="modal-title">'+Translator.trans("cashier.confirm.title")+'</h4>\n            </div>\n            <div class="modal-body">\n              <p>\n              '+Translator.trans("cashier.confirm.desc")+'\n              </p>\n            </div>\n            <div class="modal-footer">\n              <a class="btn cd-btn cd-btn-flat-default cd-btn-lg" data-dismiss="modal">'+Translator.trans("cashier.confirm.pick_again")+'</a>\n              <a class="btn cd-btn cd-btn-primary cd-btn-lg js-confirm-btn">'+Translator.trans("cashier.confirm.success")+"</a>\n            </div>\n          </div>\n        <div>  \n      </div>\n    ";0===this.$container.find("#"+this.modalID).length&&this.$container.append(t),$("body").on("click",".js-confirm-btn",this.checkIsPaid.bind(this))}return(0,o.default)(e,[{key:"checkIsPaid",value:function(){var e=this;u.default.getTrade(this.tradeSn).then(function(t){t.isPaid?location.href=t.paidSuccessUrl:((0,f.default)("danger",Translator.trans("cashier.confirm.fail_message")),$("#"+e.modalID).modal("hide"))})}},{key:"show",value:function(e){$("#"+this.modalID).modal("show"),this.tradeSn=e}}]),e}();t.default=l},d2551c5247eab259ba5a:function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("7ab4a89ebadbfdecc2bf"),i=n(r),c=a("4602c3f5fe7ad9e3e91d"),o=n(c),d=a("0462758757283f323cc5"),f=n(d),s=a("1af657f7645917c6310d"),u=n(s),l=function(){function e(t){(0,i.default)(this,e),this.$form=$(t.element),this.$priceList=this.$form.find("#order-center-price-list"),this.validator=this.$form.validate(),this.initEvent(),this.initCoin(),this.paySdk=new u.default,this.paySdk.checkOrderStatus()}return(0,o.default)(e,[{key:"initCoin",value:function(){var e=$("#coin-use-section");e.length>0&&(this.coin=new f.default({$coinContainer:e,cashierForm:this,$form:this.$form}))}},{key:"initEvent",value:function(){var e=this,t=this.$form;t.on("click",".js-pay-type",function(t){return e.switchPayType(t)}),t.on("click",".js-pay-btn",function(t){return e.payOrder(t)}),t.on("addPriceItem",function(t,a,n,r){return e.addPriceItem(t,a,n,r)}),t.on("removePriceItem",function(t,a){return e.removePriceItem(t,a)}),t.on("changeCoinPrice",function(t,a){return e.changeCoinPrice(t,a)})}},{key:"payOrder",value:function(e){var t=this.$form;if(t.valid()){var a=$(e.currentTarget);a.button("loading");var n=this.formDataToObject(t);n.payAmount=t.find(".js-pay-price").text(),this.paySdk.cancelCheckOrder(),this.paySdk.pay(n),a.button("reset")}}},{key:"switchPayType",value:function(e){var t=$(e.currentTarget);t.hasClass("active")||(t.addClass("active").siblings().removeClass("active"),$("input[name='payment']").val(t.attr("id")))}},{key:"calcPayPrice",value:function(e){var t=this;$.post(this.$form.data("priceUrl"),{coinAmount:e}).done(function(e){t.$form.find(".js-pay-price").text(e.data)})}},{key:"formDataToObject",value:function(e){var t={},a=e.serializeArray();for(var n in a)t[a[n].name]=a[n].value;return t}},{key:"hasPriceItem",value:function(e,t){return!!$("#"+t).length}},{key:"addPriceItem",value:function(e,t,a,n){var r=$("#"+t);this.hasPriceItem(e,t)&&r.remove();var i='\n      <div class="order-center-price" id="'+t+'">\n        <div class="order-center-price__title">'+a+'</div>\n        <div class="order-center-price__content">-'+n+"</div>\n      </div>\n    ";this.$priceList.append(i)}},{key:"removePriceItem",value:function(e,t){var a=$("#"+t);this.hasPriceItem(e,t)&&a.remove()}},{key:"changeCoinPrice",value:function(e,t){this.$form.find(".js-pay-coin").text(t)}}]),e}();t.default=l},e2fcc42cde2f41b58be2:function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("cd078759ac479d74803f"),i=n(r),c=a("7ab4a89ebadbfdecc2bf"),o=n(c),d=a("4602c3f5fe7ad9e3e91d"),f=n(d),s=a("1ff717687cc04d94af8f"),u=n(s),l=a("3b1883fc74dc0f9509af"),h=n(l),v=a("4d4dc8c99e38b826f59e"),p=n(v),m=function(e){function t(){return(0,o.default)(this,t),(0,u.default)(this,(t.__proto__||(0,i.default)(t)).apply(this,arguments))}return(0,h.default)(t,e),(0,f.default)(t,[{key:"afterTradeCreated",value:function(e){location.href=e.payUrl}},{key:"customParams",value:function(e){return this.isQQBuildInBrowser()||(e.app_pay="Y",e.wap_pay=!0),e}},{key:"isQQBuildInBrowser",value:function(){return!!navigator.userAgent.match(/QQ\//i)}}]),t}(p.default);t.default=m},fef17b80bef935ad2682:function(e,t,a){"use strict";function n(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=a("cd078759ac479d74803f"),i=n(r),c=a("7ab4a89ebadbfdecc2bf"),o=n(c),d=a("4602c3f5fe7ad9e3e91d"),f=n(d),s=a("1ff717687cc04d94af8f"),u=n(s),l=a("3b1883fc74dc0f9509af"),h=n(l),v=a("4d4dc8c99e38b826f59e"),p=n(v),m=function(e){function t(){(0,o.default)(this,t);var e=(0,u.default)(this,(t.__proto__||(0,i.default)(t)).call(this));e.$container=$("body"),e.modalID="wechat-qrcode-modal";var a='\n      <div id="'+e.modalID+'" class="modal">\n        <div class="modal-dialog cd-modal-dialog cd-modal-dialog-sm">\n          <div class="modal-content">\n          \n            <div class="modal-header">\n              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">\n                <i class="cd-icon cd-icon-close"></i>\n              </button>\n              <h4 class="modal-title">'+Translator.trans("cashier.wechat_pay")+'</h4>\n            </div>\n            \n            <div class="modal-body text-center">\n              <div style="height: 270px; width: 270px; margin: 0 auto;">\n                <img class="cd-mb16 js-qrcode-img" src="">\n              </div>\n              <div class="cd-mb16">\n                '+Translator.trans("cashier.wechat_pay.scan_qcode_pay_tips")+'\n              </div>\n              <div class="cd-text-danger cd-mb32 js-pay-amount" style="font-size:16px;"></div>\n            </div>\n            \n          </div>\n        </div>\n      </div>\n    ';return 0===e.$container.find("#"+e.modalID).length&&e.$container.append(a),e.$container.find("#"+e.modalID).on("hidden.bs.modal",function(){clearInterval(window.intervalWechatId)}),e}return(0,h.default)(t,e),(0,f.default)(t,[{key:"afterTradeCreated",value:function(e){this.checkOrderStatus();var t=this.$container.find("#"+this.modalID);t.find(".js-qrcode-img").attr("src",e.qrcodeUrl),t.find(".js-pay-amount").text("￥"+e.cash_amount),t.modal("show")}},{key:"startInterval",value:function(){return!0}}]),t}(p.default);t.default=m}},["770ef50e2abf4f1587c8"]);