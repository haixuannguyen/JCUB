<?php
if ( get_option( 'show_on_front' ) == 'posts' ) {
    get_template_part( 'index' );
} elseif ( 'page' == get_option( 'show_on_front' ) ) {
    get_header(); ?>

    <div id="slideshow-container">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style=" background-image: url('http://localhost:8888/JCUB/wp-content/uploads/2016/11/exam.jpg');">
                        <img src="http://localhost:8888/JCUB/wp-content/uploads/2016/11/exam.jpg">
                    </div>

                    <div class="carousel-caption">
                        <h1>Labor Day<br/> Public Holiday</h1>
                        <p>Monday 2 May. These will be no class. However the campus will be open with limitted access</p>

                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style=" background-image: url('http://localhost:8888/JCUB/wp-content/uploads/2016/11/student.jpg');">
                        <img src="http://localhost:8888/JCUB/wp-content/uploads/2016/11/student.jpg">
                    </div>
                    <div class="carousel-caption">
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
						), url('images/student.jpg');">
                        <img src="http://localhost:8888/JCUB/wp-content/uploads/2016/11/exam.jpg">
                    </div>
                    <div class="carousel-caption">
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


        <div id="bottom-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="#" ><img src="images/circle-icon.png" style="width: 50px;" > <br/>Library </a></li>
                            <li><a href="#" ><img src="images/circle-icon.png" style="width: 50px; " > <br/>Trimester System</a></li>
                            <li><a href="#" ><img src="images/circle-icon.png" style="width: 50px;" > <br/>Joblink</a></li>
                            <li><a href="#" ><img src="images/circle-icon.png" style="width: 50px;" > <br/> FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
    get_footer();
}
?>