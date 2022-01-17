<<?php include 'sendmail.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website | Aditya Partap Singh</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/60f4c3552b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#education" class="menu-btn">Education</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#portfolio" class="menu-btn">Portfolio</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Aditya Partap Singh</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/founder1.jpg" alt="My image" >
                </div>
                <div class="column right">
                    <div class="text">I'm Aditya Partap Singh and I'm a <span class="typing-2"></span></div>
                      <div class="info">
                        <h3><span>Name : </span> Aditya Partap Singh </h3>
                        <h3><span>Age : </span> 16 </h3>
                        <h3><span>Qualification : </span> 11th  grade </h3>
                        <h3><span>Post : </span> Student </h3>
                        <h3><span>Language : </span> English, Hindi , Punjabi </h3>
                      </div>
                      <a href="#">Download CV</a>
                      </div>
                </div>
            </div>
        </div>
    </section>

  <!-- education section starts  -->

   <section class="education" id="education">
      <div class="max-width">
         <h1 class="title heading"> My <span>education</span> </h1>

         <div class="box-container">

         <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2017-2018</span>
            <h3>Guru Teg Bahadur Senior Secondary Public School-10<sup>th</h3>
            <p>(High School From CBSE Board)<br>%age = 90.40%</p>
         </div>
         <!-- <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2017-2018</span>
            <h3>Guru Teg Bahadur Senior Secondary Public School-10<sup>th</h3>
            <p>(High School From CBSE Board)<br>%age = 90.40%</p>
         </div> -->
     </div>
  </div>

    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p> -->
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>70%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>30%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Python</span>
                            <span>50%</span>
                        </div>
                        <div class="line python"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C++</span>
                            <span>70%</span>
                        </div>
                        <div class="line cpp"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C</span>
                            <span>60%</span>
                        </div>
                        <div class="line c"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Kotlin</span>
                            <span>30%</span>
                        </div>
                        <div class="line kotlin"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<!-- portfolio section start-->
    <section class="portfolio" id="portfolio">
        <div class="max-width">
              <h1 class="heading title"> My <span>portfolio</span> </h1>

              <div class="box-container">

                  <div class="box">
                      <a href="https://www.sololearn.com/certificates/course/en/20865119/1157/landscape/png"><img src="images/cert-20865119-1157.png" alt="python for beginners"></a>
                  </div>
                  <div class="box">
                      <a href="https://www.sololearn.com/Certificate/1082-20865119/jpg/"><img src="images/cert-1082-20865119.jpg" alt="jQuery"></a>
                  </div>
                  <div class="box">
                      <a href="https://www.sololearn.com/Certificate/1162-20865119/jpg/"><img src="images/cert-1162-20865119.jpg" alt="responsive web design"></a>
                  </div>
                  <div class="box">
                      <a href="https://www.sololearn.com/certificates/course/en/20865119/1024/landscape/png"><img src="images/cert-20865119-1024.png" alt="JavaScript"></a>
                  </div>
                  <div class="box">
                      <a href="https://www.sololearn.com/Certificate/1023-20865119/jpg/"><img src="images/cert-1023-20865119.jpg" alt="css"></a>
                  </div>
                  <div class="box">
                      <a href="https://www.sololearn.com/certificates/course/en/20865119/1160/landscape/png"><img src="images/cert-20865119-1160.png" alt="kotlin"></a>
                  </div>
                  <div class="box">
                      <a href="https://www.sololearn.com/certificates/course/en/20865119/1051/landscape/png"><img src="images/cert-20865119-1051.png" alt="c++"></a>
                  </div>
                  <div class="box">
                      <a href="https://www.sololearn.com/Certificate/1089-20865119/jpg/"><img src="images/cert-1089-20865119.jpg" alt="c"></a>
                  </div>
                  <div class="box">
                      <a href="https://www.sololearn.com/Certificate/1014-20865119/jpg/"><img src="images/cert-1014-20865119.jpg" alt="html"></a>
                  </div>
                  <div class="box">
                      <a href="images/image_76548f3e-9a45-4b0c-a4ae-eb4bbcfe7a1520220116_200723.jpg"><img src="images/image_76548f3e-9a45-4b0c-a4ae-eb4bbcfe7a1520220116_200723.jpg" alt="techlearn"></a>
                  </div>
                  <div class="box">
                      <a href="images/Screenshot_2021-08-05-16-27-27-537_com.google.android.apps.docs.png"><img src="images/Screenshot_2021-08-05-16-27-27-537_com.google.android.apps.docs.png" alt="imo10"></a>
                  </div>
                  <div class="box">
                      <a href="images/IMG_20220116_201256.jpg"><img src="images/IMG_20220116_201256.jpg" alt="nso10"></a>
                  </div>

              </div>
            </div>
        </section>
<!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p> -->
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Aditya Partap Singh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Ferozpur ,Punjab , India.</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Phone no.</div>
                                <div class="sub-title">8360941177</div>
                            </div>
                        </div>
                        <div class="row">
                          <i class="fas fa-envelope"></i>
                          <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">adityapartapsingh92@gmail.com</div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>

                    <form action="" method="post" >
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name"placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email"placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject"placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea  name="message"cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                        <!-- <div class="status "></div> -->

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
