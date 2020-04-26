<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Product;
use App\Category;
use App\User;
use DB;
class all_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function product(){
        $dat=Product::all();

        return view('posts',['dat'=>$dat]);
    }

    public function category(){
        $dat1=Category::all();

        return view('categories',['dat1'=>$dat1]);
    }
    
    public function user(){
        $dat1=User::all();

        return view('users',['dat1'=>$dat1]);
    }
    public function home(){
        $dat1=Category::all();

        return view('home1',['dat1'=>$dat1]);
    }
   
    public function historyadmin() {
        $admin= DB::select('select * from carts');
        return view('index',compact('admin'));
    }
   
    public function pro($id){
        $dat1=DB::table('products')->where('category_id', '=', $id)->get();

        return view('pro',['dat1'=>$dat1]);
    }
    public function buy(Request $r,$id){
        $p=Product::find($id);
        $r->validate([
        "quantity" => "required|numeric"
        ]);
        DB::insert('insert into carts(product_id, user_id,number_of_product,Total) values (?,?,?,?)', [$id,auth()->user()->id,$r->quantity,$p->price*$r->quantity]);
        $p->quantity=$p->quantity-$r->quantity;
        $p->save();
        return redirect('home1.blade.php');
    }
    public function removeuser($id){
        $user=User::find($id);
        $user->delete();
        return redirect('users.blade.php');
    }
    
    public function addcategory(Request $requset){
        
        $requset->validate([
            'catgory_name'=>'required',
        'catgory_image'=>'required']
    );
    $image=$requset->file('catgory_image');
    $Extension=$image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFileName().'.'.$Extension,File::get($image));
    $cat=new Category();
    $cat->name=$requset->catgory_name;
    $cat->image=$image->getFileName().'.'.$Extension;
    $cat->save();
    return redirect('categories.blade.php');
    }
    public function additem(Request $requset){
        $requset->validate([
            'id'=>'required',
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'catid'=>'required',
            'image'=>'required',
        'desc'=>'required']
    );
    $image=$requset->file('image');
    $Extension=$image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFileName().'.'.$Extension,File::get($image));
    $item=new Product();
    $item->id=$requset->id;
    $item->name=$requset->name;
    $item->price=$requset->price;
    $item->quantity=$requset->quantity;
    $item->category_id=$requset->catid;
    $item->image=$image->getFileName().'.'.$Extension;
    $item->descriabtion=$requset->desc;
    $item->save();
    return redirect('posts.blade.php');
    }
    
    public function details_profile($id){
        $userid=User::find($id);
     return view('profile',compact('userid'));
    }
    public function details_cat1($id){
        $catid=Category::find($id);
     return view('details_cat',compact('catid'));
    }
    public function details_item($id){
        $proid=Product::find($id);
     return view('details',compact('proid'));
    }
    public function asd(){
        if(auth()->user()->isadmin)
{return redirect('index.blade.php');}

if(!auth()->user()->isadmin)
{return redirect('home1.blade.php');}
return ('/');

    }
    public function update_profile(Request $requset ,$id){
       
         $requset->validate([
            'name'=>'required'
        ]);
$User=User::find($id);
$image=$requset->file('image');
if($image!=null)
{
    $Extension=$image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFileName().'.'.$Extension,File::get($image));
    $User->image=$image->getFileName().'.'.$Extension;
}
    $User->name=$requset->name;
    $User->email=$requset->email;
    $User->password=$requset->password;
    
    $User->save();
    return redirect()->route('userpage');
    } 
    public function update_item(Request $requset ,$id){
       
        $requset->validate([
            'name'=>'required'
        ]);
$item=Product::find($id);
$image=$requset->file('image');
if($image!=null)
{
    $Extension=$image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFileName().'.'.$Extension,File::get($image));
    $item->image=$image->getFileName().'.'.$Extension;
}
    $item->name=$requset->name;
    $item->price=$requset->price;
    $item->quantity=$requset->quantity;
    $item->category_id=$requset->catid;
    $item->descriabtion=$requset->editor1;
    $item->save();
    return redirect('posts.blade.php');
    } 
    public function update_cat(Request $requset ,$id){
       
        $requset->validate([
            'name'=>'required'
        ]);
$cat=Category::find($id);
$image=$requset->file('image');
if($image!=null)
{
    $Extension=$image->getClientOriginalExtension();
    Storage::disk('public')->put($image->getFileName().'.'.$Extension,File::get($image));
    $cat->image=$image->getFileName().'.'.$Extension;
}
$cat->name=$requset->name;
$cat->save();
    return redirect('categories.blade.php');
    }

}
