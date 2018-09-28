<header class="nav-wrapper">
	<nav>
		<div class="main-nav-wrapper">
			<ul>
				<li class="logo">
					<a href="/" title="Home">
						<img src="/img/icons/nav-icon.png">
					</a>
				</li>
				<li class="link-list">
					<div class="link-list-wrapper">
						<ul>
							@foreach($primary_urls as $primary_url)
								@if($primary_url['url'] === '/')
									<li class="subnav-hover-link" id="home-details-link" data-subnav="home-link">
										<a href="{{ $primary_url['url'] }}" class="{{ ! empty($page_url) && $page_url === $primary_url['url'] ? "active" : "" }}" title="{{ $primary_url['label'] }}">
											{!! $primary_url['nav-text'] !!}
											<img src="/img/icons/carrot-down.png">
										</a>
									</li>
								@elseif($primary_url['url'] === '/wedding-details')
									<li class="subnav-hover-link" id="wedding-details-link" data-subnav="details-link">
										<a href="{{ $primary_url['url'] }}" class="{{ ! empty($page_url) && $page_url === $primary_url['url'] ? "active" : "" }}" title="{{ $primary_url['label'] }}">
											{!! $primary_url['nav-text'] !!}
											<img src="/img/icons/carrot-down.png">
										</a>
									</li>
								@else
									<li>
										<a href="{{ $primary_url['url'] }}" class="{{ ! empty($page_url) && $page_url === $primary_url['url'] ? "active" : "" }}" title="{{ $primary_url['label'] }}">{!! $primary_url['nav-text'] !!}</a>
									</li>
								@endif
							@endforeach
						</ul>
					</div>
				</li>
				<li class="btn-nav-open">
					@include('svgs.menu')
				</li>
			</ul>
		</div>
	</nav>
</header>

<div class="mobile-nav-wrapper">
	<div class="nav-block">
		<div class="mobile-main-links">
			<div class="link-list-wrapper">
				<ul>
					@foreach($primary_urls as $primary_url)
						<li>
							@if($primary_url['url'] === '/wedding-details')
								<a href="{{ $primary_url['url'] }}" class="{{ ! empty($page_url) && $page_url === $primary_url['url'] ? "active" : "" }}" title="{{ $primary_url['label'] }}">
									{!! $primary_url['nav-text'] !!}
								</a>
								
								<ul class="subnav">
									@foreach($secondary_urls as $secondary_url)
										<li>
											<a href="{{ $secondary_url['url'] }}" class="{{ ! empty($page_url) && $page_url === $secondary_url['url'] ? "active" : "" }}" title="{{ $secondary_url['label'] }}">
												<img src="/img/icons/carrot-right.png">
												{!! $secondary_url['nav-text'] !!}
											</a>
										</li>
									@endforeach
								</ul>
							@else
								<a href="{{ $primary_url['url'] }}" class="{{ ! empty($page_url) && $page_url === $primary_url['url'] ? "active" : "" }}" title="{{ $primary_url['label'] }}">{!! $primary_url['nav-text'] !!}</a>
							@endif
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="subnav-wrapper" id="details-link">
	<ul class="subnav">
		@foreach($secondary_urls as $secondary_url)
			<li class="subnav">
				<a href="{{ $secondary_url['url'] }}" class="{{ ! empty($page_url) && $page_url === $secondary_url['url'] ? "active" : "" }} subnav" title="{{ $secondary_url['label'] }}">
					{!! $secondary_url['nav-text'] !!}
				</a>
			</li>
		@endforeach
	</ul>
</div>

<div class="subnav-wrapper" id="home-link">
	<ul class="subnav">
		@foreach($secondary_urls_home as $secondary_url_home)
			<li class="subnav">
				<a href="{{ $secondary_url_home['url'] }}" class="{{ ! empty($page_url) && $page_url === $secondary_url_home['url'] ? "active" : "" }} subnav" title="{{ $secondary_url_home['label'] }}">
					{!! $secondary_url_home['nav-text'] !!}
				</a>
			</li>
		@endforeach
	</ul>
</div>