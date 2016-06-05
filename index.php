<?php
 require('session.php');
 require('bio/survey.php')
?>	
	<!-- Nav horizontalnav -->
    <title>Welcome </title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <script src="jquery.min.js"></script>
<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/horizontalnav.css" />
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="js/horizontalnav.js"></script>


<body>
<div id = "zoom" style = "display:none">
<span class = "close fa fa-remove" on = "#zoom" effect = "close"></span>
		<div class = "zoom-picture">
		
		</div>
		</div>
<header>
		

<!-- open close menu-->
					 <a href = "index.php"><h1 style = "font-family: Arial; font-weight: bold">Find MyPassion
                            </h1></a>
		<div class="content clearfix">
								<a href="#" id="trigger" class="menu-trigger"><div class="block block-40 clearfix">
							
							</div></a>
		</div>
		<!-- /open close menu-->
					<?php 
				require 'php-static-component/search-bar.php'
					?>
							<!-- horizontalnav close menu-->
			   <div class= "eventpopupwrap">
			   <div class = "eventpopup">
			   <div  class="" id = "minimessage"><span class= "notificons icon icon-mail"></span><span id = "messagecount">0</span></div>
			   <div class="" id = "mininotification"><span class = "notificons icon icon-star" ></span><span id = "notifcount">0</span></div>
			   </div>
			   <div class = "notification hide"></div>
			   <div class = "messagepopup hide"><a>see all</a></div>
			   </div>
			   
            <div id="menu">
                <ul>
                    <li><a href="#" title="Project">Project</a></li>
                   <li><a href="#" title="C4I" >My communities</a></li>
                    <li><a href="#" class="active" title="">Explore</a></li>
                    <li><a href="#" title="DnD">Activity</a></li>
                    <li><a href="#" title="EL">EL</a></li>
                    <li><a href="#" title="ALU_Fun">ALU Fun</a></li>
                </ul>
            </div>
       <!-- horizontalnav nav menu-->
</header>
    <div id="wrapper">
	
        <div id="content">
		
           			
				<!-- Nav horizontalnav -->
		<!--left panel-->
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	<div id="main">
		<div class="container">
			 <div class="rightpanel">
<!-- start of user drop down -->
                            <link rel="stylesheet" type="text/css" href="css/style.css" />
                            <!--<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
-->
                            <div class="container-left">
                                <section class="main left">
									 
                                    <div class="wrapper-demo">
                                        <div id="dd5" class="wrapper-dropdown-5" tabindex="1">
                                            Welcome <?php echo $full_name; ?>
										
						<ul class="dropdown">
                            <li><a href="www.facebook.com"><i class="icon icon-user"></i>Profile</a></li>
                            <li><a href="#" id = "setting" link = "settings/general%20setting.php"><i class="icon icon-cog"></i>Settings</a></li>
                            <li><a href="logout.php"><i class="icon-remove"></i>Log out</a></li>
                        </ul>
                                        </div>
                                        ​
                                    </div>
									
                                </section>
								<div id="instant-list"><p><br>Connect with: <i class = "fa fa-lock left" id = "left-hider" style = "cursor: hand" ></i> </p></div>
                            <div class="activelist"></div>
                            <div id="overtime"></div>

                            </div>
                            <!-- jQuery if needed -->
                            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                            <script type="text/javascript">

                                function DropDown5(el) {
                                    this.dd = el;
                                    this.initEvents();
                                }
                                DropDown5.prototype = {
                                    initEvents: function () {
                                        var obj = this;

                                        obj.dd.on('click', function (event) {
                                            $(this).toggleClass('active');
                                            event.stopPropagation();
                                        });
                                    }
                                }

                                $(function () {

                                    var dd = new DropDown5($('#dd5'));

                                    $(document).click(function () {
                                        // all dropdowns
                                        $('.wrapper-dropdown-5').removeClass('active');
                                    });

                                });

                            </script>
<!-- end of user drop down -->
<!-- end of user drop down -->
                          
                        </div>
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu">
					<div class="mp-level">
						<?php 
						require 'php-static-component/nav.php'
						?>
					</div>
				</nav>
				<!-- /mp-menu -->

				<div class="scroller"><!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">
							<i id = "hide-header" class="fa fa-angle-double-up" style="font-size:48px;color:black; cursor:hand; position:fixed;"></i>

					</div>
					<!-- /scroller-inner -->
					
					 <nav class="nav hide">
						 <li class = "nav-menu" link = "course/course-design.html">Design Course</li>
						 <li class = "nav-menu" link = "welcome.php">Home Page</li>
						 <li class = "nav-menu" link = "course/assess.php">Assess course</li>
						 <li class = "nav-menu" link = "course/result.php?user=staff">Student Performance</li>
						 <iframe style="display: none;" onload="this.style.visibility = 'visible';" id="targetframe" name="targetframe" class="message"></iframe>
					</nav>
				
<!-- end of left panel -->
<!-- start of middle panel -->
                        <div class="bucket">
                            <div class="feedcontainer">
							

<!-- start of post boxes -->
<!-- start of simples boxes -->

							</iframe>
                                <div class="postbox">

                                    <!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
                                    <link href="css/poststyle.css" rel="stylesheet">
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

                                    <div class="postcontainer">
									<span id = "hide-postbox" style = "cursor:hand" class= "left clicked fa fa-caret-square-o-up"></span>
                                        <div class="row">
																								 <?php
    $cloudName = "tolotra";
    $apiKey = "488314877966553";
    $time = time();
    $apiSecret = "bTmyj3x93aRGOaHoQfTfYzMV0tY";
?> 
                                   <form action ="" action2 = "feed/feedcollect.php" action1="https://api.cloudinary.com/v1_1/<?php echo $cloudName;?>/image/upload" method="post" role="form" id = "mainform" enctype="multipart/form-data" class="facebook-share-box" target = "targetframe">
							<!-- type starts--><div><?php 
							require 'php-static-component/droptype.php'
							?>
												</div>
																									<h1>Create a community</h1>
													<div class="col-md-6 col-md-offset-3">

                                                    <ul class="post-types">
                                                        <li class="post-type">
                                                            <a class="status" title="" href="#"><i class="icon icon-file"></i>Overview about Group</a>
                                                        </li>
                                                        <li class="post-type">
                                                            <a class="photos" href="#"><i class="icon icon-camera"></i>Add photos</a>

                                                            <input class = "cloudinaryinput" type="file" name="file" id="file" rows="5" style="width: 100%" />
                                                        </li>
                                                    </ul>
											</div>
                                                    <div class="share">
                                                        <div class="arrow">
                                                            <img src="logo/arrow.png"></img>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading"><i class="fa fa-file"></i>Update Status</div>
                                                            <div class="panel-body">
																	<div class="wrap-post">
															<img style="float:left; margin:7" width="40px" height="40px" src="http://chasingafterme.com/wp-content/uploads/2012/06/Community.jpg">	</img>
                                                                <div class="textpost">
                                                                    <textarea name="title-mainfeed" cols="40" rows="10" id="status_title" class="form-control message" style="height: 31; overflow: hidden;" placeholder="Name of your community" required></textarea>
                                                                    <textarea name="mainfeed" maxlength = "100" cols="40" rows="10" id="status_message" class="form-control message" style="height: 31; overflow: hidden;" placeholder="Short description" required></textarea>
																	</div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-footer">
                                                                <div class="row">
                                                                    <div class="col-md-7">
                                                                        <div class="form-group">
                                                                            <div class="btn-group">
                                                                                 <button type="button" id = "showpopup" class="btn btn-default"><i class="icon icon-map-marker"></i>Parent Community</button>
		 
		 <div  class = "linkpopup hide" id="linkpopup">
        <h2>Select a group!</h2>
		<select name = "linkeditem">
			<option value=0>select a group</option>
			<?php include 'course/courselistprint.php' ?>
		</select>
		   <button type="button" id = "hidepopup" class="btn btn-default"><i class="icon icon-map-marker">Close</i></button>

      </div>
                                                                                <button type="button" class="btn btn-default"><i class="icon icon-picture"></i>Logo</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
																	<div class="form-group">
																	<input name = "location" placeholder = "Physical location"type = "text"class = "form-control message" />
                                                                          <!--   <select name="privacy" class="form-control privacy-dropdown pull-left input-sm">
                                                                                <option value="1" selected="selected">Everybody</option>
                                                                                <option value="3">Only me</option>
                                                                                <option value="4">My Cohort</option>
                                                                                <option value="2">Only my friends</option>
																				<?php //include 'feed/audience.php'?>
                                                                            </select>
																			end of simple box-->
																			
<!-- start of javascript boxes -->

                                                                           
                                                        </div>
														
                                                    </div>
													 <div class="containerdropboxes"><?php 
													 require 'php-static-component/dropdownmenu.php'
													 ?>
       
 <?php $fileName = "miss.jpg"; ?>   
      <span id = "cloudinaryfile">
    <input class = "cloudinaryinput" id = "signature" type="hidden" name="signature" value="<?php echo sha1('public_id='.$fileName.'&timestamp='.$time.$apiSecret);?>" />
    <input  class = "cloudinaryinput" type="hidden" name="api_key" id="api_key" value="<?php echo $apiKey; ?>"/>
    <input  class = "cloudinaryinput" type="hidden" name="timestamp" id="timestamp" value="<?php echo $time; ?>" />
    <input class = "cloudinaryinput" type="hidden" name="public_id" id="public_id" value="<?php echo $fileName; ?>" />
    <input class = "cloudinaryinput" type="hidden" name="filepath" id="filepath" value="<?php ?>" />
</span>
 <script type="text/javascript" src="js/sha1.js"></script>
 <script>

	
	$("document").ready(function(){
    	z = "<?php echo $url = '<a href = \"http://'.$_SERVER["HTTP_HOST"].'/login.html\">Loginagain</a>'?>";
		$('.activelist').html(z);
    $(".cloudinaryinput#file").change(function() {
              var timestamp = $('.cloudinaryinput#timestamp').val();
              var secretapi = "<?php echo $apiSecret?>";
              var cloudname = "<?php echo $cloudName?>";
			  var loc = $(this).val()
			  var filename1  = loc.split('/').pop().split('.').shift();
        //alert(filename);
		var filename = (filename1).replace(/C:\\fakepath\\/i, '');
			  var signature = SHA1('public_id='+filename+'&timestamp='+timestamp+''+secretapi+'')

// alert(signature);
//alert(filename);
			$(".cloudinaryinput#signature").attr('value', signature);
			$(".cloudinaryinput#public_id").val(filename);
		var filepath = 	'http://res.cloudinary.com/'+cloudname+'/image/upload/'+filename+'';
			$(".cloudinaryinput#filepath").val(filepath);
			//$('.activelist').html(filepath);

            });    
});
					</script>
					<input type="submit" name="submit" id = "mainpost" value="Post" class="btn btn-primary">
															 </div>
											
                                            </div>
                                        </div>
                                    </div>
                                    <script src="js/arrow.js"></script>
                                    </form>
									 <script type='text/javascript'>
		//double form action 
		//ACTION 1 changes the attribute action to action1
		$('#mainform').on('submit',function(e){
				real = $(this).attr('action1');
$(this).attr('action', real);			
    // e.preventDefault();
    // $.ajax({
        // type     : "POST",
        // cache    : false,
        // url      : $(this).attr('action1'),
        // data     : $(this).serialize(),
        // success  : function(data) {
            // $(".printArea").empty().append(data).css('visibility','visible');
        // }
    // });
	time = +new Date;
			//alert(time);

});
//ACTION 2 use ajax to send the data to the form action2

	$('#mainform').on('submit',function(e){
   //preventDefault is a function that enable the default action in the elements
   //e.preventDefault(); 
   
    $.ajax({
        type     : "POST",
        cache    : false,
        url      : $(this).attr('action2'),
        data     : $(this).serialize(),
        success  : function(data) {
            //$(".printArea").append(data).css('visibility','visible');
        }
    });

});
</script>
                                </div>
								
																			<!-- end of postbox and postcontainer java boxes -->
							 <div class="feedprint">
                                    <?php 
									// $coursetimeline=;
									// require ("feed/feedprint.php") ?> 
                              </div>
                            </div>
							<script>
							 var gadget = "<?php echo $gadget ?>";
							</script>
                            <div class="visualwrapper">
                     
                            </div>
                        </div><!-- end of bucket-->
                        </div>
																			
																			
				</div><!-- /scroller -->
				  <form action="feed/feedcollect.php" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box" target = "targetframe">
			</div><!--bucket-->
                        <div id="floatchat" class="floatchat">
						
			</div><!-- /pusher -->
		</div><!-- /container -->
		</div><!-- /container -->
		</div><!-- /container -->
		
		</div><!-- /main of the tabbed menu EVERYTHING -->
		<script src="js/classie.js"></script>
		<script src="js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
					<!-- /right panel and menu -->					
	<link href="css/bootstrap.css" rel="stylesheet">
	   <script src="js/refresh.js"></script>
    <script src="js/dynamicfunction.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/inbox.js"></script>
    <script src="js/notification.js"></script>
	
	    <link id = "themestyle" rel="stylesheet" type="text/css" href="<?php echo 'settings/theme/'.$theme.'.css' ?>">
		<script> 
		$(document).on('click','.color', function(){
		//alert(theme);
		
		})
		</script>

    <footer>
        Copyright © TolotraNet @ Tolotra Corporation
    </footer>
</body>
</html>
