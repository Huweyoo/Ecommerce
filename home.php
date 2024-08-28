<!-- Contact us -->
<?php
include('conn.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ufname = $_POST["ufname"];
        $ulname = $_POST["ulname"];
        $uemail = $_POST["uemail"];
        $msg = $_POST["msg"];

    if($ufname!=null && $ulname!=null && $uemail!=null && $msg!=null){
        if($con->query("INSERT INTO contactforms.usermsg(ufname, ulname , uemail , msg)
                         VALUES ('$ufname', '$ulname' , '$uemail' , '$msg')") == TRUE){ 
            echo "<script type='text/javascript'>alert('Contact us form sent successfully.')</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('Something went wrong! Please try again...')</script>";
        }
    
    }
}      
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Abel&family=Open+Sans+Condensed:wght@300&family=Spartan:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet"href="\fontawesome-free-6.0.0-beta3-web\css">
        <link href="https://fonts.googleapis.com/css2?family=Abel&family=Open+Sans+Condensed:wght@300&family=Spartan:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <title>Project_Websystem</title>
    </head>

    <body>

        
        <!--HEADER STARTS HERE-->

        <input type="checkbox" id="check"checked >
        <header style="z-index:100">
          <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
          </label>
          <div class="left_area">
          
          </div>
        
        </header>

        <!--HEADER ENDS HERE-->

        <!--SOCIAL MEDIA NAVIGATION STARTS HERE-->

        <nav class="social-media">
            <div class="sm-container">
                <a href="https://www.facebook.com/groups/398430175231683" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="sm-container">
                <a href="">
                    <i class="fab fa-twitter"></i>
                </a> 
            </div>
            <div class="sm-container">
                <a href="">
                    <i class="fab fa-google-plus-g"></i>
                </a>
            </div>
            <div class="sm-container">
                <a href="">
                    <i class="fab fa-yahoo"></i>
                </a>    
            </div>
            <div class="sm-container">
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>    
            </div>
        </nav>
      
        <!--SOCIAL MEDIA NAVIGATION ENDS HERE-->

        <!--LEFT-NAVIGATION BAR STARTS HERE-->
        <div class="sidebar" style="z-index: 50;">
          <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
          <a href="#go-about"><i class="fas fa-address-card"></i><span>About</span></a>
          <a href="#go-services"><i class="fas fa-store"></i><span>Services</span></a>
          <a href="#GALLERY"><i class="fas fa-images"></i><span>Gallery</span></a>
          <a href="#contact"><i class="fas fa-address-book"></i><span>Contact</span></a>
          <button type="button" class="btn btn-light"><a href="logout.php">Logout</a></button>
          <a href="login.php"><img src="logout.png"style="width:23px;height:25px; margin-top: 0; margin-bottom: 1px;"></i><span>Log out</span></a>
        </div>


        <!--LEFT-NAVIGATION BAR ENDS HERE-->


        <!--FIRST PARALLAX SECTION STARTS HERE-->
            <!--HOMEPAGE CONTENT START-->
        <div class="pimg1">
            <div class="ptext">
                <img src="logo.png" style="width:150px;height:150px;"><br><br></b>
                <spam class="border2" id="TITLE">E-PASYAL</spam><br><br>
                <spam class="border3" id="TITLE">ENJOY WHILE EXPLORING PHILIPPINES.</spam><br><br>
                <spam class="userwelcome" id="TITLE">Welcome, Tiny Hexplorer <?php echo $_SESSION['fname']?>!</spam><br><br>
                <span class="border" id="HOME" > <a href="#About-us">ARAT GALA </a></span>
            </div>
            
            <a href="#About-us">
                <div class="scroll-down"></div>
              </a>


        </div>
            <!--HOMEPAGE CONTENT END-->
       <!--FIRST PARALLAX SECTION ENDS HERE-->
       <p id="go-about"></p>
       <br><br>
        <!--ABOUT US STARTS HERE-->
        <div class=introduction  id="About-us">
            <div class="intro-text">
                <h1 style="color:#706c61 ;">Introduction</h1>
               <p> This website deals about gallery which shows the beauty in every tourist place in the Philippines. This will serve as guide or online brochure to those who wants see the beauty of the Philippines. Also to those foreigners, for them to have an idea what will they see in our country.
               </p>
            </div>

            <div class="intro-image">
                <img src="history.png" > 
            </div>
        </div>
        <!--ABOUT US ENDS HERE HERE-->

        <!--WHY BUSLO STARTS HERE-->
        <h1 class="intro-title" style="color:#444941;">
            Explore
           </h1>
       </div>
    
        <div  class="container2">
            <div class="card">
                <div class="imgBx">
                    <img src="Logo1.png" >
                </div>
                <div class="content2">
                    <h2>Experience In The Philiippines</h2>
                       <button class="other-site" ><a href="#contact" style="text-decoration: none;">Site</a></button>
                </div>
               
              
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="Logo3.png">
                </div>
                <div class="content2">
                    <h2>It's More Fun In The Philippines</h2>

                        <button class="other-site" ><a href="#contact" style="text-decoration: none;">Site</a></button>
                </div>
                
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="Logo2.png">
                </div>
                <div class="content2">
                    <h2>Travel Guide In The Philippines</h2>
                        <button class="other-site" ><a href="#contact" style="text-decoration: none;">Site</a></button>
                </div>
               
            </div>
        </div>
  
        <!--WHY BUSLO ENDS HERE-->

        <!--SERVICES SECTION STARTS HERE-->
        <p id="go-services"></p>
        
        <h1 class="intro-title" style="color:#444941;" >
            SERVICES
           </h1>    
        <div class=introduction2 id="services">

            <div class="intro-image">
                <img src="travel.png" > 
            </div>
            
            <div class="intro-text">
                <h2 style="color:#706c61">Email To Contacts:</h2>
               <p>
                   <ol style="list-style-type:none;">
                       <li>
                         <p>
                             abelita.arnoldjoseph01022001@gmail.com
                             radovan.leiandrew.11272001@gmail.com
                             baldovino.analyn.4292002@gmail.com
                             camposo.welamae.11292001@gmail.com
                             Salutin.marjorie.05182002@gmail.com
                             bracero.mclarron.10132002@gmail.com
                             Staanamarkrolandjohn01@gmail.com
                         </p>
                          <button class="other-site" ><a href="#contact" style="text-decoration: none;">CONTACT US</a></button>
                       </li>
                   </ol>
          
            </div>

           
        </div>

        <!--SERVICES SECTION ENDS HERE-->

     
        <!--GALLERY SECTION STARTS HERE-->
        <div class="pimg2">
            <div class="ptext" style="margin-top:100px">
                <span class="border4" id="GALLERY"> Gallery </span>
            </div>
        </div>
  
       
        <div class="container">  

            <div class="gallery-container w-3 h-2">
                <div class="gallery-item">                  
                        <div class="image">
                            <img src="pic1.png" alt="nature" data-original="pic1.jpg">
                        </div>
                        <div class="text">More Infos</div>
                </div>
            </div>
            
            <div class="gallery-container w-3 h-4"> m 

                
                <div class="gallery-item">                  
                        <div class="image">
                            <img src="pic2.png" alt="people" data-original="pic2.jpg">
                        </div>
                        <div class="text">More Infos</div>
                </div>
            </div>
            <div class="gallery-container h-4">
                <div class="gallery-item">                  
                        <div class="image">
                            <img src="pic3.png" alt="sport" data-original="pic3.jpg">
                        </div>
                        <div class="text">More Infos</div>
                </div>
            </div>
            <div class="gallery-container h-2">
                <div class="gallery-item">                  
                        <div class="image">
                            <img src="pic4.png" alt="fitness" data-original="pic4.jpg">
                        </div>
                        <div class="text">More Infos</div>
                </div>
            </div>
            <div class="gallery-container w-3 h-2">
                <div class="gallery-item">                  
                        <div class="image">
                            <img src="pic5.png" alt="food" data-original="pic5.jpg">
                        </div>
                        <div class="text">More Infos</div>
                </div>
            </div>
            <div class="gallery-container h-2">
                <div class="gallery-item">                  
                        <div class="image">
                            <img src="pic6.png" alt="travel" data-original="pic6.jpg">
                        </div>
                        <div class="text">More Infos</div>
                </div>
            </div>
            <div class="gallery-container h-2">
                <div class="gallery-item">                  
                        <div class="image">
                            <img src="pic7.png" alt="art" data-original="pic7.jpg">
                        </div>
                        <div class="text">More Infos</div>
                </div>
            </div>
            <div class="gallery-container h-2">
                <div class="gallery-item">                  
                        <div class="image">
                            <img src="pic8.png" alt="cars" data-original="pic8.jpg">
                        </div>
                        <div class="text">More Infos</div>
                </div>
            </div>
        </div>   

        <!--GALLERY SECTION ENDS HERE-->
        

        <!--Testemonies SECTION ENDS HERE-->


            <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
 
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>
 
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                            </p>
                        </div>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <!--Testimonies SECTION ENDS HERE-->

        <div class="testimonials">
            <div class="slider">
                <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
                <input type="radio" name="slider" title="slide2" class="slider__nav"/>
                <input type="radio" name="slider" title="slide3" class="slider__nav"/>
                <input type="radio" name="slider" title="slide4" class="slider__nav"/>
                <div class="slider__inner">
                  <div class="slider__contents">
                    <div class="image-testimony">
                        <img src="https://media.glamour.com/photos/5a425fd3b6bcee68da9f86f8/1:1/w_741,h_741,c_limit/best-face-oil.png" alt="">
                    </div>
                    <h2 class="slider__caption">Danna</h2>
                    <p class="slider__txt"> Awesome Design Of the Website</p>
                  </div>
                  <div class="slider__contents">
                    <div class="image-testimony">
                        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/face-wash-2-1561136582.jpg" alt="">
                    </div>
                    <h2 class="slider__caption">Wela</h2>
                    <p class="slider__txt"> This design is fantastic buut in a way that is simple</p>
                  </div>
                  <div class="slider__contents">
                    <div class="image-testimony">
                        <img src="https://i.guim.co.uk/img/media/0e622be011c6795a9c5fd869fa61db1fd0e4802d/1258_4_3554_2133/master/3554.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=d2ae81d43169b6992b4f5c282ec770c2" alt="">
                    </div>
                    <h2 class="slider__caption">Analyn</h2>
                    <p class="slider__txt"> It is a great website for students.</p>
                  </div>
                  <div class="slider__contents">
                    <div class="image-testimony">
                        <img src="https://www.eaclinic.co.uk/wp-content/uploads/2019/01/woman-face-eyes-1000x1000.jpg" alt="">
                    </div>
                    <h2 class="slider__caption"> Trixie</h2>
                    <p class="slider__txt"> A website that has a unique design to promote tourism</p>
                  </div>
                </div>
              </div>
        </div>

        <!--CONTACT US SECTION STARTS HERE-->
        <div class="pimg3">
           
                
                <div class="container-form" id="contact">
                    <form action="home.php" method="POST" id="form">  
                        <h1>CONTACT US</h1>
                            <label for="email">Email</label>
                            <input type="text" placeholder="Email" id="uemail" name="uemail">
                            <label for ="fname">First Name</label>
                            <input type="text" placeholder="First Name" id="ufname" name="ufname">
                            <label for="lname">Last Name</label>
                            <input type="text" placeholder="Last Name" id="ulname" name="ulname">
                            <label for="message">Message</label>
                            <textarea id="message" name="msg" placeholder="Your Message"></textarea>
                            <button type="submit" class="submit" name="sendmsg">Send Message</button>
                    </form>
                </div>
               
         
        </div>

        <!--CONTACT US SECTION ENDS HERE-->    
    

        <!--FOOTER SECTION STARTS HERE-->

        <div class="footer">
            <div class="store">
                <h> Static Web </h>

                <p>Web System And Technology</p>
    
        </div>

         <!--FOOTER SECTION ENDS HERE-->

         <!--MODAL CLASS STARTS HERE-->

         <!--MODAL CLASS STARTS HERE-->

        <div class="modal">
            <img src="" alt="" class="full-img">
            <p class="caption"></p>
            <div class="comment-section">
                <div class="card">
                    <div class="row">
                        <div class="col-2"> <img src="https://i.imgur.com/xELPaag.jpg" width="70" class="rounded-circle mt-2"> </div>
                        <div class="col-10">
                            <div class="comment-box ml-2">
                                <h4>Add a comment</h4>
                                <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> </div>
                                <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?" rows="4"></textarea> </div>
                                <div class="comment-btns mt-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="pull-left"> <button class="btn btn-success btn-sm">Cancel</button> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pull-right"> <button class="btn btn-success send btn-sm">Send <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
      
         <!--MODAL CLASS ENDS HERE-->

        <div class="modal">
            <img src="" alt="" class="full-img">
            <p class="caption"></p>
        </div>  
      
         <!--MODAL CLASS ENDS HERE-->

          <!--LINKING JS SCRIPTS STARTS HERE-->
        <script src="app.js"></script>
          <!--LINKING JS SCRIPTS ENDS HERE-->
        


    </body>
</html>

