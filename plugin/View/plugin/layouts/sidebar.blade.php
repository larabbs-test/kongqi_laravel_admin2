<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion  " id="adminMenu">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="javascript:;">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-envira"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ lang('管理后台') }} <sup>2.0</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Divider -->
    <hr class="sidebar-divider">

    @php
        $menu=admin_menu();

    @endphp
    @if(!empty($menu))
        @foreach($menu as $k=>$v)
            @if($v['menu_show'])
                @if(isset($v['_child']) && !empty($v['_child']) && array_sum(array_column($v['_child'],'menu_show'))>0 )
                    {{--检验是否有任意一个子权限--}}
                    @if(acan_anys(array_column($v['_child'],'name')))
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                               data-target="#menu{{ $v['id'] }}">
                                <i class="fas {{ $v['icon'] }}"></i>
                                <span>{{ lang($v['menu_name']) }}</span>
                            </a>


                            <div id="menu{{ $v['id'] }}" class="collapse" data-parent="#adminMenu">
                                <div class="bg-white py-2 collapse-inner rounded">

                                    @foreach($v['_child'] as $k2=>$v2)
                                        @if(acan($v2['name']))
                                            @if($v2['menu_show'])
                                                <a class="collapse-item" href="javascript:void(0);"
                                                   data-href="{{ nroute($v2['name']) }}">{{ lang($v2['cn_name']) }}</a>
                                            @endif
                                        @endif
                                    @endforeach


                                </div>

                            </div>

                        </li>
                    @endif
                @else
                    @if(!empty($v['name']) && acan($v['name']) )
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);"
                               data-href="{{ $v['name']?nroute($v['name']):'' }}">
                                <i class="{{ $v['icon'] }}"></i>
                                <span>{{ lang($v['menu_name']) }}</span>
                            </a>
                        </li>
                @endif
            @endif
        @endif
    @endforeach
@endif
<!-- Nav Item - Pages Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->