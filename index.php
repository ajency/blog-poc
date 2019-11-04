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
			<div class="col-md-9 cover-white" style="padding-top: 60px;">
				<h1 class="item-title mBtm-20">
					<?php echo $title; ?>
				</h1>
				<div class="article-meta text-center">
					<?php echo $author; ?>
				</div>
				<div class="article-content text-center">
					<p class="text-center">
						<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-responsive landing-featured-img lazy">
					</p>
					<?php echo $content; ?>
				</div>
			</div>

            <div class="col-md-3 aldryn-newsblog aldryn-newsblog-sidebar">
                <?php include 'sidebar.php'; ?>
			</div>           
		</div>
	</div>

<?php include 'footer.php'; ?>

 