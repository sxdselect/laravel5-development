@extends('admin.layouts.default')

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">文章列表</h3>
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
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>User</th>
				<th>Date</th>
				<th>Status</th>
				<th>Reason</th>
			</tr>
			<tr>
				<td>183</td>
				<td>John Doe</td>
				<td>11-7-2014</td>
				<td><span class="label label-success">Approved</span></td>
				<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
			</tr>
			<tr>
				<td>219</td>
				<td>Alexander Pierce</td>
				<td>11-7-2014</td>
				<td><span class="label label-warning">Pending</span></td>
				<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
			</tr>
			<tr>
				<td>657</td>
				<td>Bob Doe</td>
				<td>11-7-2014</td>
				<td><span class="label label-primary">Approved</span></td>
				<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
			</tr>
			<tr>
				<td>175</td>
				<td>Mike Doe</td>
				<td>11-7-2014</td>
				<td><span class="label label-danger">Denied</span></td>
				<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
			</tr>
		</table>
	</div>

	<div class="box-footer clearfix">
		<ul class="pagination pagination-sm no-margin pull-left">
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</div>
</div>
@endsection

@section('script')
@endsection