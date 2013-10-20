<!DOCTYPE HTML>
<!--
	Overflow 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sentiment Analysis by Shashank Agarwal</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox-2.2.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<h1>Sentiment Analysis </h1>
					<p>by Shashank Agarwal</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly">About the project</a>
				</footer>
			</section>
		
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Sentiment Analysis</h2>
				</header>
				<p>This is a simple word by word analysis tool to rate a piece of text.<br />
				I have used the the ANEW words and FINN lexicon as the lexicon base for analysis<br />
				You can get the whole code at <a href="https://github.com/imshashank/Sentiment-Analysis">Github</a>.</p>
				<footer>
					<a href="#first" class="button style2 scrolly">Now let's analyze: </a>
				</footer>
			</section>
		
		
		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="http://ineedchemicalx.deviantart.com/art/Kingdom-of-the-Wind-348268044" class="image full"><img src="images/pic02.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Mollis posuere<br />
						lectus lacus</h2>
					</header>
					<p>Rhoncus mattis egestas sed fusce sodales rutrum et etiam ullamcorper. Etiam egestas scelerisque ac duis magna lorem ipsum dolor.</p>
				</div>
			</article>
		
		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Magnis parturient</h2>
					<p>Justo phasellus et aenean dignissim<br />
					placerat cubilia purus lectus.</p>
				</header>
				<div class="inner gallery">
					<div class="row flush">
						<div class="3u"><a href="images/fulls/01.jpg" class="image full"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
						<div class="3u"><a href="images/fulls/02.jpg" class="image full"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="3u"><a href="images/fulls/03.jpg" class="image full"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="3u"><a href="images/fulls/04.jpg" class="image full"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row flush">
						<div class="3u"><a href="images/fulls/05.jpg" class="image full"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="3u"><a href="images/fulls/06.jpg" class="image full"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
						<div class="3u"><a href="images/fulls/07.jpg" class="image full"><img src="images/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
						<div class="3u"><a href="images/fulls/08.jpg" class="image full"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
					</div>
				</div>
			</article>
		
		<!-- Contact -->
	<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	<form action="myform1.php" method="post">
		<p>
			Enter text to rate?<br>

			<textarea type="text" rows="20" cols="50" name="formMovie" value="enter the text" /></textarea>
		</p>
		<input type="submit" name="formSubmit" value="Submit" />
	</form>

			<article class="container box style3">
				<header>
					<h2>Analysis</h2>
					<p>Just enter the text to be analyzed</p>
				</header>
				<form action="myform1.php" method="post">
					<div class="row half">
						<div class="12u">
		<textarea type="text" rows="20" cols="50" name="formMovie" value="enter the text" /></textarea>

						</div>
					</div>
					<div class="row">
						<div class="12u">
							<ul class="actions">
								<li>
		<input type="submit" name="formSubmit"class="button form" value="Submit" />
</li>
							</ul>
						</div>
					</div>
				</form>
			</article>
<section>
					<header>
						<h3>Ordered List</h3>
					</header>
					<ol class="default">
<?php
if($_POST['formSubmit'] == "Submit")
{
        $errorMessage = "";
        
        if(empty($_POST['formMovie']))
        {
                $errorMessage .= "<li>You forgot to enter the data!</li>";
        }
        
        $varMovie = $_POST['formMovie'];
        

        if(empty($errorMessage)) 
        {
                $fs = fopen("article.txt","w");
                fwrite($fs,$varMovie);
                fclose($fs);
                exec('java articleAnalysis ' . $file, $output);
echo "<pre>";

                print_r($output);
echo "</pre>";

                exit;
        }
}
?>


						<li><?php echo "Dominance rating:" . $output[sizeof($output)-4];?>
</li>
						<li><?php echo "Arousal rating:" . $output[sizeof($output)-3]; ?>

</li>
						<li><?php echo "Dominance rating:" . $output[sizeof($output)-2]; ?>
</li>
						<li><?php echo "Finn rating:" . $output[sizeof($output)-1]; ?></li>
					</ol>
				</section>
		
		<!-- Generic -->
		<!--
			<article class="container box style3">
				<header>
					<h2>Generic Box</h2>
					<p>Just a generic box. Nothing to see here.</p>
				</header>
				<section>
					<header>
						<h3>Paragraph</h3>
						<p>This is a byline</p>
					</header>
					<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque 
					habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi 
					leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit 
					amet risus elit.</p>
				</section>
				<section>
					<header>
						<h3>Blockquote</h3>
					</header>
					<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
					tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
				</section>
				<section>
					<header>
						<h3>Divider</h3>
					</header>
					<p>Donec consectetur <a href="#">vestibulum dolor et pulvinar</a>. Etiam vel felis enim, at viverra 
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci 
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam 
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices 
					posuere cubilia.</p>
					<hr />
					<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra 
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci 
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam 
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices 
					posuere cubilia.</p>
				</section>
				<section>
					<header>
						<h3>Unordered List</h3>
					</header>
					<ul class="default">
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ul>
				</section>
				<section>
					<header>
						<h3>Ordered List</h3>
					</header>
					<ol class="default">
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ol>
				</section>
				<section>
					<header>
						<h3>Table</h3>
					</header>
					<div class="table-wrapper">
						<table class="default">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Description</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="3"></td>
									<td>100.00</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</section>
				<section>
					<header>
						<h3>Form</h3>
					</header>
					<form method="post" action="#">
						<div class="row">
							<div class="6u">
								<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
							</div>
							<div class="6u">
								<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<select name="department" id="department">
									<option value="">Choose a department</option>
									<option value="1">Manufacturing</option>
									<option value="2">Administration</option>
									<option value="3">Support</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<textarea name="message" id="message" placeholder="Enter your message"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><a href="#" class="button form">Submit</a></li>
									<li><a href="#" class="button style3 form-reset">Clear Form</a></li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</article>
		-->
		
		<section id="footer">
			<ul class="icons">
				<li><a href="http://twitter.com/itsshashank" class="icon icon-twitter solo"><span>Twitter</span></a></li>
				<li><a href="http://fb.me/agarwal.shashank" class="icon icon-facebook solo"><span>Facebook</span></a></li>
				<li><a href="https://plus.google.com/107862114554859378569/posts" class="icon icon-google-plus solo"><span>Google+</span></a></li>
				<li><a href="www.linkedin.com/pub/shashank-agarwal/2a/ba6/366/" class="icon icon-linkedin solo"><span>LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Sentiment Analysis. All rights reserved.</li>

				</ul>
			</div>
		</section>

	</body>
</html>
