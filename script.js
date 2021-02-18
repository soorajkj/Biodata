const header = document.querySelector('header');
let smoothScroll = new scrollToSmooth('a', {
    targetAttribute: 'href',
    duration: 1000,
    durationRelative: false,
    durationMin: false,
    durationMax: false,
    easing: 'easeOutCubic',
    // onScrollStart: (data) => { console.log(data); },
    // onScrollUpdate: (data) => { console.log(data); },
    // onScrollEnd: (data) => { console.log(data); },
    StickyHeader: header
  });
  smoothScroll.init();

const data = document.querySelectorAll('.data')

data.forEach((element)=>{
    element.addEventListener("click",(e) =>{
        header.style.display = "none"
    });
});

document.addEventListener("click", (e) =>{
    if(!(e.target.type == "textarea") && 
    !(e.target.type == "text")){
        header.style.display ="flex"
    }
}
);

const hamBurger = document.querySelector('.btn-bars');
const mobileNav = document.querySelector('header nav');
const body = document.querySelector('body');
let isOpen = false

hamBurger.addEventListener('click',()=>{
    if(!isOpen){
        hamBurger.classList.add('openbars');
        mobileNav.style.display = "block"
        body.style.overflow = "hidden"
        body.style.overflow = "hidden";
        isOpen = true;
    }
    else{
        hamBurger.classList.remove('openbars');
        mobileNav.style.display = "none"
        body.style.overflow = "auto"
        body.style.overflow = "auto";
        isOpen = false;
    }
});

window.addEventListener('resize',()=>{
    if(window.innerWidth >= 600){
        mobileNav.style.display = "flex";
    }
 
});