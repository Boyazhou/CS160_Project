 <section id="services">
        <div class="container">
            <div class="col-lg-12 text-center">
            <h2 class="section-heading"><u>Sport Courses</u></h2>
             <p>Hope You Like it</p>
             
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
		</article>	
        </section>
    <?php   
    }}
    ?>	

             
             </div>
     </div>
    </section>