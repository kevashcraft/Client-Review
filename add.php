<html>
	<head>
	</head>
	<body>
	<?
	$g2g = true;
	try {
	    $sql = new PDO('mysql:host=localhost;dbname=clientreview', "clientreview", "clientreview");
	    $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo "<div class='message'>Could not connect to the database. ERROR: $e->message</div>";
		$g2g = false;
	}
	if(isset($_POST['business_name'])) {
		$query = $sql->prepare('INSERT INTO reviews(
					business_name,
					website,
					responsive_design,
					responsive_design_n,
					custom_favicon,
					custom_favicon_n,
					clean_logo,
					clean_logo_n,
					apparant_direction,
					apparant_direction_n,
					easy_to_use,
					easy_to_use_n,
					stylish,
					stylish_n,
					page_speed,
					page_speed_n,
					offers_ssl,
					offers_ssl_n,
					sql_injection,
					sql_injection_n,
					bruteforce_attack,
					bruteforce_attack_n,
					dos_attack,
					dos_attack_n,
					secure_admin_page,
					secure_admin_page_n,
					targeted_keywords_n,
					targeted_keywords,
					optimized_titles_n,
					optimized_titles,
					optimized_descriptions_n,
					optimized_descriptions,
					optimized_images_n,
					optimized_images,
					gp_exists_n,
					gp_exists,
					gp_moderated_n,
					gp_moderated,
					gp_logo_n,
					gp_logo,
					gp_stylish_n,
					gp_stylish,
					gp_active_n,
					gp_active,
					tw_exists_n,
					tw_exists,
					tw_moderated_n,
					tw_moderated,
					tw_logo_n,
					tw_logo,
					tw_stylish_n,
					tw_stylish,
					tw_active_n,
					tw_active,
					fb_exists_n,
					fb_exists,
					fb_moderated_n,
					fb_moderated,
					fb_logo_n,
					fb_logo,
					fb_stylish_n,
					fb_stylish,
					fb_active_n,
					fb_active
		) VALUES(
					:business_name,
					:website,
					:responsive_design,
					:responsive_design_n,
					:custom_favicon,
					:custom_favicon_n,
					:clean_logo,
					:clean_logo_n,
					:apparant_direction,
					:apparant_direction_n,
					:easy_to_use,
					:easy_to_use_n,
					:stylish,
					:stylish_n,
					:page_speed,
					:page_speed_n,
					:offers_ssl,
					:offers_ssl_n,
					:sql_injection,
					:sql_injection_n,
					:bruteforce_attack,
					:bruteforce_attack_n,
					:dos_attack,
					:dos_attack_n,
					:secure_admin_page,
					:secure_admin_page_n,
					:targeted_keywords_n,
					:targeted_keywords,
					:optimized_titles_n,
					:optimized_titles,
					:optimized_descriptions_n,
					:optimized_descriptions,
					:optimized_images_n,
					:optimized_images,
					:gp_exists_n,
					:gp_exists,
					:gp_moderated_n,
					:gp_moderated,
					:gp_logo_n,
					:gp_logo,
					:gp_stylish_n,
					:gp_stylish,
					:gp_active_n,
					:gp_active,
					:tw_exists_n,
					:tw_exists,
					:tw_moderated_n,
					:tw_moderated,
					:tw_logo_n,
					:tw_logo,
					:tw_stylish_n,
					:tw_stylish,
					:tw_active_n,
					:tw_active,
					:fb_exists_n,
					:fb_exists,
					:fb_moderated_n,
					:fb_moderated,
					:fb_logo_n,
					:fb_logo,
					:fb_stylish_n,
					:fb_stylish,
					:fb_active_n,
					:fb_active)');
		$data = array(
					':business_name' => $_POST['business_name'],
					':website' => $_POST['website'],
					':responsive_design' => $_POST['responsive_design'],
					':responsive_design_n' => $_POST['responsive_design_n'],
					':custom_favicon' => $_POST['custom_favicon'],
					':custom_favicon_n' => $_POST['custom_favicon_n'],
					':clean_logo' => $_POST['clean_logo'],
					':clean_logo_n' => $_POST['clean_logo_n'],
					':apparant_direction' => $_POST['apparant_direction'],
					':apparant_direction_n' => $_POST['apparant_direction_n'],
					':easy_to_use' => $_POST['easy_to_use'],
					':easy_to_use_n' => $_POST['easy_to_use_n'],
					':stylish' => $_POST['stylish'],
					':stylish_n' => $_POST['stylish_n'],
					':page_speed' => $_POST['page_speed'],
					':page_speed_n' => $_POST['page_speed_n'],
					':offers_ssl' => $_POST['offers_ssl'],
					':offers_ssl_n' => $_POST['offers_ssl_n'],
					':sql_injection' => $_POST['sql_injection'],
					':sql_injection_n' => $_POST['sql_injection_n'],
					':bruteforce_attack' => $_POST['bruteforce_attack'],
					':bruteforce_attack_n' => $_POST['bruteforce_attack_n'],
					':dos_attack' => $_POST['dos_attack'],
					':dos_attack_n' => $_POST['dos_attack_n'],
					':secure_admin_page' => $_POST['secure_admin_page'],
					':secure_admin_page_n' => $_POST['secure_admin_page_n'],
					':targeted_keywords_n' => $_POST['targeted_keywords_n'],
					':targeted_keywords' => $_POST['targeted_keywords'],
					':optimized_titles_n' => $_POST['optimized_titles_n'],
					':optimized_titles' => $_POST['optimized_titles'],
					':optimized_descriptions_n' => $_POST['optimized_descriptions_n'],
					':optimized_descriptions' => $_POST['optimized_descriptions'],
					':optimized_images_n' => $_POST['optimized_images_n'],
					':optimized_images' => $_POST['optimized_images'],
					':gp_exists_n' => $_POST['gp_exists_n'],
					':gp_exists' => $_POST['gp_exists'],
					':gp_moderated_n' => $_POST['gp_moderated_n'],
					':gp_moderated' => $_POST['gp_moderated'],
					':gp_logo_n' => $_POST['gp_logo_n'],
					':gp_logo' => $_POST['gp_logo'],
					':gp_stylish_n' => $_POST['gp_stylish_n'],
					':gp_stylish' => $_POST['gp_stylish'],
					':gp_active_n' => $_POST['gp_active_n'],
					':gp_active' => $_POST['gp_active'],
					':tw_exists_n' => $_POST['tw_exists_n'],
					':tw_exists' => $_POST['tw_exists'],
					':tw_moderated_n' => $_POST['tw_moderated_n'],
					':tw_moderated' => $_POST['tw_moderated'],
					':tw_logo_n' => $_POST['tw_logo_n'],
					':tw_logo' => $_POST['tw_logo'],
					':tw_stylish_n' => $_POST['tw_stylish_n'],
					':tw_stylish' => $_POST['tw_stylish'],
					':tw_active_n' => $_POST['tw_active_n'],
					':tw_active' => $_POST['tw_active'],
					':fb_exists_n' => $_POST['fb_exists_n'],
					':fb_exists' => $_POST['fb_exists'],
					':fb_moderated_n' => $_POST['fb_moderated_n'],
					':fb_moderated' => $_POST['fb_moderated'],
					':fb_logo_n' => $_POST['fb_logo_n'],
					':fb_logo' => $_POST['fb_logo'],
					':fb_stylish_n' => $_POST['fb_stylish_n'],
					':fb_stylish' => $_POST['fb_stylish'],
					':fb_active' => $_POST['fb_active'],
					':fb_active_n' => $_POST['fb_active_n']);
		if($query->execute($data)){
			echo "<div class='message'>Added Review for " . $_POST['business_name'] . "</div>";
		} else {
			echo "<div class='message'>There was an error.</div>";
		}
	}
	?>
<form action="http://client.review/add.php" method="POST">
	<center>
		<h1>Online Presence Evaluation</h1>
		<h2>(Insert Company Name)</h2>		
	</center>
		<h3>User Experience (UX)</h3>
		Business Name <input type="text" name="business_name"><br>
		Website <input type="text" name="website"><br>
		
		<h3>User Experience (UX)</h3>
			<ul class="single_list">				
				<li><span>Responsive Design</span>
		<input type='radio' name='responsive_design' id='P_responsive_design' value='PASS'>
		<label for='P_responsive_design'>Pass</label>
		 / 
		<input type='radio' name='responsive_design' id='F_responsive_design' value='FAIL'>
		<label for='F_responsive_design'>Fail</label>
		<input type='text' name='responsive_design_n'>			
				<li><span>Custom Favicon</span>
		<input type='radio' name='custom_favicon' id='P_custom_favicon' value='PASS'>
		<label for='P_custom_favicon'>Pass</label>
		 / 
		<input type='radio' name='custom_favicon' id='F_custom_favicon' value='FAIL'>
		<label for='F_custom_favicon'>Fail</label>
		<input type='text' name='custom_favicon_n'>			
				<li><span>Clean Logo</span>
		<input type='radio' name='clean_logo' id='P_clean_logo' value='PASS'>
		<label for='P_clean_logo'>Pass</label>
		 / 
		<input type='radio' name='clean_logo' id='F_clean_logo' value='FAIL'>
		<label for='F_clean_logo'>Fail</label>
		<input type='text' name='clean_logo_n'>			
				<li><span>Apparent Direction</span>
		<input type='radio' name='apparant_direction' id='P_apparant_direction' value='PASS'>
		<label for='P_apparant_direction'>Pass</label>
		 / 
		<input type='radio' name='apparant_direction' id='F_apparant_direction' value='FAIL'>
		<label for='F_apparant_direction'>Fail</label>
		<input type='text' name='apparant_direction_n'>			
				<li><span>Easy to Use</span>
		<input type='radio' name='easy_to_use' id='P_easy_to_use' value='PASS'>
		<label for='P_easy_to_use'>Pass</label>
		 / 
		<input type='radio' name='easy_to_use' id='F_easy_to_use' value='FAIL'>
		<label for='F_easy_to_use'>Fail</label>
		<input type='text' name='easy_to_use_n'>			
				<li><span>Stylish</span>
		<input type='radio' name='stylish' id='P_stylish' value='PASS'>
		<label for='P_stylish'>Pass</label>
		 / 
		<input type='radio' name='stylish' id='F_stylish' value='FAIL'>
		<label for='F_stylish'>Fail</label>
		<input type='text' name='stylish_n'>			
				<li><span>Page Speed</span>
		<input type='radio' name='page_speed' id='P_page_speed' value='PASS'>
		<label for='P_page_speed'>Pass</label>
		 / 
		<input type='radio' name='page_speed' id='F_page_speed' value='FAIL'>
		<label for='F_page_speed'>Fail</label>
		<input type='text' name='page_speed_n'>			
			</ul>	
		<h3>Security</h3>				
			<ul class="single_list">				
				<li><span>Offers SSL Connections</span>
		<input type='radio' name='offers_ssl' id='P_offers_ssl' value='PASS'>
		<label for='P_offers_ssl'>Pass</label>
		 / 
		<input type='radio' name='offers_ssl' id='F_offers_ssl' value='FAIL'>
		<label for='F_offers_ssl'>Fail</label>
		<input type='text' name='offers_ssl_n'>			
				<li><span>Safe from SQL Injection</span>
		<input type='radio' name='sql_injection' id='P_sql_injection' value='PASS'>
		<label for='P_sql_injection'>Pass</label>
		 / 
		<input type='radio' name='sql_injection' id='F_sql_injection' value='FAIL'>
		<label for='F_sql_injection'>Fail</label>
		<input type='text' name='sql_injection_n'>			
				<li><span>Safe from BruteForce Attacks</span>
		<input type='radio' name='bruteforce_attack' id='P_bruteforce_attack' value='PASS'>
		<label for='P_bruteforce_attack'>Pass</label>
		 / 
		<input type='radio' name='bruteforce_attack' id='F_bruteforce_attack' value='FAIL'>
		<label for='F_bruteforce_attack'>Fail</label>
		<input type='text' name='bruteforce_attack_n'>			
				<li><span>Safe from DOS Attacks</span>
		<input type='radio' name='dos_attack' id='P_dos_attack' value='PASS'>
		<label for='P_dos_attack'>Pass</label>
		 / 
		<input type='radio' name='dos_attack' id='F_dos_attack' value='FAIL'>
		<label for='F_dos_attack'>Fail</label>
		<input type='text' name='dos_attack_n'>			
				<li><span>Secure Admin Page</span>
		<input type='radio' name='secure_admin_page' id='P_secure_admin_page' value='PASS'>
		<label for='P_secure_admin_page'>Pass</label>
		 / 
		<input type='radio' name='secure_admin_page' id='F_secure_admin_page' value='FAIL'>
		<label for='F_secure_admin_page'>Fail</label>
		<input type='text' name='secure_admin_page_n'>
			</ul>				
		<h3>Search Engine Optimization (SEO)</h3>				
			<ul class="single_list">				
				<li><span>Targeted Keywords:</span>
		<input type='radio' name='responsive_design' id='P_responsive_design' value='PASS'>
		<label for='P_responsive_design'>Pass</label>
		 / 
		<input type='radio' name='responsive_design' id='F_responsive_design' value='FAIL'>
		<label for='F_responsive_design'>Fail</label>
		<input type='text' name='responsive_design_n'>			
				<li><span>Optimized Titles:</span>
		<input type='radio' name='targeted_keywords' id='P_targeted_keywords' value='PASS'>
		<label for='P_targeted_keywords'>Pass</label>
		 / 
		<input type='radio' name='targeted_keywords' id='F_targeted_keywords' value='FAIL'>
		<label for='F_targeted_keywords'>Fail</label>
		<input type='text' name='targeted_keywords_n'>			
				<li><span>Optimized Content:</span>
		<input type='radio' name='optimized_titles' id='P_optimized_titles' value='PASS'>
		<label for='P_optimized_titles'>Pass</label>
		 / 
		<input type='radio' name='optimized_titles' id='F_optimized_titles' value='FAIL'>
		<label for='F_optimized_titles'>Fail</label>
		<input type='text' name='optimized_titles_n'>			
				<li><span>Optimized Descriptions:</span>
		<input type='radio' name='optimized_descriptions' id='P_optimized_descriptions' value='PASS'>
		<label for='P_optimized_descriptions'>Pass</label>
		 / 
		<input type='radio' name='optimized_descriptions' id='F_optimized_descriptions' value='FAIL'>
		<label for='F_optimized_descriptions'>Fail</label>
		<input type='text' name='optimized_descriptions_n'>			
				<li><span>Optimized Image Titles and Alts:</span>
		<input type='radio' name='optimized_images' id='P_optimized_images' value='PASS'>
		<label for='P_optimized_images'>Pass</label>
		 / 
		<input type='radio' name='optimized_images' id='F_optimized_images' value='FAIL'>
		<label for='F_optimized_images'>Fail</label>
		<input type='text' name='optimized_images_n'>	
			</ul>			
		<h3>Social Media Connections</h3>				
			<ul class="double_list">
				<li><span><b>Google Plus</b></span>	
					<ul>
						<li><span>Exists?</span>
		<input type='radio' name='gp_exists' id='P_gp_exists' value='PASS'>
		<label for='P_gp_exists'>Pass</label>
		 / 
		<input type='radio' name='gp_exists' id='F_gp_exists' value='FAIL'>
		<label for='F_gp_exists'>Fail</label>
		<input type='text' name='gp_exists_n'>
						<li><span>Moderated?</span>
		<input type='radio' name='gp_moderated' id='P_gp_moderated' value='PASS'>
		<label for='P_gp_moderated'>Pass</label>
		 / 
		<input type='radio' name='gp_moderated' id='F_gp_moderated' value='FAIL'>
		<label for='F_gp_moderated'>Fail</label>
		<input type='text' name='gp_moderated_n'>		
						<li><span>Unique Logo?</span>
		<input type='radio' name='gp_logo' id='P_gp_logo' value='PASS'>
		<label for='P_gp_logo'>Pass</label>
		 / 
		<input type='radio' name='gp_logo' id='F_gp_logo' value='FAIL'>
		<label for='F_gp_logo'>Fail</label>
		<input type='text' name='gp_logo_n'>		
						<li><span>Stylish?</span>
		<input type='radio' name='gp_stylish' id='P_gp_stylish' value='PASS'>
		<label for='P_gp_stylish'>Pass</label>
		 / 
		<input type='radio' name='gp_stylish' id='F_gp_stylish' value='FAIL'>
		<label for='F_gp_stylish'>Fail</label>
		<input type='text' name='gp_stylish_n'>
						<li><span>Active?</span>
		<input type='radio' name='gp_active' id='P_gp_active' value='PASS'>
		<label for='P_gp_active'>Pass</label>
		 / 
		<input type='radio' name='gp_active' id='F_gp_active' value='FAIL'>
		<label for='F_gp_active'>Fail</label>
		<input type='text' name='gp_active_n'>
					</ul></li>		
				<li><span><b>Twitter</b></span>
					<ul>			
						<li><span>Exists?</span>
		<input type='radio' name='tw_exists' id='P_tw_exists' value='PASS'>
		<label for='P_tw_exists'>Pass</label>
		 / 
		<input type='radio' name='tw_exists' id='F_tw_exists' value='FAIL'>
		<label for='F_tw_exists'>Fail</label>
		<input type='text' name='tw_exists_n'>		
						<li><span>Moderated?</span>
		<input type='radio' name='tw_moderated' id='P_tw_moderated' value='PASS'>
		<label for='P_tw_moderated'>Pass</label>
		 / 
		<input type='radio' name='tw_moderated' id='F_tw_moderated' value='FAIL'>
		<label for='F_tw_moderated'>Fail</label>
		<input type='text' name='tw_moderated_n'>		
						<li><span>Unique Logo?</span>
		<input type='radio' name='tw_logo' id='P_tw_logo' value='PASS'>
		<label for='P_tw_logo'>Pass</label>
		 / 
		<input type='radio' name='tw_logo' id='F_tw_logo' value='FAIL'>
		<label for='F_tw_logo'>Fail</label>
		<input type='text' name='tw_logo_n'>		
						<li><span>Stylish?</span>
		<input type='radio' name='tw_stylish' id='P_tw_stylish' value='PASS'>
		<label for='P_tw_stylish'>Pass</label>
		 / 
		<input type='radio' name='tw_stylish' id='F_tw_stylish' value='FAIL'>
		<label for='F_tw_stylish'>Fail</label>
		<input type='text' name='tw_stylish_n'>		
						<li><span>Active?</span>
		<input type='radio' name='tw_active' id='P_tw_active' value='PASS'>
		<label for='P_tw_active'>Pass</label>
		 / 
		<input type='radio' name='tw_active' id='F_tw_active' value='FAIL'>
		<label for='F_tw_active'>Fail</label>
		<input type='text' name='tw_active_n'>		
						<li><span>Linked to Website</span>
		<input type='radio' name='fb_exists' id='P_fb_exists' value='PASS'>
		<label for='P_fb_exists'>Pass</label>
		 / 
		<input type='radio' name='fb_exists' id='F_fb_exists' value='FAIL'>
		<label for='F_fb_exists'>Fail</label>
		<input type='text' name='fb_exists_n'>		
					</ul></li>
				<li><span><b>Facebook</b></span>			
					<ul>
						<li><span>Exists?</span>
		<input type='radio' name='fb_moderated' id='P_fb_moderated' value='PASS'>
		<label for='P_fb_moderated'>Pass</label>
		 / 
		<input type='radio' name='fb_moderated' id='F_fb_moderated' value='FAIL'>
		<label for='F_fb_moderated'>Fail</label>
		<input type='text' name='fb_moderated_n'>		
						<li><span>Moderated?</span>
		<input type='radio' name='fb_logo' id='P_fb_logo' value='PASS'>
		<label for='P_fb_logo'>Pass</label>
		 / 
		<input type='radio' name='fb_logo' id='F_fb_logo' value='FAIL'>
		<label for='F_fb_logo'>Fail</label>
		<input type='text' name='fb_logo_n'>		
						<li><span>Unique Logo?</span>
		<input type='radio' name='fb_stylish' id='P_fb_stylish' value='PASS'>
		<label for='P_fb_stylish'>Pass</label>
		 / 
		<input type='radio' name='fb_stylish' id='F_fb_stylish' value='FAIL'>
		<label for='F_fb_stylish'>Fail</label>
		<input type='text' name='fb_stylish_n'>		
						<li><span>Stylish?</span>
		<input type='radio' name='fb_active' id='P_fb_active' value='PASS'>
		<label for='P_fb_active'>Pass</label>
		 / 
		<input type='radio' name='fb_active' id='F_fb_active' value='FAIL'>
		<label for='F_fb_active'>Fail</label>
		<input type='text' name='fb_active_n'>		
						<li><span>Active?</span>
		<input type='radio' name='business_name' id='P_business_name' value='PASS'>
		<label for='P_business_name'>Pass</label>
		 / 
		<input type='radio' name='business_name' id='F_business_name' value='FAIL'>
		<label for='F_business_name'>Fail</label>
		<input type='text' name='business_name_n'>	
					</ul></li>

		<input type="submit">
	</form>

	</body>
</html>