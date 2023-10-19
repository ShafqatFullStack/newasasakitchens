// source --> https://impressionskitchens.com/wp-content/plugins/cleantalk-spam-protect/js/apbct-public--functions.min.js?ver=5.160.1 
function ctSetCookie(o,t,n){var e;("string"==typeof o&&"string"==typeof t||"number"==typeof t)&&(e="ct_pointer_data"===o||"ct_user_info"===o,o=[[o,t,n]]),0!=+ctPublicFunctions.data__set_cookies&&(1==+ctPublicFunctions.data__set_cookies?o.forEach(function(o,t,n){var e=void 0!==o[2]?"expires="+e+"; ":"",c="https:"===location.protocol?"; secure":"";document.cookie=o[0]+"="+encodeURIComponent(o[1])+"; "+e+"path=/; samesite=lax"+c}):2!=+ctPublicFunctions.data__set_cookies||e||(1==+ctPublicFunctions.data__set_cookies__alt_sessions_type?apbct_public_sendREST("alt_sessions",{method:"POST",data:{cookies:o}}):2==+ctPublicFunctions.data__set_cookies__alt_sessions_type&&apbct_public_sendAJAX({action:"apbct_alt_session__save__AJAX",cookies:o},{apbct_ajax:1,notJson:1})))}function apbct_public_sendAJAX(t,n,e){var c=n.callback||null,s=n.callback_context||null,a=n.callback_params||null,o=n.async||!0,l=n.notJson||null,r=n.timeout||15e3,e=e||null,i=n.button||null,u=n.spinner||null,_=n.progressbar||null,p=n.silent||null,b=n.no_nonce||null,d=n.apbct_ajax||null;"string"==typeof t?(b||(t=t+"&_ajax_nonce="+ctPublicFunctions._ajax_nonce),t=t+"&no_cache="+Math.random()):(b||(t._ajax_nonce=ctPublicFunctions._ajax_nonce),t.no_cache=Math.random()),i&&(i.setAttribute("disabled","disabled"),i.style.cursor="not-allowed"),u&&jQuery(u).css("display","inline"),jQuery.ajax({type:"POST",url:d?ctPublicFunctions._apbct_ajax_url:ctPublicFunctions._ajax_url,data:t,async:o,success:function(o){i&&(i.removeAttribute("disabled"),i.style.cursor="pointer"),u&&jQuery(u).css("display","none"),l||(o=JSON.parse(o)),o.error?(setTimeout(function(){_&&_.fadeOut("slow")},1e3),console.log("Error happens: "+(o.error||"Unkown"))):c&&(a?c.apply(s,a.concat(o,t,n,e)):c(o,t,n,e))},error:function(o,t,n){i&&(i.removeAttribute("disabled"),i.style.cursor="pointer"),u&&jQuery(u).css("display","none"),n&&!p&&(console.log("APBCT_AJAX_ERROR"),console.log(o),console.log(t),console.log("Anti-spam by Cleantalk plugin error: "+n+"Please, contact Cleantalk tech support https://wordpress.org/support/plugin/cleantalk-spam-protect/"))},timeout:r})}function apbct_public_sendREST(t,n){var e=n.callback||null,o=n.data||[],c=n.method||"POST";jQuery.ajax({type:c,url:ctPublicFunctions._rest_url+"cleantalk-antispam/v1/"+t,data:o,beforeSend:function(o){o.setRequestHeader("X-WP-Nonce",ctPublicFunctions._rest_nonce)},success:function(o){o.error?console.log("Error happens: "+(o.error||"Unknown")):e&&e(o,t,n,null)},error:function(o,t,n){n&&(console.log("APBCT_REST_ERROR"),console.log(o),console.log(t),console.log("Anti-spam by Cleantalk plugin REST API error: "+n+" Please, contact Cleantalk tech support https://wordpress.org/support/plugin/cleantalk-spam-protect/"))}})}
//# sourceMappingURL=apbct-public--functions.min.js.map;