@extends('admin.default.layouts.baseCont')
@section('content')

    <form class="layui-form ui-form">
        <div class="form-group">
            <label for="">{{ lang('上级') }}</label><strong class="text-danger">*</strong>
            <select name="parent_id" class="form-control" lay-ignore="">
                <option value="0">{{ lang('根级') }}</option>
                @if(!empty($permissions))
                    @foreach($permissions as $perm)
                        <option value="{{$perm['id']}}" {{ isset($permission->id) && $perm['id'] == $permission->parent_id ? 'selected' : '' }} >{{lang($perm['cn_name'])}}</option>
                        @if(isset($perm['_child']))
                            @foreach($perm['_child'] as $childs)
                                <option value="{{$childs['id']}}" {{ isset($permission->id) && $childs['id'] == $permission->parent_id ? 'selected' : '' }} >
                                    ┗━━{{lang($childs['cn_name'])}}</option>
                                @if(isset($childs['_child']))
                                    @foreach($childs['_child'] as $lastChilds)
                                        <option value="{{$lastChilds['id']}}" {{ isset($permission->id) && $lastChilds['id'] == $permission->parent_id ? 'selected' : '' }} >
                                            ┗━━━━{{lang($lastChilds['cn_name'])}}</option>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endif
            </select>
        </div>
        {!! $form_tpl !!}
        {!! $uiService->createOneFormInput('batch_show','包含批量操作吗','','radio',['data'=>$uiService->trueFalseData()]) !!}

    </form>

@endsection
@section('foot_js')


@endsection