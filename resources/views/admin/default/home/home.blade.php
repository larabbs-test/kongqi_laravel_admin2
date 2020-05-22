@extends('admin.default.layouts.baseCont')
@section('content')
    <div class="container-fluid">

        <div class="card shadow h-100 ">
            <div class="card-header">{{ lang('版本信息') }}</div>
            <div class="card-body layui-text">
                <div class="table-responsive">
                    <table class="table table-bordered">

                        <tbody>
                        <tr>
                            <td>
                                {{ lang("系统名称") }}
                            </td>
                            <td>
                                {{ config('copyright.system_name') }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ lang("主题") }}</td>
                            <td>Bootstrap 4 SB Admin 2</td>
                        </tr>
                        <tr>
                            <td>{{ lang("当前版本") }}</td>
                            <td>
                                {{ config('copyright.system_version') }}
                                <a href="//{{ config('copyright.domain') }}" target="_blank"
                                   style="padding-left: 15px;">{{ lang("文档手册") }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ lang("基于框架") }}</td>
                            <td>
                                PHP + Laravel {{ app()->version() }}

                            </td>
                        </tr>
                        <tr>
                            <td>{{ lang("主要特色") }}</td>
                            <td>{{ config('copyright.feature') }}</td>
                        </tr>
                        <tr>
                            <td>{{ lang("许可") }}</td>
                            <td style="padding-bottom: 0;">

                                {{ lang('准许MIT协议，允许你重新修改和包装，但需要保留版权信息') }}

                            </td>
                        </tr>
                        <tr>
                            <td>{{ lang("作者") }}</td>
                            <td style="padding-bottom: 0;">
                                {{ config('copyright.author') }}

                            </td>
                        </tr>
                        <tr>
                            <td>{{ lang("联系我") }}</td>
                            <td style="padding-bottom: 0;">
                                <p>QQ: {{ config('copyright.qq') }}</p>
                                <p>Email: {{ config('copyright.qq') }}@qq.com</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection