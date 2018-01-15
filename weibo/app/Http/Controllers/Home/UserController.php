<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\detail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(request $request)
    {
        $uid = $request->session()->get('home');
        $res = user::find($uid);
        $arr = (explode(':',$res->detail->adress));
        return view('home/user/user',['res'=>$res,'adress'=>$arr]);

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

    public function PostDate(request $request)
    {
        dd($request->all());
    }
}
