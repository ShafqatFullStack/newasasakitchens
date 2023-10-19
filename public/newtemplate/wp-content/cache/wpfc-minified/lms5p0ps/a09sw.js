// source --> https://impressionskitchens.com/wp-content/plugins/cleantalk-spam-protect/js/apbct-public.min.js?ver=5.160.1 
function apbct_collect_visible_fields(e){var t=[],n="",o=0,c="",l=0,i=[];for(var a in e.elements)isNaN(+a)||(t[a]=e.elements[a]);return(t=t.filter(function(e){return-1===i.indexOf(e.getAttribute("name"))&&(-1===["radio","checkbox"].indexOf(e.getAttribute("type"))||(i.push(e.getAttribute("name")),!1))})).forEach(function(e,t,i){"submit"!==e.getAttribute("type")&&null!==e.getAttribute("name")&&"ct_checkjs"!==e.getAttribute("name")&&("none"!==getComputedStyle(e).display&&"hidden"!==getComputedStyle(e).visibility&&"0"!==getComputedStyle(e).opacity&&"hidden"!==e.getAttribute("type")||e.classList.contains("wp-editor-area")?(n+=" "+e.getAttribute("name"),o++):(c+=" "+e.getAttribute("name"),l++))}),c=c.trim(),{visible_fields:n=n.trim(),visible_fields_count:o,invisible_fields:c,invisible_fields_count:l}}function apbct_visible_fields_set_cookie(e){var t="object"==typeof e&&null!==e?e:{};ctSetCookie("apbct_visible_fields",JSON.stringify(t))}function apbct_js_keys__set_input_value(e,t,i,n){if(0<document.querySelectorAll("[name^=ct_checkjs]").length)for(var o=document.querySelectorAll("[name^=ct_checkjs]"),c=0;c<o.length;c++)o[c].value=e.js_key}function apbctGetScreenInfo(){return JSON.stringify({fullWidth:document.documentElement.scrollWidth,fullHeight:Math.max(document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight,document.body.clientHeight,document.documentElement.clientHeight),visibleWidth:document.documentElement.clientWidth,visibleHeight:document.documentElement.clientHeight})}!function(){var e=new Date,t=(new Date).getTime(),i=!0,n=[],o=0,c={},l=!1;function a(e,t,i){"function"==typeof window.addEventListener?e.addEventListener(t,i):e.attachEvent(t,i)}function s(e,t,i){"function"==typeof window.removeEventListener?e.removeEventListener(t,i):e.detachEvent(t,i)}ctSetCookie([["ct_ps_timestamp",Math.floor((new Date).getTime()/1e3)],["ct_fkp_timestamp","0"],["ct_pointer_data","0"],["ct_timezone",e.getTimezoneOffset()/60*-1],["apbct_visible_fields","0"]]);var r=function(){var e=Math.floor((new Date).getTime()/1e3);ctSetCookie("ct_fkp_timestamp",e),s(window,"mousedown",r),s(window,"keydown",r)},u=setInterval(function(){i=!0},150),d=setInterval(function(){ctSetCookie("ct_pointer_data",JSON.stringify(n))},1200),m=function(e){!0===i&&(n.push([Math.round(e.clientY),Math.round(e.clientX),Math.round((new Date).getTime()-t)]),i=!1,50<=++o&&(s(window,"mousemove",m),clearInterval(u),clearInterval(d)))};function _(e){var t=e.target.value;!t||t in c||apbct_public_sendAJAX({action:"apbct_email_check_before_post",data:{email:t}},{apbct_ajax:1,callback:function(e){e.result&&(c[t]={result:e.result,timestamp:Date.now()/1e3|0},ctSetCookie("ct_checked_emails",JSON.stringify(c)))}})}a(window,"mousemove",m),a(window,"mousedown",r),a(window,"keydown",r),a(window,"scroll",function(){l||(ctSetCookie("ct_has_scrolled",JSON.stringify(!0)),l=!0)}),a(window,"DOMContentLoaded",function(){+ctPublic.pixel__setting&&(ctSetCookie("apbct_pixel_url",ctPublic.pixel__url),+ctPublic.pixel__enabled&&jQuery("body").append('<img style="display: none; left: 99999px;" src="'+ctPublic.pixel__url+'">')),+ctPublic.data__email_check_before_post&&(ctSetCookie("ct_checked_emails","0"),jQuery("input[type = 'email'], #email").blur(_)),ctSetCookie("ct_screen_info",apbctGetScreenInfo()),ctSetCookie("ct_has_scrolled",JSON.stringify(!1)),setTimeout(function(){for(var e={},t=0;t<document.forms.length;t++){var i=document.forms[t];i.classList.contains("slp_search_form")||i.parentElement.classList.contains("mec-booking")||-1!==i.action.toString().indexOf("activehosted.com")||i.id&&"caspioform"==i.id||i.name.classList&&i.name.classList.contains("tinkoffPayRow")||i.name.classList&&i.name.classList.contains("give-form")||(e[t]=apbct_collect_visible_fields(i),i.onsubmit_prev=i.onsubmit,i.onsubmit=function(e){var t={};t[0]=apbct_collect_visible_fields(this),apbct_visible_fields_set_cookie(t),e.target.onsubmit_prev instanceof Function&&setTimeout(function(){e.target.onsubmit_prev.call(e.target,e)},500)})}apbct_visible_fields_set_cookie(e)},1e3)})}(),"undefined"!=typeof jQuery&&jQuery(document).ajaxComplete(function(e,t,i){var n;!t.responseText||-1===t.responseText.indexOf('"apbct')||void 0!==(n=JSON.parse(t.responseText)).apbct&&(n=n.apbct).blocked&&(document.dispatchEvent(new CustomEvent("apbctAjaxBockAlert",{bubbles:!0,detail:{message:n.comment}})),cleantalkModal.loaded=n.comment,cleantalkModal.open(),1==+n.stop_script&&window.stop())});
//# sourceMappingURL=apbct-public.min.js.map;
// source --> https://impressionskitchens.com/wp-content/plugins/cleantalk-spam-protect/js/cleantalk-modal.min.js?ver=5.160.1 
cleantalkModal={loaded:!1,loading:!1,opened:!1,opening:!1,load:function(e){this.loaded||(this.loading=!0,callback=function(e,t,a,n){cleantalkModal.loading=!1,cleantalkModal.loaded=e,document.dispatchEvent(new CustomEvent("cleantalkModalContentLoaded",{bubbles:!0}))},("function"==typeof apbct_admin_sendAJAX?apbct_admin_sendAJAX:apbct_public_sendAJAX)({action:e},{callback:callback,notJson:!0}))},open:function(){function e(){var e="";for(key in this.styles)e+=key+":"+this.styles[key]+";";return e}var t={styles:{"z-index":"9999",position:"fixed",top:"0",left:"0",width:"100%",height:"100%",background:"rgba(0,0,0,0.5)",display:"flex","justify-content":"center","align-items":"center"},toString:e},a={styles:{position:"relative",padding:"30px",background:"#FFF",border:"1px solid rgba(0,0,0,0.75)","border-radius":"4px","box-shadow":"7px 7px 5px 0px rgba(50,50,50,0.75)"},toString:e},n={styles:{position:"absolute",background:"#FFF",width:"20px",height:"20px",border:"2px solid rgba(0,0,0,0.75)","border-radius":"15px",cursor:"pointer",top:"-8px",right:"-8px","box-sizing":"content-box"},toString:e},o={styles:{content:'""',display:"block",position:"absolute",background:"#000","border-radius":"1px",width:"2px",height:"16px",top:"2px",left:"9px",transform:"rotate(45deg)"},toString:e},l={styles:{content:'""',display:"block",position:"absolute",background:"#000","border-radius":"1px",width:"2px",height:"16px",top:"2px",left:"9px",transform:"rotate(-45deg)"},toString:e},d={styles:{overflow:"hidden"},toString:e},i=document.createElement("style");i.setAttribute("id","cleantalk-modal-styles"),i.innerHTML="body.cleantalk-modal-opened{"+d+"}",i.innerHTML+="#cleantalk-modal-overlay{"+t+"}",i.innerHTML+="#cleantalk-modal-close{"+n+"}",i.innerHTML+="#cleantalk-modal-close:before{"+o+"}",i.innerHTML+="#cleantalk-modal-close:after{"+l+"}",document.body.append(i);var c=document.createElement("div");c.setAttribute("id","cleantalk-modal-overlay"),document.body.append(c),document.body.classList.add("cleantalk-modal-opened");var r=document.createElement("div");r.setAttribute("id","cleantalk-modal-inner"),r.setAttribute("style",a),c.append(r);var s=document.createElement("div");s.setAttribute("id","cleantalk-modal-close"),r.append(s);var p=document.createElement("div");this.loaded?p.innerHTML=this.loaded:(p.innerHTML="Loading...",this.load("get_options_template")),p.setAttribute("id","cleantalk-modal-content"),r.append(p),this.opened=!0},close:function(){document.body.classList.remove("cleantalk-modal-opened"),document.getElementById("cleantalk-modal-overlay").remove(),document.getElementById("cleantalk-modal-styles").remove(),document.dispatchEvent(new CustomEvent("cleantalkModalClosed",{bubbles:!0}))}},document.addEventListener("click",function(e){(e.target&&"cleantalk-modal-overlay"===e.target.id||"cleantalk-modal-close"===e.target.id)&&cleantalkModal.close()}),document.addEventListener("cleantalkModalContentLoaded",function(e){cleantalkModal.opened&&cleantalkModal.loaded&&(document.getElementById("cleantalk-modal-content").innerHTML=cleantalkModal.loaded)});
//# sourceMappingURL=cleantalk-modal.min.js.map;