<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Contact</h1>				
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="map">
		<!--<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>-->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3384698151026!2d-80.37893118508435!3d25.792405413624056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9beb7fef563b3%3A0xfe80f475286c1579!2s2051+NW+112th+Ave+%23119%2C+Miami%2C+FL+33172%2C+EE.+UU.!5e0!3m2!1ses!2sve!4v1450373088598" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">		
				<?php 
				if(isset($_POST['name'])) { 
					send($_POST['name'], $_POST['email'],$_POST['subject'],$_POST['message']);
					msn('El Mensaje ha sido Enviado de Manera Exitosa');					
				}


				?>		
				<h4 class="text-right">Phone: <small title="Phone"><i class="fa fa-phone"></i> +13053920071</small></h4>
				
				<div class="panel panel-default formulario-salcar">
				  <div class="panel-heading"><h3 class="panel-title">Contact Form</h3></div>
				  <div class="panel-body">
				    <form id="contactform" action="" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" required placeholder="* Full Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="email" name="email" required placeholder="* Email" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" required placeholder="* Subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" required class="input-block-level" placeholder="* Message..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Send Message</button>
								<span class="pull-right margintop20">* Required!</span>
							</p>
						</div>
					</div>
				</form>
				  </div>
				</div>
				
			</div>
		</div>
	</div>
	</section>
<?php footer(); ?>