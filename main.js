//Portfolio intro click
var portfolioNav = document.querySelector('.portfolio-click');
if(portfolioNav){
  portfolioNav.addEventListener('click', () => {
    localStorage.setItem('introAnimationToggle', 1)
  })
}

//FOOTER ANIMATION
document.querySelector('footer').querySelector('.navigation').querySelectorAll('p').forEach((a)=>{
  a.classList.add('clear');
})
window.addEventListener('scroll', footerAnimation);
function footerAnimation(){
  var object = document.querySelector('footer');
  var objectPosition = object.getBoundingClientRect().top;
  var triggerPosition = window.innerHeight / 1.2;
  if (objectPosition < triggerPosition && !object.classList.contains("animated")){
    object.classList.add("animated");
    anime.timeline({
      easing: 'easeOutExpo',
      duration: 1000,
    }).add({
      targets: 'footer .divider h1',
      opacity: [0, 1],
      translateX: [-100, 0]
    }).add({
      targets: 'footer .divider .line',
      scaleX: [0, 1]
    }, '-=800').add({
      targets: 'footer .navigation p',
      translateY: [50, 0],
      opacity: [0, 1],
      delay: anime.stagger(200),
    }, '-=500')
  }
}

var navElement = document.querySelector('nav');
var navList = navElement.querySelector('ul');
var hamburgerIcon = navElement.querySelector('.hamburger');
var crossIcon = navElement.querySelector('.cross');
let animating = false;

hamburgerIcon.addEventListener('click', () => {
  if (!hamburgerIcon.classList.contains('open') && !(animating)){
    animating = true;
    document.querySelector('body').style.overflowY = 'hidden';
    navElement.style.backgroundColor = '#ffffff';
    navList.style.display = 'flex';
    hamburgerIcon.querySelector('.line').style.width = '0%';
    crossIcon.querySelectorAll('div').forEach((a)=>{
      a.style.width = '100%';
      a.style.transform = 'rotate(0deg)';
    })
    anime({
      targets: 'nav ul li',
      duration: 800,
      easing: 'easeOutExpo',
      opacity: [0, 1],
      translateX : [-100, 0],
      delay: anime.stagger(100),
      complete: () => {
        animating = false;
        hamburgerIcon.classList.toggle('open');
        crossIcon.querySelectorAll('div').forEach((a)=>{
          a.removeAttribute('style');
          a.style.width = '100%';
        })
      }
    })
  } else if (hamburgerIcon.classList.contains('open') && !(animating)) {
    crossIcon.querySelectorAll('div').forEach((a)=>{
      a.style.transform = 'rotate(0deg)';
    })
    animating = true;
    anime({
      targets: 'nav ul li',
      duration: 800,
      easing: 'easeInExpo',
      opacity: [1, 0],
      translateX : [0, -100],
      delay: anime.stagger(100),
      complete: () => {
        animating = false;
        crossIcon.querySelectorAll('div').forEach((a)=>{
          a.removeAttribute('style')
        });
        navList.querySelectorAll('li').forEach((a)=>{
          a.removeAttribute('style');
        })
        hamburgerIcon.querySelector('.line').removeAttribute('style');
        navElement.removeAttribute('style');
        navList.removeAttribute('style');
        document.querySelector('body').removeAttribute('style');
        hamburgerIcon.classList.toggle('open')
      }
    })
  }
})

window.addEventListener('resize', () => {
  if (hamburgerIcon.classList.contains('open') && window.innerWidth > 1000){
    crossIcon.querySelectorAll('div').forEach((a)=>{
      a.removeAttribute('style')
    });
    navList.querySelectorAll('li').forEach((a)=>{
      a.removeAttribute('style');
    })
    hamburgerIcon.querySelector('.line').removeAttribute('style');
    navElement.removeAttribute('style');
    navList.removeAttribute('style');
    document.querySelector('body').removeAttribute('style');
    hamburgerIcon.classList.toggle('open')
  }
})
