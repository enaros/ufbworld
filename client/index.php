<!DOCTYPE html>
<!-- 
  _    _ ______ ______          __        _     _ 
 | |  | |  ____|  _ \ \        / /       | |   | |
 | |  | | |__  | |_) \ \  /\  / /__  _ __| | __| |
 | |  | |  __| |  _ < \ \/  \/ / _ \| '__| |/ _` |
 | |__| | |    | |_) | \  /\  / (_) | |  | | (_| |
  \____/|_|    |____/   \/  \/ \___/|_|  |_|\__,_|
                                                  
Mozilla presents an HTML5 mini-MMORPG by Little Workshop http://www.littleworkshop.fr

* Client libraries used: RequireJS, Underscore.js, jQuery, Modernizr
* Server-side: Node.js, Worlize/WebSocket-Node, miksago/node-websocket-server
* Should work in latest versions of Firefox, Chrome, Safari, Opera, Safari Mobile and Firefox for Android

 -->

<?php

#Used to support multilanguage
include("common.php");

?>

<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link rel="icon" type="image/png" href="img/common/favicon.png">
        <meta property="og:title" content="<?php echo $lang['GAME_TITLE'] ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://ufbteam.com:8051/">
        <meta property="og:image" content="http://browserquest.mozilla.org/img/common/promo-title.jpg">
        <meta property="og:site_name" content="<?php echo $lang['GAME_NAME'] ?>">
        <meta property="og:description" content="<?php echo $lang['GAME_DESC'] ?>">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/achievements.css" type="text/css">

        <link href="img/common/apple-touch-icon-57x57.png" rel="apple-touch-icon-precomposed" sizes="57x57">
        <link href="img/common/apple-touch-icon-72x72.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="img/common/apple-touch-icon-114x114.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="img/common/apple-touch-icon-144x144.png" rel="apple-touch-icon-precomposed" sizes="144x144">

        <link href="img/common/apple-touch-startup-image-320x460.png" rel="apple-touch-startup-image" media="(device-width: 320px)">
        <link href="img/common/apple-touch-startup-image-640x920.png" rel="apple-touch-startup-image" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
        <link href="img/common/apple-touch-startup-image-768x1004.png" rel="apple-touch-startup-image" media="(device-width: 768px) and (orientation: portrait)">
        <link href="img/common/apple-touch-startup-image-748x1024.png" rel="apple-touch-startup-image" media="(device-width: 768px) and (orientation: landscape)">
        <link href="img/common/apple-touch-startup-image-1536x2008.png" rel="apple-touch-startup-image" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)">
        <link href="img/common/apple-touch-startup-image-1496x2048.png" rel="apple-touch-startup-image" media="(device-width: 1536px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)">

        <script src="js/lib/modernizr.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
                <link rel="stylesheet" href="css/ie.css" type="text/css">
                <script src="js/lib/css3-mediaqueries.js" type="text/javascript"></script>
                <script type="text/javascript">
                document.getElementById('parchment').className = ('error');
                </script>
        <![endif]-->
        <script src="js/detect.js" type="text/javascript"></script>
        <title><?php echo $lang['GAME_NAME'] ?></title>
	</head>
    <!--[if lt IE 9]>
	<body class="intro upscaled">
    <![endif]-->
	<body class="intro">
	    <noscript>
	       <div class="alert">
		   <?php echo $lang['ENABLE_JAVASCRIPT'] ?>
	       </div>
	    </noscript>
	    <a id="moztab" class="clickable" target="_blank" href="http://www.ufbteam.com/"></a>
	    <div id="intro">
	        <h1 id="logo">
	           <span id="logosparks">
	               
	           </span>
	        </h1>
	        <article id="portrait">
	            <p>
		       <?php echo $lang['ROTATE_DEVICE'] ?>
	            </p>
	            <div id="tilt"></div>
	        </article>
	        <section id="parchment" class="createcharacter">
	            <div class="parchment-left"></div>
	            <div class="parchment-middle">
                    <article id="createcharacter">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               A Massively Multiplayer Adventure
          	               <span class="right-ornament"></span>
                         </h1>
                         <div id="character" class="disabled">
                             <div></div>
                         </div>

                         <form action="none" method="get" accept-charset="utf-8">
                             <input type="text" id="nameinput" class="stroke" name="player-name" placeholder="Name your character" maxlength="15" autofocus>
			     <!--<input type="password" id="passwordinput" class="stroke" name="player-password" placeholder="Password" maxlength="16"> -->
                         </form>
                         <div class="play button disabled">
                             <div></div>
                             <img src="img/common/spinner.gif" alt="">
                         </div>
                         <div class="ribbon">
                            <div class="top"></div>
                            <div class="bottom"></div>
                         </div>
                    </article>
                    <article id="loadcharacter">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               Load your character
          	               <span class="right-ornament"></span>
                         </h1>
                         <div class="ribbon">
                            <div class="top"></div>
                            <div class="bottom"></div>
                         </div>
                         <img id="playerimage" src="">
                         <div id="playername" class="stroke">
                         </div>
                         <div class="play button">
                             <div></div>
                             <img src="img/common/spinner.gif" alt="">
                         </div>
                         <div id="create-new">
                            <span><span><?php echo $lang['OR'] ?></span> <?php echo $lang['CHAR_RESET'] ?></span>
                         </div>
                    </article>
                    <article id="confirmation">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               Delete your character?
          	               <span class="right-ornament"></span>
                         </h1>
                         <p>
                             All your items and achievements will be lost.<br>
                             Are you sure you wish to continue?
                         </p>
                         <div class="delete button"></div>
                         <div id="cancel">
                            <span>cancel</span>
                         </div>
                    </article>
    	            <article id="credits">
        	            <h1>
         	               <span class="left-ornament"></span>
         	               <span class="title">
         	                   Made for Mozilla by <a target="_blank" class="stroke clickable" href="http://www.littleworkshop.fr/">Little Workshop</a>
         	               </span>
         	               <span class="right-ornament"></span>
                        </h1>
                        <div id="authors">
                            <div id="guillaume">
                                <div class="avatar"></div>
                                Pixels by
                                <a class="stroke clickable" target="_blank" href="http://twitter.com/glecollinet">Guillaume Lecollinet</a>
                            </div>
                            <div id="franck">
                                <div class="avatar"></div>
                                Code by
                                <a class="stroke clickable" target="_blank" href="http://twitter.com/whatthefranck">Franck Lecollinet</a>
                            </div>
                        </div>
                        <div id="seb">
                            
                            <span id="note"></span>
                            Music by <a class="clickable" target="_blank" href="http://soundcloud.com/gyrowolf">Terrel O'Brien</a>, <a class="clickable" target="_blank" href="http://blog.dayjo.org">Joel Day</a>, <a class="clickable" target="_blank" href="http://www.dantilden.com">Dan Tilden</a>, &amp; <a target="_blank" class="clickable" href="http://soundcloud.com/aaron-anderson-11">Aaron Krogh</a>
                           
                        </div>
	                    <div id="close-credits">
	                        <span><?php echo $lang['CLOSE_ANYWHERE'] ?></span>
                        </div>
    	            </article>
    	            <article id="about">
        	            <h1>
         	               <span class="left-ornament"></span>
         	               <span class="title">
         	                   What is <?php echo $lang['GAME_NAME'] ?>?
         	               </span>
         	               <span class="right-ornament"></span>
                        </h1>
                        <p id="game-desc">
                            UFBWorld is a multiplayer game inviting you to explore a
                            world of adventure from your Web browser.
                        </p>
                        <div class="left">
                            <div class="img"></div>
                            <p>
				<?php echo $lang['SUPPORTED_TECHNO'] ?>
                            </p>
                            <span class="link">
                                <span class="ext-link"></span>
                                <a target="_blank" class="clickable" href="http://ufbteam.com/">Learn more</a> about the technology
                            </span>
                        </div>
                        <div class="right">
                            <div class="img"></div>
                            <p>
                                <?php echo $lang['SUPPORTED_BROWSER'] ?>
                            </p>
                            <span class="link">
                                <span class="ext-link"></span>
                                <a target="_blank" class="clickable" href="https://github.com/hackziner/BrowserQuest">Grab the source</a> on Github
                            </span>
                        </div>
	                    <div id="close-about">
	                        <span><?php echo $lang['CLOSE_ANYWHERE'] ?></span>
                        </div>
    	            </article>
    	            <article id="death">
                        <p><?php echo $lang['PLAYER_DEATH'] ?></p>
    					<div id="respawn" class="button"></div>
    	            </article>
                    <article id="error">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               Your browser cannot run BrowserQuest!
          	               <span class="right-ornament"></span>
                         </h1>
                         <p>
                             We're sorry, but your browser does not support WebSockets.<br>
                             In order to play, we recommend using the latest version of Firefox, Chrome or Safari.
                         </p>
                    </article>
                    <article id="legal">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               Privacy
          	               <span class="right-ornament"></span>
                         </h1>
                         <p>
                             BrowserQuest stores your character name, game achievements and equipment in your browser and does not send them to Mozilla. We do collect server log data (such as IP address) as well as web analytics data. We handle info we receive about you as explained in our <a class="clickable" target="_blank" href="http://www.mozilla.org/en-US/privacy-policy">Privacy Policy</a>.
                         </p>
 	                    <div id="close-legal">
 	                        <span><?php echo $lang['CLOSE_ANYWHERE'] ?></span>
                         </div>
                    </article>
	            </div>
	            <div class="parchment-right"></div>
	        </section>
	    </div>
		<div id="container">
		    <div id="canvasborder">
		        <article id="instructions" class="clickable">
		            <div class="close"></div>
		            <h1>
     	               <span class="left-ornament"></span>
     	               How to play
     	               <span class="right-ornament"></span>
	                </h1>
	                <ul>
	                   <li><span class="icon"></span>Left click or tap to move, attack and pick up items.</li>
	                   <li><span class="icon"></span>Press ENTER to chat.</li>
	                   <li><span class="icon"></span>Your character is automatically saved as you play.</li>
	                </ul>
	                    <p><?php echo $lang['CLOSE_ANYWHERE'] ?></p>
		        </article>
		        <article id="achievements" class="page1 clickable">
		            <div class="close"></div>
		            <div id="achievements-wrapper">
		                <div id="lists">
        		        </div>
    		        </div>
    		        <div id="achievements-count" class="stroke">
    		            Completed
    		            <div>
    		                <span id="unlocked-achievements">0</span>
    		                /
    		                <span id="total-achievements"></span>
    		            </div> 
    		        </div>
		            <nav class="clickable">
		                <div id="previous"></div>
		                <div id="next"></div>
		            </nav>
		        </article>
    			<div id="canvas">
    				<canvas id="background"></canvas>
    				<canvas id="entities"></canvas>
    				<canvas id="foreground" class="clickable"></canvas>
    			</div>
    			<div id="bubbles">				
    			</div>
    			<div id="achievement-notification">
    			    <div class="coin">
    			        <div id="coinsparks"></div>
    			    </div>
    			    <div id="achievement-info">
        			    <div class="title">New Achievement Unlocked!</div>
        			    <div class="name"></div>
    			    </div>
    			</div>
    			<div id="bar-container">
					<div id="healthbar">
					</div>
					<div id="hitpoints">
					</div>
					<div id="weapon" class="clickable"></div>
					<div id="armor" class="clickable" ></div>
					<div id="notifications">
					    <div>
					       <span id="message1"></span>
					       <span id="message2"></span>
					    </div>
					</div>
                    <div id="playercount" class="clickable">
                        <span class="count">0</span> <span>players</span>
                    </div>
                    <div id="barbuttons">
                        <div id="chatbutton" class="barbutton clickable"></div>
                        <div id="achievementsbutton" class="barbutton clickable"></div>
                        <div id="helpbutton" class="barbutton clickable"></div>
                        <div id="mutebutton" class="barbutton clickable active"></div>
                    </div>
    			</div>
				<div id="chatbox">
				    <form action="none" method="get" accept-charset="utf-8">
					    <input id="chatinput" class="gp placeholder" type="text" maxlength="60" placeholder="What do you want to say? (Remember to protect your privacy!)">
				    </form>
				</div>
                <div id="population">
                    <div id="instance-population" class="">
                        <span>0</span> <span>players</span> in your instance
                    </div>
                    <div id="world-population" class="">
                        <span>0</span> <span>players</span> total
                    </div>
                </div>
		    </div>
		</div>
		<footer>
		    <div id="sharing" class="clickable">
		      Share this on 
              <a href="http://twitter.com/share?url=http%3A%2F%2Fufbworld.ufbteam.com&amp;text=Massively%20multiplayer%20adventure%20game&amp;related=glecollinet:Creators%20of%20BrowserQuest%2Cwhatthefranck" class="twitter"></a>
              <a href="http://www.facebook.com/share.php?u=http://ufbworld.ufbteam.com/" class="facebook"></a>
		    </div>
		    <div id="privacy-link" class="clickable">
		      <span class="dash">&ndash;</span> <span id="toggle-legal">Privacy</span>
		    </div>
		    <div id="legal-link" class="clickable">
		      <span class="dash">&ndash;</span> <a class="clickable" target="_blank" href="http://www.mozilla.org/en-US/about/legal.html">Legal notices</a>
		    </div>
		    <div id="credits-link" class="clickable">
		      <span class="dash">&ndash;</span> <span id="toggle-credits">Credits</span>
		    </div>
		</footer>
		
		<ul id="page-tmpl" class="clickable" style="display:none">
        </ul>
        <ul>
            <li id="achievement-tmpl" style="display:none">
                <div class="coin"></div>
                <span class="achievement-name">???</span>
                <span class="achievement-description">???</span>
                <div class="achievement-sharing">
                  <a href="" class="twitter"></a>
                </div>
            </li>
        </ul>
        
        <img src="img/common/thingy.png" alt="" class="preload">
        
        <div id="resize-check"></div>
		
        <script type="text/javascript">
            var ctx = document.querySelector('canvas').getContext('2d'),
                parchment = document.getElementById("parchment");
            
            if(!Detect.supportsWebSocket()) {
                parchment.className = "error";
            }
            
            if(ctx.mozImageSmoothingEnabled === undefined) {
                document.querySelector('body').className += ' upscaled';
            }
            
            if(!Modernizr.localstorage) {
                var alert = document.createElement("div");
                    alert.className = 'alert';
                var alertMsg = document.createTextNode("You need to enable cookies/localStorage to play BrowserQuest");
                    alert.appendChild(alertMsg);

                target = document.getElementById("intro");
                document.body.insertBefore(alert, target);
            } else if(localStorage && localStorage.data) {
                document.body.className += " returning";
                parchment.className = "loadcharacter";
            }
        </script>
        
        <script src="js/lib/log.js"></script>
        <script>
                var require = { waitSeconds: 60 };
        </script>
        <script data-main="js/home" src="js/lib/require-jquery.js"></script>
	</body>
</html>
