   <link rel="stylesheet" href="<?php echo base_url();?>resource/css/form-elements.css">
   <link rel="stylesheet" href="<?php echo base_url();?>resource/css/style.css">
	



<html>
	<style type="text/css">
		h1 {
			color: white;
			font-size: 50px;
		}
		
		p {
			font-family: Merriweather;
		
		}
		.center-content {
			margin-left: auto;
			margin-right: auto;
			margin-button: auto;
		}
	</style>
	
	<header>
		
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Course Tracks</h1>
                <hr>
                <p>
                	Start a new course track today! Enroll in courses that top companies have approved so you know you're making the most of your time!
                </p>
                <a href="<?php echo base_url();?>Pages/course/" class="btn btn-primary btn-xl page-scroll">Browse all courses here!</a>
            </div>
        </div>
    </header>
    
    <section class="bg-warning">
        <div class = "center-content">
        	<div class = "container">
        		<div class="row">
                	<div class="col-sm-6 col-sm-offset-3 form-box">
                		<div class="form-top">
                        	<div class="form-top-left">
                        		<h3>Create a Course Track!</h3>
                        	</div>
                    	</div>
                    	<div class="form-bottom">
                    		<form role="form" action="<?php echo base_url();?>Pages/coursetrackresult/" method="post" class="login-form">
                            	<div class="form-group">
                            		<label class="sr-only" for="ct-name">Name</label>
                                	<input type="text" name="form-name" placeholder="Name..." class="form-name form-control" id="form-name">
                            	</div> 
                     			<div class="form-group">
                            		<label class="sr-only" for="ct-email">Email</label>
                           	 	    <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                            	</div>
								<div class="form-group">
                            		<label class="sr-only" for="ct-company">Company</label>
                                	<input type="text" name="form-company" placeholder="Company..." class="form-company form-control" id="form-company">
                            	</div>
                            	<div class="form-group">
                            		<label class="sr-only" for="ct-trackdesc">Track Description</label>
                                	<input type="text" name="form-trackdesc" placeholder="Track Description..." class="form-trackdesc form-control" id="form-trackdesc">
                            	</div>
                            	<div class="form-group">
                            		<label class="sr-only" for="ct-coursesug">Course Suggestions</label>
                                	<input type="text" name="form-coursesug" placeholder="Course Suggestions..." class="form-coursesug form-control" id="form-coursesug">
                            	</div>
                            	<div style="text-align:center;">
                             		<button type="submit" class="btn">Submit for approval!</button>
                             	</div>
                        	</form>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>
    </section>
    
    <section>
    	<h1 style="color: black; font-weight:bold;" >AVAILABLE COURSE TRACKS</h1>
  		<div class="row">
<p>Alex is just testing code here... don't worry about it...</p><!--Added by alex 3Dec2015-->

	 		<div class="track">
     			<h2>CISCO</h2>
     			<h5>Description: Cisco is looking for people with some front end experience.</h5>
     			<p><a href="https://www.udacity.com/course/intro-to-html-and-css--ud304">Intro to HTML and CSS</a></p>




     			<p><a href="https://www.coursera.org/learn/html-css-javascript">HTML, CSS and JavaScript</a></p>
     			<p><a href="https://www.udacity.com/course/senior-web-developer--nd802">Advanced Level HTML and CSS</a></p>
  			</div>
   			<div class="track">
     			<h2>FACEBOOK</h2>
     			<h5>Description: Facebook is looking for people with some back end experience.</h5>
     			<p><a href="https://www.udacity.com/course/intro-to-relational-databases--ud197">Intro to Relational Database</a></p>
     			<p><a href="https://www.coursera.org/learn/database-management">Database Management Essential</a></p>
     			<p><a href="https://www.edx.org/course/querying-transact-sql-microsoft-dat201x-0">Querying with Transact-SQL</a></p>
   			</div>
   			<div class="track">
     			<h2>GOOGLE</h2>
     			<h5>Description: Google is looking for people with some big data experience.</h5>
     			<p><a href="https://www.udacity.com/course/intro-to-hadoop-and-mapreduce--ud617">Intro to Hadoop and MapReduce</a></p>
     			<p><a href="https://www.udacity.com/course/intro-to-data-science--ud359">Intro to Data Science</a></p>
     			<p><a href="https://www.coursera.org/learn/bigdata-analytics">Intro to Big Data Analytics</a></p>
   			</div>
  		</div>
    </section>
</html>
