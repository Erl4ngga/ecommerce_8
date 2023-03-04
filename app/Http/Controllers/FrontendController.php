<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Auth\Events\Registered;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Carrer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Session;
use Socialite;
use Newsletter;

class FrontendController extends Controller
{
    public function index()
    {
        $banner=Banner::where('status','active')->limit(6)->get();
        $categories=Category::where('status','active')->limit(6)->get();   
        $featured=Product::where('status','active')->where('is_featured',1)->orderBy('price','DESC')->limit(6)->get();
        return view('frontend.index')->with('featured',$featured)->with('categories',$categories)->with('banner',$banner);
    }
    public function login(Request $request)
    {

        return view('frontend.pages.login');
    }


    public function register()
    {

        return view('frontend.pages.register');
    }

    public function redirect($provider)
    {
        // dd($provider);
     return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        //dd($provider);
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        //dd($userSocial);
        $users      =   User::where(['provider_id' => $userSocial->getId()])->first();
        //dd($users);
        if($users){
            Auth::login($users);
            return redirect('/')->with('success','Kamu Telah login dari'.$provider);
        }else{
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'password'      => bcrypt(1111),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);
            //dd($user);
            event(new Registered($user));
            Auth::login($user);
         return redirect('/')->with('success','Kamu Telah login dari ' .$provider);
        }
    }

    public function productlist()
    {
        return view('frontend.pages.product-list');
    }
    public function aboutus()
    {
        $users=User::where('role','admin')->orderBy('id','ASC')->paginate(10);
        $carrers=Carrer::orderBy('id','DESC')->paginate('10');
        return view('frontend.pages.about-us')->with('users',$users)->with('carrers',$carrers);
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function policy()
    {
        return view('frontend.pages.policy');
    }
    public function productdetail($slug)
    {
        $product_detail= Product::getProductBySlug($slug);
        //dd($product_detail->rel_prods);
        $brand = Brand::where('id', $product_detail->brand_id)->first();      
        return view('frontend.pages.product_detail')->with('product_detail',$product_detail)->with('brand',$brand);
    }
    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $products=Product::orwhere('title','like','%'.$request->search.'%')
                    ->orwhere('slug','like','%'.$request->search.'%')
                    ->orwhere('description','like','%'.$request->search.'%')
                    ->orwhere('summary','like','%'.$request->search.'%')
                    ->orwhere('price','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->paginate('10');
        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function productBrand(Request $request){
        $products=Brand::getProductByBrand($request->slug);
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }

    }
    public function productFilter(Request $request){
        $data= $request->all();
        // return $data;
        $showURL="";
        if(!empty($data['show'])){
            $showURL .='&show='.$data['show'];
        }

        $sortByURL='';
        if(!empty($data['sortBy'])){
            $sortByURL .='&sortBy='.$data['sortBy'];
        }

        $catURL="";
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($catURL)){
                    $catURL .='&category='.$category;
                }
                else{
                    $catURL .=','.$category;
                }
            }
        }

        $brandURL="";
        if(!empty($data['brand'])){
            foreach($data['brand'] as $brand){
                if(empty($brandURL)){
                    $brandURL .='&brand='.$brand;
                }
                else{
                    $brandURL .=','.$brand;
                }
            }
        }
        // return $brandURL;

        $priceRangeURL="";
        if(!empty($data['price_range'])){
            $priceRangeURL .='&price='.$data['price_range'];
        }
        if(request()->is('e-shop.loc/product-grids')){
            return redirect()->route('product-list',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
        }
        else{
            return redirect()->route('product-list',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
        }
    }
    public function subscribe(Request $request){
        if(! Newsletter::isSubscribed($request->email)){
                Newsletter::subscribePending($request->email);
                if(Newsletter::lastActionSucceeded()){
                    request()->session()->flash('success','Subscribed! Silakan periksa email Anda');
                    return redirect()->route('home');
                }
                else{
                    Newsletter::getLastError();
                    return back()->with('error','Ada yang salah! silakan coba lagi');
                }
            }
            else{
                request()->session()->flash('error','Sudah Berlangganan');
                return back();
            }
    }
    public function uploadfile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg|max:2048',
        ]);
 
        $fileName = $request->file->getClientOriginalName();
        $filePath = 'uploads/' . $fileName;
 
        $path = Storage::disk('public')->put($filePath, file_get_contents($request->file));
        $path = Storage::disk('public')->url($path);
 
        // Perform the database operation here
 
        return back()
            ->with('success','File has been successfully uploaded.');
    }
    public function productCat(Request $request){
        $products=Category::getProductByCat($request->slug);
        // return $request->slug;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }

    }
}
