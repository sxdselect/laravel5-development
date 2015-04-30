<aside class="main-sidebar">
	<section class="sidebar">
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
				<span class="input-group-btn">
					<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>

		<ul class="sidebar-menu">
			<li class="header">菜单导航</li>
			<li><a href="{!! route('dashboard') !!}"><i class="fa fa-book"></i> 控制面板</a></li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-files-o"></i>
					<span>内容管理</span>
					<span class="label label-primary pull-right">4</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{!! route('administrator.article.index') !!}">
							<i class="fa fa-file-o"></i> 文章管理
						</a>
					</li>
					<li>
						<a href="{!! route('administrator.categories.index') !!}">
							<i class="fa fa-sitemap"></i> 分类管理
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="fa fa-link"></i> <span>友情链接</span> 
					<small class="label pull-right bg-green">Hot</small>
				</a>
			</li>            
			<li class="treeview">
				<a href="#">
					<i class="fa fa-coffee"></i>
					<span>业务管理</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href=""><i class="fa fa-envelope-o"></i> 信息</a></li>
					<li><a href=""><i class="fa fa-bell-o"></i> 通知</a></li>
					<li><a href="inline.html"><i class="fa fa-flag-o"></i> 任务</a></li>
				</ul>
			</li>            
			<li class="treeview">
				<a href="#">
					<i class="fa fa-user"></i>
					<span>用户管理</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href=""><i class="fa fa-circle-o"></i> 用户管理</a></li>
					<li><a href=""><i class="fa fa-circle-o"></i> 用户组管理</a></li>
					<li><a href=""><i class="fa fa-circle-o"></i> 角色管理</a></li>
					<li><a href=""><i class="fa fa-circle-o"></i> 权限管理</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-cog"></i> <span>系统管理</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href=""><i class="fa fa-square-o"></i> 个人信息</a></li>
					<li><a href=""><i class="fa fa-square-o"></i> 系统设置</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-book"></i> 
					<span>Documentation</span> 
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="http://laravel-china.org/docs/5.0/" target="_blank">
							<i class="fa fa-book"></i> Laravel 5
						</a>
					</li>
					<li>
						<a href="http://jquery.com" target="_blank">
							<i class="fa fa-book"></i> jQuery 
						</a>
					</li>
					<li>
						<a href="http://v3.bootcss.com/" target="_blank">
							<i class="fa fa-book"></i> BootStarp 3 
						</a>
					</li>
					<li>
						<a href="http://fontawesome.io/examples/" target="_blank">
							<i class="fa fa-book"></i> Font Awesome 4.x 
						</a>
					</li>
					<li>
						<a href="http://www.my97.net/" target="_blank">
							<i class="fa fa-book"></i> My97DatePicker
						</a>
					</li>
					<li>
						<a href="https://almsaeedstudio.com/" target="_blank">
							<i class="fa fa-book"></i> AdminLTE
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
