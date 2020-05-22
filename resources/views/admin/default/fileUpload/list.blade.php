@extends('admin.default.layouts.baseCont')
@section('content')
    <div class="container-fluid">
        <div class="search-area  d-flex align-items-center">

            <form class="flex-grow-1 mb-2 f14" action="{{ admin_url('FileUpload','handle',['type'=>'list']) }}">
                @if(!empty(request()->all()))
                    @foreach(request()->all() as $k=>$v)
                        @if($k!='key')
                        <input type="hidden" name="{{ $k }}" value="{{ $v }}">
                        @endif
                    @endforeach
                @endif
                <div class="input-group">
                    <input type="text" name="key" class="form-control f14" placeholder="{{ lang('搜索图片名称') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary f14" type="submit">
                            <i class="fas fa-search fa-sm "></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="ml-md-3 mb-2">
                <button class="btn btn-primary ml-2 ml-2 f14"
                        data-target="#placeArea" data-group_id="{{ request()->input('group_id') }}" data-more="1"
                        data-event="placeUpload"
                        data-accept_type="{{ request()->input('accept_type','file') }}"
                        data-file_type="{{ request()->input('file_type','file') }}">
                    <i class="fas fa-upload fa-fw"></i> {{ lang('点击上传') }}
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4">

                <div class="navbar-expand-sm">
                    <button class="navbar-toggler f14 mt-2 mb-2" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo02">
                        <i class="fa fa-list-ul"></i> {{ lang('查看分组') }}
                    </button>


                    <div class="collapse navbar-collapse flex-wrap" id="navbarTogglerDemo02">
                        <form action="" class="layui-form mb-2 w-100">
                            <div class="input-group">
                                <input type="text" name="name" class="form-control" lay-verify="rq"
                                       placeholder="{{ lang('新增分组名称') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" lay-submit lay-filter="addGroup" type="button">
                                        <i class=" fa fas fa-edit"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="list-group w-100 mb-2 " id="listGroup" style="max-height: 340px;overflow-y: scroll">
                            <a class="list-group-item list-group-item-action {{ empty(request()->input('group_id'))?'active':'' }}"
                               href="{{ admin_url('FileUpload','handle',array_merge(request()->all(),['type'=>'list','group_id'=>0])) }}">{{ lang('全部') }}</a>
                            @if(!empty($groups))
                                @foreach($groups as $k=>$v)
                                    <a class="list-group-item list-group-item-action {{ $v['id']==request()->input('group_id')?'active':'' }}"
                                       href="{{ admin_url('FileUpload','handle',array_merge(request()->all(),['type'=>'list','group_id'=>$v['id']])) }}">{{ lang($v['name']) }}</a>
                                @endforeach
                            @endif


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8" id="placeArea">
                <div class="row upload-area-list">


                </div>
                <div class="w-100" id="page"></div>
            </div>

        </div>
    </div>
@endsection
@section('foot_js')
    <script>
        layui.use(['uploader', 'verify', 'uform', 'request', 'listTable'], function () {
            var up = layui.uploader;
            var form = layui.uform;
            var req = layui.request;
            var verify = layui.verify;
            var listTable = layui.listTable;
            up.placeUpload('[data-event="placeUpload"]');
            var uploadListUrl = "{!!  admin_url('FileUpload','handle',array_merge(request()->all(),['type'=>'api']))  !!}";
            var onUrl = "{!! request()->getUri()  !!}";
            var isMore = "{{ request()->input('is_more') }}";



            //取得列表
            listTable.custom(".upload-area-list", uploadListUrl);


            //添加分组
            form.on('submit(addGroup)', function (data) {
                req.post('{{ route('admin.upload',['type'=>'addGroup']) }}', data.field, function (res) {
                    var goUrl = '';
                    goUrl = onUrl.replace(/\?group_id\=\d/g, '');
                    goUrl = goUrl.replace(/\?group_id\=\d\&/g, '?');
                    goUrl = goUrl.replace(/\&group_id\=\d/g, '');
                    if (goUrl.indexOf("?") == -1) {
                        goUrl += '?group_id=' + res.data.id;
                    } else {
                        goUrl += '&group_id=' + res.data.id;
                    }
                    if (res.code == 200) {
                        $("#listGroup").append('<a  href="' + goUrl + '" class="list-group-item list-group-item-action" >' + res.data.name + '</a>');
                    }
                })
                return false;

            });

            var picIndex = 1;
            $(document).on('click', '.upload-area-more-item', function () {

                if(isMore==1){
                    $(this).toggleClass('active');
                    $(this).find('.card').toggleClass('border-primary ');
                    if ($(this).hasClass('active')) {
                        $(this).attr('data-index', picIndex);
                        picIndex++;
                    } else {
                        picIndex--
                    }
                }else{
                    $(".upload-area-more-item .card").removeClass('border-primary');
                    $(".upload-area-more-item ").removeClass('active');
                    $(this).toggleClass('active');
                    $(this).find('.card').toggleClass('border-primary ');
                }

            })


        });



     /*   $(".getImg").click(function () {
            var img = [];
            $(".upload-area-more-item.active").each(function () {
                var json = {
                    index: $(this).data('index'),
                    img: $(this).find('img').attr('src'),
                    text: $(this).find('.card-title').text()
                };
                img.push(json);
            });
            img.sort(function (x, y) {
                return x.index - y.index
            });
            console.log(img);
        })*/
    </script>

@endsection