<div class="sidebar-wrapper" data-aos="fade-right">
	<div>
		<div class="logo-wrapper">
			<a href=""><img class="img-fluid for-light w-75" src="https://via.placeholder.com/305x60.png?text=Logo+RSUD+Kota+Bogor" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href=""><img class="img-fluid" src="https://via.placeholder.com/33x33.png?text=RS" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-main-title">
						<div>
							<h6 class="lan-1">Menu</h6>
                     		<p class="lan-2">Nama Aplikasi</p>
						</div>
					</li>
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title link-nav {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
							<i data-feather="activity"> </i><span>Dashboard</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
