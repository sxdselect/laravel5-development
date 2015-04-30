@extends('admin.layouts.default')

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">添加文章</h3>
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
		<form action="" role="form">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_1" data-toggle="tab">文章内容</a></li>
					<li><a href="#tab_2" data-toggle="tab">其他信息</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1">
						<div class="row">
							<div class="col-xs-4">
								<div class="input-group">
									<div class="input-group-btn">
										<button type="button" class="btn btn-primary">标题</button>
									</div><!-- /btn-group -->
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="input-group">
									<div class="input-group-btn">
										<button type="button" class="btn btn-primary">分类</button>
									</div><!-- /btn-group -->
									<input type="text" class="form-control">
								</div>
							</div>
						</div><br>
						<div class="form-group">
	                    	<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
	                    </div>
					</div>

					<div class="tab-pane" id="tab_2">
						seo
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="box-footer">
		<button type="submit" class="btn btn-primary">发布文章</button>
	</div>
</div>
@endsection