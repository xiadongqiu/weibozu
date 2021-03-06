<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\user;
use App\Model\detail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\JsonResponse;
use App\Model\weibo;
use App\Model\attention;
use App\Tool\Common;
use App\Model\like;
use App\Model\comment;
use Hash;

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
        if (($request->only('id'))['id']  != null){
            $uid = $request->only('id');
            $status = $request->only('status');
            $res = user::find($uid['id']);
            $arr = (explode(':',$res->detail->adress));
            if($res->detail->pics!=null){
                $array = json_decode($res->detail->pics,true);
                $array1 = array_values($array);
            }else{
                $array1 = '0';
            }
            
            return view('home/user/user',['res'=>$res,'adress'=>$arr,'status'=>$status,'pic'=>$array1,'uid'=>$uid['id']]);
        }else{

            $uid = $request->session()->get('home');
            $status = $request->only('status');
            $res = user::find($uid);
            $arr = (explode(':',$res->detail->adress));
            if($res->detail->pics!=null){
                $array = json_decode($res->detail->pics,true);
                $array1 = array_values($array);
            }else{
                $array1 = '0';
            }

            return view('home/user/user',['res'=>$res,'adress'=>$arr,'status'=>$status,'pic'=>$array1,'uid'=>$uid]);
        }


    }

    public function postEdit(request $request)
    {
        $form = $request->all();
        $id = $request->session()->get('home');
        $arr['nickname'] = $form['nickname'];
        $res1 = weibo::where('uid',$id)->update($arr);
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

        weibo::where('uid',$id)->update($arr);

        comment::where('pid',$id)->update($arr);

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
        if (($request->only('id'))['id']  != null){
            $uid = $request->only('id')['id'];
            $status = $request->only('status');
            $res = user::find($uid);
            if($res->detail->pics!=null){
                $array = json_decode($res->detail->pics,true);
                $array1 = array_values($array);
            }else{
                $array1 = '0';
            }
            $arr = (explode(':',$res->detail->adress));
            return view('home/attent/index',['res'=>$res,'adress'=>$arr,'status'=>$status,'pic'=>$array1,'uid'=>$uid]);

        }else{
            $uid = $request->session()->get('home');
            $status = $request->only('status');
            $res = user::find($uid);
            if($res->detail->pics!=null){
                $array = json_decode($res->detail->pics,true);
                $array1 = array_values($array);
            }else{
                $array1 = '0';
            }
            $arr = (explode(':',$res->detail->adress));
            return view('home/attent/index',['res'=>$res,'adress'=>$arr,'status'=>$status,'pic'=>$array1,'uid'=>$uid]);
        }


    }

    public function getFensi(request $request)
    {
        if (($request->only('id'))['id']  != null){
            $status = $request->only('status');
            $uid = $request->only('id');
            $res = user::find($uid['id']);
            if($res->detail->pics!=null){
                $array = json_decode($res->detail->pics,true);
                $array1 = array_values($array);
            }else{
                $array1 = '0';
            }
            $arr = array();
            foreach($res->attent as $k=>$v){
                foreach ($v['attributes'] as $kk=>$vv){
                    $arr[] = $vv;
                }
            }

            return view('home/fensi/index',['res'=>$res,'status'=>$status,'pic'=>$array1,'arr'=>$arr,'uid'=>$uid['id']]);
        }else{
            $status = $request->only('status');
            $uid = $request->session()->get('home');
            $res = user::find($uid);
            $array = json_decode($res->detail->pics,true);
            $array1 = array_values($array);
            $arr = array();
            foreach($res->attent as $k=>$v){
                foreach ($v['attributes'] as $kk=>$vv){
                    $arr[] = $vv;
                }
            }

            return view('home/fensi/index',['res'=>$res,'status'=>$status,'pic'=>$array1,'arr'=>$arr,'uid'=>$uid]);
        }

    }

    public function postQuxiao(request $request)
    {
        $gid = $request->session()->get('home');
        $uid = $request->only('uid');
        $res = attention::where('gid',$gid)->where('uid',$uid['uid'])->first();
        $bool = $res->delete();
        if($bool){
            $res1 = detail::find($gid);
            $num = $res1->attent;
            $arr['attent'] = $num - 1;
            detail::where('id',$gid)->update($arr);
            echo '1';
        }else{
            echo '2';
        }
    }

    public function postGuanzhu(request $request)
    {
        $uid = $request->only('uid');
        $gid = $request->session()->get('home');
        $array = array();
        $array['gid'] = $gid;
        $array['uid'] = $uid['uid'];
        $array['attention_time'] = time();
        $bool = attention::insert($array);
        if ($bool){
            $res = detail::find($gid);
            $num = $res -> attent;
            $arr['attent'] = $num + 1;
            detail::where('id',$gid)->update($arr);
            echo $uid['uid'];
        }else{
            echo 0;
        }


    }

    public function getSearch(request $request)
    {
        $tiao = $request->only('tiao');
        $gid = $request->session()->get('home');
        $res = attention::where('gid',$gid)->get();
        $arr = array();
        foreach($res as $k=>$v){
            $arr[] = $v->uid;
        }
        $array = array();
        foreach($arr as $k=>$v){
             $array[] = detail::where('nickname','like','%'.$tiao['tiao'].'%')->where('id','=',$v)->get();
        }

        $arr1 = array();
        foreach($array as $k=>$v){
            foreach($v as $kk=>$vv){
               $arr1[] = $vv;
            }
        }
      echo json_encode($arr1);
    }

    public function getLoginout(request $request)
    {
        $request->session()->put('home',null);

        // $users = App\User::paginate(15);
        $weibo = weibo::paginate(5);
        // echo json_encode($weibo);
        $hot = weibo::orderBy('like','desc')->take(8)->get();
        return view('home.index1.not',['data'=>$weibo,'hot'=>$hot]);
    }

    public function postLike(request $request)
    {
        $id = ($request->only('id'))['id'];
        $res = user::find($id);
        $arr = array();
        foreach($res->like as $k=>$v){
            $arr[] = $v['attributes'];
        }
       return $arr;
    }

    public function postPub(request $request)
    {
        $id = $request->session()->get('home');
        $res = user::where('id',$id)->first();
        return $res->detail;
    }

    public function getXiu(request $request)
    {
        return view('home/user/xiugai');
    }

    public function postGai(request $request)
    {
        $newpassword = $request->only('np')['np'];
        $oldpassword = $request->only('op')['op'];
        $id = $request->session()->get('home');
        $res = user::where('id',$id)->first();
            $bl = Hash::check($oldpassword,$res['password']);
        if(!$bl){
            echo '1';
            die;
        }

        $password =  bcrypt($newpassword); //密码哈希加密

        $arr['password'] = $password;

        $res1 = user::where('id',$id)->update($arr);

        if($res1){
             echo '2';
             $request ->session()->put('home',null);
        }else{
            echo '0';
        }


    }
}
