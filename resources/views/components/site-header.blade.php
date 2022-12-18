<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="/">Our Project</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="/">Home</a></li>
							<li>
								<a href="/rooms" class="fh5co-sub-ddown">Rooms</a>
								
							</li>
							<li><a href="/services">Services</a></li>
							@guest
								<li><a href="/login">Login</a></li>
								<li><a href="/register">Register</a></li>	
							@endguest
							@auth	
								<li><form action="/logout" class="mt-10" method="post">
									@csrf
									<button>Logout</button>
								</form></li>	
							@endauth
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
</div>
