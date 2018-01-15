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
        return view('home/user/user',['res'=>$res,'adress'=>$arr,'status'=>$status]);

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
            $arr = array();
            $arr[time()] = $fileName;
            $json = json_encode($arr);
            $array['pics'] = $json;
            detail::where('id',$id)->update($array);
        }else{
            $pics = $res->pics;
            $arr = json_decode($pics,true);
            $arr[time()] = $fileName;
            $json = json_encode($arr);
            $array['pics'] = $json;
            detail::where('id',$id)->update($array);

        }
    }

}
