<?php
if ( get_option( 'show_on_front' ) == 'posts' ) {
    get_template_part( 'index' );
} elseif ( 'page' == get_option( 'show_on_front' ) ) {
    get_header(); ?>

<!----------------------------------------- Start SlideShow---------------------------------------------->
    <div id="slideshow-container">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-xs">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image: url('http://localhost/jcub/wp-content/uploads/2016/11/imageedit_1_3366527132.jpg');">
                    
                      <!----------------------------------------- Change Image for Maintainance ----------------------------------------------> 
                    </div>

                    <div class="carousel-caption hidden-xs">
                        <h1>Labor Day<br/> Public Holiday</h1>
                        <p>Monday 2 May. These will be no class. However the campus will be open with limitted access</p>

                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style=" background-image: url('http://localhost/jcub/wp-content/uploads/2016/11/exam-1.jpg');">
                     <!----------------------------------------- Change Image for Maintainance ----------------------------------------------> 
                        
                    </div>
                    <div class="carousel-caption hidden-xs">
                        <h1>Labor Day<br/> Public Holiday</h1>
                        <p>Monday 2 May. These will be no class. However the campus will be open with limitted access</p>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style=" background-image:
						linear-gradient(
						  rgba(0, 0, 0, 0),
						  rgba(0, 0, 0, 0)
						), url('http://localhost/jcub/wp-content/uploads/2016/11/imageedit_3_5581986188.jpg');">
                        
                        <!----------------------------------------- Change Image for Maintainance ----------------------------------------------> 
                    </div>
                    <div class="carousel-caption hidden-xs">
                        <h1>Labor Day<br/> Public Holiday</h1>
                        <p>Monday 2 May. These will be no class. However the campus will be open with limitted access</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </div>
        
        <!----------------------------------------- End SlideShow---------------------------------------------->
        
        <!----------------------------------------- Start bottom Menu in SlideShow---------------------------------------------->


        	 <div id="bottom-menu">
            <div class="container">
                <div class="row">
                   
                        <ul class="nav navbar-nav col-md-12 ">
							<li class="col-md-3 "><a href="#" style="text-align: center;"><img src="http://localhost/jcub/wp-content/uploads/2016/11/circle-icon-1.png" style="width: 50px; text-align:  center;" >   <p>Library </p></a></li>
							<li class="col-md-3"><a href="#" style="text-align: center;"><img src="http://localhost/jcub/wp-content/uploads/2016/11/circle-icon-1.png" style="width: 50px; text-align: center;" > <p>Trimester System</p></a></li>
							<li class="col-md-3"><a href="#" style="text-align: center;"><img src="http://localhost/jcub/wp-content/uploads/2016/11/circle-icon-1.png" style="width: 50px; text-align: center;" > <p>Joblink </p></a></li>
							<li class="col-md-3"><a href="#" style="text-align: center; margin-right: -10px;"><img src="http://localhost/jcub/wp-content/uploads/2016/11/circle-icon-1.png" style="width: 50px; text-align: center;" >  <p style="margin-right:6px;">FAQs </p></a></li>  
                         </ul>                         
                   
                </div>
            </div>
        </div>	
        
         <!----------------------------------------- End bottom Menu in SlideShow---------------------------------------------->
    </div>
    </div>
    
     <!----------------------------------------- Find you Future Careers ----------------------------------------------> 
     
         <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-12">
				<h1><b>Find you future career</b></h1>
				<p>Sed magna leo, pretium finibus nunc id, placerat tristique nulla. Curabitur ultrices vestibulum enim. Quisque eros sem, efficitur in feugiat in, molestie vitae sem.</p>
                </div>
				
			<div class="row">
				<div class="degree-search col-md-6">
					<div class="career search" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
							<div id="search" class="career-search">
								<form role="search" method="get" class="search-form" action="http://testing.jcub.edu.au/">
									<label>
										<span class="screen-reader-text"></span>
										<input type="text" class="search-field" placeholder="Degree Search" value="" name="s">
										<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
									</label>
									
								</form>
                                
							</div>
						</div>	
				</div>

				<div class="degree-search col-md-6">
					<div class="career search" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
							<div id="search" class="career-search">
								<form role="search" method="get" class="search-form" action="http://testing.jcub.edu.au/">
									<label>
										<span class="screen-reader-text"></span>
										<input type="text" class="search-field" placeholder="Choose your career" value="" name="s">	
										 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
											<span class="caret"></span></button>
											 <ul class="dropdown-menu dropdown-menu-right">
											  <li><div class="course_child"><a href="http://testing.jcub.edu.au/hospitality-tourism/"><img style="width: 60px; height: 60px; padding-right: 10px;" src="http://localhost/jcub/wp-content/uploads/2016/11/tourism-1.png">Hospitality &amp; Tourism</a></div></li>
											  <li><div class="course_child"><a href="http://testing.jcub.edu.au/home/accounting/"><img style="width: 60px; height: 60px; padding-right: 10px;" src="http://localhost/jcub/wp-content/uploads/2016/11/accounting-1.png" alt="Accounting">Accounting</a></div></li>
											  <li><div class="course_child"><a href="http://testing.jcub.edu.au/home/information-technology/"><img style="width: 60px; height: 60px; padding-right: 10px;" src="http://localhost/jcub/wp-content/uploads/2016/11/it-1.png">Information Technology</a></div></li>
												<li><div class="course_child"><a href="http://testing.jcub.edu.au/home/business/"><img style="width: 60px; height: 60px; padding-right: 10px;" src="http://localhost/jcub/wp-content/uploads/2016/11/business-1.png" alt="Business">Business</a></div></li>
											</ul>
									</label>
									
								</form>
							</div>
					</div>	
				</div>
		</div>
        </div>
		</div>
       
     	
		<div id="services">
			<div class="container">
            <div class="row"
				<div class="main-content col-lg-12"> <h1><b>Our Services</b></h1>
							<div class="container_services_sub">
								<div class="services_child col-md-4 ">
									<div class="services_child_img"><img class="" src=						"http://localhost/jcub/wp-content/uploads/2016/11/blue-analytics-icon-1.png" ></div>
									<div class="services_child_title"><a>The Learning Centre</a></div>
								</div>
								<div class="services_child col-md-4 ">
									<div class="services_child_image"><img class="" src="http://localhost/jcub/wp-content/uploads/2016/11/hands2-1.png" ></div>
									<div class="services_child_title"><a>Student Mentor Program</a></div>
								</div>
								<div class="services_child col-md-4 ">
									<div class="services_child_image"><img class="" src="http://localhost/jcub/wp-content/uploads/2016/11/joblinx-1.png" ></div>
									<div class="services_child_title"><a href="http://www.joblinx.com.au/">Joblinx</a></div>
								</div>
							</div>
							
				</div>
			</div>
            </div>
		</div>
			
   
       
	<div id="campus-life">
					<div class="campus" style="height:500px; background-image: 
						linear-gradient(
						  rgba(0, 0, 0, 0.3),
						  rgba(0, 0, 0, 0.3)
						), url('http://localhost/jcub/wp-content/uploads/2016/11/campus-life-1.jpg');">
						
					</div>
                    <div class="carousel-caption">
					
                       <h1>Campus<br/>Life</h1>
                    </div>
				
					 <button type="button" class="btn-lg">Find out more</button>
					
				
	</div>
    
    <div class="jcub-featured-stories">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2></h2>
                </div>
            </div>
            <div id="fs-carousel" class="carousel slide" data-interval="8000">
                <ol class="carousel-indicators">
                        <li data-target="#fs-carousel" data-slide-to="0" class=""></li>
                        <li data-target="#fs-carousel" data-slide-to="1" class="active"></li>
                        <li data-target="#fs-carousel" data-slide-to="2" class=""></li>
                   
                </ol>
                <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="http://localhost/jcub/wp-content/uploads/2016/11/employer-preferred-graduates-web-banner-1.jpg" alt=" ">
                                </div>
                                <div class="col-sm-2">
                                    <h1><strong>TOP 2%  </strong></h1>
                                 </div>
                                 <div class="col-sm-4">
                                    <h3> Universities in the world. </h3>
                                    <p>JCU ranked among top 2% of university in the world by the Academic Ranking of World University</p>
                                   <a class="button" href="">APPLY NOW!</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="http://localhost/jcub/wp-content/uploads/2016/11/top-2-percent-web-banner-1.jpg" alt="Respect. Now. Always.">
                                </div>
                                <div class="col-sm-2">
                                    <h1><strong>TOP 2%  </strong></h1>
                                 </div>
                                 <div class="col-sm-4">
                                    <h3> Universities in the world. </h3>
                                    <p>JCU ranked among top 2% of university in the world by the Academic Ranking of World University</p>
                                   <a class="button" href="">APPLY NOW!</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="http://localhost/jcub/wp-content/uploads/2016/11/benchaphon-phupanpha-web-banner-1.jpg" alt="">
                                </div>
                                <div class="col-sm-2">
                                    <h1><strong>TOP 2%  </strong></h1>
                                 </div>
                                 <div class="col-sm-4">
                                    <h3> Universities in the world. </h3>
                                    <p>JCU ranked among top 2% of university in the world by the Academic Ranking of World University</p>
                                   <a class="button" href="">APPLY NOW!</a></p>
                                </div>
                            </div>
                        </div>
                        
                         <div class="item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="http://localhost/jcub/wp-content/uploads/2016/11/welcometotrimester3-2016-web-banner-1.jpg" alt="">
                                </div>
                                <div class="col-sm-2">
                                    <h1><strong>TOP 2%  </strong></h1>
                                 </div>
                                 <div class="col-sm-4">
                                    <h3> Universities in the world. </h3>
                                    <p>JCU ranked among top 2% of university in the world by the Academic Ranking of World University</p>
                                   <a class="button" href="">APPLY NOW!</a></p>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>

        <a class="left carousel-control" href="#fs-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#fs-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
	
		
     
     
		

    <?php
    get_footer();
}
?>