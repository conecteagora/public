<?php 
// create session so we can keep track of users
session_start();
// define path to support directory
$path = "support/";
// include php
include $path . "includes/client.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Live Assist!</title>

<!--- YOU NEED TO INCLUDE THE FOLLOWING LINES IN YOUR HEAD SECTION -->
<!--- If you are already including a jquery library, you can omit that line as long as the one you are using is the same release or greater -->

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $path;?>css/client.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $path;?>css/global.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $path;?>js/support.js"></script>
<script type="text/javascript" src="<?php echo $path;?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo $path;?>js/font_400.font.js"></script>

<!-- END OF REQUIRED HEAD ELEMENTS -->
<style>
ul { margin:3px 20px 3px 20px; }
li {
	padding:3px;
	border-bottom:1px dotted #064DA5;
}
</style>
</head>
<body>


<!--- CALL THIS FUNCTION TO OUTPUT STATUS BOX -->
<?php
online();
?>
<div id="main_container">
        <div class="container_12">
                <div class="grid_6">
                        <h1>Live Support Chat</h1>
                        <h3>A PHP / Ajax application by Ryan Davies</h3>
                        <p>The live support chat system offers a one stop solution for providing instant messaging services on your website. It gives your visitors the facility to chat to you if you are available, or leave a message if you are not.</p>
                        <br />
                        <h3>Try it out!</h3>
                        <p>To test it out click on the banner above, if it is set to offline you will need to login to the admin panel and change the availability toggle,  for best results, use two browsers.  Once for the client, and one for the admin page.</p>
			<p>NOTE : All delete functions are disabled in the demo, the full purchased version is fully functional</p>
                        <br />
                        <h3>Admin Panel Login details</h3>
                        <p><a href="support/login.php"><span class="red">Click Here</a> to log into the admin panel.  Username and password is admin.</p>
                </div>
                <div class="grid_6">
                        <div class="heading_light">
                                <h1><image src="support/images/navusers.png" width="46" /> Interface</h1>
                        </div>
                                        <ul>
                                                <li>Support unlimited conversations</li>
                                                <li>Audio alerts on new conversations and updates</li>
						<li>Visual alerts on new messages</li>
						<li>Add users. Either full access admins, or limited access users</li>
						<li>Store conversations and customer details on customer request</li>
						<li>Built in contact form when agents offline</li>
						<li>Simple, easy to use interface</li>
                                                <li>Clean layout, using CSS3</li>
                                                <li>Ajax powered for ease of use</li>
                                        </ul>
                        <div class="heading_light">
                                <h1><image src="support/images/navmaint.png" width="46" /> Under the bonnet</h1>
                        </div>
					<ul>
						<li>Full MySQL backend</li>
						<li>Configure public messages in the admin panel</li>
						<li>Configure admin, and client refresh rates in the admin panel</li>
						<li>Switch availability in a single click</li>
						<li>Application automatically logs you out after 5 mins if you close your browser</li>
						<li>Easy to install, full installer script, with manual failover</li>
						<li>Minimal code required to be added to existing page in order to get the chat on your site</li>
					</ul>
                </div>
        </div>
        <div class="clear">&nbsp;</div>
</div>

</body>
</html>

