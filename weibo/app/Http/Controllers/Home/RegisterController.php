<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\model\users;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('/home/register/register');
    }

    public function getCode(request $request)
    {
        $phone = $request->input('phone');

        //判断数据库中是否存在该phone
       $res =  users::where('username','=',$phone)->find(1);

       if($res){
           echo '0';
       }else{
           $config = [
               'accessKeyId'    => 'LTAISVgfSkz22cc5',
               'accessKeySecret' => 'cEWOlXuYOQd1KxI9gUwNYXBj6bkcq2',
           ];

           $client  = new Client($config);
           $sendSms = new SendSms;
           $sendSms->setPhoneNumbers($phone);
           $sendSms->setSignName('陈明');
           $sendSms->setTemplateCode('SMS_120365843');
           $num = rand(100000, 999999);
           $sendSms->setTemplateParam(['num' => $num]);
           $sendSms->setOutId('demo');

           $request->session()->put('code', $num);
           dump($client->execute($sendSms));
        echo '1';
       }

    }

    //删除key
//Session::forget('key');

    public function postRegister(request $request)
    {


       $data = $request->except('_token','code');
       $code1 =  $request->session()->get('key');

       $code = $request->only('code');

        if($code1 == $code['code']){
            $res = users::insert($data);
        }else{
            echo '2';
        }

       if($res){
           echo '1';
       }else{
           echo '0';
       }

    }


    public function getPhone(request $request)
    {
        $phone = $request->input('phone');

        //判断数据库中是否存在该phone
        $res =  users::where('username','=',$phone)->find(1);
        if($res != null) {
            echo '0';
        }else{
            echo '1';
        }
    }
}
