@extends('plugin.layouts.baseCont')
@section('content')

    <form class="layui-form ui-form">
        {!! $form_tpl !!}


    </form>

@endsection
@section('foot_js')
    {{-- //监听页面是否有编辑器加载--}}
    @include('admin.default.tpl.listenEditorCreate')

@endsection