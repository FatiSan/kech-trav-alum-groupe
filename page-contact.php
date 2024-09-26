<?php include 'header.php';?>

        <div class="page-title page-title-inner padding-bottom9">
            <div class="overlay-page-tile"></div>
            <div class="page-title-content">
                <div class="container">
                    <div class="blog-title color-white">
                    <h2>Contact</h2>
                    <span><a href="index.html" class="hv-color-st1 color-white"> Home </a>Contact</span>
                    </div>
                </div>
            </div>
        </div><!-- Page-title -->

        <section class="tf-contact-us">
            <div class="container">
                <div class="row">
                    <div class="themesflat-spacer  clearfix" data-desktop="125" data-mobile="60" data-smobile="50" ></div>    
                    <div class="title-section text-center wow fadeInDown">
                        <div class="sub-title">Contact Us</div>
                        <div class="flat-title flat-title-style5">Get In Touch</div>
                    </div>
                    <div class="themesflat-spacer  clearfix" data-desktop="46" data-mobile="30" data-smobile="20" ></div>    
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="contact-us-style flex clearfix">
                            <li class="location-icon"><span><i class="icon-iconadrees"></i></span></li>
                            <li class="content-style">
                                <h6 class="tftitle-style3">Our Address</h6>
                                <p>Harbile à côté de almojazine tamansourte, Marrakech 400000</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="contact-us-style flex clearfix">
                            <li class="location-icon location-icon-style2"><span><i class="icon-iconbtnphone"></i></span></li>
                            <li class="content-style content-contact-us">
                                <h6 class="tftitle-style3">Our Phone</h6>
                                <p>
                                  Mobile : <a href="https://wa.me/0661546065">0661546065</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="contact-us-style flex clearfix">
                            <li class="location-icon location-icon-style3"><span><i class="icon-iconmailcontact"></i></span></li>
                            <li class="content-style">
                                <h6 class="tftitle-style3">Our Email</h6>
                                <p>Main Email: Aluminium_bendra@hotmail.com
                                   </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="themesflat-spacer  clearfix" data-desktop="125" data-mobile="60" data-smobile="50" ></div>  
        </section>

        <div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339.6994725171594!2d-8.072821664651906!3d31.7149946292709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafeb120f29c64b%3A0x9b337de456c481e0!2z2KfZhNmF2KzYp9iy2Yog2LTYsdmD2KkgS0FK!5e0!3m2!1sfr!2sma!4v1726947049680!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

        <section class="questions questions-location">
            <div class="themesflat-spacer  clearfix" data-desktop="200" data-mobile="60" data-smobile="50" ></div>  
            <!-- container -->
            <div class="container">
                <div class="questions-style questions-contact questions-style2">
                    <!-- Image -->
                    <div class="content-form bg-color wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="title-section">
                            <div class="sub-title">Get in touch</div>
                            <div class="flat-title flat-title-contact">
                                Write Us a Message
                            </div> 
                            <p class="color-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                                sed diam voluptua. At vero eos et accusam et justo</p>                    
                        </div>
                        <div class="topbar-socials">
                            <a href="https://www.instagram.com/societe_kech_trav_alum_groupe/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- /Image -->
                    <!-- form-questions -->
                    <div  class="form-questions boxshadow bg-white wow fadeInRight  animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div id="respond" class="comment-respond">
                        <form action="contact/contact-process.php" method="post"  id="commentform" novalidate="novalidate" class="commentform" accept-charset="utf-8" novalidate="novalidate">
                            <div class="text-wrap clearfix">
                                <fieldset class="name-wrap">
                                <input type="text"  id="author" class="tb-my-input" name="author" tabindex="1" placeholder="Full Name" value="" size="32" aria-required="true" required="" type="text" />
                                </fieldset>
                                <fieldset class="phone-wrap">
                                <input type="number" id="phone" class="tb-my-input" name="phone" tabindex="2" placeholder="Phone Number" required="" type="email" value="" aria-required="true" />
                                </fieldset>
                                <fieldset class="mail-wrap">
                                <input type="email" id="email"  class="tb-my-input"  name="email" tabindex="2" placeholder="Email Address" value="" size="32"  aria-required="true" required=""/>
                                </fieldset>
            
                                <fieldset class="select-wrap">
                                <select>
                                    <option value="services">Subject</option>
                                    <option value="services1">Subject 01</option>
                                    <option value="services2">Subject 02</option>
                                </select>
                                </fieldset>
                            </div>
                            <fieldset class="message-wrap">
                                <textarea  id="comment-message" name="comment-message"  rows="8" tabindex="4" placeholder="Your Message" aria-required="true"></textarea>
                            </fieldset>
                            <p class="form-submit">
                                <button name="submit" type="submit" id="comment-reply" class="themesflat-button-style3 button btn-style-5 no-boder">
                                <span class="btn-title">Send message</span>
                                </button>
                            </p>
                        </form>
                    </div>
                    <!-- #respond -->
                    </div>
                    <!-- /form-questions -->
                </div>
              <!-- /container -->
            </div>
            <div class="themesflat-spacer  clearfix" data-desktop="100" data-mobile="60" data-smobile="50" ></div>  
        </section>

            
      


       <?php  include "footer.php"; ?>