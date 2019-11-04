<?php include 'header.php'; ?>

<?php
	$title = '';
	$author = '';
	$image = '';
	$content = '';
	$reqUrl = explode("?",$_SERVER['REQUEST_URI']);
	if(count($reqUrl) == 2){
		$url = "http://ethicalseosolutions.net/newweddingz/wp-json/wp/v2/posts/?slug=".$reqUrl[1]."&_embed";
		//$url = "localhost/wordpress/wp-json/wp/v2/posts/?slug=".$reqUrl[1]."&_embed";
		$curlSession = curl_init();
		curl_setopt($curlSession, CURLOPT_URL, $url);
		curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
		$Data = json_decode(curl_exec($curlSession));
		$jsonData = $Data[0];
		if(array_key_exists('id', $jsonData)){
			$fi = 'wp:featuredmedia';
			$title = $jsonData->title->rendered;
			if(array_key_exists($fi, $jsonData->_embedded)){
				$image = $jsonData->_embedded->$fi[0]->media_details->sizes->medium_large->source_url;
			}
			$content = $jsonData->content->rendered;
			$auth = $jsonData->_embedded->author[0]->name;
			$dateObj = new DateTime($jsonData->date);
			$date = $dateObj->format('M d, Y');
			$author = "By ".$auth." | ".$date;
		}
		curl_close($curlSession);
	}
?>
	<div class="container content-wrap">
		<div class="row">
			<div class="col-md-9 " style="padding-top: 0px;">
				
				<div class="aldryn aldryn-newsblog">

					<!-- featured 4 posts -->
					<div class="featured-posts">
						<div class="row top">
							<div class="col-md-7 col-xs-7">

								<!-- big featured -->
								<div class="b-g-wrap">
									<div class="b-g-link">
										<!-- link -->
										<a class="b-g-act-link" href="/blog/birthdayspecial-8-glamorous-bridal-outfit-inspiration-from-malaika-arora/"></a> 
										<span class="b-g-img">
											<!-- image -->
											<img alt="" src="https://partyz-partner-images.s3.amazonaws.com/filer_public_thumbnails/photologue/images/birthdayspecial-8-glamorous-bridal-outfit-inspiration-from-malaika-arora.jpg__800x500_q85_subsampling-2.jpg">
										</span> 
										<span class="b-g-cont">
											<span class="b-g-overlay"></span> 
											<span class="top">
												<!-- category -->
												<span class="b-g-category">Bridal Wear</span> 
												<!-- published date -->
												<span class="b-g-date">Oct. 23, 2019</span>
											</span> 
											<span class="clearfix"></span> 
											<!-- title -->
											<span class="b-g-title">#BirthdaySpecial: 8 Glamorous Bridal Outfit Inspiration from Malaika Arora</span> 
											<span class="btm">
												<!-- category -->
												<span class="b-g-category">Bridal Wear</span> 
												<!-- published date -->
												<span class="b-g-date">Oct. 23, 2019</span>
											</span> 
											<span class="b-g-more">Read More <i class="fa fa-long-arrow-right"></i></span>
										</span> 
										<span class="b-g-p-o"></span>
									</div>
								</div>

							</div>
							<div class="col-md-5 col-xs-5">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="b-g-wrap">
											<div class="b-g-link split1">
												<!-- link -->
												<a class="b-g-act-link" href="/blog/justlaunched-weddingzins-first-of-its-kind-wedding-retail-store/"></a> 
												<span class="b-g-img">
													<!-- image -->
													<img alt="" src="https://partyz-partner-images.s3.amazonaws.com/filer_public_thumbnails/photologue/images/justlaunched-weddingzins-first-of-its-kind-wedding-retail-store.jpg__800x500_q85_subsampling-2.jpg">
												</span> 
												<span class="b-g-cont">
													<span class="b-g-overlay"></span> 
													<span class="top">
														<!-- category -->
														<span class="b-g-category">Bridal Look</span> 
														<!-- published date -->
														<span class="b-g-date">Oct. 22, 2019</span>
													</span> 
													<span class="clearfix"></span> 
													<!-- title -->
													<span class="b-g-title">#JustLaunched - Weddingz.in’s First-of-its-kind Wedding Retail Store!</span> <span class="btm">
														<!-- category -->
														<span class="b-g-category">Bridal Look</span> 
														<!-- published date -->
														<span class="b-g-date">Oct. 22, 2019</span>
													</span> 
													<span class="b-g-more">Read More <i class="fa fa-long-arrow-right"></i></span>
												</span> 
												<span class="b-g-p-o"></span>
											</div>
										</div>
									</div>

									<!-- Subscribe block -->
									<div class="col-md-12 col-sm-12">
										<div class="b-g-wrap">
											<div class="b-g-link split2 sub2 blacksheep">
												<div class="logo" style="">
													<img alt="" height="50" src="https://d23aex6kzd4ahz.cloudfront.net/img/weddingzShop.png"> Wedding<span class="colored">z Blog</span>
												</div>
												<div class="right-text">
													<p class="readmore">Catch up on what’s<br>
													trending and new in weddings</p>
												</div><button class="btn subscribe-btn btn-default btn-lg" data-target="#subscribe-blog" data-toggle="modal" type="button">Subscribe</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="row btm">
							<div class="col-md-5 col-sm-6 col-xs-6">
								<div class="b-g-wrap">
									<div class="b-g-link">
										<!-- link -->
										<a class="b-g-act-link" href="/blog/5-unique-gifts-for-diwali-apart-from-mithai/"></a> 
										<span class="b-g-img">
											<!-- image -->
											<img alt="" src="https://partyz-partner-images.s3.amazonaws.com/filer_public_thumbnails/photologue/images/5-unique-gifts-for-diwali-apart-from-mithai.jpg__800x500_q85_subsampling-2.jpg">
										</span> 
										<span class="b-g-cont">
											<span class="b-g-overlay"></span> 
											<span class="top">
												<!-- category -->
												<span class="b-g-category">Wedding Planning</span> 
												<!-- published date -->
												<span class="b-g-date">Oct. 22, 2019</span>
											</span> 
											<span class="clearfix"></span> 
											<!-- title -->
											<span class="b-g-title">5 Unique Gifts for Diwali Apart from Mithai</span> 
											<span class="btm">
												<!-- category -->
												<span class="b-g-category">Wedding Planning</span> 
												<!-- published date -->
												<span class="b-g-date">Oct. 22, 2019</span>
											</span> 
											<span class="b-g-more">Read More <i class="fa fa-long-arrow-right"></i></span>
										</span> 
										<span class="b-g-p-o"></span>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-6 col-xs-6">
								<div class="b-g-wrap">
									<div class="b-g-link">
										<!-- link -->
										<a class="b-g-act-link" href="/blog/bling-alert-sabyasachi-launches-1st-jewellery-flagship-store-in-mumbai_1/"></a> 
										<!-- image -->
										<span class="b-g-img" data-ab-css-background="" style="background-image: url(https://partyz-partner-images.s3.amazonaws.com/filer_public_thumbnails/photologue/images/bling-alert-sabyasachi-launches-1st-jewellery-flagship-store-in-mumbai-1.jpg__800x500_q85_subsampling-2.jpg);"></span> 
										<span class="b-g-cont">
											<span class="b-g-overlay"></span> 
											<span class="top">
												<!-- category -->
												<span class="b-g-category hidden">Bridal Wear</span> 
												<!-- published date -->
												<span class="b-g-date">Oct. 22, 2019</span>
											</span> 
											<span class="clearfix"></span> 
											<!-- title -->
											<span class="b-g-title">#Bling Alert: Sabyasachi Launches 1st Jewellery Flagship Store in Mumbai</span> 
											<span class="btm">
												<!-- category -->
												<span class="b-g-category hidden">Bridal Wear</span> 
												<!-- published date -->
												<span class="b-g-date">Oct. 22, 2019</span>
											</span> 
											<span class="b-g-more">Read More <i class="fa fa-long-arrow-right"></i></span>
										</span> 
										<span class="b-g-p-o"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

            <div class="aldryn-newsblog aldryn-newsblog-sidebar col-lg-3 col-md-4 col-sm-4 col-xs-4">
                <?php include 'sidebar-home.php'; ?>
			</div>

			<div class="clearfix"></div>           
		
			<div class="col-md-12">
				<h3 class="sgrid-title post-title "><span>Latest Blogs</span></h3>
			

				<div class="aldryn-newsblog-list grid" id="blog-masonary">

					<!-- Loop starts here -->
					<div class="grid-item-holder">
						<div class="grid-item">
							<div class="grid-card">
								<!-- link -->
								 <a class="image-link" href="/blog/celebrating22yearsofdtph-5-dil-toh-pagal-hai-songs-for-your-sangeet/" target="_blank">
								 	<!-- image -->
								 	<img alt="#Celebrating22YearsofDTPH 5 Dil Toh Pagal Hai Songs for your Sangeet" class="img-responsive landing-featured-img lazy" src="https://media.weddingz.in/images/56482a0ef6d7fcb72802e541a56adca1/celebrating22yearsofdtph-5-dil-toh-pagal-hai-songs-for-your-sangeet.jpg">
								</a>
								<div class="item-info">
									<div class="item-title">
										<!-- link -->
										<a href="/blog/celebrating22yearsofdtph-5-dil-toh-pagal-hai-songs-for-your-sangeet/" target="_blank">
										<!-- Title -->
										#Celebrating22YearsofDTPH 5 Dil Toh Pagal Hai Songs for your Sangeet
										</a>
									</div>
									<!-- Summary -->
									<div class="item-summary">
										I am thankful for many things in life but if there is one thing I am really thankful for, it’s for Yashraj’s movies’ song tracks. Take Dil Toh Pagal Hai for example- from Le Gayi to the uber-famou...
									</div>
									<div class="item-meta categories">
										<i class="fa fa-calendar-o"></i>
										 Oct. 31, 2019
									</div>
									<!-- categories -->
									<p class="item-meta categories blog-cat hidden">
										<a href="/blog/category/wedding-planning/"><i aria-hidden="true" class="fa fa-folder-o"></i>Wedding Planning</a>
									</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- Loops ends here -->

				</div>
				<div class="loading-results">
					<div class="w-loader"></div>
				</div>
				<div class="aldryn-newsblog-pagination">
					<div class="clearfix"></div>
					<input class="total_pages" type="hidden" value="263">
				</div>
			</div>

		</div>

	</div>

<?php include 'footer.php'; ?>

 