<?php
// +----------------------------------------------------------------------
// | KQAdmin [ 基于Laravel后台快速开发后台 ]
// | 快速laravel后台管理系统，集成了，图片上传，多图上传，批量Excel导入，批量插入，修改，添加，搜索，权限管理RBAC,验证码，助你开发快人一步。
// +----------------------------------------------------------------------
// | Copyright (c) 2012~2019 www.haoxuekeji.cn All rights reserved.
// +----------------------------------------------------------------------
// | Laravel 原创视频教程，文档教程请关注 www.heibaiketang.com
// +----------------------------------------------------------------------
// | Author: kongqi <531833998@qq.com>`
// +----------------------------------------------------------------------

namespace App\Http\Controllers\Install;

use App\Http\Controllers\Controller;
use App\TraitClass\BladeTrait;
use App\TraitClass\RouteTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function __construct()
    {
        //设置模块
        $this->module = 'Install';
        //路由注入
        $this->routeInfo();
        //设置自动定位模板
        $this->setAutoBlade();
        //去掉控制器模板命名
        $this->setControllerViewPath('');

    }

    use RouteTrait, BladeTrait;

    public function index(Request $request)
    {

        $installFile = linux_path(storage_path()) . '/install';




        $step = $request->input('step', '1');
        if($step!=6){
            if (file_exists($installFile)) {
                return $this->bladeError(lang('已安装'),'419');
            }
        }
        if ($step) {
            //去掉控制器模板命名

            if (in_array($step, [2,3,4,5, 6])) {
                $this->setViewPath('step' . $step);
                $method = 'step' . $step;
                $this->$method();
            }

            if ($step == 3) {
                //判断环境是否有错误，如果有则返回第二步
                if (session('install_error')) {
                    return back()->with('message', lang('系统检验环境不通过'));
                }

            }
            if ($step == 4) {
                return $this->step4();
            }
            if ($step == 5) {
                return $this->step5();
            }

        }
        return $this->display(['index' => $step-1 ]);

    }
    //环境监测
    public function step2()
    {
        $this->shareData(['check_path' => $this->checkDirFile(), 'check_env' => $this->checkEnv(), 'ext' => $this->checkFuncExt()]);
    }

    public function step3(){

    }

    public function step4()
    {
        //判断数据库连接是否成功
        $env_file = linux_path(base_path()) . '/.env';
        $request = request();
        $post_data = $request->all();
        $env = $this->createEnv($post_data['DB'], $post_data['REDIS'], 0);
        file_put_contents($env_file, $env);
        //跳转到第5步
        return redirect()->route('system.install', ['step' => 5]);

    }
    public function createEnv($db, $redis, $debug = 0, $app_key = "")
    {
        $is_debug = $debug;
        $app_key = $app_key ?: "base64:ljvsTcky80ddzLSX3fMjx87RngvRo2upk5d9wNTUYk8=";
        $db_host = $db['DB_HOST'];
        $db_name = $db['DB_DATABASE'];
        $db_prot = $db['DB_PORT'];
        $db_user = $db['DB_USERNAME'];
        $db_password = $db['DB_PASSWORD'];
        $db_prefix = $db['DB_PREFIX'];
        $db_type = $db['DB_CONNECTION'];
        $redis_host = $redis['REDIS_HOST'];
        $redis_prot = $redis['REDIS_PORT'] ?: null;
        $redis_pwd = $redis['REDIS_PASSWORD'] ?: 6379;
        $redis_prefix="laravel";
        $kongqi_key = base64_encode(json_encode(['host' => \request()->server('SERVER_NAME'), 'ip' => \request()->server('SERVER_ADDR'), 'port' => $_SERVER['SERVER_PORT']]));

        $env = <<<EOT
APP_NAME=Laravel
APP_ENV=local
APP_KEY=$app_key
APP_DEBUG=$is_debug
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=$db_type
DB_HOST=$db_host
DB_PORT=$db_prot
DB_DATABASE=$db_name
DB_USERNAME=$db_user
DB_PASSWORD=$db_password
DB_PREFIX=$db_prefix
#严格模式取消
DB_STRICT=false
BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=$redis_host
REDIS_PASSWORD=$redis_prot
REDIS_PORT=$redis_pwd
REDIS_PREFIX=$redis_prefix
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

#配置后台地址
ADMIN_URL=null
#资源文件是否增加http域名前缀
RES_HTTP_URL=null

#上传设置
# 上传目录
UPLOAD_DIR=/upload
# 最大上传大小,单位M
UPLOAD_MAX_SIZE=50

# 上传文件系统驱动，filesystems
FILESYSTEM_DRIVER=local

# 系统语言
LANG=cn

KONGQI_SERVER=$kongqi_key
DEBUGBAR_ENABLED=false


EOT;
        return $env;
    }

    public function step5()
    {
        //检验数据库
        try {
            $bd_has = DB::select(DB::raw('SHOW DATABASES LIKE "' . env('DB_DATABASE') . '"'));
            if (empty($bd_has)) {
                return back()->with('message', lang('数据库不存在'));
            }
        } catch (\Exception $exception) {
            return back()->with('message', lang('数据库配置错误，请重写') . $exception->getMessage());
        }


        //判断环境是否有错误，如果有则返回第二步
        //20分钟
        ini_set('max_execution_time', 60 * 20);

        //执行数据库迁移
        Artisan::call('migrate');
        //填充数据
        Artisan::call('db:seed');
        //重新生成app key
        Artisan::call('key:generate');
        //写入安装文件
        file_put_contents(linux_path(storage_path()) . '/install', date('Y-m-d H:i:s') . ' install');
        return redirect()->route('system.install', ['step' =>6]);
    }
    public function step6()
    {

    }
    /**
     * 目录，文件读写检测
     * @return array 检测数据
     * @author jry <598821125@qq.com>
     */
    protected function checkDirFile()
    {
        $items = [
            '0' => [
                'type' => 'dir',
                'path' => storage_path(),
                'title' => lang('可写'),
                'icon' => 'fas fa fa-check',
            ],

            '1' => [
                'type' => 'dir',
                'path' => base_path() . '/.env',
                'title' => lang('可写'),
                'icon' => 'fas fa fa-check',
            ]

        ];

        foreach ($items as &$val) {
            $path = $val['path'];
            if ('dir' === $val['type']) {
                if (!is_writable($path)) {
                    if (is_dir($path)) {
                        $val['title'] = lang('不可写');
                        $val['icon'] = 'fas fa fa-close text-danger';
                        session(['install_error'=> true]);
                    } else {
                        $val['title'] = lang('不存在');
                        $val['icon'] = 'fas fa fa-close text-danger';
                        session(['install_error'=> true]);
                    }
                }
            } else {
                if (file_exists($path)) {
                    if (!is_writable($path)) {
                        $val['title'] = lang('不可写');
                        $val['icon'] = 'fas fa fa-close text-danger';
                        session(['install_error'=> true]);
                    }
                } else {
                    if (!is_writable(dirname($path))) {
                        $val['title'] = lang('不存在');
                        $val['icon'] = 'fas fa fa-close text-danger';
                        session(['install_error'=> true]);
                    }
                }
            }
        }
        session(['install_error'=>false]);;
        return $items;
    }

    /**
     * 检查环境
     * @return array
     */
    function checkEnv()
    {
        $items = [
            'os' => [
                'title' => lang('操作系统'),
                'limit' => lang('不限制'),
                'current' => PHP_OS,
                'icon' => 'fas fa fa-check text-success',
            ],
            'php' => [
                'title' =>lang('PHP版本'),
                'limit' => '7.2.0+',
                'current' => PHP_VERSION,
                'icon' => 'fas fa fa-check text-success',
            ],
            'upload' => [
                'title' => lang('附件上传'),
                'limit' => lang('不限制'),
                'current' => ini_get('file_uploads') ? ini_get('upload_max_filesize') : lang('未知'),
                'icon' => 'fas fa fa-check text-success',
            ],
            'gd' => [
                'title' => lang('GD库'),
                'limit' => '2.0+',
                'current' => lang('未知'),
                'icon' => 'fas fa fa-check text-success',
            ],
            'disk' => [
                'title' => lang('磁盘空间'),
                'limit' => '100M+',
                'current' => lang('未知'),
                'icon' => 'fas fa fa-check text-success',
            ],
        ];

        //PHP环境检测
        if ($items['php']['current'] < 7.2) {
            $items['php']['icon'] = 'fas fa fa-close text-danger';
            session(['install_error'=>'error']);
        }

        //GD库检测
        $tmp = function_exists('gd_info') ? gd_info() : [];
        if (!$tmp['GD Version']) {
            $items['gd']['current'] = lang('未安装');
            $items['gd']['icon'] = 'fas fa fa-close text-danger';
            session(['install_error'=>'error']);;
        } else {
            $items['gd']['current'] = $tmp['GD Version'];
        }
        unset($tmp);

        //磁盘空间检测
        if (function_exists('disk_free_space')) {
            $disk_size = floor(disk_free_space('./') / (1024 * 1024 )) . 'MB';
            $items['disk']['current'] = $disk_size . '';
            if ($disk_size < 100) {
                $items['disk']['icon'] = 'fas fa fa-close text-danger';
                session(['install_error'=>'error']);;
            }
        }
        session(['install_error'=>false]);;
        return $items;
    }

    /**
     * 函数检测
     * @return array 检测数据
     */
    function checkFuncExt()
    {
        $items = [
             [
                'type' => 'ext',
                'name' => 'pdo',
                'title' => lang('支持'),
                'current' => extension_loaded('pdo'),
                'icon' => 'fas fa fa-check text-success',
            ],
           [
                'type' => 'ext',
                'name' => 'pdo_mysql',
                'title' => lang('支持'),
                'current' => extension_loaded('pdo_mysql'),
                'icon' => 'fas fa fa-check text-success',
            ],
           [
                'type' => 'func',
                'name' => 'file_get_contents',
                'title' => lang('支持'),
                'icon' => 'fas fa fa-check text-success',
            ],
           [
                'type' => 'func',
                'name' => 'mb_strlen',
                'title' => lang('支持'),
                'icon' => 'fas fa fa-check text-success',
            ],
           [
                'type' => 'func',
                'name' => 'putenv',
                'title' => lang('支持'),
                'icon' => 'fas fa fa-check text-success',
            ],


           [
                'type' => 'func',
                'name' => 'proc_open',
                'title' => lang('支持'),
                'icon' => 'fas fa fa-check text-success',
            ],


        ];
        //如果是Linux下，还需要检查 pcntl_alarm，pcntl_signal，pcntl_signal_dispatch
        if(PHP_OS!="WINNT"){
            $items[]=  [
                'type' => 'func',
                'name' => 'pcntl_signal_dispatch',
                'title' => lang('支持'),
                'icon' => 'fas fa fa-check text-success',
            ];
            $items[]=   [
                'type' => 'func',
                'name' => 'pcntl_signal',
                'title' => lang('支持'),
                'icon' => 'fas fa fa-check text-success',
            ];
            $items[]=   [
                'type' => 'func',
                'name' => 'pcntl_alarm',
                'title' => lang('支持'),
                'icon' => 'fas fa fa-check text-success',
            ];
        }
        foreach ($items as &$val) {
            switch ($val['type']) {
                case 'ext':
                    if (!$val['current']) {
                        $val['title'] = lang('不支持');
                        $val['icon'] = 'fas fa fa-close text-danger';
                        session(['install_error'=>'error']);;
                    }
                    break;
                case 'func':
                    if (!function_exists($val['name'])) {
                        $val['title'] = lang('不支持');
                        $val['icon'] = 'fas fa fa-close text-danger';
                        session(['install_error'=>'error']);;
                    }
                    break;
            }
        }
        session(['install_error'=>false]);;
        return $items;
    }
}
