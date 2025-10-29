<section class="contact" id="contact">
	<div class="row">
		<div class="col-md-5 contact-col-1">Whatsapp<br>
		<a href="https://wa.me/60124593221"><img id="anchorbottom" width="40px" height="40px" src="image/WhatsApp-Logo.png"/></a><br>Facebook<br>
		<a href="https://www.facebook.com/TamanMengkuangJaya2"><img width="40px" height="40px" src="image/Facebook_logo.png"/></a>
			<p class="title-1">Have a question? <span class="title-2">Contact Us</span><!--<a href="function/newfile.txt"/>Download Reply</a></p>-->
			<p id="sendmessage">Your message has been sent. Thank you!</p>
            <p id="errormessage">Error to send message!</p>
			<form class="contactForm">
			  	<div class="form-group">
			    	<input type="text" class="form-control" id="name" name="name" placeholder="YOUR NAME" required>
			  	</div>
			  	<div class="form-group">
			    	<input type="email" class="form-control" id="email" name="email" placeholder="YOUR E-MAIL" required>
			  	</div>
			  	<div class="form-group">
			    	<input type="text" class="form-control" id="subject" name="subject" placeholder="SUBJECT" required>
			  	</div>
			  	<div class="form-group">
			  		<textarea class="form-control" id="message" name="message" rows="8" placeholder="MESSAGE" required></textarea>
			  	</div>
			  	<button type="submit" class="btn btn-primary btn-metrio-1 float-right" onclick="myFunction()">send a message</button>
			</form>
		</div>

		<div class="col-md-7 contact-col-2">
			<div class="row">
				<div class="col-md-4">
					<p class="title-3">about us</p>
					<ul>
						<li><a href="about.php#story">Story</a></li>
						<li><a href="about.php#core-values">Core Values</a></li>
						<li><a href="about.php#messages">Messages</a></li>
						<li><a href="about.php#milestones">Milestone</a></li>
					</ul>
					<div class="clear-2"></div>
				</div>
				<div class="col-md-4">
					<p class="title-3">career</p>
					<ul>
						<li><a href="career.php">Jobs</a></li>
						<li><a href="career.php">Upload Resume</a></li>
					</ul>
					<div class="clear-2"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<p class="title-3">projects</p>
					<ul>
						<li><a href="http://www.vortex.my" target="_blank">Vortex Business Park</a></li>
						<li><a href="http://www.beverlyheights.my" target="_blank">Beverly Heights</a></li>
						<li><a href="http://www.theglades.my" target="_blank">The Glades</a></li>
						<li><a href="tmj.php">Taman Mengkuang Jaya</a></li>						<li><a href="tmr.php">Taman Mengkuang Ria</a></li>
					</ul>
					<div class="clear-2"></div>
				</div>
				<div class="col-md-4">
					<!--<p class="title-3">contact</p>
					<ul>
						<li><a href="contact.php#contact-us">Contact Info</a></li>
						<li><a href="contact.php#contact">Enquiry Form</a></li>
					</ul>-->
					<div class="clear-2"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<p class="title-3">news</p>
					<ul>
						<li><a href="update.php">Past Events</a></li>
					</ul>
					<div class="clear-2"></div>
				</div>
				<div class="col-md-8 contact-content">
					<p><i class="fas fa-phone-volume icon"></i><span class="title-1">+604 589 9887</span></p>
					<p><i class="fas fa-mobile-alt icon"></i><span class="title-1">1700816898</span></p>
					<p><i class="fas fa-envelope icon"></i><span class=""><a href="mailto:info@metrio.com.my">info@metrio.com.my</a></span></p>
					<p class="metrio-p-1"><i class="fas fa-home icon"></i><span class="title-2">22-28, Jalan Perniagaan Vorteks 3,</span></p>
					<p class="metrio-p-1"><span class="title-3">Pusat Perniagaan Vorteks,</span></p>
					<p><span class="title-3"">14100 Simpang Ampat, Penang.</span></p>
					
					<p><img src="image/waze-logo.png" class="img-fluid navi-logo" /><span class="title-2"><a href="https://waze.com/ul/hw0zmvykp6" target="_blank" style="padding-left: 0; font-size: .8rem;">Metrioplex</a></span></p>
					<p><img src="image/googlemap-logo.png" class="img-fluid navi-logo" /><span class="title-2"><a href="https://maps.app.goo.gl/yGeCY" target="_blank" style="padding-left: 0; font-size: .8rem;">Metrioplex</a></span></p>
					<p><i class="fas fa-map-marked-alt icon"></i><span class="title-2"><a href="https://maps.app.goo.gl/yGeCY" target="_blank" style="padding-left: 0; font-size: .8rem;">Coordinates: 5.265, 100.453</a></span></p>
				</div>
			</div>
		</div>
	</div>
</section>

<a href="" class="back-to-top" id="back-to-top" style="font-size: 10px;"><center>TOP<br/><img src="image/btt.png" class="img-fluid" /></center></a>
<a href="" class="back-to-top-2" id="back-to-top-2"><center><img src="image/btt.png" class="img-fluid" /></center></a>
<footer class="footer mt-auto py-3">
  	<div class="container">
    	<p><span class="facebook float-left">Find us on <a href="https://www.facebook.com/metriogroup/" target="_blank"><i class="fab fa-facebook"></i></a></span>2018 © Metrio Development Sdn Bhd.(200201027951 (595614-T)) All Rights Reserved.  | <a href="#">Privacy Policy</a> | <a href="#">Terms</a></p>
  	</div>
</footer>


<script>
function myFunction() {
  window.open("https://wa.me/60124593221?text=From:"+
  document.getElementById('name').value+"%0aEmail:"+
  document.getElementById('email').value+"%0aSubject:"+
  document.getElementById('subject').value+"%0a"+
  document.getElementById('message').value);
}
</script>