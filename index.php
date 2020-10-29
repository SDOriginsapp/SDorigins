<!DOCTYPE html>

<html lang="en">

  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

 

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SD Origins</title>

    <!-- Styles -->

    <!-- Favicons -->

<link rel="shortcut icon" href="icon.jpg" type="image/jpg" />

	<!-- Core Funcs -->  	<script src='ajax/libs/jquery/2.1.3/jquery.min.js '></script>

    <script src="player/v/8.6.2/jwplayer.js "></script>

    <!-- END Core Funcs -->

	<style>

		* {

		    margin: 0px;

		}

		html {

		    overflow: hidden;

		}

	</style>	    

  </head>

<body>

	<div id="encrpyt">

		

	</div>

	<!-- Core Streaming -->

	<script>

			jwplayer.key = "cLGMn8T20tGvW+0eXPhq4NNmLB57TrscPjd1IyJF84o="; 			

			var player = jwplayer('encrpyt');

			player.setup({

			  sources: [ {

					file: "https://www.googleapis.com/drive/v3/files/<?=$_GET['id']?>?alt=media&key=AIzaSyD7sTMELQzh6Wj-bW9X_Cyvv_VIq1HsVHg", label: "original",

					type: "video/mp4"

					}

			  ],

			  autostart: false,      

			  playbackRateControls: [0.25, 0.5, 0.75, 1, 1.25, 1.5, 2],   

			  abouttext: "SD Origins", 

			  aboutlink: "https://moviesonfile.blogspot.com/",

			  image:'https://sites.google.com/site/sdoriginsim/images/<?=$_GET['id']?>.jpg',

			  tracks:

			  [{

			  file: "",

			  label: "sub",

			  kind:  "captions",

			  }],

			  captions: {

			  color: "#FFFF00",

			  fontSize: 14,

			  edgeStyle: "uniform",

			  backgroundOpacity: 0,

			  },

			  logo: {

			  file: "logo.png",

			  logoBar: "",

			  position: "top-left",

			  link: "https://moviesonfile.blogspot.com/"

		      },

 

			  width: $(window).width(),

		      height: $(window).height()	          

			});

			$(document).ready(function() {

				$(window).resize(function(){

					jwplayer().resize($(window).width(),$(window).height())

				})

			})

	</script>

	<!-- END Core Streaming -->

</body>

</html>
