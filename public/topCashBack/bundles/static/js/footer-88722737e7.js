const footerLinks=Array.prototype.slice.call(document.querySelectorAll(".footer-links-panel"),0);footerLinks.forEach(function(e){window.innerWidth<=1e3&&e.addEventListener("click",function(){const t=e.childNodes[3];e.classList.toggle("footer-active"),t.style.maxHeight?t.style.maxHeight=null:t.style.maxHeight=t.scrollHeight+"px"})});