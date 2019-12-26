<body>
  <?php
  include "header.php";
 
  ?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/cs03.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		  
		  <div>
            <h1 class="mb-4"  data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong id="demo"><br></strong></h1>
            
            </div>
			<p> Providing freedom of action and choice for all students with better visibility.</p>

            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore <br> your faviourate event's</h1>
            
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Technical Events</h3>
                <p>Show off your Technical Skills, and bring out the coder in you.</p>
              </div>
            </div>      
          </div>
		  
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Non Technical Events</h3>
                <p>Its all Fun and Games. Come and compete with your friends.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Gaming Events</h3>
                <p>Bring out the Gamer in you, and shoe everyone that you're the Best!</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Teachers Events</h3>
                <p>Watch your teachers compete against each other,and see who's better.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <section class=" ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Banners</span>
            <h2 class="mb-4"><strong>Events</strong> Posters</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="single-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs01.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/event.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/r1.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/r2.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
    <section class=" bg-light" id="events">
    	<div class="container" id="0">
    		<div class="row justify-content-start mb-5 pb-3">
             <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">events</span>
            <h2 class="mb-4"><strong>Book Your</strong>  Faviourate Event</h2>
          </div>
        </div>  
    		<div class="row" id="technical" >
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row" >
                <div class="col-md-12">
                  <div id="get_events"></div>
                      <?php
                      $event_query = "SELECT * FROM event_type";
                      $run_query1 = mysqli_query($con,$event_query);
                      
                      if(mysqli_num_rows($run_query1) > 0){
                          
                        while($row = mysqli_fetch_array($run_query1)){
                            
                        $type_id = $row["type_id"];
                        $type_title= $row["type_title"];
                        echo " 
                        <div class='card'>
                        <div class='card-header' id='$type_id'>
                               <a class='card-link' data-toggle='collapse'  href='#menu$type_id' aria-expanded='false' aria-controls='menu$type_id'>$type_title<span class='collapsed'><i class='icon-plus-circle'></i></span><span class='expanded'><i class='icon-minus-circle'></i></span></a>
                               </div> 
                               <div id='menu$type_id' class='collapse'>
                               <div class='card-body'>
                                 <div class='row'>";
                                 $type_query = "SELECT * FROM events,event_type WHERE events.type_id=event_type.type_id";
                                 $run_query2 = mysqli_query($con,$type_query);
                                 if(mysqli_num_rows($run_query2) > 0){
                       
                                 while($row = mysqli_fetch_array($run_query2)){
                                   $newtype_id    = $row['type_id'];
                                   $event_id   = $row['event_id'];
                                   $event_title = $row['event_title'];
                                   $type_title = $row['type_title'];
                                   $event_price = $row['event_price'];
                                   $img_link = $row['img_link'];
                                  
                                   if($newtype_id==$type_id){
                    
                                   echo "
                               
                                   
                                       
                                   <div class='col-md-6 col-lg-3 ftco-animate'>
                                   <div class='destination'>
                                     <a href='#' class='img img-2 d-flex justify-content-center align-items-center' style='background-image: url(./images/$img_link);'>
                                       <div class='d-flex justify-content-center align-items-center'>
                                         
                                       </div>
                                     </a>
                                     <div class='text p-3'>
                                       <h3><a href='#'>$event_title</a></h3>
                                       <p class='price' style='font-weight: 400;font-size: 18px;color: #2f89fc;'>
                                         $event_price
                                         <span>Rs</span>
                                       </p>
                                       <p>Click below to register for the event.</p>
                                       <hr>
                                       <p class='bottom-area d-flex'>
                                         <span><i class='icon-map-o'></i> register</span> 
                                         <span class='ml-auto'><a href='register.php'>Book</a></span>
                                       </p>
                                     </div>
                                   </div>
                                 </div>";
                                   }
                    
                                 }
                                 }
                                 
                              echo"  
                              </div>
                               </div>
                             </div>
                             </div>
                             ";
                    
                    
                        }
                        
                        
                      }
                      ?>
                    
                  </div>           
    					</div>
				    </div>
    			</div>
    		</div>
    	</div>
    </section>
    
    

    

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/cs03.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
            <span class="subheading">More than 250 participants </span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="15">0</strong>
		                <span>Number of events</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="250">0</strong>
		                <span>Number of participants</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Total cash prize</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="35">0</strong>
		                <span>Number of Organizers</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


   

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-6 heading-section ftco-animate">
          	<span class="subheading">College Information</span>
            <h2 class="mb-4 pb-3"><strong>RNSIT</strong> Mission</h2>
            <p>To impart quality education in Engineering, Technology and Management with a difference, Enabling Students to Excel in their Career by:</p>
            <p><strong>1. </strong>Attracting quality Students and preparing them with a strong fundamentals so as to achieve distinctions in various walks of life leading to outstanding contributions</p>
            <p><b>2. </b>Imparting value based, need based, choice based and skill based professional education to the aspiring youth and carving them into disciplined, World class Professionals with social responsibility</p>
			<p><b>3. </b>Providing freedom of action and choice for all the Stake holders with better visibility</p>
			<p><a href="https://www.rnsit.ac.in" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-5 heading-section ftco-animate">
          	<span class="subheading">Department Information</span>
            <h2 class="mb-4 pb-3"><strong>ISE</strong> Mission</h2>
          	<p>Imparting high quality education in the area of Information Science so as to graduate the students with good fundamentals, "Information System Integration", "Software Creation" capability & suitably train them to thrive in Industries, higher schools of learning and R & D centers with a comprehensive perspective.</p>
            <p>Fostering winning professionals of Strong informative potential.</p>
            <p><a href="https://www.rnsit.ac.in/ise.html" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
          </div>
        </div>
      </div>
    </section>

    

    
		
		

    
  
                                    