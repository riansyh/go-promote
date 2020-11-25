window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
	header.classList.toggle("sticky", window.scrollY > 0);
});

window.addEventListener("scroll", function(){
    var header = document.querySelector("div.nav");
	header.classList.toggle("bg_atas", window.scrollY > 0);
});
			
window.addEventListener("scroll", function(){
    var h2 = document.querySelector("h2");
    h2.classList.toggle("hdua", window.scrollY > 0);
});
