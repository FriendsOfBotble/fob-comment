(()=>{var e,o={890:()=>{$((function(){var e=!1,o="",t=function(e,o,t){var n=new Date;n.setDate(n.getDate()+t),o=encodeURIComponent(o)+(null==t?"":"; expires="+n.toUTCString()),document.cookie="fob-comment-".concat(e,"=").concat(o,"; path=/")},n=function(e){var o=document.cookie.match(new RegExp("(^| )fob-comment-".concat(e,"=([^;]*)(;|$)")));return null!=o?decodeURIComponent(o[2]):null},c=function(e){document.cookie="fob-comment-".concat(e,"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/")};$(document).find(".fob-comment-form input").each((function(e,o){var t=$(o).prop("name");n(t)&&("cookie_consent"===t?$(o).prop("checked",!0):$(o).val($(o).val()||n(t)))}));var r=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:fobComment.listUrl;$.ajax({url:e,type:"GET",dataType:"json",success:function(e){var o,t=e.error,n=e.data,c=e.message;if(void 0!==(null===(o=window)||void 0===o?void 0:o.Theme)&&t)Theme.showError(c);else{var r=n.title,i=n.html,a=n.comments,m=$(document).find(".fob-comment-list-section");a.total<1?m.hide():(m.show(),$(document).find(".fob-comment-list-title").text(r),$(document).find(".fob-comment-list-wrapper").html(i))}}})};$(document).on("submit",".fob-comment-form",(function(n){if(n.stopPropagation(),n.preventDefault(),void 0===$.fn.validate||$(".fob-comment-form").valid()){var i=$(n.currentTarget),a=new FormData(i[0]),m=i.find('input[type="checkbox"][name="cookie_consent"]'),f=m.length>0&&m.is(":checked");$.ajax({url:i.prop("action"),type:"POST",data:a,processData:!1,contentType:!1,dataType:"json",success:function(n){var m,l=n.error,s=n.message;if(void 0!==(null===(m=window)||void 0===m?void 0:m.Theme)){if(l)return void Theme.showError(s);Theme.showSuccess(s)}f?(t("name",a.get("name"),365),t("email",a.get("email"),365),t("website",a.get("website"),365),t("cookie_consent",1,365),i.find('textarea[name="content"]').val("")):(i[0].reset(),c("name"),c("email"),c("website"),c("cookie_consent")),r(),e&&(e=!1,$(document).find(".fob-comment-form-section").remove(o),$(document).find(".fob-comment-list-section").after(o))},error:function(e){var o;void 0!==(null===(o=window)||void 0===o?void 0:o.Theme)&&Theme.handleError(e)}})}})).on("click",".fob-comment-pagination a",(function(e){e.preventDefault();var o=e.currentTarget.href;o&&(r(o),$("html, body").animate({scrollTop:$(".fob-comment-list-section").offset().top}))})).on("click",".fob-comment-item-reply",(function(t){t.preventDefault();var n=$(t.currentTarget),c=$(document).find(".fob-comment-form-section");c&&c.remove(),e||(o=c.clone()),n.closest(".fob-comment-item").after(c),c.find(".fob-comment-form-title").text(n.data("reply-to")),c.find(".fob-comment-form-title").append('<a href="#" class="cancel-comment-reply-link" rel="nofollow">'.concat(n.data("cancel-reply"),"</a")),c.find("form").prop("action",n.prop("href")),e=!0})).on("click",".cancel-comment-reply-link",(function(t){t.preventDefault(),e=!1;var n=$(document).find(".fob-comment-form-section");n&&n.remove(),$(document).find(".fob-comment-list-section").after(o)})),r()}))},685:()=>{}},t={};function n(e){var c=t[e];if(void 0!==c)return c.exports;var r=t[e]={exports:{}};return o[e](r,r.exports,n),r.exports}n.m=o,e=[],n.O=(o,t,c,r)=>{if(!t){var i=1/0;for(l=0;l<e.length;l++){for(var[t,c,r]=e[l],a=!0,m=0;m<t.length;m++)(!1&r||i>=r)&&Object.keys(n.O).every((e=>n.O[e](t[m])))?t.splice(m--,1):(a=!1,r<i&&(i=r));if(a){e.splice(l--,1);var f=c();void 0!==f&&(o=f)}}return o}r=r||0;for(var l=e.length;l>0&&e[l-1][2]>r;l--)e[l]=e[l-1];e[l]=[t,c,r]},n.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={745:0,838:0};n.O.j=o=>0===e[o];var o=(o,t)=>{var c,r,[i,a,m]=t,f=0;if(i.some((o=>0!==e[o]))){for(c in a)n.o(a,c)&&(n.m[c]=a[c]);if(m)var l=m(n)}for(o&&o(t);f<i.length;f++)r=i[f],n.o(e,r)&&e[r]&&e[r][0](),e[r]=0;return n.O(l)},t=self.webpackChunk=self.webpackChunk||[];t.forEach(o.bind(null,0)),t.push=o.bind(null,t.push.bind(t))})(),n.O(void 0,[838],(()=>n(890)));var c=n.O(void 0,[838],(()=>n(685)));c=n.O(c)})();