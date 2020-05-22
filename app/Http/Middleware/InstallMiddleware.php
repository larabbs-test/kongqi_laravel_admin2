<?php

namespace App\Http\Middleware;

use Closure;

class InstallMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断是否安装了
        $install_file=linux_path(storage_path()).'/install';
        if(!file_exists($install_file))
        {
            //跳转到安装
            return redirect()->route('system.install');
        }

        return $next($request);
    }
}
