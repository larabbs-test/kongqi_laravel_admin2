<div class="topbar shadow">
    <nav class="navbar navbar-expand navbar-light bg-white static-top ">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link ml-3 rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->
            {{-- <li class="nav-item dropdown no-arrow mx-1">

                 <a class="nav-link dropdown-toggle" href="javascript:;" href="#" id="alertsDropdown"
                    role="button"
                    aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-bell fa-fw"></i>
                     <!-- Counter - Alerts -->

                 </a>

             </li>
 --}}

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="javascript:;" id="userDropdown"
                   role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ admin('nickname') }}</span>

                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                     aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-href="{{ nroute('admin.clear') }}">
                        <i class="fas fa fa-eraser fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{ lang('清除缓存') }}
                    </a>
                    <a class="dropdown-item" href="#" ui-event="openIframePost"
                       data-title="{{ lang('修改密码') }}"
                       data-w="400px" data-h="300px"
                       data-url="{{ nroute('admin.admin.password') }}"
                       data-post_url="{{ nroute('admin.admin.password_post') }}">
                        <i class="fas fa fa-pencil-square fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{ lang('修改密码') }}
                    </a>
                    <a class="dropdown-item" data-href="{{ nroute('admin.log.index') }}" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{ lang('日志') }}
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ nroute('admin.logout') }}">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{ lang('退出') }}
                    </a>
                </div>
            </li>

        </ul>


    </nav>

    <!-- 增加tab标签-->
    <div class="admin-page-tabs " id="LAY_app_tabs">
        <div class="layui-icon admin-tabs-control layui-icon-prev" tabpage-event="leftPage"></div>
        <div class="layui-icon admin-tabs-control layui-icon-next" tabpage-event="rightPage"></div>


        <div class="layui-icon admin-tabs-control layui-icon-down">

            <ul class="layui-nav admin-tabs-select" lay-filter="">

                <li class="layui-nav-item">


                    <a href="javascript:;" href="javascript:;"><span class="layui-nav-more"></span></a>


                    <dl class="layui-nav-child dropdown-menu">
                        <dd tabpage-event="closeThis"><a class="dropdown-item" href="javascript:;"
                            >{{ lang('关闭当前标签页') }}</a>
                        </dd>
                        <dd tabpage-event="closeOther"><a class="dropdown-item" href="javascript:;"
                            >{{ lang('关闭其它标签页') }}</a></dd>
                        <dd tabpage-event="closeAllTabs"><a class="dropdown-item" href="javascript:;"
                            >{{ lang('关闭全部标签页') }}</a></dd>
                    </dl>
                </li>

            </ul>
        </div>

        <div class="layui-tab" lay-unauto="" lay-allowclose="true" lay-filter="admin-layout-tabs">
            <ul class="layui-tab-title" id="admin-app-tab-header">

                <li lay-id="{{ nroute('admin.home') }}" lay-attr="{{ nroute('admin.home') }}" class=""><i
                            class="layui-icon layui-icon-home"></i><i
                            class="layui-icon layui-unselect layui-tab-close"></i></li>

            </ul>
        </div>
    </div>
</div>

