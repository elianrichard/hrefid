// WHY US
var object = document.querySelectorAll('.big-paragraph')

object.forEach((a) => {
  window.addEventListener('scroll', () => {
    var triggerPosition = window.innerHeight / 2;
    var objectPosition = a.getBoundingClientRect().top;
    if (objectPosition < triggerPosition){
      a.previousElementSibling.classList.remove('active');
      a.nextElementSibling.classList.remove('active');
      a.classList.add('active');
      a.classList.remove('clear')
    }
  })
})

// INTRO
document.querySelector('body').style.overflow = 'hidden'
function introAnimation(){
  anime({
    targets: '.intro svg path',
    strokeDashoffset: [anime.setDashoffset, 0],
    opacity: [0, 1],
    easing: 'easeInOutExpo',
    duration: 2500,
    complete: () => {
      document.querySelector('.intro').querySelectorAll('path').forEach((a)=>{
        a.style.fill = '#0f0f0f';
        a.style.strokeWidth = '0px';
      })
      setTimeout(()=>{
        anime({
          targets: '.intro',
          duration: 1500,
          opacity: [1, 0],
          easing: 'easeOutExpo',
          complete: () => {
            document.querySelector('.intro').style.display = 'none';
            blurAnimation();
            document.querySelector('body').removeAttribute('style');
          }
        })
      }, 1500)
    }
  })
}

introAnimation();

// LANDING BLUR
var mainText = document.querySelector('.main-title');
var subText = document.querySelectorAll('.sub-title');
var scrollIcon = document.querySelector('.scroll-icon');
// document.querySelector('body').style.overflowY = 'hidden';

// setTimeout(blurAnimation, 1000);

function blurAnimation(){
  anime({
    easing: 'easeOutExpo',
    duration: 800,
    targets: mainText,
    opacity: [0, 1],
    begin: () => {
      mainText.classList.remove("blurred");
    },
    complete: () => {
      setTimeout(()=>{
        subText.forEach((a, i) => {
          setTimeout(() => {
            anime({
              targets: a,
              duration: 800,
              opacity: [0, 1],
              easing: 'easeOutExpo',
              begin: () => {
                a.classList.remove("blurred");
              }
            })
          }, i * 800)
        })
      }, 500)
      setTimeout(()=>{
        // document.querySelector('body').removeAttribute('style');
        anime({
          targets: scrollIcon,
          duration: 2000,
          opacity: [1, 0],
          easing: 'easeOutExpo',
          translateY: [-50, 0],
          loop: true,
        })
      }, 3300)
    }
  })
}

// Tagline Scroll dissapear
var taglineSpan = document.querySelector('.vertical-brand').querySelector('.motto');
taglineSpan.style.opacity = 0;

window.addEventListener('scroll',scrollTagline);

function scrollTagline(){
  var mainTitlePosition = mainText.getBoundingClientRect().top;
  var fadeIn = anime.timeline({
    easing: 'linear',
    duration: 800,
    autoplay: false,
  }).add({
    targets: '.main-title',
    opacity: [1, 0],
  }).add({
    targets: '.motto',
    opacity: [0, 1],
  }, '-=800')

  if ((mainTitlePosition < 100) && (mainTitlePosition > 0)){
    mainText.classList.add('seeking');
    fadeIn.seek((100 - mainTitlePosition)*8);
    // console.log("seeking");
  }
  if (mainTitlePosition < 0){
    fadeIn.seek(800);
    mainText.classList.remove('seeking');
    // console.log("gone");
  }
  if (mainTitlePosition > 100 && mainText.classList.contains("seeking")){
    mainText.classList.remove('seeking');
    fadeIn.seek(0);
    // console.log("show");
  }
}

// ABOUT ANIMATION
window.addEventListener('scroll', aboutAnimation)
function aboutAnimation(){
  var getToKnowText = document.querySelector('.home-about').querySelector('.above')
  var objectPosition = getToKnowText.getBoundingClientRect().top;
  var triggerPosition = window.innerHeight / 3;

  if (objectPosition < triggerPosition && !getToKnowText.classList.contains('animated')){
    getToKnowText.classList.add('animated')
    anime.timeline({
      easing: 'easeOutExpo',
      duration: 1000,
    }).add({
      targets: '.home-about .above h1',
      opacity: [0, 1],
      translateY: [-50, 0]
    }).add({
      targets: '.above .first-img',
      opacity: [0, 1],
      translateY: [-50, 0]
    }, '-=800').add({
      targets: '.below .second-img',
      opacity: [0, 1],
      translateY: [-50, 0]
    }, '-=600').add({
      targets: '.home-about .below p',
      opacity: [0, 1],
      translateY: [-50, 0]
    }, '-=800')
  }
}

// Why US animation
window.addEventListener('scroll', whyUsAnimation)

function whyUsAnimation(){
  var whyUsText = document.querySelector('.home-why').querySelector('h1');
  var objectPosition = whyUsText.getBoundingClientRect().top;
  var triggerPosition = window.innerHeight / 3;

  if (objectPosition < triggerPosition && !whyUsText.classList.contains("animated")){
    whyUsText.classList.add("animated");
    anime.timeline({
      easing: 'easeOutExpo',
      duration: 1000,
    }).add({
      targets: '.home-why h1',
      opacity: [0, 1],
      translateX: [-50, 0],
    }).add({
      targets: '.home-why .line-above',
      scaleX: [0, 1],
    }, '-=800')
  }

  var whyLists = document.querySelector('.home-why').querySelectorAll('p');
  var lastWhy = whyLists[whyLists.length - 1];
  var lastWhyPosition = lastWhy.getBoundingClientRect().top;
  var triggerPosition2 = window.innerHeight / 2

  if (lastWhyPosition < triggerPosition2 && !lastWhy.classList.contains("animated")){
    lastWhy.classList.add("animated");
    anime({
      targets: '.home-why .line-below',
      scaleX: [0, 1],
      easing: 'easeOutExpo',
      duration: 1000,
    })
  }
}

// service animation
window.addEventListener('scroll', serviceAnimation);
function serviceAnimation(){
  var object = document.querySelector('.home-service').querySelector('.upper');
  var objectPosition = object.getBoundingClientRect().top;
  var triggerPosition = window.innerHeight / 2.5;

  if (objectPosition < triggerPosition && !object.classList.contains("animated")){
    object.classList.add("animated");
    anime.timeline({
      easing: 'easeOutExpo',
      duration: 1000,
    }).add({
      targets: '.home-service .upper',
      opacity: [0, 1],
      translateX: [-50, 0],
    }).add({
      targets: '.home-service .card',
      opacity: [0, 1],
      delay: anime.stagger(300),
    }, '-=800')
  }

  var object2 = document.querySelector('.home-service').querySelector('.below');
  var objectPosition2 = object2.getBoundingClientRect().top;
  var triggerPosition2 = window.innerHeight - 100;

  if (objectPosition2 < triggerPosition2 && !object2.classList.contains("animated")){
    object2.classList.add("animated");
    anime({
      easing: 'easeOutExpo',
      duration: 1000,
      targets: '.home-service .below',
      opacity: [0, 1],
      translateX: [-50, 0],
    })
  }
}

// OUR HIGHLIGHTS
var highlightsText = document.querySelector('.home-highlights').querySelector('h1');
highlightsText.innerHTML = highlightsText.textContent.replace(/\S/g, "<span class='letter clear'>$&</span>");

window.addEventListener('scroll', ourHighlightsAnimation);
function ourHighlightsAnimation(){
  var object = document.querySelector('.home-highlights').querySelector('.line');
  var objectPosition = object.getBoundingClientRect().top;
  var triggerPosition = window.innerHeight / 2;

  if (objectPosition < triggerPosition && !object.classList.contains("animated")){
    object.classList.add("animated");
    anime.timeline({
      easing: 'easeOutExpo',
      duration: 1000,
    }).add({
      targets: '.home-highlights .line',
      scaleX: [0, 1],
    }).add({
      targets: '.home-highlights .letter',
      opacity: [0, 1],
      delay: anime.stagger(100),
    }, '-=800')
  }
}

// OUR HIGHLIGHTS CONTENT

function highlightContent(){
  document.querySelectorAll('.home-highlights-content').forEach((a)=>{
    var object = a.querySelector('.main-image');
    window.addEventListener('scroll', ()=>{
      var objectPosition = object.getBoundingClientRect().top;
      var triggerPosition = window.innerHeight / 2;
      if (objectPosition < triggerPosition && !object.classList.contains('animated')){
        object.classList.add('animated');
        anime.timeline({
          duration: 1000,
          easing: 'easeOutExpo'
        }).add({
          targets: a.querySelector('.main-image'),
          translateX: [-1000, 0],
        }).add({
          targets: a.querySelector('.description'),
          opacity: [0, 1],
        }, '-=200')
      }
    });
  })
}

highlightContent();

// SEE MORE ANIMATION

window.addEventListener('scroll', seeMoreAnimation);
function seeMoreAnimation(){
  var object = document.querySelector('.see-more').querySelector('a');
  var objectPosition = object.getBoundingClientRect().top;
  var triggerPosition = window.innerHeight / 1.3;
  if (objectPosition < triggerPosition && !object.classList.contains("animated")){
    object.classList.add("animated");
    anime({
      easing: 'easeOutExpo',
      duration: 1000,
      targets: '.see-more a',
      opacity: [0, 1],
      translateX: [-100, 0]
    })
  }
}