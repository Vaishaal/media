<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>9lessons Bootstrap Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
  </head>
  <body>	  
	
  <div class="container">
	
  <div class="row">

<div class="span8">&nbsp;
</div>	
  
<div class="span8">
<script type="text/javascript"><!--
 google_ad_client = "pub-6904774409601870";
 /* 728x90, created 2/8/10 */
 google_ad_slot = "4242245788";
 google_ad_width = 728;
 google_ad_height = 90;
 //-->
 </script>
 <script type="text/javascript"
 src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
 </script>

</div>
<div class="span8">
    <h1>Crevnot Application</h1>
    <br>
    <form class="form-horizontal" id="registerHere" method='post' action='writedb.php'>
	  <fieldset>
	    <div class="control-group">
	      <label class="control-label" for="input01">Name</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="user_name" name="user_name" rel="popover" data-content="Enter your first and last name." data-original-title="Full Name">
	        
	      </div>
	</div>
	
	 <div class="control-group">
		<label class="control-label" for="input01">Email</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="user_email" name="user_email" rel="popover" data-content="What’s your email address?" data-original-title="Email">
	       
	      </div>
	</div>
    
    <div class="control-group">
        <label class="control-label" for="input01">Example</label>
	      <div class="controls">
              <input type="text" class="input-xlarge" id="film" name="film" rel="popover" data-content="Please give a link to an example of your work." data-original-title="Email"> 
	      </div>
	</div>
	
	
	
	
	<div class="control-group">
		<label class="control-label" for="input01"></label>
	      <div class="controls">
              <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">Submit</button>
	       
	      </div>
	
	</div>
	
	
	   
	  </fieldset>
	</form>
	</div>
	
		</div>
        
        
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>


    </div><!--/.fluid-container-->
    </div> 
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
	<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
	  <script type="text/javascript">
	  $(document).ready(function(){
			$('input').hover(function()
			{
			$(this).popover('show')
		});
			$("#registerHere").validate({
				rules:{
					user_name:"required",
					user_email:{
							required:true,
							email: true
						},
					pwd:{
						required:true,
						minlength: 6
                    },
                    example: {
                        required:true,

                    },
					cpwd:{
						required:true,
						equalTo: "#pwd"
					},
					gender:"required"
				},
				messages:{
					user_name:"Enter your first and last name",
					user_email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					pwd:{
						required:"Enter your password",
						minlength:"Password must be minimum 6 characters"
					},
					cpwd:{
						required:"Enter confirm password",
						equalTo:"Password and Confirm Password must match"
					},
					gender:"Select Gender"
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		});
	  </script>

<iframe src="http://demos.9lessons.info/counter.html" frameborder="0" scrolling="no" height="0"></iframe>
  

  </body>
</html>

