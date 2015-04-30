@extends('admin.layouts.default')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">添加分类名称</h3>
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
                    <li class="active"><a href="#tab_1" data-toggle="tab">分类名称</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-primary">名称</button>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-primary">父级</button>
                            </div>
                            <select name="" id="" class="form-control">
                                <option value="">最上级</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="分类名称备注 ..."></textarea>
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
        <button type="submit" class="btn btn-primary">保存分类名称</button>
    </div>
</div>
@endsection