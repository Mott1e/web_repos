window.onscroll = function() {scrollFunction()};

function scrollFunction()
{
    let scrollPos = window.innerHeight * 0.6;
    let header = document.getElementById("header");
    
    if (document.body.scrollTop > scrollPos || document.documentElement.scrollTop > scrollPos) 
    {
        header.classList.add("active");
    }
    else
    {
        header.classList.remove("active");
    }
}