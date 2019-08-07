!function(){!function(u,p,t){'use strict';function e(){if(!('scrollBehavior'in p.documentElement.style)){var t=u.HTMLElement||u.Element,n=468,c={scroll:u.scroll||u.scrollTo,scrollBy:u.scrollBy,elScroll:t.prototype.scroll||f,scrollIntoView:t.prototype.scrollIntoView},a=u.performance&&u.performance.now?u.performance.now.bind(u.performance):Date.now;u.scroll=u.scrollTo=function(){l(arguments[0])?c.scroll.call(u,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):r.call(u,p.body,~~arguments[0].left,~~arguments[0].top)},u.scrollBy=function(){l(arguments[0])?c.scrollBy.call(u,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):r.call(u,p.body,~~arguments[0].left+(u.scrollX||u.pageXOffset),~~arguments[0].top+(u.scrollY||u.pageYOffset))},t.prototype.scroll=t.prototype.scrollTo=function(){l(arguments[0])?c.elScroll.call(this,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):r.call(this,this,arguments[0].left,arguments[0].top)},t.prototype.scrollBy=function(){var t=arguments[0];'object'==typeof t?this.scroll({left:t.left+this.scrollLeft,top:t.top+this.scrollTop,behavior:t.behavior}):this.scroll(this.scrollLeft+t,this.scrollTop+arguments[1])},t.prototype.scrollIntoView=function(){if(l(arguments[0]))c.scrollIntoView.call(this,arguments[0]||!0);else{var t=
/**
       * finds scrollable parent of an element
       * @method findScrollableParent
       * @param {Node} el
       * @returns {Node} el
       */
function(t){for(var e,o,l;e=(t=t.parentNode)===p.body,o=t.clientHeight<t.scrollHeight||t.clientWidth<t.scrollWidth,l='visible'===u.getComputedStyle(t,null).overflow,!e&&(!o||l););return e=o=l=null,t}
/**
       * self invoked function that, given a context, steps through scrolling
       * @method step
       * @param {Object} context
       */(this),e=t.getBoundingClientRect(),o=this.getBoundingClientRect();t!==p.body?(r.call(this,t,t.scrollLeft+o.left-e.left,t.scrollTop+o.top-e.top),u.scrollBy({left:e.left,top:e.top,behavior:'smooth'})):u.scrollBy({left:o.left,top:o.top,behavior:'smooth'})}}}
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
function l(t){if('object'!=typeof t||null===t||void 0===t.behavior||'auto'===t.behavior||'instant'===t.behavior)return!0;if('object'==typeof t&&'smooth'===t.behavior)return!1;throw new TypeError('behavior not valid')}function d(t){var e,o,l,r=(a()-t.startTime)/n;e=function(t){return.5*(1-Math.cos(Math.PI*t))}(r=1<r?1:r),o=t.startX+(t.x-t.startX)*e,l=t.startY+(t.y-t.startY)*e,t.method.call(t.scrollable,o,l),o===t.x&&l===t.y||u.requestAnimationFrame(d.bind(u,t))}
/**
       * scrolls window with a smooth behavior
       * @method smoothScroll
       * @param {Object|Node} el
       * @param {Number} x
       * @param {Number} y
       */function r(t,e,o){var l,r,n,i,s=a();i=t===p.body?(r=(l=u).scrollX||u.pageXOffset,n=u.scrollY||u.pageYOffset,c.scroll):(r=(l=t).scrollLeft,n=t.scrollTop,f),d({scrollable:l,method:i,startTime:s,startX:r,startY:n,x:e,y:o})}}'object'==typeof exports?module.exports={polyfill:e}:e()}(window,document);var o,e,l,r,n,t=function(){function o(t){var e=t.firstElementChild,o=e.getBoundingClientRect().width,l=e.scrollWidth,r=e.scrollLeft;l<=o?(t.classList.remove('fade-start'),t.classList.remove('fade-end')):0===r?(t.classList.remove('fade-start'),t.classList.add('fade-end')):0<r&&r<l-o?(t.classList.add('fade-start'),t.classList.add('fade-end')):(t.classList.add('fade-start'),t.classList.remove('fade-end'))}return{init:function(){!function(){for(var t=document.querySelectorAll('.scroll-wrapper'),e=t.length;e--;)t[e].firstElementChild.addEventListener('scroll',o.bind(null,t[e])),window.addEventListener('resize',o.bind(null,t[e])),o(t[e])}()},scrollFade:function(t){o(t)}}}();function i(){if(document.querySelector('.subnav__tab.is-active')){var t=document.querySelector('.subnav__tab.is-active'),e=t.getBoundingClientRect().left,o=t.offsetWidth/2,l=window.innerWidth/2;document.querySelector('.subnav__wrapper').scrollLeft+=e-l+o}}function s(){var t=this.getAttribute('data-tribe'),e=document.querySelector('.'+t);window.scroll({top:e.offsetTop-150,behavior:'smooth'})}function c(){for(var t=e.length;t--;)if(e[t].getBoundingClientRect().top<window.innerHeight/2-window.innerHeight/3+(r+l)){a(e[t].className);break}n[0].getBoundingClientRect().top<r+1&&n[1].classList.add('subnav--floating'),n[0].getBoundingClientRect().top>r+1&&n[1].classList.remove('subnav--floating')}function a(t){!function(){for(var t=document.getElementsByClassName('subnav__tab'),e=t.length;e--;)t[e].classList.remove('is-active')}();for(var e=o.length;e--;){if(o[e].getAttribute('data-tribe')===t){o[e].classList.add('is-active'),i();break}if('subnav'===t||'teaser'===t){o[0].classList.add('is-active'),i();break}}}window.onload=function(){t.init(),o=document.querySelectorAll('.subnav__tab'),e=document.querySelectorAll('section'),n=document.querySelectorAll('.subnav'),function(){for(var t=o.length;t--;)o[t].addEventListener('click',s);window.document.addEventListener('scroll',c)}(),l=768<=window.innerWidth?(r=70,56):(r=50,38),c()}}();