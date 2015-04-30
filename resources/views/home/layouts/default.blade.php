<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>机器人</title>

    {!! Html::style('plug-in/bootstrap/css/bootstrap.min.css') !!}
    @yield('style')
    {!! Html::style('assets/css/default.css') !!}
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">项目</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="tester">首页</a></li>
                    <li><a href="setting">关于我们</a></li>
                    <li><a href="tools">产品目录</a></li>
                    <li><a href="tools">新闻列表</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-container" id="main-container">
        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
    </div>

    {!! Html::script('/plug-in/jquery/jquery-1.11.1.min.js') !!}
    {!! Html::script('/plug-in/jquery/bootstrap.min.js') !!}
    @yield('script')
</body>
</html>