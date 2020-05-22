@extends('admin.default.layouts.baseCont')
@section('content')
    <form class="layui-form ui-form">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="">{{ lang('上级') }}</label><strong class="text-danger">*</strong>
            <select name="parent_id" class="form-control" lay-ignore="">
                <option value="0">{{ lang('根级') }}</option>
                @if(!empty($permissions))
                    @foreach($permissions as $perm)
                        <option value="{{$perm['id']}}" {{ isset($show->id) && $perm['id'] == $show->parent_id ? 'selected' : '' }} >{{$perm['cn_name']}}</option>
                        @if(isset($perm['_child']))
                            @foreach($perm['_child'] as $childs)
                                <option value="{{$childs['id']}}" {{ isset($show->id) && $childs['id'] == $show->parent_id ? 'selected' : '' }} >
                                    ┗━━{{$childs['cn_name']}}</option>
                                @if(isset($childs['_child']))
                                    @foreach($childs['_child'] as $lastChilds)
                                        <option value="{{$lastChilds['id']}}" {{ isset($show->id) && $lastChilds['id'] == $show->parent_id ? 'selected' : '' }} >
                                            ┗━━━━{{$lastChilds['cn_name']}}</option>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endif
            </select>

        </div>
        {!! $form_tpl !!}

    </form>
@endsection
@section('foot_js')


@endsection