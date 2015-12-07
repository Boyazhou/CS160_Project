<div class="container">

	<link rel="stylesheet" type="text/css" href="http://www.jqueryscript.net/css/jquerysctipttop.css">
<!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!--Added by alex 3Dec2015-->

	<link href="<?php echo base_url();?>resource/css/star-rating.css" media="all" rel="stylesheet" type="text/css" /><!--Added by alex 3Dec2015-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><!--Added by alex 3Dec2015-->
	<script src="<?php echo base_url();?>resource/js/star-rating.js" type="text/javascript"></script><!--Added by alex 3Dec2015-->






    <?php
    if($query != null){
    foreach ($query as $row) {
    ?>
      <section class="col-xs-12 col-sm-6 col-md-12">
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="<?php echo $row->video_link?>" title="Lorem ipsum" class="thumbnail"><img src="<?php echo $row->course_image?>" alt="Image unavailable" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span><?php echo $row->start_date?></span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span><?php echo $row->course_length?> Days</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span><?php if($row->certificate == 'yes')
                                                                               echo 'Certificate available';
                                                                            else echo 'Certificate not available';?></span></li>
                   	<li><i class="glyphicon glyphicon-time"></i> <span><?php echo $row->course_length?> Days</span></li>                                                         
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="<?php echo $row->course_link?>" title=""><?php echo $row->title?></a></h3>
				<p><?php echo $row->short_desc?></p>						
			</div>
            <div class="col-xs-12 col-sm-12 col-md-10 excerpet">
                <p><?php echo $row->site?></p>
            </div>
			
<div class="4star">
<input id="rating-system" type="number" class="rating" data-min="1" data-max="4" step="1"><!--Added by alex 3Dec2015-->

	<div class="container"> <!--Written by Steven, put here by alex 6Dec2015-->
		<?php
		if($query != null){
		foreach ($query as $row) {
		?>
		  <section class="col-xs-12 col-sm-6 col-md-12">
			<article class="search-result row">
				<dir>
					<!--this will have number rating-->
					<?php echo $row->num_R?>
					$row->num_R
					<!--this will have display rating-->
					<?php echo $row->Display_R?>
					$row->Display_R
				</dir>
			</article>	
		    </section>
		<?php   
		}}else{

		}
		?>	
	</div>

<script type="text/javascrypt">
	  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</div>




		</article>	
        </section>
    <?php   
    }}
    ?>	
</div>
