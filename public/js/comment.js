(()=>{var e,t={750:()=>{document.addEventListener("DOMContentLoaded",(function(){var e=!1,t="",o=function(e,t,o){var n=new Date;n.setDate(n.getDate()+o),t=encodeURIComponent(t)+(null==o?"":"; expires="+n.toUTCString()),document.cookie="fob-comment-".concat(e,"=").concat(t,"; path=/")},n=function(e){var t=document.cookie.match(new RegExp("(^| )fob-comment-".concat(e,"=([^;]*)(;|$)")));return null!=t?decodeURIComponent(t[2]):null};["name","email","website","cookie_consent"].forEach((function(e){n(e)&&(document.querySelector('input[name="'.concat(e,'"]')).value=n(e))}));var r=function(e){document.cookie="fob-comment-".concat(e,"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/")},c=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:fobComment.listUrl;fetch(e,{headers:{"X-Requested-With":"XMLHttpRequest"}}).then((function(e){return e.json()})).then((function(e){var t;if(void 0!==(null===(t=window)||void 0===t?void 0:t.Theme)&&e.error)Theme.showError(e.message);else{var o=e.data,n=o.title,r=o.html,c=o.comments,i=document.querySelector(".fob-comment-list-section");c.total<1?i.style.display="none":(i.style.display="block",document.querySelector(".fob-comment-list-title").textContent=n,document.querySelector(".fob-comment-list-wrapper").innerHTML=r)}}))},i=function(n){if(n.stopPropagation(),n.preventDefault(),"undefined"==typeof $||void 0===$.fn.validate||$(".fob-comment-form").valid()){var i=n.target,m=new FormData(i),a=i.querySelector('input[type="checkbox"][name="cookie_consent"]'),l=!!a&&a.checked;fetch(i.action,{method:"POST",body:m,headers:{"X-Requested-With":"XMLHttpRequest"}}).then((function(e){return e.json()})).then((function(n){var a;if(void 0!==(null===(a=window)||void 0===a?void 0:a.Theme)){if(n.errors)return void Theme.handleValidationError(n.errors);if(n.error)return void Theme.showError(n.message);Theme.showSuccess(n.message)}l?(o("name",m.get("name"),365),o("email",m.get("email"),365),o("website",m.get("website"),365),o("cookie_consent",1,365),i.querySelector('textarea[name="content"]').value=""):(i.reset(),r("name"),r("email"),r("website"),r("cookie_consent")),c(),e&&(e=!1,document.querySelector(".fob-comment-list-section").parentNode.insertBefore(t,document.querySelector(".fob-comment-list-section").nextSibling))}))}};c(),document.querySelector(".fob-comment-form").addEventListener("submit",i),document.querySelector(".fob-comment-list-section").addEventListener("click",(function(o){var n=o.target;if(n.closest(".fob-comment-pagination")){o.preventDefault();var r=n.href;r&&(c(r),document.querySelector(".fob-comment-list-section").scrollIntoView({behavior:"smooth"}))}if(n.classList.contains("fob-comment-item-reply")){o.preventDefault();var m=document.querySelector(".fob-comment-form-section");m&&m.remove(),e||(t=m.cloneNode(!0));var a=n.closest(".fob-comment-item");a.parentNode.insertBefore(m,a.nextSibling),m.querySelector(".fob-comment-form-title").textContent=n.dataset.replyTo;var l=document.createElement("a");l.id="cancel-comment-reply-link",l.href="#",l.rel="nofollow",l.textContent=n.dataset.cancelReply,m.querySelector(".fob-comment-form-title").appendChild(l),m.querySelector("form").setAttribute("action",n.href),e=!0,document.querySelector(".fob-comment-form").addEventListener("submit",i)}if("cancel-comment-reply-link"===n.id){o.preventDefault(),e=!1;var s=document.querySelector(".fob-comment-form-section");s&&s.remove(),document.querySelector(".fob-comment-list-section").parentNode.insertBefore(t,document.querySelector(".fob-comment-list-section").nextSibling)}}))}))},672:()=>{}},o={};function n(e){var r=o[e];if(void 0!==r)return r.exports;var c=o[e]={exports:{}};return t[e](c,c.exports,n),c.exports}n.m=t,e=[],n.O=(t,o,r,c)=>{if(!o){var i=1/0;for(s=0;s<e.length;s++){for(var[o,r,c]=e[s],m=!0,a=0;a<o.length;a++)(!1&c||i>=c)&&Object.keys(n.O).every((e=>n.O[e](o[a])))?o.splice(a--,1):(m=!1,c<i&&(i=c));if(m){e.splice(s--,1);var l=r();void 0!==l&&(t=l)}}return t}c=c||0;for(var s=e.length;s>0&&e[s-1][2]>c;s--)e[s]=e[s-1];e[s]=[o,r,c]},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={653:0,787:0};n.O.j=t=>0===e[t];var t=(t,o)=>{var r,c,[i,m,a]=o,l=0;if(i.some((t=>0!==e[t]))){for(r in m)n.o(m,r)&&(n.m[r]=m[r]);if(a)var s=a(n)}for(t&&t(o);l<i.length;l++)c=i[l],n.o(e,c)&&e[c]&&e[c][0](),e[c]=0;return n.O(s)},o=self.webpackChunk=self.webpackChunk||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})(),n.O(void 0,[787],(()=>n(750)));var r=n.O(void 0,[787],(()=>n(672)));r=n.O(r)})();