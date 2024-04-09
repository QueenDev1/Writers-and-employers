<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Writers&employers</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#">
        <h1 class="logo">Writers&employers</h1>
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">Writers&employers</a>

          <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list"  sticky-top">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-navbar-link>Dashboard</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-navbar-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="#services" class="navbar-link" data-navbar-link>Services</a>
          </li>

          <li class="navbar-item">
            <a href="#features" class="navbar-link" data-navbar-link>Features</a>
          </li>

          <li class="navbar-item">
            <a href="#blog" class="navbar-link" data-navbar-link>Blog</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-navbar-link>Contact Us</a>
          </li>
          
          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-navbar-link>Untrusted users</a>
          </li>

          <li class="navbar-item">
            <a href="login" class="navbar-link" data-navbar-link>login</a>
          </li>

          <li class="navbar-item">
            <a href="register" class="navbar-link" data-navbar-link>register</a>
          </li>
        </ul>

      </nav>

      
      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

    </div>
  </header





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Welcome to the most trusted online writing platform </p>

            <h4 class="h2 hero-title" style="font-size: 90%;">Independent work for clients, offering flexibility, autonomy, and responsibility for deliverables</h4>

<p class="hero-text">
  Writers and Employers is a trusted online space that provides quality academic papers. Is it guaranteed that you will ace an exam or a paper after burning the midnight oil reading for a paper, postponing an appointment, cancelling a business deal or working fewer hours in your shift? NO.
  Writers and employers is a platform that allows employers to post and track orders effectively. It connects employers with competent and professional writers. Writers can bid for orders and overtime gain long term employees. The platform has a 360º approach to accommodate results and excellent customer service.
  Writers and employers is established on the passion and commitment to see our clients "Ace it". You don't have to worry where you are stepping. Not anymore.
</p>

<div id="collapseText" style="display: none;">
  <p class="hero-text">
    Our pool of professionals works tirelessly to ensure that you smile all the way to the peak of your career. We have writers in these fields: Computer science, Humanities, Business, Writing, Mathematics, Programming among other fields. An inbuilt plagiarism checker is in place for originality and quality verification. Our 24/7 support to make sure that you "Ace it" with no trouble at all.
  </p>
</div>
<a class="btn " onclick="toggleCollapse()" role="button" aria-expanded="false" aria-controls="collapseText">
  <span id="btn">Read more</span>
</a>


<script>
  function toggleCollapse() {
    var collapseText = document.getElementById("collapseText");
    var btn= document.getElementById("btn");
    
    if (collapseText.style.display === "none") {
      collapseText.style.display = "block";
      btn.textContent = "Read less";
    } else {
      collapseText.style.display = "none";
      btn.textContent = "Read more";
    }
  }
</script>


        

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="694" height="529" loading="lazy" alt="hero-banner"
              class="w-100 banner-animation">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="700" height="532" loading="lazy" alt="about banner"
              class="w-100 banner-animation">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title underline">Connect with your Employer with just a click;</h2>

            <p class="about-text">
              Offer your skills and expertise at fair and friendly rates.Bid,chat annd get assigned orders in any field of choice.Get paid to deliver quality.
            </p>

            <p class="about-text">
             Build your writing resume with us through ratings and grow your career.
            </p>

            <ul class="stats-list">

              <li class="stats-card">
                <p class="h3 stats-title">9875</p>

                <p class="stats-text">Satisfied Clients</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">7894</p>

                <p class="stats-text">Happy employers</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">65</p>

                <p class="stats-text">Proffesionals</p>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services">
        <div class="container">

          <h2 class="h2 section-title underline">Our Speciallization</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="telescope-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Employers can connect with employees</h3>

                <p class="text">
                Employers can directly select professionals they would like to work with.There is a smooth transition of assigned orders through our chat and email features.Before assigning an order the employer can verify their choice by the inbuilt chat feature on our platform.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="desktop-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Writers can transaction between private and public accounts</h3>

                <p class="text">
                  Writers can rely on the system to work with their personal employers.They can have a public account from general employers in the system
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="globe-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Responsive and reliable </h3>

                <p class="text">
                  We have a 24/7 support team with wholistic approach towards results and customer satisfaction.Our pool of professionals work tirelessly to ensure the deliverables are seen and value for money is realised
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features" id="features">
        <div class="container">

          <h2 class="h2 section-title underline">Our Features</h2>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="bulb-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title"> All Your Writers In One Place</h3>

                  <p class="text">
                   
                    With Writers and Employers, you are able to manage all your writers from a central point, which is convenient.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="color-palette-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Order Management</h3>

                  <p class="text">
                    
Get the ability to assign and reassign orders to your writers
                  </p>
                </div>

              </div>
            </li>

          </ul>

          <figure class="features-banner">
            <img src="./assets/images/feautres-banner.png" width="369" height="318" loading="lazy" alt="Features Banner"
              class="w-100 banner-animation">
          </figure>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="code-slash-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Inbuilt Plagiarism Checker.</h3>

                  <p class="text">
                   
With Writers and Employers, you get yourself a reliable and efficient plagiarism checker. You therefore don't have to worry as 
your orders will be passed through the checker, immediately upon submission
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Trusted & quality</h3>

                  <p class="text">
                    Track payments and balances, among other
                     incredible features. All bundled up for you to ensure you run your operations smoothly
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title underline">Writers updates & News</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="./assets/images/blog-1.jpg" width="750" height="350" loading="lazy"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      James
                    </a>
                  </h3>

                  <p class="text">
                   Writers and employers is effective.I had a deadline to beat and my paper was delivered within the agreed time.I expected a delay due to short-timing,they surprised me.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">17 May, 2023</time>
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" width="750" height="350" loading="lazy"
                      alt="Quisque egestas iaculis felis eget placerat ut pulvinar mi." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                Pool of proffessional
                    </a>
                  </h3>

                  <p class="text">
                    Writers&Employers has proffesionals from all fieldsyou could think of.I got a proffesional to handle my Artificial Intelligence project.It met and surpassed my satisfaction criteria.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" width="750" height="350" loading="lazy"
                      alt="Fusce sem ligula, imperdiet sed nisi sit amet, euismod posuere." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
              Super responsive support
                    </a>
                  </h3>

                  <p class="text">
                    Writers&Employers has structured terms and conditions as well as code of conduct for both employers and employees.You can always rely on this parameters for the satisfactipn of both parties.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="./assets/images/blog-4.jpg" width="750" height="350" loading="lazy"
                      alt="Donec feugiat mollis nisi in dignissim. Morbi sollicitudin quis." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                    Digital transaction
                    </a>
                  </h3>

                  <p class="text">
                    Writers&Employers has digital payment system.I got paid automatically by the system after submitting my assigned order.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">17 May, 2023</time>
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">writers&employers</a>

          <p class="text">
            to be updated
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Dashboard</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Services</a>
          </li>

          <li>
            <a href="#" class="footer-link"> Join Our Team</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our Services as writers&employers</p>
          </li>

          <li>
            <a href="#" class="footer-link">Employers can connect with employees</a>
          </li>

          <li>
            <a href="#" class="footer-link">Writers can transition  between private and public accounts</a>
          </li>

          <li>
            <a href="#" class="footer-link">Main admin is in constant modaration </a>
          </li>

          <li>
            <a href="#" class="footer-link">Writer can privately select employer</a>
          </li>

          <li>
            <a href="#" class="footer-link">Many more</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Other links</p>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ</a>
          </li>

          <li>
            <a href="#" class="footer-link">Portfolio</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Support</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Us</p>
          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="call"></ion-icon>
            </div>

            <div>
              <a href="tel:+24842143" class="footer-item-link">+19365007347</a>
            
            </div>

          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="mail"></ion-icon>
            </div>

            <div>
              <a href="mailto:Info@essaydevs.com" class="footer-item-link">Info@essaydevs.com</a>
              <a href="mailto:Info@essaydevs.com" class="footer-item-link">Info@essaydevs.com</a>
            </div>

          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="location"></ion-icon>
            </div>

            <address class="footer-item-link">
              kenya
            </address>

          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <p class="copyright">
        &copy; 2023 <a href="#" class="copyright-link">writersandemployers</a>. All Right Reserved
      </p>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/welcome.blade.php ENDPATH**/ ?>