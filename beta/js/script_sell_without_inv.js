!function(){!function(u,p,t){'use strict';function e(){if(!('scrollBehavior'in p.documentElement.style)){var t=u.HTMLElement||u.Element,i=468,c={scroll:u.scroll||u.scrollTo,scrollBy:u.scrollBy,elScroll:t.prototype.scroll||d,scrollIntoView:t.prototype.scrollIntoView},a=u.performance&&u.performance.now?u.performance.now.bind(u.performance):Date.now;u.scroll=u.scrollTo=function(){l(arguments[0])?c.scroll.call(u,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):n.call(u,p.body,~~arguments[0].left,~~arguments[0].top)},u.scrollBy=function(){l(arguments[0])?c.scrollBy.call(u,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):n.call(u,p.body,~~arguments[0].left+(u.scrollX||u.pageXOffset),~~arguments[0].top+(u.scrollY||u.pageYOffset))},t.prototype.scroll=t.prototype.scrollTo=function(){l(arguments[0])?c.elScroll.call(this,arguments[0].left||arguments[0],arguments[0].top||arguments[1]):n.call(this,this,arguments[0].left,arguments[0].top)},t.prototype.scrollBy=function(){var t=arguments[0];'object'==typeof t?this.scroll({left:t.left+this.scrollLeft,top:t.top+this.scrollTop,behavior:t.behavior}):this.scroll(this.scrollLeft+t,this.scrollTop+arguments[1])},t.prototype.scrollIntoView=function(){if(l(arguments[0]))c.scrollIntoView.call(this,arguments[0]||!0);else{var t=
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
       */(this),e=t.getBoundingClientRect(),o=this.getBoundingClientRect();t!==p.body?(n.call(this,t,t.scrollLeft+o.left-e.left,t.scrollTop+o.top-e.top),u.scrollBy({left:e.left,top:e.top,behavior:'smooth'})):u.scrollBy({left:o.left,top:o.top,behavior:'smooth'})}}}
/**
       * changes scroll position inside an element
       * @method scrollElement
       * @param {Number} x
       * @param {Number} y
       */
function d(t,e){this.scrollLeft=t,this.scrollTop=e}
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
function l(t){if('object'!=typeof t||null===t||void 0===t.behavior||'auto'===t.behavior||'instant'===t.behavior)return!0;if('object'==typeof t&&'smooth'===t.behavior)return!1;throw new TypeError('behavior not valid')}function f(t){var e,o,l,n=(a()-t.startTime)/i;e=function(t){return.5*(1-Math.cos(Math.PI*t))}(n=1<n?1:n),o=t.startX+(t.x-t.startX)*e,l=t.startY+(t.y-t.startY)*e,t.method.call(t.scrollable,o,l),o===t.x&&l===t.y||u.requestAnimationFrame(f.bind(u,t))}
/**
       * scrolls window with a smooth behavior
       * @method smoothScroll
       * @param {Object|Node} el
       * @param {Number} x
       * @param {Number} y
       */function n(t,e,o){var l,n,i,r,s=a();r=t===p.body?(n=(l=u).scrollX||u.pageXOffset,i=u.scrollY||u.pageYOffset,c.scroll):(n=(l=t).scrollLeft,i=t.scrollTop,d),f({scrollable:l,method:r,startTime:s,startX:n,startY:i,x:e,y:o})}}'object'==typeof exports?module.exports={polyfill:e}:e()}(window,document);var o,e,l,n,i,t=function(){function o(t){var e=t.firstElementChild,o=e.getBoundingClientRect().width,l=e.scrollWidth,n=e.scrollLeft;l<=o?(t.classList.remove('fade-start'),t.classList.remove('fade-end')):0===n?(t.classList.remove('fade-start'),t.classList.add('fade-end')):0<n&&n<l-o?(t.classList.add('fade-start'),t.classList.add('fade-end')):(t.classList.add('fade-start'),t.classList.remove('fade-end'))}return{init:function(){!function(){for(var t=document.querySelectorAll('.scroll-wrapper'),e=t.length;e--;)t[e].firstElementChild.addEventListener('scroll',o.bind(null,t[e])),window.addEventListener('resize',o.bind(null,t[e])),o(t[e])}()},scrollFade:function(t){o(t)}}}();function r(){var t=this.getAttribute('data-tribe'),e=document.getElementsByClassName(t)[0].getBoundingClientRect().top,o=window.pageYOffset||document.documentElement.scrollTop;window.scroll({top:o+e-(n+l),left:0,behavior:'smooth'})}function s(){for(var t=e.length;t--;)if(e[t].getBoundingClientRect().top<window.innerHeight/2-window.innerHeight/3+(n+l)){c(e[t].classList[0]);break}i[0].getBoundingClientRect().top<n+1&&i[1].classList.add('subnav--floating'),i[0].getBoundingClientRect().top>n+1&&i[1].classList.remove('subnav--floating')}function c(t){!function(){for(var t=document.getElementsByClassName('subnav__tab'),e=t.length;e--;)t[e].classList.remove('is-active')}();for(var e=o.length;e--;){if(o[e].getAttribute('data-tribe')==t){o[e].classList.add('is-active'),a();break}if('subnav'==t||'teaser'==t){o[0].classList.add('is-active'),a();break}}}function a(){if(document.querySelector('.subnav__tab.is-active')){var t=document.querySelector('.subnav__tab.is-active'),e=t.getBoundingClientRect().left,o=t.offsetWidth/2,l=window.innerWidth/2;document.querySelector('.subnav__wrapper').scrollLeft+=e-l+o}}function d(){l=768<=window.innerWidth?(n=70,56):(n=50,38)}function f(){o=document.querySelectorAll('.subnav__tab'),e=document.querySelectorAll('section'),i=document.querySelectorAll('.subnav'),function(){for(var t=o.length;t--;)o[t].addEventListener('click',r);window.document.addEventListener('scroll',s),window.addEventListener('resize',d)}(),d(),s()}function u(){window.addEventListener('resize',p),document.querySelector('.js-textlink').addEventListener('click',r),f(),function(){for(var t=document.querySelectorAll('.js-accordion'),e=t.length;e--;)t[e].addEventListener('click',o);function o(){this.classList.toggle('is-open')}}(),t.init(),p()}function p(){var t=document.querySelectorAll('.earningMoney__tile'),e=document.querySelectorAll('.earningMoney__plus'),o=t[1].offsetHeight,l=e[1].offsetHeight;if(t[0].style.height=o+'px',t[2].style.height=o+'px',991<window.innerWidth)for(var n=e.length;n--;)e[n].style.marginTop=o/2-l/2+'px';else for(n=e.length;n--;)e[n].style.marginTop='0px'}window.onload=function(){u()}}();