<!DOCTYPE html>
<html lang="en">

  <body>



	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="page-header">
					<div class="blog">
						<h5>January,15 2014</h5>  <!-- ชื่อสินค้า -->
              <?php echo $data[0]['Pro_Id'] ?>
						    <img src="<?php echo base_url('assetAdmin/img/'.$data[0]['Pro_Pic']) ?>" style=" height: 200px;"><!-- รูปสินค้า -->


						<p><?php echo $data[0]['Pro_Detail'] ?></p> <!-- รายละเอียดสินค้า -->





					</div>
				</div>

			</div>




			<div class="col-md-4">
				<form class="form-search">
					<input class="form-control" type="text" placeholder="Search..">
				</form>
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong><?php echo $data[0]['Pro_Name'] ?></strong>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="img/b.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Kelly Hidayah</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore
								</p>
								<div class="ficon">
									<a href="" alt="">Learn more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="img/a.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Kelly Hidayah</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore
								</p>
								<div class="ficon">
									<a href="" alt="">Learn more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="img/c.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Kelly Hidayah</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore
								</p>
								<div class="ficon">
									<a href="" alt="">Learn more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="img/d.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Kelly Hidayah</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore
								</p>
								<div class="ficon">
									<a href="" alt="">Learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/HrdAkX0ue3k?list=PLB523918A978EF359" frameborder="1" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4">
					<div class="popular-tags">
						<h5>Popular tags</h5>
						<ul class="tags">
							<li><a href="#">Web design</a></li>
							<li><a href="#">Trends</a></li>
							<li><a href="#">Technology</a></li>
							<li><a href="#">Internet</a></li>
							<li><a href="#">Tutorial</a></li>
							<li><a href="#">Development</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


	<hr>
	<!--start footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h5 class="widgetheading">Nam libero tempore</h5>
						<p>soluta nobis est eligendi optio cumque nihil impedit quo minus id
						excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui

						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="widget">
						<h5 class="widgetheading">Pages</h5>
						<ul class="link-list">
							<li><a href="#">Press release</a></li>
							<li><a href="#">Terms and conditions</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Career center</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="widget">
						<h5 class="widgetheading">Latest posts</h5>
						<ul class="link-list">
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Pellentesque et pulvinar enim</a></li>
							<li><a href="#">Natus error sit voluptatem </a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>

		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="social-network">
							<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="copyright">
							<p>&copy;Resi Theme - All right reserved.</p>
                            <div class="credits">
                                <!--
                                    All the links in the footer should remain intact.
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Resi
                                -->
                                <a href="https://bootstrapmade.com/free-one-page-bootstrap-themes-website-templates/">One Page Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<!--end footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/responsive-slider.js"></script>
	<script src="js/wow.min.js"></script>
	<script>wow = new WOW({}).init();</script>

</body>
</html>
