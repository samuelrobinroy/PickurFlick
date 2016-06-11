<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PickurFlick">
    <meta name="author" content="Tanishk">
    <title>Tanishk:::My_Theme</title>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
 
 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

	<!-- title bar icons-->
    <link rel="shortcut icon" href="images/ico/icon1.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/icon1.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/icon1.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/icon1.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/icon1.png">
	
<style> 

 html,body
{
   background-color:black;
  
}


.container1:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
    background-image: url('images/synopsis/bg1.jpg');
	    background-repeat: no-repeat;
   opacity: 0.7;
   width:1375px; height:561px;
}



.synopsis { background-color:#d3d3d3 ;
 }
.synopsis1{background-color:#1b1b1b;;
}

.synopsis3{
background-color:#FFE884;
 }

.serif{ font-family:serif}
.monospace{font-family:monospace}
.Helvetica{font-family:Helvetica Neue}




.synop {
 position: relative; 
    z-index: 2;
  color: #fff;
  font-family: arial;
  margin-left: 2cm;
  
  width: 500px;
  line-height: 20px;
  font-size: 16px;
}

.img-responsive{
height:200px;
width:300px;
}


}
</style>
	
	</head><!--/head-->
	
	
	
<body>
    <header class="navbar navbar-inverse navbar-fixed-top"role="banner">
        <div class="container-fluid">
             
			  
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" width="200px" height="50px"/></a>			<!-- for brand-->
               
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
           
              <div class="collapse navbar-collapse">
                 <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html"><b>Home</b></a></li>
               
     			   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Top Flicks</b><i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">By Region</a></li>
                            <li><a href="#">By Era</a></li>
                            
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">By Genres&nbsp <i class="icon-angle-right"></i></a>
                            <ul class="dropdown-menu">
							
                              
             <li class="back"><a href="#">Back</a></li>
         <li>
            <a href="/movie-genres/action-adventure-films-1">Action/Adventure</a>
        </li>
        <li>
          <a href="/movie-genres/animation-films-10">Animated</a>
        </li>
        <li>
          <a href="/movie-genres/avant-garde-films-79">Avant-garde</a>
        </li>
        <li>
          <a href="/movie-genres/comedy-films-24">Comedy</a>
        </li>
        <li>
          <a href="/movie-genres/crime-films-39">Crime</a>
        </li>
        <li>
           <a href="/movie-genres/cult-films-46">Cult</a>
        </li>
        <li>
          <a href="/movie-genres/documentary-films-51">Documentary</a>
        </li>
        <li>
          <a href="/movie-genres/drama-films-67">Drama</a>
        </li>
        <li>
          <a href="/movie-genres/fantasy-films-81">Fantasy</a>
        </li>
        <li>
          <a href="/movie-genres/horror-films-135">Horror</a>
        </li>
        <li>
          <a href="/movie-genres/independent-films-147">Independent</a>
        </li>
        <li>
          <a href="/movie-genres/lgbt-149">LGBTQ</a>
        </li>
        <li>
          <a href="/movie-genres/short-films-148">Short</a>
        </li>
        <li>
          <a href="/movie-genres/silent-films-162">Silent</a>
        </li>
        <li>
          <a href="/movie-genres/silent-films-169">Suspense</a>
        </li>
      </ul></li>
                            <li><a href="#">By Format</a></li>
                         </ul>
                    </li>
     
                	 <li><a href="#"><b>New Flicks</b></a></li>
                     <li><a href="#"><b>Trending</b></a></li>
                    
					 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>My Account</b> <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Watched</a></li>
                            <li><a href="#">Rented</a></li>
                            <li><a href="#">Purchased</a></li>
							<li class="divider"></li>
							<li><a href="#"><b>My Favourite</b></a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Preorder</a></li>
                        </ul>
                    </li>
					
					
				
		
	         	<li><a class="btn btn-default btn-danger" role="button" data-toggle="modal" data-target="#m1"><b style="color:white;">Log-in</b></a></li>
	            <li><a class="btn btn-default btn-info" role="button" data-toggle="modal" data-target="#m2"><b style="color:white;">Sign-up</b></a></li>
        
		        <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" style="width:180px">
                
                  
				</div>
		</ul>  </div>
        </div>
         </header><!--/header-->
		 
	
    
<!--Flick poster -->	
<div class="row">
<div class="container1 col-sm-6">
    <br/>
         <div class="synop">
 
            <div class="inner-wrap" >
                <h1 style="color:#FFC638; font-family:Crimson Text;">Life Of The Pie</h1>
              
                 <div class="new-retting">    <!--Rating::: 4 stars & 1 default -->				
							   
							   <div class="star"><img src="images/slider/stars_rating.png"/><img src="images/slider/stars_rating.png"/><img src="images/slider/stars_rating.png"/><img src="images/slider/stars_rating.png"/><img src="images/slider/stars_default.png"/>&nbsp&nbsp<a class="review-count" href="#reviews" style="color:#FFE884;">4 Reviews</a><br/><h5 style="color:#FFE884">Genre : Adventure</h5>
							   
				               </div>
							   <div class="social social-buttonset">
                     <a href="#" class="btn btn-danger"><b>G +1</b></a>
                     <a href="#" class="btn" style="background-color:#3b5998;"><i class="icon icon-facebook" style="color:white"></i> <b style="color:white">Share | 8</b></a>
                       <a href="#" class="btn btn-info"><i class="icon icon-twitter"></i> <b>Tweet</b> | 15</a>
                            </div>
				</div>
				
			 </div>  
			
                <br/><br/>
                <p class="Helvetica" style="font-size:17px;">"An impassioned defense of zoos, a death-defying trans-Pacific sea adventure a la Kon-Tiki , and a hilarious shaggy-dog story...This audacious movie manages to be all of these . His fight against the odds is heightened by the company of a hyena and a male Bengal tiger." – Fred Armisen, <em>Documentary Now!</em>, <em>SNL</em></p>   
				 
				 <div class="btn" style="background-color:#FFC638; width:300px; height:60px;">
			 <b><center><h3 class="Khula" style="margin:auto; margin-top:8px;">Watch Trailer</h3></center></b>
			 <br/>
			                    <!-- <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
                                  </div>-->
			 </div>
</div></div>

              <div class="synop col-sm-5">        
                  <br/><br/><br/><br/><br/><br/><br/><br/><br/>			
                        <a href="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" rel="prettyPhoto"><img src="images/play.png" style="width:85px; height:85px;"/></a>          
                    </div>    
</div>
 






<br/><br/><br/><br/><br/><br/><br/>
			
	<hr/>
	<!-- Vimeo video Trailer 
	<section class="synopsis1">
	
	<div class="container-fluid">
	   <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
                                <b><center><h2 class="Khula" style="background-color:#FFE884; border-radius: 10px;  ">Trailer</h2></center></b>                         
                                  <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" style="height:550px; width:1110px;"  webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
                                  </div>
                       </div>
					   
					<!--   <div class="col-sm-5">
                                 <b><center><h2 class="Khula" style="background-color:#FFE884; border-radius: 10px;">Watch Now</h2></center></b>                         
                                  <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                  </div>
                       </div>
					   
					   </div>
</div>
</section>	-->

<div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
                  <b><h3 style="margin-left:3cm"><center>Synopsis</center></h3></b>
                </a>
              </h4>
            </div>
            <div id="collapseTwo2" class="panel-collapse collapse">
              <div class="panel-body">
               
             
	
	<section class="synopsis">
	<div class="container-fluid">
	   <div class="row">
	        <div class="col-sm-3 col-sm-offset-1">
		     <img src="images/synopsis/lop3.jpg" width="300" height="450">
			 <br/><br/>
			 <div class="btn" style="background-color:#FFC638; width:300px; height:60px;">
			 <b><center><h3 class="Khula" style="margin:auto; margin-top:8px;">Watch Now</h3></center></b>
			 </div>
			  <h4 class="Helvetica" style="color:#141414"><b>Language</b>: English
              <br/><br/><b>Subtitles</b>:English-us
              <br/><br/><b>Runtime</b>: 2hr.
              <br/><br/><b>Rating</b>:<img src="images/slider/stars_rating.png"/><img src="images/slider/stars_rating.png"/><img src="images/slider/stars_rating.png"/><img src="images/slider/stars_default.png"/><img src="images/slider/stars_default.png"/>
            <br/><br/><b>Release date</b>: November 23, 2012 (India)
            <br/><br/><b>Director</b>: Ang Lee
            <br/><br/><b>Featured song</b>: Pi's Lullaby
            <br/><br/><b>Adapted from</b>: Life of Pi</h5>
            <br/><br/><b style="color:#141414">Suitable for</b>:<b>All Ages</b>
            </h4>
		  </div>
		

               
             
		<div class="col-sm-6 col-sm-offset-1">

                     <h2 style="color:#141414 "><center><u class="serif">Movie Details</u></center></h2>
             
        <h5 style="color:#141414">Genre:Adventure</h5><hr/>
        <h3 class="serif" style="color:#141414 ; font-size:1.3em; font-family:sans-serif;"><center>Pi Patel finds a way to survive in a lifeboat that is adrift in the middle of nowhere.His fight against the odds is heightened by the company of a hyena and a male Bengal tiger.An impassioned defense of zoos, a death-defying trans-Pacific sea adventure a la Kon-Tiki, and a hilarious shaggy-dog story.This audacious movie manages to be all of these.His fight against the odds is heightened by the company of a hyena and a male Bengal tiger. </center></h3>
		<hr/>
		
	  <hr/><h3 class="serif" style="color:#141414 "><center>Directed By</center></h3>
	  <center><img src="images/synopsis/angle.jpg" height="300px"/></center>
	  <br/><h4><center><b style="color:#141414">Ang Lee</b></h4></center><hr/>  
       <p class="serif"><center><h4 style="color:#141414">Ang Lee OBS is a Taiwanese-born American film director, screenwriter and producer. Lee's earlier films, such as The Wedding Banquet, Pushing Hands etc. </h4></center></p>           
        </div>
		</div>
		</div>
		
		
       </section>
	   
	    </div>
            </div>
          </div>
		
  
  
  

            
    <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3">
                           <b><h3 style="margin-left:3cm"><center>Cast & Crew</center> </h3></b>
                </a>
              </h4>
            </div>

  
       <div id="collapseOne3" class="panel-collapse collapse">
              <div class="panel-body">     
  
   <section class="synopsis2">
   <hr/>
        <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <table class="cast_list table table-striped ">    
  
      <tr>
          <td class="primary_photo">
<a href="/name/nm5183595/?ref_=ttfc_fc_cl_i15"
><img height="50" width="55" alt="Shravanthi Sainath" title="Shravanthi Sainath"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5183595/?ref_=ttfc_fc_cl_t15"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Shravanthi Sainath</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Anandi 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5371066/?ref_=ttfc_fc_cl_i16"
><img height="50" width="55" alt="Elie Alouf" title="Elie Alouf"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5371066/?ref_=ttfc_fc_cl_t16"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Elie Alouf</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Mamaji 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370170/?ref_=ttfc_fc_cl_i17"
><img height="50" width="55" alt="Padmini Ramachandran" title="Padmini Ramachandran"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370170/?ref_=ttfc_fc_cl_t17"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Padmini Ramachandran</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b><div><b>
              <div>
            Dance Master 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm3605032/?ref_=ttfc_fc_cl_i18"
><img height="50" width="55" alt="T.M. Karthik" title="T.M. Karthik"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm3605032/?ref_=ttfc_fc_cl_t18"
itemprop='url'> <span class="itemprop" itemprop="name"><b>T.M. Karthik</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Science Teacher 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370409/?ref_=ttfc_fc_cl_i19"
><img height="50" width="55" alt="Amarendran Ramanan" title="Amarendran Ramanan"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370409/?ref_=ttfc_fc_cl_t19"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Amarendran Ramanan</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Indian History Teacher 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370783/?ref_=ttfc_fc_cl_i20"
><img height="50" width="55" alt="Hari Mina Bala" title="Hari Mina Bala"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370783/?ref_=ttfc_fc_cl_t20"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Hari Mina Bala</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Librarian 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm3120588/?ref_=ttfc_fc_cl_i21"
><img height="44" width="40" alt="Bo-Chieh Wang" title="Bo-Chieh Wang"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm3120588/?ref_=ttfc_fc_cl_t21"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Bo-Chieh Wang</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Buddhist Sailor 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm0461904/?ref_=ttfc_fc_cl_i22"
><img height="50" width="55" alt="I-Chen Ko" title="I-Chen Ko"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm0461904/?ref_=ttfc_fc_cl_t22"
itemprop='url'> <span class="itemprop" itemprop="name"><b>I-Chen Ko</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Tsimtsum Captain 
  
  
  (as Yi-Cheng Ko)
  
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm0398970/?ref_=ttfc_fc_cl_i23"
><img height="50" width="55" alt="Jian-Wei Huang" title="Jian-Wei Huang"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm0398970/?ref_=ttfc_fc_cl_t23"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Jian-Wei Huang</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Sailor 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370198/?ref_=ttfc_fc_cl_i24"
><img height="50" width="55" alt="Ravi Natesan" title="Ravi Natesan"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370198/?ref_=ttfc_fc_cl_t24"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Ravi Natesan</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Selvam 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370964/?ref_=ttfc_fc_cl_i25"
><img height="50" width="55" alt="Adyant Balaji" title="Adyant Balaji"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370964/?ref_=ttfc_fc_cl_t25"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Adyant Balaji</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Bully 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370915/?ref_=ttfc_fc_cl_i26"
><img height="50" width="55" alt="Chirag Agarwal" title="Chirag Agarwal"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370915/?ref_=ttfc_fc_cl_t26"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Chirag Agarwal</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Bully 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370848/?ref_=ttfc_fc_cl_i27"
><img height="50" width="55" alt="Ahan André Kamath" title="Ahan André Kamath"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370848/?ref_=ttfc_fc_cl_t27"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Ahan André Kamath</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Bully 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370635/?ref_=ttfc_fc_cl_i28"
><img height="50" width="55" alt="Om Kamath" title="Om Kamath"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370635/?ref_=ttfc_fc_cl_t28"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Om Kamath</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Bully 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370971/?ref_=ttfc_fc_cl_i29"
><img height="50" width="55" alt="Srilekh Katta" title="Srilekh Katta"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370971/?ref_=ttfc_fc_cl_t29"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Srilekh Katta</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Bully 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5371259/?ref_=ttfc_fc_cl_i30"
><img height="50" width="55" alt="Swati Van Rijswijk" title="Swati Van Rijswijk"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5371259/?ref_=ttfc_fc_cl_t30"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Swati Van Rijswijk</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Anandi's Friend #1 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5371101/?ref_=ttfc_fc_cl_i31"
><img height="50" width="55" alt="M. Keerthana" title="M. Keerthana"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5371101/?ref_=ttfc_fc_cl_t31"
itemprop='url'> <span class="itemprop" itemprop="name"><b>M. Keerthana</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Anandi's Friend #2 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370337/?ref_=ttfc_fc_cl_i32"
><img height="50" width="55" alt="Indumohan Poornima" title="Indumohan Poornima"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370337/?ref_=ttfc_fc_cl_t32"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Indumohan Poornima</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Dancer 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370334/?ref_=ttfc_fc_cl_i33"
><img height="50" width="55" alt="Josephine Nithya B." title="Josephine Nithya B."src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370334/?ref_=ttfc_fc_cl_t33"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Josephine Nithya B.</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Dancer 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370493/?ref_=ttfc_fc_cl_i34"
><img height="50" width="55" alt="Samyuktha S." title="Samyuktha S."src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370493/?ref_=ttfc_fc_cl_t34"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Samyuktha S.</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Dancer 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370361/?ref_=ttfc_fc_cl_i35"
><img height="50" width="55" alt="A. Deiva Sundari" title="A. Deiva Sundari"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370361/?ref_=ttfc_fc_cl_t35"
itemprop='url'> <span class="itemprop" itemprop="name"><b>A. Deiva Sundari</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Dancer 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370636/?ref_=ttfc_fc_cl_i36"
><img height="50" width="55" alt="G. Vasantakumary" title="G. Vasantakumary"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370636/?ref_=ttfc_fc_cl_t36"
itemprop='url'> <span class="itemprop" itemprop="name"><b>G. Vasantakumary</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Dancer 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370450/?ref_=ttfc_fc_cl_i37"
><img height="50" width="55" alt="A. Vithya" title="A. Vithya"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370450/?ref_=ttfc_fc_cl_t37"
itemprop='url'> <span class="itemprop" itemprop="name"><b>A. Vithya</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Dancer 
                  
              </div>
          </td>
      </tr>
      <tr>
          <td class="primary_photo">
<a href="/name/nm5370410/?ref_=ttfc_fc_cl_i38"
><img height="50" width="55" alt="Mythili Prakash" title="Mythili Prakash"src="images/synopsis/angle.jpg" class="" /></a>          </td>
          <td class="itemprop" itemprop="actor" itemscope itemtype="http://schema.org/Person">
<a href="/name/nm5370410/?ref_=ttfc_fc_cl_t38"
itemprop='url'> <span class="itemprop" itemprop="name"><b>Mythili Prakash</span>
</a>          </td>
          <td class="ellipsis">
              ...
          </td>
          <td class="character"><div><b>
              <div>
            Pi's Wife 
                  
              </div>
          </td>
      </tr>


	  </table>
	  </div>
	  </div>
	    </div>
		</div>
	  </section>
	  </div>
            </div>
          </div>
	  
    <!--/#Movie synopsis-->
		

 <section class="synopsis1">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 style="color:white;">Similar Flicks</h3>
                    <p style="color:white;">PickUrFlick Presents</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/slider/bg9.jpg" alt="">
                                                <h5>
                                                    Johnny English
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/slider/bg9.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/slider/bg12.jpg" alt="">
                                                <h5>
                                                    Kungfu Panda
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/slider/bg12.jpg rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/slider/bg5.jpg" alt="">
                                                <h5>
                                                    I FRANKENSTEINE
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/slider/bg5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/slider/bg6.jpg" alt="">
                                                <h5>
                                                    Ek Tha Tiger
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/slider/bg6.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/slider/bg7.jpg" alt="">
                                                <h5>
                                                   Deadpool
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/slider/bg7.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/slider/bg8.jpg" alt="">
                                                <h5>
                                                    The Last Witch Hunter
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/slider/bg8.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->		
		



		
 <footer id="footer" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    &copy; 2016 <a target="_blank" href="#">Couch Potato International Pvt. Ltd.</a>. All Rights Reserved.
                </div>
                <div class="col-sm-7">
                    <ul class="pull-right">
                        <li><a href="index.html"><b>Home</b></a></li>
                        <li><a href="about-us.html"><b>About Us</b></a></li>
                        <li><a href="faq.html"><b>Faq</b></a></li>
                        <li><a href="contact-us.html"><b>Contact Us</b></a></li>
						<li><a href="404.html"><b>Community</b></a></li>
                        <li><a href="404.html"><b>Blog</b></a></li> 
						<li><a href="terms.html"><b>Terms of Use</b></a></li> 
						<li><a href="privacy.html"><b>Privacy policy</b></a></li> 
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>