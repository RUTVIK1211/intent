 <!-- Breadcumbs -->
 <section class="breadcumb-bg">
 	<div class="container">
 		<div class="breadcumbs">
 			<h1>inquiry</h1>
 			<nav aria-label="breadcrumb">
 				<ol class="breadcrumb">
 					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
 					<li class="breadcrumb-item active" aria-current="page">inquiry</li>
 				</ol>
 			</nav>
 		</div>
 	</div>
 </section>
 <!-- End breadcumbs -->

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
 	<div class="container" data-aos="fade-up">

 		<div class="section-title">
 			<h2>Inquiry</h2>

 		</div>

 		<div class="row" data-aos="fade-up" data-aos-delay="100">


 			<div class="col-lg-12">
 				<form action="forms/contact.php" method="post" role="form" class="php-email-form">
 					<div class="row">
 						<div class="col form-group">
 							<label for="firstname">FIrst Name</label>
 							<input type="text" name="name" class="form-control" id="firstname" placeholder="First Name"
 								required>
 						</div>
 						<div class="col form-group">
 							<label for="lastname">Last Name</label>
 							<input type="text" name="name" class="form-control" id="lastname" placeholder="Last Name"
 								required>
 						</div>
 						<div class="col form-group">
 							<label for="email">E-mail</label>
 							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
 								required>
 						</div>
 					</div>
 					<div class="form-group">
 						<label for="phone_no">Phone No</label>
 						<input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Phone No"
 							required>
 					</div>
 					<div class="form-group">
 						<label for="company_name">Company Name</label>
 						<input type=" text " class="form-control " name="company_name " id="company_name"
 							placeholder="Company Name" required>
 					</div>
 					<div class="form-group">
 						<label for="subject">Subject</label>
 						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
 							required>
 					</div>
 					<div class="form-group">
 						<label for="inputAddress">Address</label>
 						<input type="text" class="form-control mb-4" id="inputAddress" placeholder="Street Address ">
 						<input type="text" class="form-control mb-4" id="inputAddress"
 							placeholder="Street Address Line 2">
 						<input type="text" class="form-control city-form mb-4" id="inputAddress" placeholder="City">
 						<input type="text" class="form-control state-form mb-4" id="inputAddress"
 							placeholder="State/Province">
 						<input type="text" class="form-control mb-4" id="inputAddress" placeholder="Postal/Zip Code">
 					</div>
 					<div class="form-group">
 						<label for="country">Country</label>
 						<select class="form-control" id="country">
 							<option value="India"> India </option>
 							<option value="United States"> United States </option>
 							<option value="other"> Other </option>
 						</select>
 					</div>
 					<div class="form-group">
 						<textarea class="form-control" name="message" rows="5" placeholder="Message"
 							required></textarea>
 					</div>
 					<div class="my-3">
 						<div class="loading">Loading</div>
 						<div class="error-message"></div>
 						<div class="sent-message">Your message has been sent. Thank you!</div>
 					</div>
 					<div class="text-center"><button type="submit">Send Message</button></div>
 				</form>
 			</div>

 		</div>

 	</div>
 </section>
 <!-- End Contact Section -->
