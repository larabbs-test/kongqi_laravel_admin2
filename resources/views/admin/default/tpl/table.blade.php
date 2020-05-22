@if(isset($form_search_self) && $form_search_self==1)

    @include($origin_current_base_blade_path.'form')
@elseif($origin_current_base_blade_path==$current_base_blade_path && view()->exists($current_base_blade_path.'form'))
    @include($current_base_blade_path.'form')
@elseif($origin_current_base_blade_path==$current_base_blade_path)
    @include($base_blade_path.'.commonCurl.form')
@else
    @include($current_base_blade_path.'form')
@endif
@include('admin.default.tpl.indexTips')
<div class="card shadow h-100 ">
    <div class="card-header">{{ lang($page_name) }} {{ lang('列表') }}</div>

    <div class="card-body layui-text p-0">
        <table id="LAY-list-table" class="hide" style="display: none" lay-filter="LAY-list-table"></table>
    </div>

</div>