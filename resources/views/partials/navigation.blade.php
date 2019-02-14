<header class="nav-wrapper">
	<nav>
		<div class="main-nav-wrapper">
			<ul>
				<li class="link-list">
					<div class="logo-wrapper">
						<a href="/" title="Home">
							<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/nav-icon.png">
						</a>
					</div>
					<div class="link-list-wrapper">
						<ul>
							@foreach($primary_urls as $primary_url)
								@if($primary_url['url'] === '/wedding-details')
								<li class="subnav-hover-link" id="wedding-details-link" data-subnav="details-link">
									<a href="{{ $primary_url['url'] }}" class="{{ ! empty($page_url) && $page_url === $primary_url['url'] || ! empty($page_url) && $page_url === '/wedding-details/accommodations' || ! empty($page_url) && $page_url === '/wedding-details/other-events' ? "active" : "" }}" title="{{ $primary_url['label'] }}">
										{!! $primary_url['nav-text'] !!}
										<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/carrot-down.png">
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
