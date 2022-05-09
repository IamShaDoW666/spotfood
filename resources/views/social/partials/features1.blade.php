	<div id="features">
	<div class="services">
	    
				<div class="container">
					<div class="main-title">
					<h2 id="orderFood">Contactless Food ordering</h2>
						<p>Ordering made easy</p>
					</div>
					<!--  ---------------------------                -->
					<div class="row">
					      @foreach ($features as $key => $feature)
						<div class="col-lg-4 animated-element">
							<a href="pay-with-card-online/" class="service-link">
								<div class="box text-center">
									<div class="icon d-flex align-items-end">
									    <!--<i class="icon icofont-wallet"></i>-->
									 <img class="image-in-card"src='{{ str_contains($feature->image, "social") ? $feature->image : "/uploads/restorants/".$feature->image."_large.jpg" }}' />   
									    
									    </div>
									<h3 class="service-title">{{ $feature->title }}</h3>
									<p>{{ $feature->description }}</p>
								</div>
							</a>
						</div>
						 @endforeach
						
					</div>
				</div>
			</div>
			</div>
			<!-- Services End -->
