<div class="biolife-panigations-block">
	<ul class="panigation-contain">
		@foreach ($elements as $element)
		@if (is_string($element))
		{{-- <li><span class="sep">{{ $element }}</span></li> --}}
		<li><span class="sep">....</span></li>
		@endif

		@if (is_array($element))
		@foreach ($element as $page => $url)
		@if ($page == $paginator->currentPage())
		<li><span class="current-page">{{ $page }}</span></li>
		@else
		<li><a href="{{$url}}" class="link-page">{{ $page }}</a></li>
		@endif
		@endforeach
		@endif
		@endforeach

		@if ($paginator->hasMorePages())
		<li><a href="{{ $paginator->nextPageUrl() }}" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
		@endif
	</ul>
</div>