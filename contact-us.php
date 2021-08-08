<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>href.id - Contact Us</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
</head>
<body>
  <nav>
    <ul>
      <li>
        <a href="./">
          <h3>HOME</h3>
        </a>
        <div class="box"></div>
      </li>
      <li>
        <div class="box"></div>
        <a href="./#highlights" class="portfolio-click">
          <h3>PORTFOLIO</h3>
        </a>
      </li>
      <li class="active">
        <div class="box"></div>
        <a href="contact-us">
          <h3>CONTACT US</h3>
        </a>
      </li>
    </ul>
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.79 557.89"><defs><style>.cls-1{fill:#0f0f0f;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="405.67 515.11 257.55 515.11 234.54 492.09 308.6 418.04 405.67 515.11"/><polygon class="cls-1" points="173.25 65.8 99.19 139.85 2.13 42.78 150.23 42.78 173.25 65.8"/><polygon class="cls-1" points="407.79 300.34 150.23 557.89 2.13 557.89 151.23 408.78 259.68 300.34 191.76 232.42 265.81 158.36 407.79 300.34"/><polygon class="cls-1" points="405.67 0 265.81 139.85 256.56 149.11 173.25 232.42 162.91 242.76 153.64 252.03 151.36 254.31 148.11 257.55 216.03 325.47 141.97 399.53 0 257.55 77 180.55 77.03 180.58 86.28 171.32 99.22 158.38 108.47 149.12 182.52 75.06 191.77 65.81 257.55 0 405.67 0"/></g></g></svg>
    </div>
    <div class="vertical-brand">
      <p>href.id<span class="motto"> — Brand yourself with us</span></p>
    </div>
    <div class="hamburger">
      <div class="line"></div>
    </div>
    <div class="cross">
      <div class="line-1"></div>
      <div class="line-2"></div>
    </div>
  </nav>
  <main>
    <div class="page flex-center contact-page">
      <div class="container flex-center">
        <div class="title flex-center">
          <h1 class="align-center clear">Have a project?</h1>
          <p class="align-center clear">Let's discuss about it by <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
          </svg> Whatsapp</a>, or by filling the form below.</p>
        </div>
        <div class="form-content flex-center">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form" autocomplete="off">
            <div>
              <div class="content">
                <input type="text" name="name" required>
                <label for="name" class="label-input">
                  <p>
                    <span class="content-label">Full Name</span>
                  </p>
                </label>
              </div>
            </div>
            <div>
              <div class="content">
                <input type="text" name="email" required>
                <label for="email" class="label-input">
                  <p>
                    <span class="content-label">Email Address</span>
                  </p>
                </label>
              </div>
            </div>
            <div>
              <div class="content">
                <input type="text" name="phone" required>
                <label for="phone" class="label-input">
                  <p>
                    <span class="content-label">Phone</span>
                  </p>
                </label>
              </div>
            </div>
            <div>
              <div class="content">
                <input type="text" name="company" required>
                <label for="company" class="label-input">
                  <p>
                    <span class="content-label">Company Name / Personal</span>
                  </p>
                </label>
              </div>            
            </div>
            <div class="div-message">
              <div class="content">
                <textarea name="message" required></textarea>
                <label for="message" class="label-input">
                  <p>
                    <span class="content-label">Message</span>
                  </p>
                </label>
              </div>
            </div>
            <div class="submit-section clear">
              <button type="submit">
                <h3>SEND <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></h3>
              </button>
            </div>
          </form>
          <div class="success"><h1>Thankyou!</h1><p>We will reply in a short moment.</p></div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="page flex-center">
      <div class="container flex-center">
        <div class="divider">
          <div class="back-to-top">
            <a href="#">
              <div class="flex-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg>
              </div>
            </a>
          </div>
          <h1 class="clear">href.id</h1>
          <div class="line">
            <p>©2021</p>
          </div>
        </div>
        <div class="navigation">
          <p><a href="#"><span class="text">Whatsapp</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
          </svg></span></a></p>
          <p><a href="#"><span class="text">E-mail</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
          </svg></span></a></p>
          <p><a href="#"><span class="text">Instagram</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg></span></a></p>
          <p><a href="#"><span class="text">LinkedIn</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
          </svg></span></a></p>
        </div>
      </div>
    </div>
  </footer>

  <script src="anime.min.js"></script>
  <script src="main.js"></script>
  <script>
    function labelAnimation(){
      document.querySelectorAll('label').forEach((a, i) => {
        setTimeout(()=>{
          a.classList.add('label-animation')
        }, i * 100)
      })
    }
    anime.timeline({
      duration: 800,
      easing: 'easeOutExpo'
    }).add({
      targets: '.title h1',
      opacity: [0, 1],
      translateX: [-100, 0],
    }).add({
      targets: '.title p',
      opacity: [0, 1],
      translateX: [-100, 0],
    }, '-=600').add({
      targets: '.form .content-label',
      opacity: [0, 1],
      translateX: [-10, 0],
      easing: 'easeInExpo',
      delay: anime.stagger(200),
      begin: () => {
        setTimeout(labelAnimation, 1000);
      },
      complete: () => {
        document.querySelectorAll('.content-label').forEach((a)=>{
          a.removeAttribute('style');
        })
      }
    }, '-=600').add({
      targets: document.querySelectorAll('.submit-section'),
      opacity: [0, 1],
      translateX: [-50, 0],
    }, '+=300')


    // document.querySelector('.form').addEventListener('submit', (e) => {
    //   e.preventDefault();
    //   submitAnimation;
    // })
    function submitAnimation(){
      anime.timeline({
        duration: 800,
        complete: () => {
          document.querySelector('.form').reset();
        }
      }).add({
        targets: '.success',
        easing: 'easeOutExpo',
        opacity: [0, 1],
      }).add({
        targets: '.success h1, .success p',
        easing: 'easeOutExpo',
        opacity: [0, 1],
        translateY: [50, 0],
        delay: anime.stagger(200)
      }).add({
        targets: '.success h1, .success p',
        easing: 'easeInExpo',
        opacity: [1, 0],
        translateY: [0, -50],
        delay: anime.stagger(200)
      }).add({
        targets: '.success',
        easing: 'easeInExpo',
        opacity: [1, 0],
      })
    }
  </script>
</body>
</html>