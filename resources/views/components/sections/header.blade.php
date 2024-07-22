<!-- HEADER -->
<header id="header" class="header-area style-01 layout-03">
	<div class="header-top bg-main hidden-xs">
		<div class="container">
			<div class="top-bar left">
				<ul class="horizontal-menu">
					<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>{{config('biolife.email')}}</a></li>
					<li><a href="#">{{config('biolife.sending_message');}}</a></li>
				</ul>
			</div>
			<div class="top-bar right">
				<ul class="social-list">
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				</ul>
				<ul class="horizontal-menu">
					<li class="horz-menu-item currency">
						{{-- Bs (Bolivianos) --}}
						<select name="currency">
							<option value="bs" selected>Bs (Bolivianos)</option>
						</select>
					</li>
					{{-- <li><a href="login.html" class="login-link"><i class="biolife-icon icon-login"></i>Login/Register</a></li> --}}
				</ul>
			</div>
		</div>
	</div>
	<div class="header-middle biolife-sticky-object ">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
					<a href="{{route('home')}}" class="biolife-logo"><img src="{{asset('assets/images/organic-3.png')}}" alt="biolife logo" width="135" height="34"></a>
				</div>
				<div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
					<div class="primary-menu">
						<ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
							<li class="menu-item"><a href="{{route('home')}}">Inicio</a></li>
							<li class="menu-item menu-item-has-children has-child">
								<a href="#" class="menu-name" data-title="Products">Productos</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="#">Billeteras</a></li>
									<li class="menu-item"><a href="#">Artículos</a></li>
									<li class="menu-item"><a href="#">Peluches</a></li>
									<li class="menu-item"><a href="#">Tazas</a></li>
									<li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Sides & Extras">Especiales</a>
										<ul class="sub-menu">
											<li class="menu-item"><a href="#">En oferta</a></li>
									<li class="menu-item"><a href="#">En remate</a></li>
									<li class="menu-item"><a href="#">Más vendidos</a></li>
										</ul>
									</li>
								</ul>
							</li>
							{{-- <li class="menu-item menu-item-has-children has-child">
								<a href="#" class="menu-name" data-title="Products">Especiales</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="#">En oferta</a></li>
									<li class="menu-item"><a href="#">En remate</a></li>
									<li class="menu-item"><a href="#">Los más vendidos</a></li>
								</ul>
							</li> --}}
							<li class="menu-item"><a href="#">Novedades</a></li>
							<li class="menu-item"><a href="#">Contacto</a></li>
							<li class="menu-item"><a href="#">Ubícanos</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
					<div class="biolife-cart-info">
						<div class="mobile-search">
							<a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
							<div class="mobile-search-content">
								<form action="#" class="form-search" name="mobile-seacrh" method="get">
									<a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
									<input type="text" name="s" class="input-text" value="" placeholder="Search here...">
									<select name="category">
										<option value="-1" selected>All Categories</option>
										<option value="vegetables">Vegetables</option>
										<option value="fresh_berries">Fresh Berries</option>
										<option value="ocean_foods">Ocean Foods</option>
										<option value="butter_eggs">Butter & Eggs</option>
										<option value="fastfood">Fastfood</option>
										<option value="fresh_meat">Fresh Meat</option>
										<option value="fresh_onion">Fresh Onion</option>
										<option value="papaya_crisps">Papaya & Crisps</option>
										<option value="oatmeal">Oatmeal</option>
									</select>
									<button type="submit" class="btn-submit">go</button>
								</form>
							</div>
						</div>
						<div class="wishlist-block hidden-sm hidden-xs">
							<a href="#" class="link-to">
								<span class="icon-qty-combine">
									<i class="icon-heart-bold biolife-icon"></i>
									<span class="qty">4</span>
								</span>
							</a>
						</div>
						<div class="mobile-menu-toggle">
							<a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom hidden-sm hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="vertical-menu vertical-category-block">
						<div class="block-title">
							<span class="menu-icon">
								<span class="line-1"></span>
								<span class="line-2"></span>
								<span class="line-3"></span>
							</span>
							<span class="menu-title">Categorías</span>
							<span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
						</div>
						<div class="wrap-menu">
							<ul class="menu clone-main-menu">
								@foreach ($categories as $category)
								<li class="menu-item"><a href="{{route('products.index', ['slug' => $category->slug])}}" class="menu-name" data-title="Ocean Foods">{{-- <i class="biolife-icon icon-fish"></i> --}}{{Str::limit($category->name, 28)}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-8 padding-top-2px">
					<div class="header-search-bar layout-01">
						<form action="{{route('products.search')}}" class="form-search" name="desktop-seacrh" method="get">					
							<input type="text" name="s" class="input-text" value="{{session()->pull('search')}}" required="" placeholder="Buscar producto...">
							<select name="c">
								<option value="all" selected>Todas las categorías</option>
								@foreach ($categories as $category)
								<option value="{{$category->slug}}">{{Str::limit($category->name, 28)}}</option>
								@endforeach
							</select>
							<button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
						</form>
					</div>
					<div class="live-info">
						<p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+591) 77123130</b></p>
						<p class="working-time">Lun-Vie: 8:30am-8:00pm; Sab-Dom: 9:30am-4:30pm</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>