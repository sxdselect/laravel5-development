@extends('admin.layouts.default')

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Title</h3>
		<div class="box-tools pull-right">
			<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fa fa-minus"></i>
			</button>
			<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i>
			</button>
		</div>
	</div>

	<div class="box-body">
		{!! $article->art_title !!}
		{!! $article->category->cat_title !!}
		{!! $article->user->usr_username !!}
		{!! $article->art_fulltext !!}
	</div>
	<div class="box-footer">Footer</div>
</div>
@endsection