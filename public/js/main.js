window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

window.addEventListener("scroll", function(){
    var header = document.querySelector("div.bg-nav");
	header.classList.toggle("bg_atas", window.scrollY > 0);
});
			
window.addEventListener("scroll", function(){
    var h2 = document.querySelector("h2");
    h2.classList.toggle("hdua", window.scrollY > 0);
});

var checkbox = document.querySelector('input[name=theme]');

if(document.getElementById("switch").checked == true){
  document.documentElement.setAttribute('data-theme', 'dark')
  document.cookie = "theme=1; max-age=36000; path=/";
}else{
  document.documentElement.setAttribute('data-theme', 'light')
  document.cookie = "theme=2; max-age=36000; path=/";
}

checkbox.addEventListener('change', function(){
    if(this.checked){
        trans()
    document.documentElement.setAttribute('data-theme', 'dark')
    document.cookie = "theme=1; max-age=36000; path=/";
    }else{
        trans()
        document.documentElement.setAttribute('data-theme', 'light')
        document.cookie = "theme=2; max-age=36000; path=/";
    }
});

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(()=>{
    document.documentElement.classList.remove('transition')
    }, 1000)
}