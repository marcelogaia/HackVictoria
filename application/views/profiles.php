<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sun Mar 13 2016 05:37:47 GMT+0000 (UTC) -->
<html data-wf-site="5634ecbff1efd346405c7d64" data-wf-page="56e48f13f1ee49764ddd68ff">
<head>
  <meta charset="utf-8">
  <title>Profiles</title>
  <meta property="og:title" content="Profiles">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/testwebsitetest1.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Roboto:300,regular,500","Roboto Condensed:300,regular,700","Roboto Slab:300,regular,700","Arbutus Slab:regular"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/New icon.ico">
  <link rel="apple-touch-icon" href="images/metric-webclip.png">
</head>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navigation">
    <div class="w-container">
      <a href="index.html" class="w-nav-brand brand-link">
        <div class="logo-text">OPEN GATE</div>
      </a>
      <nav role="navigation" class="w-nav-menu nav-menu"><a href="#features" class="w-nav-link nav-link">Home</a><a href="#customers" class="w-nav-link nav-link">Profiles</a><a href="#" class="w-nav-link nav-link">Sign In</a><a href="#" class="w-nav-link nav-link">Sign Up</a>
      </nav>
      <div class="w-nav-button nav-link menu">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="secondmenu">
    <div class="w-container">
      <div class="w-form form">
        <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix form">
          <label for="name" class="search-label">Search for Candidates:</label>
          <input id="name" type="text" placeholder="Search" name="name" data-name="Name" class="w-input searchbox">
          <input type="submit" value="Submit" data-wait="Please wait..." class="w-button search-box-button">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section section profilemain">
    <div class="w-container">
      
      
      
      
  
      <div class="single-profile">
        <div class="single-profile-header">
          <div class="w-row">
            <div class="w-col w-col-1"><img width="317" src="images/facebook-teerasej-profile-ball-circle.png" class="profile-image">
            </div>
            <div class="w-col w-col-11">
              <h4 class="name"><?= $a->name ?></h4>
              <h5 class="title"><?= $a->experience[0]->title ?></h5>
            </div>
          </div>
        </div>
        <div class="profilelistmain">
          <div class="col">
            <div class="listtitle">Location:</div>
            <div class="listdetail"><?= $a->location->neighbourhood ?> - <?= $a->location->city ?></div>
          </div>
          <div class="col">
            <div class="listtitle">Email:</div>
            <div class="listdetail"> <?= $a->email ?>  </div>
          </div>
          <div class="col">
            <div class="listtitle">Phone:</div>
            <div class="listdetail">  <?= $a->phone ?> </div>
          </div>
          <div class="col twocol">
            <div class="listtitle">Summary:</div>
            <div class="listdetail"><?= $a->summary ?> </div>
          </div>
          
          
          
          
          
          
          
          
          <div class="col">
            
            <div class="listtitle">Education:</div>
              <?php foreach($a->education as $xp){ ?>
                <div class="listdetail"><?= $xp->title ?>,
                <br>
                <div><?= $xp->institution ?></div>
              <?php } ?>
              
              </div>
          </div>
          
         
          
          <div class="col twocol">
            <div class="listtitle">Skills:</div>
            <div class="listdetail">
              <?php 
	             $separator = "";
          	    foreach($a->skill as $s){ 
          		  echo $separator;
          	  	echo $s->name;
          	  	$separator = ", ";
          	} ?>
         
            </div>
          </div>
          
          
          
          
          <div class="col">
            <div class="listtitle">Experience:</div>
            
            
            <?php foreach($a->experience as $xp){ ?>
               <div class="listdetail"><?= $xp->title ?>
               <br><?= $xp->company ?></div>
            <?php } ?>
          </div>
        </div>
      </div>












    </div>
  </div>
  <div class="w-section section footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="logo-text footer">OPEN GATE</div>
          <div class="footer-slogan">Sign up for our newsletter</div>
          <div class="w-form newsletter-form">
            <form id="wf-form-newsletter" name="wf-form-newsletter" data-name="Newsletter" class="w-clearfix">
              <input id="email-2" type="email" placeholder="Email Address" name="email-2" data-name="Email 2" required="required" class="w-input newsletter-field">
              <input type="submit" value="Subscribe" data-wait="Wait..." wait="Wait..." class="w-button newsletter-button">
            </form>
            <div class="w-form-done success-message">
              <p>Thank you! You’ll receive an email shortly.</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
          </div>
          <div class="social-icon-group">
            <a href="#" class="w-inline-block social-icon"><img src="images/facebook-icon.svg">
            </a>
            <a href="#" class="w-inline-block social-icon"><img src="images/twitter-icon.svg">
            </a>
            <a href="#" class="w-inline-block social-icon"><img src="images/linkdin-icon-white.svg">
            </a>
            <a href="#" class="w-inline-block social-icon"><img src="images/email-icon-white.svg">
            </a>
          </div>
        </div>
        <div class="w-col w-col-2">
          <h4 class="footer-title">Company</h4><a href="#" class="page-link in-footer">Home</a><a href="#" class="page-link in-footer">Profiles</a><a href="#" class="page-link in-footer">Job Opportunities</a><a href="#" class="page-link in-footer">Sign in</a><a href="#" class="page-link in-footer">Sign Up</a>
        </div>
        <div class="w-col w-col-2">
          <h4 class="footer-title">Resources</h4><a href="#" class="page-link in-footer">Blog</a><a href="#" class="page-link in-footer">Employer Guide</a><a href="#" class="page-link in-footer">Employee Guide</a>
        </div>
        <div class="w-col w-col-2">
          <h4 class="footer-title">Legal</h4><a href="#" class="page-link in-footer">Privacy Policy</a><a href="#" class="page-link in-footer">Terms of Use</a>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section section footer copyright">
    <div class="w-container">
      <div>Copyright 2014 Hack Victoria. All Rights Reserved.</div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>