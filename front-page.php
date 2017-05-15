
<?php get_header();?>

				<div class="container-fluid">
	    			<div class="text-center">
				         <h1 class="animated zoomInRight" >FREE CONSULTAION</h1>
				         <hr class="animated fadeInRight">
						 <p class="lead animated fadeInLeft">We help companies to build and scale their software dev teams. Let us see if we can help you too.</p>
						  <!-- Modal Trigger -->
						 <button type="button" id="btn-small" class="btn btn-warning my-button animated fadeInUp" data-toggle="modal" data-target="#myModal">GET A FREE CONSULTATION</button>
	    			</div>
				</div>
			</div>
	</header>
<body>
<div class="space-30"></div>
<div class="container">
		<div class="text-center">
			<h1 class="how-we-do">HOW WE WORK</h1>
			<h3 class="sub-heading">Check out what we did for Complete Merchant Solutions. It's solid.</h3>
			<div class="space-30"></div>
			<iframe width="840" height="473" src="https://www.youtube.com/embed/oUzr-NtPN1I" frameborder="0" allowfullscreen></iframe>
			<div class="space-30"></div>
			<h4 class="how-we-do">BOOK A FREE CONSULTATION NOW!</h4>
			 <!-- Modal Trigger -->
			<button type="button" id="btn-small" class="btn btn-warning btn-lg my-button" data-toggle="modal" data-target="#myModal">CLICK HERE!</button>
			<div class="space-30"></div>
		</div>
</div>
<div class="space-30"></div>
<div class="container-fluid my-fluid-container" id="">
	<div class='row'>
			<div class='col-md-offset-2 col-md-8 text-center'>
    			<h2 class="how-we-do">WHAT OUR CLIENTS SAY</h2>
   			</div>
	    <div class='col-md-offset-2 col-md-8'>
			 <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		        <!-- Bottom Carousel Indicators -->
		        <ol class="carousel-indicators">
		          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
		          <li data-target="#quote-carousel" data-slide-to="1"></li>
		        </ol>
		        
		        <!-- Carousel Slides / Quotes -->
	        <div class="carousel-inner">
	        
	          <!-- Quote 1 -->
		          <div class="item active">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
		                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
		                </div>
		                <div class="col-sm-9">
		                  <p class="client-comments">I would recommend Zylun to any company that is hiring developers because of their efficiency in their hiring process. They save us a lot of time, a lot of money and we were able to pick up excellent candidates</p>
		                  <small>Fernando Ribeiro, Lingotek</small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		          <!-- Quote 2 -->
		          <div class="item">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
		                </div>
		                <div class="col-sm-9">
		                  <p class="client-comments">“It’s been important for us to be able to partner with Zylun, it’s been so helpful on our organization on our growth and our scalability.”</p>
		                  <small>Scott Schwab, Phrameworks CEO</small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
	          <!-- Quote 3 -->
	        </div>
	        <!-- Carousel Buttons Next/Prev -->
	        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
	        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
	      </div>                          
	    </div> 
	</div>
<div class="space-30"></div>
	<div class="container text-center">
		<div class="row">
			
		</div>
	</div>
</div>
<!--Modal starts Here-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
     Modal content-->
        <div class="modal-content text-center">
       	<div class="modal-header">
			<div class="progress">
	  			<div class="progress-bar progress-bar-striped active" role="progressbar"
	  			aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
	   				 50%
	  			</div>
			</div>					
        </div>
        <div class="row">
        	<div class="col-md-8 col-md-offset-2" >
				  <h2>Let's Chat!</h2>
				  <h3>Just let us know who to call and we'll be in touch faster than you can say "Hire me a developer!"</h3>
	       		<div class="modal-body">
			        <?php echo do_shortcode('[contact-form-7 id="38" title="newsletter_copy"]'); ?>
			    	</i><small>We hate SPAM and promise to keep your email address safe.</small>
	       		</div>
       	</div>
      </div> 
    </div>
  </div>
</div>

<?php get_footer();?>