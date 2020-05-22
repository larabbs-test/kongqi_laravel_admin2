@extends('admin.default.layouts.baseCont')
@section('content')
    <form class="layui-form ui-form">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        {!! $form_tpl !!}
    </form>

@endsection
@section('foot_js')
    {{-- //监听页面是否有编辑器加载--}}
    @include('admin.default.tpl.listenEditorCreate')

@endsection