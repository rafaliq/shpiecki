@if($data['header'] == 'tak')
	<div class="text--center title--icon">
		<img src="@asset("images/leaf.png")" alt="lasagne">
		<h2 class="title title--section">
			{{ $data['title'] }}
		</h2>
		@if($menu)
			<a class="button button--pdf" href="{{ $menu['url'] }}">
				PDF
			</a>
		@endif
	</div>
@endif