
<html lang="en" class="no-js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	<style>
	body {
		overflow: hidden;
		
	}
	h1 {
		text-align: center;
	}
	</style>
			<section>
			<h1>Almost there! Tell us just a bit about yourself so that we can find a community for you</h1>
				<form id="theForm" class="simform" method = "POST" action = "biocreate.php" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q0">What are you most passionate about? (eg: Sport, Techonology, Leadership, Art...) Choose one</label></span>
								<input id="q0" name="passion1" value =""type="select"/>
							<!--	<select>
							<option>Sport</option>
							<option>Music</option>
							<option>Art</option>
							<option>Dance</option>
							<option>Leadership</option>
							<option>Philantropy</option>
							</select>-->
							</li>	
						
							<li>
								<span><label for="q1">Where do you live currently?</label></span>
								<input id="q1" name="address" type="text"/>
							</li>
							<li>
								<span><label for="q2">What is your nationality?</label></span>
								<input id="q2" name="nationality" type="text"/>
							</li>
							<li>
								<span><label for="q3">What time do you get out of work?</label></span>
								<input id="q3" name="freetime" type="time"/>
							</li>
							<li>
								<span><label for="q4">When is your date of birth?</label></span>
								<input id="q4" name="birth" type="date"/>
							</li>
							<li>
								<span><label for="q5">What is your gender? (Male or Female)</label></span>
								<input id="q5" name="gender" type="text"/>
							</li>
							<li>
								<span><label for="q6">What's your profession?(eg: Student, Worker, ...)</label></span>
								<input id="q6" name="profession" type="text"/>
							</li>
						</ol><!-- /questions -->
						<button class="submit" type="submit">Send answers</button>
						<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
							<span class="error-message"></span>
						</div><!-- / controls -->
					</div><!-- /simform-inner -->
					<span class="final-message"></span>
				</form><!-- /simform -->			
			</section>
	
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/stepsForm.js"></script>
		  <script src="../jquery.min.js"></script>
		<script>
			var theForm = document.getElementById( 'theForm' );

			new stepsForm( theForm, {
				onSubmit : function( form ) {
					// hide form
					classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

					/*
					or
					AJAX request (maybe show loading indicator while we don't have an answer..)
					*/

					// let's just simulate something...
					var messageEl = theForm.querySelector( '.final-message' );
					messageEl.innerHTML = 'Thank you! We are generating a set of commninity that might interests you<i class="fa fa-spinner fa-spin" style="font-size:48px;color:red"></i>';
					classie.addClass( messageEl, 'show' );
			
						var postData = "text";
      // $.ajax({
            // type: "POST",
            // url: "biocreate.php",
            // data: postData,
            // contentType: "",
            // success: function(responseData, textStatus, jqXHR) {
               // alert(responseData)
            // },
            // error: function(jqXHR, textStatus, errorThrown) {
                // console.log(errorThrown);
            
	  // } });		
    $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#theForm').attr('action'),
        data     : $('#theForm').serialize(),
        success  : function(data) {
          alert(data)
        }
    });
		
   // clearTimeout(timer);
    timer = setTimeout(function (event) {
		//alert('clicked!!!!');
parent.reload ();
			   
    }, 5000);

			}});
	
		
		</script>
	</body>
</html>