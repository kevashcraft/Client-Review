<html>
	<head>
		<? include "header.php" ?>
	</head>
	<body>
	<?
	$g2g = true;
	try {
	    $conn = new PDO('mysql:host=localhost;dbname=clientreview', "clientreview", "clientreview");
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo "<div class='message'>Could not connect to the database. ERROR: $e->message</div>";
		$g2g = false;
	}
	if(isset($_GET['id']) && $g2g) {
	    $query = $conn->query('SELECT * FROM reviews WHERE id=' . $_GET['id']);
	$query->setFetchMode(PDO::FETCH_OBJ);
		if($result = $query->fetch()) { ?>
	
	<center>
		<h1>Online Presence Evaluation</h1>
		<h2>(Insert Company Name)</h2>		
	</center>
		<h3>User Experience (UX)</h3>
			<ul class="single_list">				
				<li><span class='<? echo $result->responsive_design ?>'>Responsive Design</span><span class='notes'><? echo $result->responsive_design_n ?></span></li>							<li><span class='<? echo $result->custom_favicon ?>'>Custom Favicon</span><span class='notes'><? echo $result->custom_favicon_n ?></span></li>							<li><span class='<? echo $result->clean_logo ?>'>Clean Logo</span><span class='notes'><? echo $result->clean_logo_n ?></span></li>							<li><span class='<? echo $result->apparant_direction ?>'>Apparent Direction</span><span class='notes'><? echo $result->apparant_direction_n ?></span></li>							<li><span class='<? echo $result->easy_to_use ?>'>Easy to Use</span><span class='notes'><? echo $result->easy_to_use_n ?></span></li>							<li><span class='<? echo $result->stylish ?>'>Stylish</span><span class='notes'><? echo $result->stylish_n ?></span></li>		<li><span class='<? echo $result->page_speed ?>'>Page Speed</span><span class='notes'><? echo $result->page_speed_n ?></span></li>						</ul>	
		<h3>Security</h3>				
			<ul class="single_list">				
				<li><span class='<? echo $result->offers_ssl ?>'>Offers SSL Connections</span><span class='notes'><? echo $result->offers_ssl_n ?></span></li>							<li><span class='<? echo $result->sql_injection ?>'>Safe from SQL Injection</span><span class='notes'><? echo $result->sql_injection_n ?></span></li>							<li><span class='<? echo $result->bruteforce_attack ?>'>Safe from BruteForce Attacks</span><span class='notes'><? echo $result->bruteforce_attack_n ?></span></li>					<li><span class='<? echo $result->dos_attack ?>'>Safe from DOS Attacks</span><span class='notes'><? echo $result->dos_attack_n ?></span></li>							<li><span class='<? echo $result->secure_admin_page ?>'>Secure Admin Page</span><span class='notes'><? echo $result->secure_admin_page_n ?></span></li>			</ul>		
		<h3>Search Engine Optimization (SEO)</h3>				
			<ul class="single_list">				
				<li><span class='<? echo $result->responsive_design ?>'>Targeted Keywords:</span><span class='notes'><? echo $result->responsive_design_n ?></span></li>							<li><span class='<? echo $result->targeted_keywords ?>'>Optimized Titles:</span><span class='notes'><? echo $result->targeted_keywords_n ?></span></li>							<li><span class='<? echo $result->optimized_titles ?>'>Optimized Content:</span><span class='notes'><? echo $result->optimized_titles_n ?></span></li>					<li><span class='<? echo $result->optimized_descriptions ?>'>Optimized Descriptions:</span><span class='notes'><? echo $result->optimized_descriptions_n ?></span></li>							<li><span class='<? echo $result->optimized_images ?>'>Optimized Image Titles and Alts:</span><span class='notes'><? echo $result->optimized_images_n ?></span></li>				</ul>			
		<h3>Social Media Connections</h3>				
			<ul class="double_list">
				<li><span><b>Google Plus</b></span>	
					<ul>
						<li><span class='<? echo $result->gp_exists ?>'>Exists?</span><span class='notes'><? echo $result->gp_exists_n ?></span></li>						<li><span class='<? echo $result->gp_moderated ?>'>Moderated?</span><span class='notes'><? echo $result->gp_moderated_n ?></span></li>				<li><span class='<? echo $result->gp_logo ?>'>Unique Logo?</span><span class='notes'><? echo $result->gp_logo_n ?></span></li><li><span class='<? echo $result->gp_stylish ?>'>Stylish?</span><span class='notes'><? echo $result->gp_stylish_n ?></span></li>						<li><span class='<? echo $result->gp_active ?>'>Active?</span><span class='notes'><? echo $result->gp_active_n ?></span></li>					</ul></li>		
				<li><span><b>Twitter</b></span>
					<ul>			
						<li><span class='<? echo $result->tw_exists ?>'>Exists?</span><span class='notes'><? echo $result->tw_exists_n ?></span></li>								<li><span class='<? echo $result->tw_moderated ?>'>Moderated?</span><span class='notes'><? echo $result->tw_moderated_n ?></span></li>		<li><span class='<? echo $result->tw_logo ?>'>Unique Logo?</span><span class='notes'><? echo $result->tw_logo_n ?></span></li><li><span class='<? echo $result->tw_stylish ?>'>Stylish?</span><span class='notes'><? echo $result->tw_stylish_n ?></span></li>								<li><span class='<? echo $result->tw_active ?>'>Active?</span><span class='notes'><? echo $result->tw_active_n ?></span></li>								<li><span class='<? echo $result->fb_exists ?>'>Linked to Website</span><span class='notes'><? echo $result->fb_exists_n ?></span></li>							</ul></li>
		<?
		}
		else {
			echo "<div class='message'>Could not retrieve client information.</div>";
		}
	}
	if($g2g) {
		echo "<div class='review_list'>";
	    $reviews = $conn->query('SELECT * FROM reviews');
	$reviews->setFetchMode(PDO::FETCH_OBJ);
	    foreach($reviews as $review)
	    {
			echo "<div><a href='http://client.review/show.php?id=$review->id'>$review->business - $review->name</a></div>";

	    }
		echo "/div>";
	}
	?>


	</body>
</html>