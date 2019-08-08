!function(){!function(u,v,t){'use strict';function e(){if(!('scrollBehavior'in v.documentElement.style)){var t=u.HTMLElement||u.Element,s=468,c={scroll:u.scroll||u.scrollTo,scrollBy:u.scrollBy,elScroll:t.prototype.scroll||f,scrollIntoView:t.prototype.scrollIntoView},a=u.performance&&u.performance.now?u.performance.now.bind(u.performance):Date.now;u.scroll=u.scrollTo=function(){l(arguments[0])?c.scroll.call(u,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):r.call(u,v.body,~~arguments[0].left,~~arguments[0].top)},u.scrollBy=function(){l(arguments[0])?c.scrollBy.call(u,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):r.call(u,v.body,~~arguments[0].left+(u.scrollX||u.pageXOffset),~~arguments[0].top+(u.scrollY||u.pageYOffset))},t.prototype.scroll=t.prototype.scrollTo=function(){l(arguments[0])?c.elScroll.call(this,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):r.call(this,this,arguments[0].left,arguments[0].top)},t.prototype.scrollBy=function(){var t=arguments[0];'object'==typeof t?this.scroll({left:t.left+this.scrollLeft,top:t.top+this.scrollTop,behavior:t.behavior}):this.scroll(this.scrollLeft+t,this.scrollTop+arguments[1])},t.prototype.scrollIntoView=function(){if(l(arguments[0]))c.scrollIntoView.call(this,arguments[0]||!0);else{var t=
/**
       * finds scrollable parent of an element
       * @method findScrollableParent
       * @param {Node} el
       * @returns {Node} el
       */
function(t){for(var e,o,l;e=(t=t.parentNode)===v.body,o=t.clientHeight<t.scrollHeight||t.clientWidth<t.scrollWidth,l='visible'===u.getComputedStyle(t,null).overflow,!e&&(!o||l););return e=o=l=null,t}
/**
       * self invoked function that, given a context, steps through scrolling
       * @method step
       * @param {Object} context
       */(this),e=t.getBoundingClientRect(),o=this.getBoundingClientRect();t!==v.body?(r.call(this,t,t.scrollLeft+o.left-e.left,t.scrollTop+o.top-e.top),u.scrollBy({left:e.left,top:e.top,behavior:'smooth'})):u.scrollBy({left:o.left,top:o.top,behavior:'smooth'})}}}
/**
       * changes scroll position inside an element
       * @method scrollElement
       * @param {Number} x
       * @param {Number} y
       */
function f(t,e){this.scrollLeft=t,this.scrollTop=e}
/**
       * returns result of applying ease math function to a number
       * @method ease
       * @param {Number} k
       * @returns {Number}
       */
/**
       * indicates if a smooth behavior should be applied
       * @method shouldBailOut
       * @param {Number|Object} x
       * @returns {Boolean}
       */
function l(t){if('object'!=typeof t||null===t||void 0===t.behavior||'auto'===t.behavior||'instant'===t.behavior)return!0;if('object'==typeof t&&'smooth'===t.behavior)return!1;throw new TypeError('behavior not valid')}function d(t){var e,o,l,r=(a()-t.startTime)/s;e=function(t){return.5*(1-Math.cos(Math.PI*t))}(r=1<r?1:r),o=t.startX+(t.x-t.startX)*e,l=t.startY+(t.y-t.startY)*e,t.method.call(t.scrollable,o,l),o===t.x&&l===t.y||u.requestAnimationFrame(d.bind(u,t))}
/**
       * scrolls window with a smooth behavior
       * @method smoothScroll
       * @param {Object|Node} el
       * @param {Number} x
       * @param {Number} y
       */function r(t,e,o){var l,r,s,i,n=a();i=t===v.body?(r=(l=u).scrollX||u.pageXOffset,s=u.scrollY||u.pageYOffset,c.scroll):(r=(l=t).scrollLeft,s=t.scrollTop,f),d({scrollable:l,method:i,startTime:n,startX:r,startY:s,x:e,y:o})}}'object'==typeof exports?module.exports={polyfill:e}:e()}(window,document);var l,o,r,s,i,t=function(){function o(t){var e=t.firstElementChild,o=e.getBoundingClientRect().width,l=e.scrollWidth,r=e.scrollLeft;l<=o?(t.classList.remove('fade-start'),t.classList.remove('fade-end')):0===r?(t.classList.remove('fade-start'),t.classList.add('fade-end')):0<r&&r<l-o?(t.classList.add('fade-start'),t.classList.add('fade-end')):(t.classList.add('fade-start'),t.classList.remove('fade-end'))}return{init:function(){!function(){for(var t=document.querySelectorAll('.scroll-wrapper'),e=t.length;e--;)t[e].firstElementChild.addEventListener('scroll',o.bind(null,t[e])),window.addEventListener('resize',o.bind(null,t[e])),o(t[e])}()},scrollFade:function(t){o(t)}}}(),e=function(){var r,t,o,l,s,i;function e(){r=document.querySelector('.js-counter'),t=new Date(2017,8,19,0),s=514571,o=new Date,l=Math.round(Math.abs((t.getTime()-o.getTime())/864e5)),function(){var t,e;t=o.getHours(),600,e=Math.ceil(600/t)+600*(l-1),i=s+e}(),function(){var o,l;l=i-1e4,o=1,function t(){l<i&&(i-l<50?(o+=10,l++):i-l<300?(o+=5,l+=21):(o++,l+=51),r.innerHTML=e=(e=(e=l).toString()).substr(0,3)+','+e.substr(3),window.setTimeout(t,Math.pow(o,2)/5e3));var e}()}()}return{init:function(){e()}}}();function n(t){var e,o;e=t.getAttribute('data-tribe'),o=document.querySelector('.js-tabs [data-tribe='+e+']'),window.scroll({top:l.offsetTop-50,behavior:'smooth'}),c(o)}function c(t){for(var e=o.length;e--;)o[e].classList.contains('is-active')&&o[e].classList.remove('is-active');t.classList.add('is-active'),function(t){for(var e=t.getAttribute('data-tribe'),o=s.length;o--;)s[o].classList.contains(e)?s[o].classList.add('is-active'):s[o].classList.remove('is-active')}(t),function(t){for(var e=t.getAttribute('data-tribe'),o=r.length;o--;)r[o].classList.contains(e)?r[o].classList.add('is-active'):r[o].classList.remove('is-active')}(t)}function a(){l=document.querySelector('.featured-list'),o=document.querySelectorAll('.js-tabs li'),r=document.querySelectorAll('.js-tab-content > div'),s=document.querySelectorAll('.js-teaser div'),i=document.querySelectorAll('.js-tile-links .featured-discover__link'),function(){for(var t=o.length;t--;)o[t].addEventListener('click',c.bind(null,o[t]));for(var e=i.length;e--;)i[e].addEventListener('click',n.bind(null,i[e]))}(),t.init(),e.init()}window.onload=function(){a()}}();