
			
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<!-- heading -->
					<h2>Welcome to our blog Avenoel !</h2>
					<!-- paragraph -->
					<p>For those who love traveling, you have come to the right place my friend !!!</p>
				</div>
			</div>
			<!-- banner end -->
			
			<!-- blog -->
			<div class="blog" id="blog">
				<div class="container">
					<div class="default-heading">
						<!-- heading -->
						<h1>Our Articles</h1>
					</div>
					<div class="row">
						<?php 
							foreach ($articles as $article) :
						?>

						<div class="col-md-3 col-sm-3">
							<!-- <?php //endforeach ?> -->
							<!-- blog entry -->
							<!-- <div class="entry"> -->
								<!-- blog entry image -->
								<img class="img-responsive" src="http://127.0.0.1/blog_mvc/public/img/blog/1.jpg" alt="Blog" />
								<!-- heading / blog post title -->
								<h3><a href="post&id=<?= $article->id() ?>"><b><?= $article->title() ?></b></a></h3>
								<!-- blog information -->
								<span class="meta">
									<?= $article->date() ?>
									<!-- July 02, 2014 | Tag: Technology | By: David John -->
								</span>
								<!-- paragraph -->
								<p><?= $article->preview() ?></p>
							<!-- </div> -->
								<div class="text-center">
									<a href="post&id=<?= $article->id() ?>" class="btn btn-default">See More</a>
								</div>

						</div>
						<?php endforeach ?>
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
			
			<!-- team -->
			<div class="team" id="team">
				<div class="container">
					
					<div class="row">
						<div class="col-md-3 col-sm-3">
							
						</div>
						
					</div>
				</div>
			</div>
			<!-- team end -->
			
			