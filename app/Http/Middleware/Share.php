<?php

namespace App\Http\Middleware;
use App\Setting;
use Closure;
use Illuminate\Support\Facades\View;
class Share
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
        $data['settings']=Setting::all()->where('settings_status','1');
        foreach($data['settings'] as $key){
            $settings[$key->settings_name]=$key->settings_content;
        }
        View::share($settings);
        //dd($settings);
        return $next($request);
    }
}
