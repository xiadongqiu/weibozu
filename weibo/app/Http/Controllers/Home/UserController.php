<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\detail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\JsonResponse;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static $i=0;
    public function getIndex(request $request)
    {
        $uid = $request->session()->get('home');
        $status = $request->only('status');
        $res = user::find($uid);
        $arr = (explode(':',$res->detail->adress));
        $array = json_decode($res->detail->pics,true);
        $array1 = array_values($array);
        return view('home/user/user',['res'=>$res,'adress'=>$arr,'status'=>$status,'pic'=>$array1]);

    }

    public function postEdit(request $request)
    {
        $form = $request->all();


        $id = $request->session()->get('home');

        $res = detail::where('id',$id)->update($form);

        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function postPhoto(request $request)
    {
        $pic = $request->file('avatar_file');
        $id = $request->session()->get('home');
        $disk = \Storage::disk('qiniu');
        $pat = $pic->getClientOriginalExtension();
        $fileName = md5(date('YmdHis',time())).'.'.$pat;
        $path = $pic->getRealPath();
        $disk -> put($fileName,fopen($path,'r+'));
        $filepath =  $disk->getDriver()->downloadUrl($fileName);
        $arr = ['portrait'=>$fileName];
        detail::where('id',$id)->update($arr);
        return Response()->json([
            'filename' => $fileName,
            'result' => $filepath,
            'message' => ''
        ]);


    }

    public function getUploade()
    {
        return view('home/user/uploade');
    }

    public function postShang(request $request)
    {

        $file =  input::file('file');

        $id = $request->session()->get('home');

        $disk = \Storage::disk('qiniu');

        $pat = $file->getClientOriginalExtension();
        $fileName = md5(rand(00000000,99999999)).'.'.$pat;
        $path = $file->getRealPath();

        $disk -> put($fileName,fopen($path,'r+'));
        $res = detail::find($id);
        if($res->pics == '0'){
            echo 1;
            $arr = array();
            $arr[rand(00,1000).time()] = $fileName;
            $json = json_encode($arr);
            $array['pics'] = $json;
            detail::where('id',$id)->update($array);
        }else{

            $pics = $res->pics;
            $arr = json_decode($pics,true);
            $arr[rand(00,1000).time()] = $fileName;
            $json = json_encode($arr);
            $array['pics'] = $json;
            detail::where('id',$id)->update($array);

        }
    }

    public function postDelpic(request $request)
    {
        $name = $request->only('pic');
        $id = $request->session()->get('home');
        $res = detail::find($id);
        $pics = $res->pics;
        $arr = json_decode($pics,true);
        foreach($arr as $k=>$v){
            if($k == $name['pic']){
                unset($arr[$k]);
            }
        }
        $json = json_encode($arr);
        $array['pics'] = $json;
        $res = detail::where('id',$id)->update($array);
        echo 1;
    }

    public function getAttent(request $request)
    {
        $uid = $request->session()->get('home');
        $status = $request->only('status');
        $res = user::find($uid);
        $arr = (explode(':',$res->detail->adress));
        $array = json_decode($res->detail->pics,true);
        $array1 = array_values($array);
        return view('home/attent/index',['res'=>$res,'adress'=>$arr,'status'=>$status,'pic'=>$array1]);

    }

}
