<div class="card shadow mb-2 ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
         data-target="#collapseSearch" data-placement="top" data-tips="tooltip" title="{{ lang('点击可折叠') }}"
         data-toggle="collapse">
        <h6 class="m-0  f14">{{ lang('搜索') }}</h6>

    </div>

    <div class="collapse fade show" id="collapseSearch">
        <div class="mt-3 mr-3 ml-3 mb-2 ">
            <div class="layui-form layui-form-pane form-inline">
                {!! ($search_form_tpl??'') !!}
                <div class="form-group mb-2">
                    <button class="btn btn-success" type="button" lay-submit lay-filter="LAY-list-search"><i
                                class="fa fa-search"></i> {{ lang('搜索') }}
                    </button>
                </div>

            </div>
        </div>
    </div>

</div>