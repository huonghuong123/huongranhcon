<DOCTYPE!>
<html>
	<head>
		<title>ZExercise 3</title>
		<style type="text/css">
			body {				
				font-weight:300;
				font-size: 12px;
				line-height:30px;
				color:#777;				
			}
			.container {
				max-width:400px;
				width:100%;
				margin:0 auto;
				position:relative;
			}
			.contact input[type="text"], .contact input[type="email"], .contact input[type="tel"], .contact input[type="url"], .contact textarea, .contact button[type="submit"] { font:400 12px/16px sans-serif; }

			.contact {
				background:#F9F9F9;
				padding:25px;
				margin:50px 0;
			}
			fieldset {
				border: medium none !important;
				margin: 0 0 10px;
				min-width: 100%;
				padding: 0;
				width: 100%;
			}

			.contact input[type="text"], .contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
				width:100%;
				border:1px solid #CCC;
				background:#FFF;
				margin:0 0 5px;
				padding:10px;
			}	
			.contact input[type="text"], .contact input[type="email"], .contact input[type="tel"], .contact input[type="url"], .contact textarea {
				width:100%;
				border:1px solid #CCC;
				background:#FFF;
				margin:0 0 5px;
				padding:10px;
			}

			.contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
				-webkit-transition:border-color 0.3s ease-in-out;
				-moz-transition:border-color 0.3s ease-in-out;
				transition:border-color 0.3s ease-in-out;
				border:1px solid #AAA;
			}

			.contact textarea {
				height:100px;
				max-width:100%;
			  resize:none;
			}
			.contact button[type="submit"] {				
				width:100%;
				border:none;
				background:#ff0000;
				
				margin:0 0 5px;
				padding:10px;
				font-size:15px;
			}
			.contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

			.contact input:focus, #contact textarea:focus {
				outline:0;
				border:1px solid #999;
			}
			::-webkit-input-placeholder {
			 color:#888;
			}
			:-moz-placeholder {
			 color:#888;
			}
			::-moz-placeholder {
			 color:#888;
			}
			:-ms-input-placeholder {
			 color:#888;
			}

		</style>
	</head>
	<body>
		<div class="container">  
		  <form class="contact" action="" method="post">
		    <fieldset>
		      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
		    </fieldset>
		    <fieldset>
		      <input placeholder="Your Email Address" type="email" tabindex="2" required>
		    </fieldset>
		    <fieldset>
		      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
		    </fieldset>
		    <fieldset>
		      <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
		    </fieldset>
		    <fieldset>
		      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
		    </fieldset>
		    <fieldset>
		      <button name="submit" type="submit" data-submit="...Sending">Submit</button>
		    </fieldset>
		  </form>
 		</div>
	</body>
</html>