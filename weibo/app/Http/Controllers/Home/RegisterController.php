<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\model\user;
use App\model\detail;
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
       $res =  user::where('phone','=',$phone)->first();

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
       }

    }


    public function postRegister(request $request)
    {


       $data = $request->except('_token','code');
       $code1 =  $request->session()->get('code');
       $phone = $data['phone'];
       $code = $request->only('code');

        if($code1 == $code['code']){

            $res = user::insert($data);

            $res1 = user::where('phone','=',$phone)->first();

            $nick = '游客'.time();

            $arr = ['uid'=>$res1['id'],'nickname'=>$nick,'registertime'=>time()];

            $res3 = detail::insert($arr);

        }else{
            echo '2';
            die;
        }

       if($res && $res3){
           echo '1';
       }else{
           echo '0';
       }

    }


    public function getPhone(request $request)
    {
        $phone = $request->input('phone');

        //判断数据库中是否存在该phone
        $res =  user::where('phone','=',$phone)->first();

        if($res == null) {
            echo '0';
        }else{
            echo '1';
        }

    }
}
