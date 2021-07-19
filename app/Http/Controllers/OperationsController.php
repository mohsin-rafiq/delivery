<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Str;

class OperationsController extends Controller
{
    public function index() {

        $agent = new Agent();
        // echo $agent->is('Windows');
        // echo $agent->is('Linux');
        // echo $agent->is('Firefox');
        // echo $agent->is('iPhone');
        // echo $agent->is('OS X');

        // echo $agent->isMobile();
        // $agent->isTablet();

        // echo $device = $agent->device();
        // echo $platform = $agent->platform();
        // echo $browser = $agent->browser();
        // echo $agent->isDesktop();
        // echo $agent->isPhone();
        // echo $agent->isRobot();

        echo $browser = $agent->browser();
        echo $version = $agent->version($browser);
        
        echo $platform = $agent->platform();
        echo $version = $agent->version($platform);

        // echo "<pre>";
        // print_r($agent);
        // echo "</pre>";

        // return DB::table('members')->get();

        //return DB::table('members')
        //->where('id', 4)
        //->get();

        //return (array)DB::table('members')->find(4);

        //return DB::table('members')->count();

        //return DB::table('members')
        //->insert([
        //    'full_name' => 'Jack Hager',
        //    'email_address' => 'jack.hager@hotmail.com'
        //]);

        //return DB::table('members')
        //->where('id', 6)
        //->update([
        //    'full_name' => 'Jack Hager',
        //    'email_address' => 'jack.hager@gmail.com'
        //]);
    }
}
