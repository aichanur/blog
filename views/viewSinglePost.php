<!-- blog -->
			<div class="blog" id="blog">
				<div class="container">
					<div class="row">

						<div class="col">
							<!-- <?php //endforeach ?> -->
							<!-- blog entry -->
							<!-- <div class="entry"> -->
								<!-- blog entry image -->
								
								<!-- heading / blog post title -->
								<h2><b><?= $article[0]->title() ?></b></h2>
								<div>
										<img class="img-responsive" src="http://127.0.0.1/blog_mvc/public/img/blog/1.jpg" alt="Blog" />
								</div>
								
								<!-- blog information -->
								<!-- paragraph -->
								<p><?= $article[0]->content() ?></p>
							<!-- </div> -->
								

						</div>
					<!-- 	<div class="col-md-3 col-sm-3">
							<?php //endforeach ?>
						</div> -->
					</div>
				</div>
			</div>
			<!-- blog end -->
			
			<!-- subscribe -->
			<div class="subscribe" id="subscribe">
				<div class="container">
					<!-- subscribe content -->
					<div class="sub-content">
						<h3>Subscribe Here for Updates</h3>
						<form role="form">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Email...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Subscribe</button>
									</span>
							</div><!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
			<!-- subscribe end -->
			
			