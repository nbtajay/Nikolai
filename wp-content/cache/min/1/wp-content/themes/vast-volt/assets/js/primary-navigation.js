function twentytwentyoneToggleAriaExpanded(el,withListeners){if('true'!==el.getAttribute('aria-expanded')){el.setAttribute('aria-expanded','true');twentytwentyoneSubmenuPosition(el.parentElement);if(withListeners){document.addEventListener('click',twentytwentyoneCollapseMenuOnClickOutside)}}else{el.setAttribute('aria-expanded','false');if(withListeners){document.removeEventListener('click',twentytwentyoneCollapseMenuOnClickOutside)}}}
function twentytwentyoneCollapseMenuOnClickOutside(event){if(!document.getElementById('site-navigation').contains(event.target)){document.getElementById('site-navigation').querySelectorAll('.sub-menu-toggle').forEach(function(button){button.setAttribute('aria-expanded','false')})}}
function twentytwentyoneSubmenuPosition(li){var subMenu=li.querySelector('ul.sub-menu'),rect,right,left,windowWidth;if(!subMenu){return}
rect=subMenu.getBoundingClientRect();right=Math.round(rect.right);left=Math.round(rect.left);windowWidth=Math.round(window.innerWidth);if(right>windowWidth){subMenu.classList.add('submenu-reposition-right')}else if(document.body.classList.contains('rtl')&&left<0){subMenu.classList.add('submenu-reposition-left')}}
function twentytwentyoneExpandSubMenu(el){el.closest('nav').querySelectorAll('.sub-menu-toggle').forEach(function(button){if(button!==el){button.setAttribute('aria-expanded','false')}});twentytwentyoneToggleAriaExpanded(el,!0);el.parentNode.querySelectorAll('ul > li:last-child > a').forEach(function(linkEl){linkEl.addEventListener('blur',function(event){if(!el.parentNode.contains(event.relatedTarget)){el.setAttribute('aria-expanded','false')}})})}(function(){var navMenu=function(id){var wrapper=document.body,mobileButton=document.getElementById(id+'-mobile-menu'),navMenuEl=document.getElementById('site-navigation');if(!navMenuEl){return}
if(mobileButton){mobileButton.onclick=function(){wrapper.classList.toggle(id+'-navigation-open');wrapper.classList.toggle('lock-scrolling');twentytwentyoneToggleAriaExpanded(mobileButton);mobileButton.focus()}}
document.addEventListener('keydown',function(event){var modal,elements,selectors,lastEl,firstEl,activeEl,tabKey,shiftKey,escKey;if(!wrapper.classList.contains(id+'-navigation-open')){return}
modal=document.querySelector('.'+id+'-navigation');selectors='input, a, button';elements=modal.querySelectorAll(selectors);elements=Array.prototype.slice.call(elements);tabKey=event.keyCode===9;shiftKey=event.shiftKey;escKey=event.keyCode===27;activeEl=document.activeElement;lastEl=elements[elements.length-1];firstEl=elements[0];if(escKey){event.preventDefault();wrapper.classList.remove(id+'-navigation-open','lock-scrolling');twentytwentyoneToggleAriaExpanded(mobileButton);mobileButton.focus()}
if(!shiftKey&&tabKey&&lastEl===activeEl){event.preventDefault();firstEl.focus()}
if(shiftKey&&tabKey&&firstEl===activeEl){event.preventDefault();lastEl.focus()}
if(tabKey&&firstEl===lastEl){event.preventDefault()}});document.getElementById('site-navigation').addEventListener('click',function(event){if(event.target.hash){wrapper.classList.remove(id+'-navigation-open','lock-scrolling');twentytwentyoneToggleAriaExpanded(mobileButton);setTimeout(function(){var anchor=document.getElementById(event.target.hash.slice(1));if(anchor){anchor.scrollIntoView()}},550)}});navMenuEl.querySelectorAll('.menu-wrapper > .menu-item-has-children').forEach(function(li){li.addEventListener('mouseenter',function(){this.querySelector('.sub-menu-toggle').setAttribute('aria-expanded','true');twentytwentyoneSubmenuPosition(li)});li.addEventListener('mouseleave',function(){this.querySelector('.sub-menu-toggle').setAttribute('aria-expanded','false')})})};window.addEventListener('load',function(){new navMenu('primary')})}())