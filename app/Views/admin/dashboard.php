<!-- DEBUG-VIEW START 1 APPPATH/Views/welcome_message.php -->
<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
<script  id="debugbar_loader" data-time="1758672151.211650" src="https://portal.sofwanromli.my.id/public/index.php?debugbar"></script><script  id="debugbar_dynamic_script"></script><style  id="debugbar_dynamic_style"></style><script class="kint-rich-script">"use strict";(()=>{function m(n){if(!(n instanceof Element))throw new Error("Invalid argument to dedupeElement()");let t=n.ownerDocument,e=E(n);for(let s of t.querySelectorAll(e))n!==s&&s.parentNode.removeChild(s)}function d(n){return n instanceof Element?n.ownerDocument.contains(n):!1}function E(n){if(!(n instanceof Element))throw new Error("Invalid argument to buildClassSelector()");return[n.nodeName,...n.classList].join(".")}function f(n){if(!(n instanceof Element))throw new Error("Invalid argument to selectText()");let t=n.ownerDocument,e=t.getSelection(),s=t.createRange();s.selectNodeContents(n),e.removeAllRanges(),e.addRange(s)}function I(n,t){let e;return function(...s){clearTimeout(e),e=setTimeout(function(){n(...s)},t)}}function x(n){if(!(n instanceof Element))throw new Error("Invalid argument to offsetTop()");return n.offsetTop+(n.offsetParent?x(n.offsetParent):0)}var u=class n{static#e=new Set;static toggleSearchBox(t,e){let s=t.querySelector(".kint-search"),i=t.parentNode;if(s)if(s.classList.toggle("kint-show",e)){if(s.focus(),s.select(),!n.#e.has(s)){let r=i.querySelectorAll("dl").length,o=200;r>1e4&&(o=700),s.addEventListener("keyup",I(n.#t.bind(null,s),o)),n.#e.add(s)}n.#t(s)}else i.classList.remove("kint-search-root")}static#t(t){let e=t.closest(".kint-parent")?.parentNode;if(e)if(t.classList.contains("kint-show")&&t.value.length){let s=e.dataset.lastSearch;if(e.classList.add("kint-search-root"),s!==t.value){e.dataset.lastSearch=t.value,e.classList.remove("kint-search-match");for(let i of e.querySelectorAll(".kint-search-match"))i.classList.remove("kint-search-match");n.#s(e,t.value.toUpperCase())}}else e.classList.remove("kint-search-root")}static#s(t,e){let s=t.cloneNode(!0);for(let c of s.querySelectorAll(".access-path"))c.remove();if(!s.textContent.toUpperCase().includes(e))return;t.classList.add("kint-search-match");let i=t.firstElementChild;for(;i&&i.tagName!=="DT";)i=i.nextElementSibling;if(!i)return;let r=a.getChildContainer(i);if(!r)return;let o,l;for(let c of r.children)c.tagName==="DL"?n.#s(c,e):c.tagName==="UL"&&(c.classList.contains("kint-tabs")?o=c.children:c.classList.contains("kint-tab-contents")&&(l=c.children));if(!(!o||o.length!==l?.length))for(let c=o.length;c--;){let k=!1,F=!1;o[c].textContent.toUpperCase().includes(e)&&(k=!0);let O=l[c].cloneNode(!0);for(let v of O.querySelectorAll(".access-path"))v.remove();if(O.textContent.toUpperCase().includes(e)&&(k=!0,F=!0),k&&o[c].classList.add("kint-search-match"),F)for(let v of l[c].children)v.tagName==="DL"&&n.#s(v,e)}}};var g=class{static sort(t,e){let s=t.dataset.kintTableSort,i=parseInt(s)===e?-1:1,r=t.tBodies[0];[...r.rows].sort(function(o,l){o=o.cells[e].textContent.trim().toLocaleLowerCase(),l=l.cells[e].textContent.trim().toLocaleLowerCase();let c=0;return!isNaN(o)&&!isNaN(l)?(o=parseFloat(o),l=parseFloat(l),c=o-l):isNaN(o)&&!isNaN(l)?c=1:isNaN(l)&&!isNaN(o)?c=-1:c=(""+o).localeCompare(""+l),c*i}).forEach(o=>r.appendChild(o)),i<0?t.dataset.kintTableSort=null:t.dataset.kintTableSort=e}};var a=class n{#e;#t;#s;constructor(t){if(!(t instanceof h))throw new Error("Invalid argument to Rich.constructor()");this.#e=t,this.#e.runOnInit(this.#i.bind(this));let e=new q(this,t);new b(this,t.window,e)}#i(){let t=this.#e.window.document;if(d(this.#t)||(this.#t=t.querySelector("style.kint-rich-style")),this.#t&&m(this.#t),t.querySelector(".kint-rich.kint-file")){this.setupFolder(t);let e=this.#s.querySelector("dd.kint-foldout"),s=Array.from(t.querySelectorAll(".kint-rich.kint-file"));for(let i of s)i.parentNode!==e&&e.appendChild(i);this.#s.classList.add("kint-show")}}addToFolder(t){let e=t.closest(".kint-rich");if(!e)throw new Error("Bad addToFolder");let s=this.#e.window.document;if(this.setupFolder(s),this.folder.contains(t))throw new Error("Bad addToFolder");let i=this.#s.querySelector("dd.kint-foldout"),r=t.closest(".kint-parent, .kint-rich"),o=Array.from(e.querySelectorAll(".kint-folder-trigger"));if(e===r||e.querySelectorAll(".kint-rich > dl").length===1){for(let l of o)l.remove();e.classList.add("kint-file"),i.insertBefore(e,i.firstChild)}else{let l=s.createElement("div");l.classList.add("kint-rich"),l.classList.add("kint-file"),l.appendChild(r.closest(".kint-rich > dl"));let c=e.lastElementChild;c.matches(".kint-rich > footer")&&l.appendChild(c.cloneNode(!0));for(let k of o)k.remove();i.insertBefore(l,i.firstChild)}n.toggle(this.#s.querySelector(".kint-parent"),!0)}setupFolder(t){if(this.#s)d(this.#s)||(this.#s=t.querySelector(".kint-rich.kint-folder"));else{let e=t.createElement("template");e.innerHTML='<div class="kint-rich kint-folder"><dl><dt class="kint-parent"><nav></nav>Kint</dt><dd class="kint-foldout"></dd></dl></div>',this.#s=e.content.firstChild,t.body.appendChild(this.#s)}}get folder(){return d(this.#s)||(this.#s=this.#e.window.document.querySelector(".kint-rich.kint-folder")),this.#s&&m(this.#s),this.#s}isFolderOpen(){let t=this.#s?.querySelector("dd.kint-foldout");if(t)return t.previousSibling.classList.contains("kint-show")}static getChildContainer(t){let e=t.nextElementSibling;for(;e&&!e.matches("dd");)e=e.nextElementSibling;return e}static toggle(t,e){let s=n.getChildContainer(t);s&&(e=t.classList.toggle("kint-show",e),n.#n(s,e))}static switchTab(t){t.parentNode.getElementsByClassName("kint-active-tab")[0].classList.remove("kint-active-tab"),t.classList.add("kint-active-tab");let e=t,s=0;for(;e=e.previousElementSibling;)s++;let i=t.parentNode.nextSibling.children;for(let r=i.length;r--;)r===s?(i[r].classList.add("kint-show"),n.#n(i[r],!0)):i[r].classList.remove("kint-show")}static toggleChildren(t,e){let s=n.getChildContainer(t);if(!s)return;e===void 0&&(e=t.classList.contains("kint-show"));let i=Array.from(s.getElementsByClassName("kint-parent"));for(let r of i)r.classList.toggle("kint-show",e)}static toggleAccessPath(t,e){let s=t.querySelector(".access-path");s?.classList.toggle("kint-show",e)&&f(s)}static#n(t,e){if(t.children.length===2&&t.lastElementChild.matches("ul.kint-tab-contents"))for(let s of t.lastElementChild.children)s.matches("li.kint-show")&&(t=s);if(t.children.length===1&&t.firstElementChild.matches("dl")){let s=t.firstElementChild.firstElementChild;s?.classList?.contains("kint-parent")&&n.toggle(s,e)}}},b=class{#e;#t;#s;#i=null;#n=null;#o=0;constructor(t,e,s){this.#e=t,this.#t=s,this.#s=e,this.#s.addEventListener("click",this.#a.bind(this),!0)}#r(){clearTimeout(this.#i),this.#i=setTimeout(this.#l.bind(this),250)}#l(){clearTimeout(this.#i),this.#i=null,this.#n=null,this.#o=0}#c(){let t=this.#n;if(!t.matches(".kint-parent > nav"))return;let e=t.parentNode;if(this.#o===1)a.toggleChildren(e),this.#t.onTreeChanged(),this.#r(),this.#o=2;else if(this.#o===2){this.#l();let s=e.classList.contains("kint-show"),i=this.#e.folder?.querySelector(".kint-parent"),r=Array.from(this.#s.document.getElementsByClassName("kint-parent"));for(let o of r)o!==i&&o.classList.toggle("kint-show",s);this.#t.onTreeChanged(),this.#t.scrollToFocus()}}#a(t){if(this.#o){this.#c();return}let e=t.target;if(!e.closest(".kint-rich"))return;if(e.tagName==="DFN"&&f(e),e.tagName==="TH"){t.ctrlKey||g.sort(e.closest("table"),e.cellIndex);return}if(e.tagName==="LI"&&e.parentNode.className==="kint-tabs"){if(e.className!=="kint-active-tab"){let i=e.closest("dl")?.querySelector(".kint-parent > nav")??e;a.switchTab(e),this.#t.onTreeChanged(),this.#t.setCursor(i)}return}let s=e.closest("dt");if(e.tagName==="NAV")e.parentNode.tagName==="FOOTER"?(this.#t.setCursor(e),e.parentNode.classList.toggle("kint-show")):s?.classList.contains("kint-parent")&&(a.toggle(s),this.#t.onTreeChanged(),this.#t.setCursor(e),this.#r(),this.#o=1,this.#n=e);else if(e.classList.contains("kint-access-path-trigger"))s&&a.toggleAccessPath(s);else if(e.classList.contains("kint-search-trigger"))s?.matches(".kint-rich > dl > dt.kint-parent")&&u.toggleSearchBox(s);else if(e.classList.contains("kint-folder-trigger")){if(s?.matches(".kint-rich > dl > dt.kint-parent"))this.#e.addToFolder(e),this.#t.onTreeChanged(),this.#t.setCursor(s.querySelector("nav")),this.#t.scrollToFocus();else if(e.parentNode.tagName==="FOOTER"){let i=e.closest(".kint-rich").querySelector(".kint-parent > nav, .kint-rich > footer > nav");this.#e.addToFolder(e),this.#t.onTreeChanged(),this.#t.setCursor(i),this.#t.scrollToFocus()}}else e.classList.contains("kint-search")||(e.tagName==="PRE"&&t.detail===3?f(e):e.closest(".kint-source")&&t.detail===3?f(e.closest(".kint-source")):e.classList.contains("access-path")?f(e):e.tagName!=="A"&&s?.classList.contains("kint-parent")&&(a.toggle(s),this.#t.onTreeChanged(),this.#t.setCursor(s.querySelector("nav"))))}},j=65,G=68,A=70,S=72,K=74,D=75,p=76,V=83,P=9,T=13,B=27,L=32,N=37,R=38,C=39,H=40,M=".kint-rich .kint-parent > nav, .kint-rich > footer > nav, .kint-rich .kint-tabs > li:not(.kint-active-tab)",q=class{#e=[];#t=0;#s=!1;#i;#n;constructor(t,e){this.#i=t,this.#n=e.window,this.#n.addEventListener("keydown",this.#c.bind(this),!0),e.runOnInit(this.onTreeChanged.bind(this))}scrollToFocus(){let t=this.#e[this.#t];if(!t)return;let e=this.#i.folder;if(t===e?.querySelector(".kint-parent > nav"))return;let s=x(t);if(this.#i.isFolderOpen()){let i=e.querySelector("dd.kint-foldout");i.scrollTo(0,s-i.clientHeight/2)}else this.#n.scrollTo(0,s-this.#n.innerHeight/2)}onTreeChanged(){let t=this.#e[this.#t];this.#e=[];let e=this.#i.folder,s=e?.querySelector(".kint-parent > nav"),i=this.#n.document;this.#i.isFolderOpen()&&(i=e,this.#e.push(s));let r=Array.from(i.querySelectorAll(M));for(let o of r)o.offsetParent!==null&&o!==s&&this.#e.push(o);if(s&&!this.#i.isFolderOpen()&&this.#e.push(s),this.#e.length===0){this.#s=!1,this.#r();return}t&&this.#e.indexOf(t)!==-1?this.#t=this.#e.indexOf(t):this.#r()}setCursor(t){if(this.#i.isFolderOpen()&&!this.#i.folder.contains(t)||!t.matches(M))return!1;let e=this.#e.indexOf(t);if(e===-1&&(this.onTreeChanged(),e=this.#e.indexOf(t)),e!==-1){if(e!==this.#t)return this.#t=e,this.#r(),!0;this.#e[e]?.classList.remove("kint-weak-focus")}else console.error("setCursor failed to find target in list",t),console.info("Please report this as a bug in Kint at https://github.com/kint-php/kint");return!1}#o(t){if(this.#e.length===0)return this.#t=0,null;for(this.#t+=t;this.#t<0;)this.#t+=this.#e.length;for(;this.#t>=this.#e.length;)this.#t-=this.#e.length;return this.#r(),this.#t}#r(){let t=this.#n.document.querySelector(".kint-focused");t&&(t.classList.remove("kint-focused"),t.classList.remove("kint-weak-focus")),this.#s&&this.#e[this.#t]?.classList.add("kint-focused")}#l(t){let e=t.closest(".kint-rich .kint-parent ~ dd")?.parentNode.querySelector(".kint-parent > nav");e&&(this.setCursor(e),this.scrollToFocus())}#c(t){if(this.#s&&t.keyCode===B&&t.target.matches(".kint-search")){t.target.blur(),this.#r();return}if(t.target!==this.#n.document.body||t.altKey||t.ctrlKey)return;if(t.keyCode===G){if(this.#s)this.#s=!1;else{if(this.#s=!0,this.onTreeChanged(),this.#e.length===0){this.#s=!1;return}this.scrollToFocus()}this.#r(),t.preventDefault();return}else if(t.keyCode===B){this.#s&&(this.#s=!1,this.#r(),t.preventDefault());return}else if(!this.#s)return;t.preventDefault(),d(this.#e[this.#t])||this.onTreeChanged();let e=this.#e[this.#t];if([P,R,D,H,K].includes(t.keyCode)){t.keyCode===P?this.#o(t.shiftKey?-1:1):t.keyCode===R||t.keyCode===D?this.#o(-1):(t.keyCode===H||t.keyCode===K)&&this.#o(1),this.scrollToFocus();return}if(e.tagName==="LI"&&[L,T,C,p,N,S].includes(t.keyCode)){t.keyCode===L||t.keyCode===T?(a.switchTab(e),this.onTreeChanged()):t.keyCode===C||t.keyCode===p?this.#o(1):(t.keyCode===N||t.keyCode===S)&&this.#o(-1),this.scrollToFocus();return}if(e.parentNode.tagName==="FOOTER"&&e.closest(".kint-rich")){if(t.keyCode===L||t.keyCode===T)e.parentNode.classList.toggle("kint-show");else if(t.keyCode===N||t.keyCode===S)if(e.parentNode.classList.contains("kint-show"))e.parentNode.classList.remove("kint-show");else{this.#l(e.closest(".kint-rich"));return}else if(t.keyCode===C||t.keyCode===p)e.parentNode.classList.add("kint-show");else if(t.keyCode===A&&!this.#i.isFolderOpen()&&e.matches(".kint-rich > footer > nav")){let i=e.closest(".kint-rich").querySelector(".kint-parent > nav, .kint-rich > footer > nav");this.#i.addToFolder(e),this.onTreeChanged(),this.setCursor(i),this.scrollToFocus()}return}let s=e.closest(".kint-parent");if(s){if(t.keyCode===j){a.toggleAccessPath(s);return}if(t.keyCode===A){!this.#i.isFolderOpen()&&s.matches(".kint-rich:not(.kint-folder) > dl > .kint-parent")&&(this.#i.addToFolder(e),this.onTreeChanged(),this.setCursor(e),this.scrollToFocus());return}if(t.keyCode===V){let i=s.closest(".kint-rich > dl")?.querySelector(".kint-search")?.closest(".kint-parent");if(i){e.classList.add("kint-weak-focus"),u.toggleSearchBox(i,!0);return}}if(t.keyCode===L||t.keyCode===T){a.toggle(s),this.onTreeChanged();return}if([C,p,N,S].includes(t.keyCode)){let i=s.classList.contains("kint-show");if(t.keyCode===C||t.keyCode===p){i&&a.toggleChildren(s,!0),a.toggle(s,!0),this.onTreeChanged();return}else if(i){a.toggleChildren(s,!1),a.toggle(s,!1),this.onTreeChanged();return}else{this.#l(s);return}}}}};var y=class{#e;#t;constructor(t){if(!(t instanceof h))throw new Error("Invalid argument to Plain.constructor()");this.#e=t.window,t.runOnInit(this.#s.bind(this))}#s(){d(this.#t)||(this.#t=this.#e.document.querySelector("style.kint-plain-style")),this.#t&&m(this.#t)}};var w=class{#e;constructor(t){if(!(t instanceof h))throw new Error("Invalid argument to Microtime.constructor()");this.#e=t.window,t.runOnInit(this.#t.bind(this))}#t(){let t={},e=this.#e.document.querySelectorAll("[data-kint-microtime-group]");for(let s of e){let i=s.querySelector(".kint-microtime-lap");if(!i)continue;let r=s.dataset.kintMicrotimeGroup,o=parseFloat(i.textContent),l=parseFloat(s.querySelector(".kint-microtime-avg").textContent);t[r]??={min:o,max:o,avg:l},t[r].min>o&&(t[r].min=o),t[r].max<o&&(t[r].max=o),t[r].avg=l}for(let s of e){let i=s.querySelector(".kint-microtime-lap");if(!i)continue;let r=parseFloat(i.textContent),o=t[s.dataset.kintMicrotimeGroup];if(s.querySelector(".kint-microtime-avg").textContent=o.avg,!(r===o.min&&r===o.max))if(s.classList.add("kint-microtime-js"),r>o.avg){let l=(r-o.avg)/(o.max-o.avg);i.style.background="hsl("+(40-40*l)+", 100%, 65%)"}else{let l=0;o.avg!==o.min&&(l=(o.avg-r)/(o.avg-o.min)),i.style.background="hsl("+(40+80*l)+", 100%, 65%)"}}}};var U=Symbol(),h=class n{static#e=null;#t;#s=[];#i=new Set;static init(t){return n.#e??=new n(t,U),n.#e.#n(),n.#e.runOnLoad(n.#r),n.#e}get window(){return this.#t}constructor(t,e){if(U!==e)throw new Error("Kint constructor is private. Use Kint.init()");if(!(t instanceof Window))throw new Error("Invalid argument to Kint.init()");this.#t=t,this.runOnInit(this.#o.bind(this)),new y(this),new a(this),new w(this)}runOnLoad(t){if(this.#t.document.readyState==="complete")try{t()}catch{}else this.#t.addEventListener("load",t)}runOnInit(t){this.#s.push(t)}#n(){this.#t.document.currentScript&&(this.#i.add(E(window.document.currentScript)),window.document.currentScript.remove())}#o(){for(let t of this.#i.keys())for(let e of this.#t.document.querySelectorAll(t))e.remove()}static#r(){for(let t of n.#e.#s)t()}};window.Kint||(window.Kint=h);window.Kint.init(window);})();
</script><style class="kint-rich-style">.kint-rich{--spacing: 4px;--nav-size: 15px;--backdrop-color: rgba(255, 255, 255, 0.9);--main-background: #e0eaef;--secondary-background: #c1d4df;--text-color: #1d1e1e;--variable-name-color: #1d1e1e;--variable-type-color: #0092db;--variable-type-color-hover: #5cb730;--border-color: #b6cedb;--border-color-hover: #0092db;--border: 1px solid var(--border-color);--foldout-max-size: calc(100vh - 100px);--foldout-zindex: 999999;--caret-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 150'><g stroke-width='2' fill='%23FFF'><path d='M1 1h28v28H1zm5 14h18m-9 9V6M1 61h28v28H1zm5 14h18' stroke='%23379'/><path d='M1 31h28v28H1zm5 14h18m-9 9V36M1 91h28v28H1zm5 14h18' stroke='%235A3'/><path d='M1 121h28v28H1zm5 5l18 18m-18 0l18-18' stroke='%23CCC'/></g></svg>");--ap-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><g stroke='%23000' fill='transparent'><path d='M2 8h3m3 3v3M8 2v3m3 3h3M3 8' stroke-width='2' stroke-linecap='round'/><circle stroke-width='1.5' r='4.5' cx='8' cy='8'/></g></svg>");--folder-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><path d='M2 2h4l2 2h6v9H2V2h2' stroke-width='2' stroke='%23000' fill='transparent' stroke-linejoin='round'/></svg>");--search-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><g stroke='%23000' fill='transparent'><path d='M2 14l3-3' stroke-linecap='round' stroke-width='3'/><circle stroke-width='2' r='5' cx='9' cy='7'/></g></svg>");font-size:13px;overflow-x:auto;white-space:nowrap;background:var(--backdrop-color);direction:ltr;contain:content}.kint-rich.kint-folder{position:fixed;bottom:0;left:0;right:0;z-index:var(--foldout-zindex);width:100%;margin:0;display:block}.kint-rich.kint-folder dd.kint-foldout{max-height:var(--foldout-max-size);padding-right:calc(var(--spacing)*2);overflow-y:scroll;display:none}.kint-rich.kint-folder dd.kint-foldout.kint-show{display:block}.kint-rich::selection{background:var(--border-color-hover);color:var(--text-color)}.kint-rich .kint-focused{box-shadow:0 0 3px 3px var(--variable-type-color-hover)}.kint-rich .kint-focused.kint-weak-focus{box-shadow:0 0 3px 1px color-mix(in srgb, var(--variable-type-color-hover) 50%, transparent)}.kint-rich,.kint-rich::before,.kint-rich::after,.kint-rich *,.kint-rich *::before,.kint-rich *::after{box-sizing:border-box;border-radius:0;color:var(--text-color);float:none !important;font-family:Consolas,Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif;line-height:15px;margin:0;padding:0;text-align:left}.kint-rich{margin:calc(var(--spacing)*2) 0}.kint-rich dt,.kint-rich dl{width:auto}.kint-rich dt,.kint-rich div.access-path{background:var(--main-background);border:var(--border);color:var(--text-color);display:block;font-weight:bold;list-style:none outside none;overflow:auto;padding:var(--spacing)}.kint-rich dt:hover,.kint-rich div.access-path:hover{border-color:var(--border-color-hover)}.kint-rich>dl dl{padding:0 0 0 calc(var(--spacing)*3)}.kint-rich dt.kint-parent>nav,.kint-rich>footer>nav{background:var(--caret-image) no-repeat scroll 0 0/var(--nav-size) 75px rgba(0,0,0,0);cursor:pointer;display:inline-block;height:var(--nav-size);width:var(--nav-size);margin-right:3px;vertical-align:middle}.kint-rich dt.kint-parent:hover>nav,.kint-rich>footer>nav:hover{background-position:0 25%}.kint-rich dt.kint-parent.kint-show>nav,.kint-rich>footer.kint-show>nav{background-position:0 50%}.kint-rich dt.kint-parent.kint-show:hover>nav,.kint-rich>footer.kint-show>nav:hover{background-position:0 75%}.kint-rich dt.kint-parent.kint-locked>nav{background-position:0 100%}.kint-rich dt.kint-parent+dd{display:none;border-left:1px dashed var(--border-color);contain:strict}.kint-rich dt.kint-parent.kint-show+dd{display:block;contain:content}.kint-rich var,.kint-rich var a{color:var(--variable-type-color);font-style:normal}.kint-rich dt:hover var,.kint-rich dt:hover var a{color:var(--variable-type-color-hover)}.kint-rich dfn{font-style:normal;font-family:monospace;color:var(--variable-name-color)}.kint-rich pre{color:var(--text-color);margin:0 0 0 calc(var(--spacing)*3);padding:5px;overflow-y:hidden;border-top:0;border:var(--border);background:var(--main-background);display:block;word-break:normal}.kint-rich .kint-access-path-trigger,.kint-rich .kint-folder-trigger,.kint-rich .kint-search-trigger{background:color-mix(in srgb, var(--text-color) 80%, transparent);border-radius:3px;padding:2px;height:var(--nav-size);width:var(--nav-size);font-size:var(--nav-size);margin-left:5px;font-weight:bold;text-align:center;line-height:1;float:right !important;cursor:pointer;position:relative;overflow:hidden}.kint-rich .kint-access-path-trigger::before,.kint-rich .kint-folder-trigger::before,.kint-rich .kint-search-trigger::before{display:block;content:"";width:100%;height:100%;background:var(--main-background);mask:center/contain no-repeat alpha}.kint-rich .kint-access-path-trigger:hover,.kint-rich .kint-folder-trigger:hover,.kint-rich .kint-search-trigger:hover{background:var(--main-background)}.kint-rich .kint-access-path-trigger:hover::before,.kint-rich .kint-folder-trigger:hover::before,.kint-rich .kint-search-trigger:hover::before{background:var(--text-color)}.kint-rich .kint-access-path-trigger::before{mask-image:var(--ap-image)}.kint-rich .kint-folder-trigger::before{mask-image:var(--folder-image)}.kint-rich .kint-search-trigger::before{mask-image:var(--search-image)}.kint-rich input.kint-search{display:none;border:var(--border);border-top-width:0;border-bottom-width:0;padding:var(--spacing);float:right !important;margin:calc(var(--spacing)*-1) 0;color:var(--variable-name-color);background:var(--secondary-background);height:calc(var(--nav-size) + var(--spacing)*2);width:calc(var(--nav-size)*10);position:relative;z-index:100}.kint-rich input.kint-search.kint-show{display:block}.kint-rich .kint-search-root ul.kint-tabs>li:not(.kint-search-match){background:var(--secondary-background);filter:saturate(0);opacity:.5}.kint-rich .kint-search-root dl:not(.kint-search-match){opacity:.5}.kint-rich .kint-search-root dl:not(.kint-search-match)>dt{background:var(--main-background);filter:saturate(0)}.kint-rich .kint-search-root dl:not(.kint-search-match) dl,.kint-rich .kint-search-root dl:not(.kint-search-match) ul.kint-tabs>li:not(.kint-search-match){opacity:1}.kint-rich div.access-path{background:var(--secondary-background);display:none;margin-top:5px;padding:4px;white-space:pre}.kint-rich div.access-path.kint-show{display:block}.kint-rich footer{padding:0 3px 3px;font-size:9px;background:rgba(0,0,0,0)}.kint-rich footer>.kint-folder-trigger{background:rgba(0,0,0,0)}.kint-rich footer>.kint-folder-trigger::before{background:var(--text-color)}.kint-rich footer nav{height:10px;width:10px;background-size:10px 50px}.kint-rich footer>ol{display:none;margin-left:32px}.kint-rich footer.kint-show>ol{display:block}.kint-rich a{color:var(--text-color);text-shadow:none;text-decoration:underline}.kint-rich a:hover{color:var(--variable-name-color);border-bottom:1px dotted var(--variable-name-color)}.kint-rich ul{list-style:none;padding-left:calc(var(--spacing)*3)}.kint-rich ul:not(.kint-tabs) li{border-left:1px dashed var(--border-color)}.kint-rich ul:not(.kint-tabs) li>dl{border-left:none}.kint-rich ul.kint-tabs{margin:0 0 0 calc(var(--spacing)*3);padding-left:0;background:var(--main-background);border:var(--border);border-top:0}.kint-rich ul.kint-tabs>li{background:var(--secondary-background);border:var(--border);cursor:pointer;display:inline-block;height:calc(var(--spacing)*6);margin:calc(var(--spacing)/2);padding:0 calc(2px + var(--spacing)*2.5);vertical-align:top}.kint-rich ul.kint-tabs>li:hover,.kint-rich ul.kint-tabs>li.kint-active-tab:hover{border-color:var(--border-color-hover);color:var(--variable-type-color-hover)}.kint-rich ul.kint-tabs>li.kint-active-tab{background:var(--main-background);border-top:0;margin-top:-1px;height:27px;line-height:24px}.kint-rich ul.kint-tabs>li:not(.kint-active-tab){line-height:calc(var(--spacing)*5)}.kint-rich ul.kint-tabs li+li{margin-left:0}.kint-rich ul.kint-tab-contents>li{display:none;contain:strict}.kint-rich ul.kint-tab-contents>li.kint-show{display:block;contain:content}.kint-rich dt:hover+dd>ul>li.kint-active-tab{border-color:var(--border-color-hover);color:var(--variable-type-color-hover)}.kint-rich dt>.kint-color-preview{width:var(--nav-size);height:var(--nav-size);display:inline-block;vertical-align:middle;margin-left:10px;border:var(--border);background-color:#ccc;background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 2"><path fill="%23FFF" d="M0 0h1v2h1V1H0z"/></svg>');background-size:min(20px,100%)}.kint-rich dt>.kint-color-preview:hover{border-color:var(--border-color-hover)}.kint-rich dt>.kint-color-preview>div{width:100%;height:100%}.kint-rich table{border-collapse:collapse;empty-cells:show;border-spacing:0}.kint-rich table *{font-size:12px}.kint-rich table dt{background:none;padding:calc(var(--spacing)/2)}.kint-rich table dt .kint-parent{min-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.kint-rich table td,.kint-rich table th{border:var(--border);padding:calc(var(--spacing)/2);vertical-align:center}.kint-rich table th{cursor:alias}.kint-rich table td:first-child,.kint-rich table th{font-weight:bold;background:var(--secondary-background);color:var(--variable-name-color)}.kint-rich table td{background:var(--main-background);white-space:pre}.kint-rich table td>dl{padding:0}.kint-rich table pre{border-top:0;border-right:0}.kint-rich table thead th:first-child{background:none;border:0}.kint-rich table tr:hover>td{box-shadow:0 0 1px 0 var(--border-color-hover) inset}.kint-rich table tr:hover var{color:var(--variable-type-color-hover)}.kint-rich table ul.kint-tabs li.kint-active-tab{height:20px;line-height:17px}.kint-rich pre.kint-source{margin-left:-1px}.kint-rich pre.kint-source[data-kint-filename]:before{display:block;content:attr(data-kint-filename);margin-bottom:var(--spacing);padding-bottom:var(--spacing);border-bottom:1px solid var(--secondary-background)}.kint-rich pre.kint-source>div:before{display:inline-block;content:counter(kint-l);counter-increment:kint-l;border-right:1px solid var(--border-color-hover);padding-right:calc(var(--spacing)*2);margin-right:calc(var(--spacing)*2)}.kint-rich pre.kint-source>div.kint-highlight{background:var(--secondary-background)}.kint-rich .kint-microtime-js .kint-microtime-lap{text-shadow:-1px 0 var(--border-color-hover),0 1px var(--border-color-hover),1px 0 var(--border-color-hover),0 -1px var(--border-color-hover);color:var(--main-background);font-weight:bold}input.kint-note-input{width:100%}.kint-rich{--main-background: #f8f8f8;--secondary-background: #f8f8f8;--variable-type-color: #06f;--variable-type-color-hover: #f00;--border-color: #d7d7d7;--border-color-hover: #aaa;--alternative-background: #fff;--highlight-color: #cfc;--caret-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 150'><path d='M6 7h18l-9 15zm0 30h18l-9 15zm0 45h18l-9-15zm0 30h18l-9-15zm0 12l18 18m-18 0l18-18' fill='%23555'/><path d='M6 126l18 18m-18 0l18-18' stroke-width='2' stroke='%23555'/></svg>")}.kint-rich .kint-focused{box-shadow:0 0 3px 2px var(--variable-type-color-hover)}.kint-rich dt{font-weight:normal}.kint-rich dt.kint-parent{margin-top:4px}.kint-rich dl dl{margin-top:4px;padding-left:25px;border-left:none}.kint-rich>dl>dt{background:var(--secondary-background)}.kint-rich ul{margin:0;padding-left:0}.kint-rich ul:not(.kint-tabs)>li{border-left:0}.kint-rich ul.kint-tabs{background:var(--secondary-background);border:var(--border);border-width:0 1px 1px 1px;padding:4px 0 0 12px;margin-left:-1px;margin-top:-1px}.kint-rich ul.kint-tabs li,.kint-rich ul.kint-tabs li+li{margin:0 0 0 4px}.kint-rich ul.kint-tabs li{border-bottom-width:0;height:calc(var(--spacing)*6 + 1px)}.kint-rich ul.kint-tabs li:first-child{margin-left:0}.kint-rich ul.kint-tabs li.kint-active-tab{border-top:var(--border);background:var(--alternative-background);font-weight:bold;padding-top:0;border-bottom:1px solid var(--alternative-background) !important;margin-bottom:-1px}.kint-rich ul.kint-tabs li.kint-active-tab:hover{border-bottom:1px solid var(--alternative-background)}.kint-rich ul>li>pre{border:var(--border)}.kint-rich dt:hover+dd>ul{border-color:var(--border-color-hover)}.kint-rich pre{background:var(--alternative-background);margin-top:4px;margin-left:25px}.kint-rich .kint-source{margin-left:-1px}.kint-rich .kint-source .kint-highlight{background:var(--highlight-color)}.kint-rich .kint-parent.kint-show>.kint-search{border-bottom-width:1px}.kint-rich table td{background:var(--alternative-background)}.kint-rich table td>dl{padding:0;margin:0}.kint-rich table td>dl>dt.kint-parent{margin:0}.kint-rich table td:first-child,.kint-rich table td,.kint-rich table th{padding:2px 4px}.kint-rich table dd,.kint-rich table dt{background:var(--alternative-background)}.kint-rich table tr:hover>td{box-shadow:none;background:var(--highlight-color)}
</style>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>AdminLTE v4 | Dashboard</title>
  <!--begin::Accessibility Meta Tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <meta name="color-scheme" content="light dark" />
  <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
  <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
  <!--end::Accessibility Meta Tags-->
  <!--begin::Primary Meta Tags-->
  <meta name="title" content="AdminLTE v4 | Dashboard" />
  <meta name="author" content="ColorlibHQ" />
  <meta
    name="description"
    content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance." />
  <meta
    name="keywords"
    content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant" />
  <!--end::Primary Meta Tags-->
  <!--begin::Accessibility Features-->
  <!-- Skip links will be dynamically added by accessibility.js -->
  <meta name="supported-color-schemes" content="light dark" />
  <link rel="preload" href="https://portal.sofwanromli.my.id/public/assets/css/adminlte.css" as="style" />
  <!--end::Accessibility Features-->
  <!--begin::Fonts-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
    crossorigin="anonymous"
    media="print"
    onload="this.media='all'" />
  <!--end::Fonts-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(OverlayScrollbars)-->
  <!--begin::Third Party Plugin(Bootstrap Icons)-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(Bootstrap Icons)-->
  <!--begin::Required Plugin(AdminLTE)-->
  <link rel="stylesheet" href="https://portal.sofwanromli.my.id/public/assets/css/adminlte.css" />
  <!--end::Required Plugin(AdminLTE)-->
  <!-- apexcharts -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
    crossorigin="anonymous" />
  <!-- jsvectormap -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
    integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
    crossorigin="anonymous" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::App Main-->
    <main class="app-main">

      <!--begin::App Content-->
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <form id="biodata">
            <table class="table table-striped tcart" border="0" cellspacing="1" cellpadding="1">
              <tr class="header" height="35">
                <th width="31"> NO</th>
                <th width="200">ITEM</th>
                <th></th>
              </tr>
              <tr height="22">
                <td height="22" align="right">1</td>
                <td>Nomor Induk Kependudukan (NIK)</td>
                <td><input type="text" name="nik" id="nik" size="20" maxlength="16" value="" onkeydown="return numbersonly(this, event);" /> * (16 Karakter tanpa spasi)</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">2</td>
                <td>Nama (Sesuai Ijasah)</td>
                <td><input type="text" name="nama" id="nama" size="70" maxlength="101" value="" onkeyup="return xleng(this, event);" style="text-transform:uppercase" />*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Gelar Depan</td>
                <td><input type="text" name="gelar1" id="gelar1" size="50" maxlength="90" value="" onkeyup="return xclear('gelar1');" /> Kosongkan jika tidak ada</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Gelar Belakang</td>
                <td><input type="text" name="gelar2" size="50" maxlength="90" value="" /></td>
              </tr>
              <tr height="22">
                <td height="22" align="right">3</td>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tmpt_lahir" size="55" maxlength="100" value="" />*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">4</td>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" size="12" maxlength="10" id="tgl_lahir" value="" /> *</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">5</td>
                <td>Jenis Kelamin</td>
                <td><select name='jk' class="chosen-select">
                    <option value=""></option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">6</td>
                <td>Ibu Kandung</td>
                <td><input type="text" name="ibu_kandung" size="55" maxlength="100" value="" style="text-transform:uppercase" /></td>
              </tr>
              <tr height="22">
                <td height="22" align="right">7</td>
                <td>Alamat Lengkap</td>
                <td><textarea name="alamat_1" cols="100" rows="5"></textarea>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Provinsi : </td>
                <td>
                  <select name='provinsi' id="propinsi" class="chosen-select" onchange="pilihwilayah(this.value,2)">
                    <option value="0">Pilih Propinsi</option>
                    <option value="0">0 - Blm Terdata</option>
                    <option value="11">11 - ACEH</option>
                    <option value="12">12 - SUMATERA UTARA</option>
                    <option value="13">13 - SUMATERA BARAT</option>
                    <option value="14">14 - RIAU</option>
                    <option value="15">15 - JAMBI</option>
                    <option value="16">16 - SUMATERA SELATAN</option>
                    <option value="17">17 - BENGKULU</option>
                    <option value="18">18 - LAMPUNG</option>
                    <option value="19">19 - KEPULAUAN BANGKA BELITUNG</option>
                    <option value="21">21 - KEPULAUAN RIAU</option>
                    <option value="31">31 - DKI JAKARTA</option>
                    <option value="32">32 - JAWA BARAT</option>
                    <option value="33">33 - JAWA TENGAH</option>
                    <option value="34">34 - D I YOGYAKARTA</option>
                    <option value="35">35 - JAWA TIMUR</option>
                    <option value="36">36 - BANTEN</option>
                    <option value="51">51 - BALI</option>
                    <option value="52">52 - NUSA TENGGARA BARAT</option>
                    <option value="53">53 - NUSA TENGGARA TIMUR</option>
                    <option value="61">61 - KALIMANTAN BARAT</option>
                    <option value="62">62 - KALIMANTAN TENGAH</option>
                    <option value="63">63 - KALIMANTAN SELATAN</option>
                    <option value="64">64 - KALIMANTAN TIMUR</option>
                    <option value="65">65 - KALIMANTAN UTARA</option>
                    <option value="71">71 - SULAWESI UTARA</option>
                    <option value="72">72 - SULAWESI TENGAH</option>
                    <option value="73">73 - SULAWESI SELATAN</option>
                    <option value="74">74 - SULAWESI TENGGARA</option>
                    <option value="75">75 - GORONTALO</option>
                    <option value="76">76 - SULAWESI BARAT</option>
                    <option value="81">81 - MALUKU</option>
                    <option value="82">82 - maluku utara</option>
                    <option value="91">91 - PAPUA BARAT</option>
                    <option value="94">94 - PAPUA</option>

                  </select>
                  &nbsp; <input type="button" onclick="pilihwilayah(9,1)" id="view" class="btn" value="SEARCH" /> &nbsp; *
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Kabupaten/Kota</td>
                <td><select name='kab' id='kab' class="chosen-select" onchange="pilihwilayah(this.value,3)">
                    <option value=""></option>

                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Kecamatan</td>
                <td><select name='kec' id='kec' class="chosen-select">
                    <option value=""></option>

                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Kelurahan/Desa</td>
                <td><input type="text" name="desa" size="50" maxlength="100" value="" />*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- RT / RW</td>
                <td><input type="text" name="rt" size="6" maxlength="3" value="" /> / <input type="text" name="rw" size="6" maxlength="3" value="" />*</td>
              </tr>

              <tr height="22">
                <td height="22" align="right">8</td>
                <td>Agama</td>
                <td><select name='agama' class="chosen-select">
                    <option value=""></option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Aliran Kepercayaan">Aliran Kepercayaan</option>
                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">9</td>
                <td>Status Perkawinan</td>
                <td><select name='stat_kwn' class="chosen-select">
                    <option value=""></option>
                    <option value="Kawin">Kawin</option>
                    <option value="Tidak Kawin">Tidak Kawin</option>
                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">10</td>
                <td>Nomor HP</td>
                <td><input type="text" name="hp1" size="14" maxlength="13" value="" />*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">11</td>
                <td>Nomor HP (WhatsApp)</td>
                <td><input type="text" name="hp2" size="14" maxlength="13" value="" />*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">12</td>
                <td>Alamat E-mail</td>
                <td><input type="text" name="mail" size="40" maxlength="90" value="" />*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">13</td>
                <td>Alamat Facebook</td>
                <td><input type="text" name="fb" size="50" maxlength="50" value="" /></td>
              </tr>
              <tr height="22">
                <td height="22" align="right">14</td>
                <td>Alamat Twitter</td>
                <td><input type="text" name="tw" size="50" maxlength="50" value="" /></td>
              </tr>
              <tr height="22">
                <td height="22" align="right">15</td>
                <td>Pekerjaan Utama</td>
                <td><select name='kerja' class="chosen-select">
                    <option value=""></option>
                    <option value="1">ASN - PNS</option>
                    <option value="7">ASN - P3K</option>
                    <option value="2">Non ASN - Swasta</option>
                    <option value="3">Non ASN (PTT/Kontrak/THL/Magang)</option>
                    <option value="4">Purnabakti</option>
                    <option value="5">TNI/POLRI</option>
                    <option value="6">Lainnya</option>
                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Tempat Kerja Utama</td>
                <td><select name='jenis_tmpt_kerja' class="chosen-select">
                    <option value=""></option>
                    <option value="Puskesmas">Puskesmas</option>
                    <option value="Rumah Sakit">Rumah Sakit</option>
                    <option value="Klinik">Klinik</option>
                    <option value="Balai Kesehatan">Balai Kesehatan</option>
                    <option value="Kementerian Kesehatan">Kementerian Kesehatan</option>
                    <option value="Dinas Kesehatan Provinsi">Dinas Kesehatan Provinsi</option>
                    <option value="Dinas Kesehatan Kab/kota">Dinas Kesehatan Kab/kota</option>
                    <option value="Institusi Pendidikan">Institusi Pendidikan</option>
                    <option value="Institusi Pendidikan dan Pelatihan (Diklat)">Institusi Pendidikan dan Pelatihan (Diklat)</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Nama Tempat Kerja Utama</td>
                <td><input type="text" name="nama_kerja1" size="50" maxlength="100" value="" /></td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Alamat Tempat Kerja Utama</td>
                <td><textarea name="alamat_kerja1" cols="100" rows="5"></textarea></td>
              </tr>

              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Provinsi : </td>
                <td>
                  <select name='provinsikerja' id="propinsikerja" class="chosen-select" onchange="pilihwilayahkerja(this.value,2)">
                    <option value="0">Pilih Propinsi Tempat Kerja utama</option>
                    <option value="0">0 - Blm Terdata</option>
                    <option value="11">11 - ACEH</option>
                    <option value="12">12 - SUMATERA UTARA</option>
                    <option value="13">13 - SUMATERA BARAT</option>
                    <option value="14">14 - RIAU</option>
                    <option value="15">15 - JAMBI</option>
                    <option value="16">16 - SUMATERA SELATAN</option>
                    <option value="17">17 - BENGKULU</option>
                    <option value="18">18 - LAMPUNG</option>
                    <option value="19">19 - KEPULAUAN BANGKA BELITUNG</option>
                    <option value="21">21 - KEPULAUAN RIAU</option>
                    <option value="31">31 - DKI JAKARTA</option>
                    <option value="32">32 - JAWA BARAT</option>
                    <option value="33">33 - JAWA TENGAH</option>
                    <option value="34">34 - D I YOGYAKARTA</option>
                    <option value="35">35 - JAWA TIMUR</option>
                    <option value="36">36 - BANTEN</option>
                    <option value="51">51 - BALI</option>
                    <option value="52">52 - NUSA TENGGARA BARAT</option>
                    <option value="53">53 - NUSA TENGGARA TIMUR</option>
                    <option value="61">61 - KALIMANTAN BARAT</option>
                    <option value="62">62 - KALIMANTAN TENGAH</option>
                    <option value="63">63 - KALIMANTAN SELATAN</option>
                    <option value="64">64 - KALIMANTAN TIMUR</option>
                    <option value="65">65 - KALIMANTAN UTARA</option>
                    <option value="71">71 - SULAWESI UTARA</option>
                    <option value="72">72 - SULAWESI TENGAH</option>
                    <option value="73">73 - SULAWESI SELATAN</option>
                    <option value="74">74 - SULAWESI TENGGARA</option>
                    <option value="75">75 - GORONTALO</option>
                    <option value="76">76 - SULAWESI BARAT</option>
                    <option value="81">81 - MALUKU</option>
                    <option value="82">82 - maluku utara</option>
                    <option value="91">91 - PAPUA BARAT</option>
                    <option value="94">94 - PAPUA</option>

                  </select>
                  &nbsp; <input type="button" onclick="pilihwilayahkerja(9,1)" id="view" class="btn" value="SEARCH" /> &nbsp; *
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Kabupaten/Kota</td>
                <td><select name='kabkerja' id='kabkerja' class="chosen-select" onchange="pilihwilayahkerja(this.value,3)">
                    <option value="0"></option>

                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Kecamatan</td>
                <td><select name='keckerja' id='keckerja' class="chosen-select">
                    <option value="0"></option>

                  </select>*</td>
              </tr>



              <tr>
                <td height="22" align="right">&nbsp;</td>
                <td>Kategori Wilayah</td>
                <td><select name="kategori" class="chosen-select">
                    <option value='0' selected>Pilih Kategori Wilayah</option>
                    <option value='1'>Kota</option>
                    <option value='2'>Pedesaan</option>
                    <option value='3'>Terpencil</option>
                    <option value='4'>Sangat Terpencil</option>
                  </select>
                </td>
              </tr>

              <tr height="22">
                <td height="22" align="right">16</td>
                <td>Pekerjaan Lainnya</td>
                <td><input type="text" name="kerja2" size="50" maxlength="100" value="" /></td>
              </tr>
              <tr height="22">
                <td height="22" align="right">17</td>
                <td>Alamat Tempat kerja Lainnya</td>
                <td><textarea name="alamat_kerja2" cols="100" rows="5"></textarea></td>
              </tr>
              <tr height="22">
                <td height="22" align="right">18</td>
                <td>JABATAN DALAM PEKERJAAN <!--(KHUSUS ASN) --></td>
                <td>*) Diisi sesuai dengan jenis jabatan yang dijabat saat ini </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td colspan="2">
                  <table border="0" width="100%">
                    <tr>
                      <td><input type="radio" name="jab1" value="ASN" /> a. ASN
                        <hr>
                        <table border="0" width="100%" border="1">
                          <tr>
                            <td width="20">&nbsp;</td>
                            <td bgcolor="yellow" align="center">
                              <input type="radio" name="jab2" value="Fungsional" /> Fungsional
                            </td>
                            <td bgcolor="green" align="center"><input type="radio" name="jab2" value="Struktural" /> Struktural</td>
                            <td bgcolor="red" align="center"><input type="radio" name="jab2" value="Lainnya" /> Lainnya</td>

                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>
                              <table border="0" width="100%" border="1">
                                <tr>
                                  <td align="center"><input type="radio" name="rjab3" value="Keterampilan" />Keterampilan</td>
                                  <td align="center"><input type="radio" name="rjab3" value="Keahlian" />Keahlian</td>
                                </tr>
                                <tr>
                                  <td align="center"><select name='jab3' class="chosen-select">
                                      <option value=""></option>
                                      <option value="Ketrampilan - Terampil">Ketrampilan - Terampil</option>
                                      <option value="Ketrampilan - Mahir">Ketrampilan - Mahir</option>
                                      <option value="Ketrampilan - Penyelia">Ketrampilan - Penyelia</option>
                                    </select></td>

                                  <td align="center"><select name='jab3_2' class="chosen-select">
                                      <option value=""></option>
                                      <option value="Keahlian - Ahli Pertama">Keahlian - Ahli Pertama</option>
                                      <option value="Keahlian - Ahli Muda">Keahlian - Ahli Muda</option>
                                      <option value="Keahlian - Ahli Madya">Keahlian - Ahli Madya</option>
                                    </select></td>
                                </tr>
                              </table>
                            </td>

                            <td align="center"><input type="text" name="jab3struktural" size="25" maxlength="50" value="" /></td>

                            <td align="center"><input type="text" name="jab3lainnya" size="25" maxlength="50" value="" /></td>

                          </tr>
                        </table>
                      </td>

                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><input type="radio" name="jab1" value="NON ASN" /> b. Non ASN<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="jabatannonasn" size="25" maxlength="50" value="" />
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Pemberi Layanan Kesgimul</td>
                <td>
                  <input type="radio" id="praktikp2kb" name="praktikp2kb" value="0"> Tidak &nbsp; &nbsp; &nbsp;
                  <input type="radio" id="praktikp2kb" name="praktikp2kb" value="1"> Ya (Praktik)&nbsp; &nbsp; &nbsp;
                  <input type="radio" id="praktikp2kb" name="praktikp2kb" value="2"> Ya (Pendidik)
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">19</td>
                <td>Level Kompetensi (ASN / NON ASN)</td>
                <td><select name='level' class="chosen-select">
                    <option value="Pilih :">Pilih :</option>
                    <option value="PRA TGMK">PRA TGMK</option>
                    <option value="TGMK 1">TGMK 1</option>
                    <option value="TGMK 2">TGMK 2</option>
                    <option value="TGMK 3">TGMK 3</option>
                    <option value="TGMK 4">TGMK 4</option>
                    <option value="TGMK 5">TGMK 5</option>
                  </select></td>
              </tr>
              <tr height="22">
                <td height="22" align="right">20</td>
                <td>Besaran Penghasilan</td>
                <td>
                  <ol>
                    <li><input type='radio' value='0' name='penghasilan'> &nbsp;0</li>
                    <li><input type='radio' value='1' name='penghasilan'> &nbsp;< 1000.000</li>
                    <li><input type='radio' value='2' name='penghasilan'> &nbsp;1000.000 - < 1.500.000</li>
                    <li><input type='radio' value='3' name='penghasilan'> &nbsp;1.500.000 - < 2000.000</li>
                    <li><input type='radio' value='4' name='penghasilan'> &nbsp;2000.000 - <3000.000< /li>
                    <li><input type='radio' value='5' name='penghasilan'> &nbsp;3000.000 - <4000.000< /li>
                    <li><input type='radio' value='6' name='penghasilan'> &nbsp;4000.000 - 5000.000</li>
                    <li><input type='radio' value='7' name='penghasilan'> &nbsp;> 5000.000</li>
                  </ol>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">21</td>
                <td>Pangkat / Gol *) (Khusus ASN)</td>
                <td><select name='gol' class="chosen-select">
                    <option value=""></option>
                    <option value="IIa pengatur muda">IIa pengatur muda</option>
                    <option value="IIb pengatur muda tingkat I">IIb pengatur muda tingkat I</option>
                    <option value="IIc pengatur">IIc pengatur</option>
                    <option value="IId pengatur tingkat I">IId pengatur tingkat I</option>
                    <option value="IIIa penata muda">IIIa penata muda</option>
                    <option value="IIIb penata muda tingkat I">IIIb penata muda tingkat I</option>
                    <option value="IIIc penata">IIIc penata</option>
                    <option value="IIId penata tingkat I">IIId penata tingkat I</option>
                    <option value="IVa pembina">IVa pembina</option>
                    <option value="IVb pembina tingkat I">IVb pembina tingkat I</option>
                    <option value="IVc Pembina utama muda">IVc Pembina utama muda</option>
                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">22</td>
                <td>TMT Pangkat/ Gol (Khusus ASN)</td>
                <td><input type="text" name="tmt_gol" size="12" maxlength="10" value="" id="tmt_pangkat" /> *</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">23</td>
                <td>STR dan SIP</td>
                <td>&nbsp;</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- STR</td>
                <td>
                  <table width="83%" border="0">

                    <tr>
                      <td width="40%">- No. STR</td>
                      <td width="6%">:</td>
                      <td width="54%"><input type="text" name="str" size="50" maxlength="50" value="" /> * Hindari penggunaan tanda "/" (garis miring)</td>
                    </tr>
                    <tr>
                      <td>- Tanggal Mulai Berlaku STR </td>
                      <td>:</td>
                      <td><input type="text" name="tmt_str" size="12" maxlength="10" id="tmt_str" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                    <tr>
                      <td>- Tanggal Akhir Berlaku STR </td>
                      <td>:</td>
                      <td><input type="text" name="tat_str" size="12" maxlength="10" id="tat_str" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- SIP Faskes 1 (jika ada)</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td width="33%">- No. SIP</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="sip1" size="50" maxlength="50" value="" /> * Hindari penggunaan tanda "/" (garis miring)</td>
                    </tr>
                    <tr>
                      <td>- TMT SIP</td>
                      <td>:</td>
                      <td><input type="text" name="tmt_sip1" size="12" maxlength="10" id="tmt_sip1" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- SIP Faskes 2 (jika ada)</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td width="33%">- No. SIP</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="sip2" size="50" maxlength="50" value="" /> * Hindari penggunaan tanda "/" (garis miring)</td>
                    </tr>
                    <tr>
                      <td>- TMT SIP</td>
                      <td>:</td>
                      <td><input type="text" name="tmt_sip2" size="12" maxlength="10" id="tmt_sip2" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- SIP Mandiri 1 (jika ada)</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td width="33%">- No. SIP</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="sip3" size="50" maxlength="50" value="" /> * Hindari penggunaan tanda "/" (garis miring)</td>
                    </tr>
                    <tr>
                      <td>- TMT SIP</td>
                      <td>:</td>
                      <td><input type="text" name="tmt_sip3" size="12" maxlength="10" id="tmt_sip3" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- SIP Mandiri 2 (jika ada)</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td width="33%">- No. SIP</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="sip4" size="50" maxlength="50" value="" /> * Hindari penggunaan tanda "/" (garis miring)</td>
                    </tr>
                    <tr>
                      <td>- TMT SIP</td>
                      <td>:</td>
                      <td><input type="text" name="tmt_sip4" size="12" maxlength="10" id="tmt_sip4" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">24</td>
                <td>Jenjang Pendidikan</td>
                <td>&nbsp;</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- SPRG</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td width="33%">- Tahun Lulus</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="thn_sprg" size="6" maxlength="4" value="" /></td>
                    </tr>
                    <tr>
                      <td>- No. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="ijazah_sprg" size="20" maxlength="20" value="" /> * Hindari penggunaan tanda "/" (garis miring)</td>
                    </tr>
                    <tr>
                      <td>- Tgl. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="tgl_sprg" size="12" maxlength="10" id="tgl_sprg" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                    <tr>
                      <td>- Institusi Pendidikan</td>
                      <td>:</td>
                      <td><input type="text" name="kampus_sprg" id="kampus_sprg" size="50" maxlength="100" value="" /></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- D-III</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td width="33%">- Tahun Lulus</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="thn_d3" size="6" maxlength="4" value="" /></td>
                    </tr>
                    <tr>
                      <td>- No. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="ijazah_d3" size="20" maxlength="20" value="" /> * Hindari penggunaan tanda "/" (garis miring)</td>
                    </tr>
                    <tr>
                      <td>- Tgl. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="tgl_d3" size="12" maxlength="10" id="tgl_d3" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                    <tr>
                      <td>- Institusi Pendidikan</td>
                      <td>:</td>
                      <td><input type="text" name="kampus_d3" id="kampus_d3" size="50" maxlength="100" value="" /></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- D-IV / S-1</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td>- Linier/Non Linier</td>
                      <td>:</td>
                      <td><select name='linier_d4' class="chosen-select">
                          <option value=""></option>
                          <option value="Linier Profesi">Linier Profesi</option>
                          <option value="Non Linier">Non Linier</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td>- Program Studi</td>
                      <td>:</td>
                      <td><input type="text" name="prodi_d4" id="prodi_d4" size="30" maxlength="30" value="" onkeyup="return xclear('prodi_d4');" /> Kosongkan jika tidak ada</td>
                    </tr>
                    <tr>
                      <td width="33%">- Tahun Lulus</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="thn_d4" id="thn_d4" size="6" maxlength="4" value="" onkeyup="return xclear('thn_d4');" /> Kosongkan jika tidak ada</td>
                    </tr>
                    <tr>
                      <td>- No. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="ijazah_d4" id="ijazah_d4" size="20" maxlength="20" value="" onkeyup="return xclear('ijazah_d4');" /> Kosongkan jika tidak ada dan Hindari penggunaan tanda "/" (garis miring)*</td>
                    </tr>
                    <tr>
                      <td>- Tgl. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="tgl_d4" size="12" maxlength="10" id="tgl_d4" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                    <tr>
                      <td>- Institusi Pendidikan</td>
                      <td>:</td>
                      <td><input type="text" name="kampus_d4" id="kampus_d4" size="50" maxlength="100" value="" onkeyup="return xclear('kampus_d4');" /> Kosongkan jika tidak ada</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- S-2</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td>- Linier/Non Linier</td>
                      <td>:</td>
                      <td><select name='linier_s2' class="chosen-select">
                          <option value=""></option>
                          <option value="Linier Profesi">Linier Profesi</option>
                          <option value="Non Linier">Non Linier</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td>- Program Studi</td>
                      <td>:</td>
                      <td><input type="text" name="prodi_s2" id="prodi_s2" size="30" maxlength="30" value="" onkeyup="return xclear('prodi_s2');" /> Kosongkan jika tidak ada</td>
                    </tr>
                    <tr>
                      <td width="33%">- Tahun Lulus</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="thn_s2" id="thn_s2" size="6" maxlength="4" value="" onkeyup="return xclear('thn_s2');" /> Kosongkan jika tidak ada*</td>
                    </tr>
                    <tr>
                      <td>- No. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="ijazah_s2" id="ijazah_s2" size="20" maxlength="20" value="" onkeyup="return xclear('ijazah_s2');" /> Kosongkan jika tidak ada dan Hindari penggunaan tanda "/" (garis miring)*</td>
                    </tr>
                    <tr>
                      <td>- Tgl. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="tgl_s2" size="12" maxlength="10" id="tgl_s2" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                    <tr>
                      <td>- Institusi Pendidikan</td>
                      <td>:</td>
                      <td><input type="text" name="kampus_s2" id="kampus_s2" size="50" maxlength="100" value="" onkeyup="return xclear('kampus_s2');" /> Kosongkan jika tidak ada</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- S-3</td>
                <td>
                  <table width="83%" border="0">
                    <tr>
                      <td>- Linier/Non Linier</td>
                      <td>:</td>
                      <td><select name='linier_s3' class="chosen-select">
                          <option value=""></option>
                          <option value="Linier Profesi">Linier Profesi</option>
                          <option value="Non Linier">Non Linier</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td>- Program Studi</td>
                      <td>:</td>
                      <td><input type="text" name="prodi_s3" size="30" maxlength="30" value="" onkeyup="return xclear('prodi_s2');" /> Kosongkan jika tidak ada</td>
                    </tr>
                    <tr>
                      <td width="33%">- Tahun Lulus</td>
                      <td width="6%">:</td>
                      <td width="61%"><input type="text" name="thn_s3" id="thn_s3" size="6" maxlength="4" value="" onkeyup="return xclear('thn_s3');" /> Kosongkan jika tidak ada*</td>
                    </tr>
                    <tr>
                      <td>- No. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="ijazah_s3" id="ijazah_s3" size="20" maxlength="20" value="" onkeyup="return xclear('ijazah_s3');" /> Kosongkan jika tidak ada dan Hindari penggunaan tanda "/" (garis miring)*</td>
                    </tr>
                    <tr>
                      <td>- Tgl. Ijazah</td>
                      <td>:</td>
                      <td><input type="text" name="tgl_s3" size="12" maxlength="10" id="tgl_s3" value="" />
                        *) diisi dengan (YYYY-MM-DD) </td>
                    </tr>
                    <tr>
                      <td>- Institusi Pendidikan</td>
                      <td>:</td>
                      <td><input type="text" name="kampus_s3" id="kampus_s3" size="50" maxlength="100" value="" onkeyup="return xclear('kampus_s3');" /> Kosongkan jika tidak ada</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr height="22">
                <td height="22" align="right">25</td>
                <td>DPD tempat mendaftar</td>
                <td><select name='dpd' id='dpd' class="chosen-select" onchange="pilihwilayah(this.value,4)">
                    <option value=""></option>

                  </select> &nbsp; <input type="button" onclick="pilihwilayah(9,1)" id="view" class="btn" value="SEARCH" /> &nbsp;*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">26</td>
                <td>DPC tempat mendaftar</td>
                <td><select name='dpc' id='dpc' class="chosen-select">
                    <option value=""></option>

                  </select>*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">27</td>
                <td colspan="2">AKUN UNTUK MENGAKSES APLIKASI SIKAP</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Username </td>
                <td><input type="text" name="usern" size="20" maxlength="50" value="" />*</td>
              </tr>
              <tr height="22">
                <td height="22" align="right">&nbsp;</td>
                <td>- Password</td>
                <td><input type="password" name="pasw" size="20" maxlength="50" value="" />*</td>
              </tr>
              <!--
       <tr height="22">
         <td height="22" align="right">&nbsp;</td>
         <td>- Pertanyaan Pemulihan Password</td>
         <td><input type="text" name="recover_quest" id="recover_quest" size="70" maxlength="100" value="" />*</td>
       </tr>
        <tr height="22">
         <td height="22" align="right">&nbsp;</td>
         <td>- Jawaban :</td>
         <td> <input type="text" name="recover_answ" size="25" maxlength="30" value="" />*</td>
       </tr>
       -->
              <tr height="22">
                <td height="22" align="right">28</td>
                <td>Photo </td>
                <td><input type="file" name="foto" id="foto" onchange="displayPreview(this.files);"> <span id="ukuran"></span> / Max. 15 kb
                  <div id="image-holder">
                  </div>
                  <script>
                    $("#foto").on('change', function() {

                      //Get count of selected files
                      var countFiles = $(this)[0].files.length;

                      var imgPath = $(this)[0].value;
                      var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                      var image_holder = $("#image-holder");
                      image_holder.empty();

                      var x = document.getElementById("foto");
                      var file = x.files[0];

                      if (extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "gif") {
                        if (typeof(FileReader) != "undefined") {

                          //loop for each file selected for uploaded.
                          for (var i = 0; i < countFiles; i++) {

                            var reader = new FileReader();
                            reader.onload = function(e) {
                              $("<img />", {
                                "src": e.target.result,
                                "class": "thumb-image"
                              }).appendTo(image_holder);
                            }

                            image_holder.show();
                            reader.readAsDataURL($(this)[0].files[i]);
                          }

                        } else {
                          alert("This browser does not support FileReader.");
                        }
                      } else {
                        alert("hanya boleh foto bertype PNG, JPG dan GIF");
                        var control = $("#foto");
                        control.replaceWith(control.val('').clone(true));
                      }
                    });
                  </script>
                  <input type="button" id="batal" class="btn" onclick="pembatalan();" value="Batalkan Upload" style="display:none" />
                </td>
              </tr>
              <tr height="22">
                <td colspan='3'>
                  <p><input name="" type="checkbox" value="" /> Dengan ini saya menyatakan bahwa data yang saya masukkan di dalam form diatas adalah data yang sebenar-benarnya. Data ini secara sadar saya bagikan ke DPC, DPD, maupun DPP PTGMI untuk dipergunakan sebgaimana mestinya.</p>
                  <br /><br />
                  <input type="submit" name="kirim" id="kirim" value="DAFTARKAN SAYA" size="6" maxlength="3" />
                </td>
              </tr>
            </table>
          </form>
          <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
      <!--begin::To the end-->
      <div class="float-end d-none d-sm-inline">Anything you want</div>
      <!--end::To the end-->
      <!--begin::Copyright-->
      <strong>
        Copyright &copy; 2014-2025&nbsp;
        <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
      </strong>
      All rights reserved.
      <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"></script>
  <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous"></script>
  <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
    crossorigin="anonymous"></script>
  <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
  <script src="https://portal.sofwanromli.my.id/public/js/adminlte.js"></script>
  <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
  <script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function() {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
          },
        });
      }
    });
  </script>
  <!--end::OverlayScrollbars Configure-->
  <!-- OPTIONAL SCRIPTS -->
  <!-- sortablejs -->
  <script
    src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
    crossorigin="anonymous"></script>
  <!-- sortablejs -->
  <script>
    new Sortable(document.querySelector('.connectedSortable'), {
      group: 'shared',
      handle: '.card-header',
    });

    const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
    cardHeaders.forEach((cardHeader) => {
      cardHeader.style.cursor = 'move';
    });
  </script>
  <!-- apexcharts -->
  <script
    src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
    crossorigin="anonymous"></script>
  <!-- ChartJS -->
  <script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    const sales_chart_options = {
      series: [{
          name: 'Digital Goods',
          data: [28, 48, 40, 19, 86, 27, 90],
        },
        {
          name: 'Electronics',
          data: [65, 59, 80, 81, 56, 55, 40],
        },
      ],
      chart: {
        height: 300,
        type: 'area',
        toolbar: {
          show: false,
        },
      },
      legend: {
        show: false,
      },
      colors: ['#0d6efd', '#20c997'],
      dataLabels: {
        enabled: false,
      },
      stroke: {
        curve: 'smooth',
      },
      xaxis: {
        type: 'datetime',
        categories: [
          '2023-01-01',
          '2023-02-01',
          '2023-03-01',
          '2023-04-01',
          '2023-05-01',
          '2023-06-01',
          '2023-07-01',
        ],
      },
      tooltip: {
        x: {
          format: 'MMMM yyyy',
        },
      },
    };

    const sales_chart = new ApexCharts(
      document.querySelector('#revenue-chart'),
      sales_chart_options,
    );
    sales_chart.render();
  </script>
  <!-- jsvectormap -->
  <script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
    integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
    integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
    crossorigin="anonymous"></script>
  <!-- jsvectormap -->
  <script>
    // World map by jsVectorMap
    new jsVectorMap({
      selector: '#world-map',
      map: 'world',
    });

    // Sparkline charts
    const option_sparkline1 = {
      series: [{
        data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
      }, ],
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: 'straight',
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ['#DCE6EC'],
    };

    const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
    sparkline1.render();

    const option_sparkline2 = {
      series: [{
        data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
      }, ],
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: 'straight',
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ['#DCE6EC'],
    };

    const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
    sparkline2.render();

    const option_sparkline3 = {
      series: [{
        data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
      }, ],
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: 'straight',
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ['#DCE6EC'],
    };

    const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
    sparkline3.render();
  </script>
  <!--end::Script-->
</body>
<!--end::Body-->

</html>
<!-- DEBUG-VIEW ENDED 1 APPPATH/Views/welcome_message.php -->