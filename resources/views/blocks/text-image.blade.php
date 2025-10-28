@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
$sectionClass .= $wide ? ' wide' : '';
$sectionClass .= $nomt ? ' !mt-0' : '';
$sectionClass .= $gap ? ' wider-gap' : '';
$sectionClass .= $lightbg ? ' section-light' : '';
$sectionClass .= $graybg ? ' section-gray' : '';
$sectionClass .= $whitebg ? ' section-white' : '';
$sectionClass .= $brandbg ? ' section-brand' : '';

@endphp

<!--- content -->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="content relative -smt {{ $sectionClass }} {{ $section_class }}">

	<div class="__wrapper c-main relative">
		<div class="__col grid grid-cols-1 lg:grid-cols-2 items-center gap-10">
			@if (!empty($content['image']))
			<div data-gsap-element="{{ $flip ? 'img-right' : 'img-left' }}" class="image-reveal-wrapper __img order1">
				<img class="object-cover w-full __img img-xl radius-img" src="{{ $content['image']['url'] }}" alt="{{ $content['image']['alt'] ?? '' }}">
			</div>
			@endif

			<div class="__content order2">
				<h2 data-gsap-element="header" class="">{{ $content['title'] }}</h2>

				<div data-gsap-element="txt" class="mt-2">
					{!! $content['txt'] !!}
				</div>

				@if (!empty($content['button']))
				<a data-gsap-element="btn" class="main-btn m-btn" href="{{ $content['button']['url'] }}">{{ $content['button']['title'] }}</a>
				@endif

			</div>

		</div>

</section>