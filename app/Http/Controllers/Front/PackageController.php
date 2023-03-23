<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package_Category;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\PackageProduct;
use App\Models\Customer;
use App\Models\Faq;
use App\Models\Image;
use App\Models\PackageCustomize;
use App\Models\PackageAmenitie;
use DB;
use Session;
use Auth;


class PackageController extends Controller
{
    public function index(){
        $package = Package_Category::get();
        $product = PackageProduct::get();

        $inter1 = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status','package_products.id','package_products.category_id')
                    ->where('package__categories.id','1')
                    ->where('package_products.package_destination','1')
                    ->orderBy('package_products.id', 'DESC')
                    ->limit(6)
                    ->get();
                    //dd($inter1);

        $inter2 = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status','package_products.id','package_products.category_id')
                    ->where('package__categories.id','2')
                    ->where('package_products.package_destination','1')
                    ->orderBy('package_products.id', 'DESC')
                    ->limit(6)
                    ->get();
                    //dd($inter2);
        
        $inter3 = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status','package_products.id','package_products.category_id')
                    ->where('package__categories.id','3')
                    ->where('package_products.package_destination','1')
                    ->orderBy('package_products.id', 'DESC')
                    ->limit(6)
                    ->get();
                    //dd($inter3);

        $inter4 = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status','package_products.id','package_products.category_id')
                    ->where('package__categories.id','4')
                    ->where('package_products.package_destination','1')
                    ->orderBy('package_products.id', 'DESC')
                    ->limit(6)
                    ->get();
                    //dd($inter4);

        $domestic1 = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status','package_products.id','package_products.category_id')
                    ->where('package__categories.id','1')
                    ->where('package_products.package_destination','0')
                    ->orderBy('package_products.id', 'DESC')
                    ->limit(6)
                    ->get();
                    //dd($domestic1);

        $domestic2 = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status','package_products.id','package_products.category_id')
                    ->where('package__categories.id','2')
                    ->where('package_products.package_destination','0')
                    ->orderBy('package_products.id', 'DESC')
                    ->limit(6)
                    ->get();
                    //dd($domestic2);

        $domestic3 = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status','package_products.id','package_products.category_id')
                    ->where('package__categories.id','3')
                    ->where('package_products.package_destination','0')
                    ->orderBy('package_products.id', 'DESC')
                    ->limit(6)
                    ->get();
                    //dd($domestic3);

        $domestic4 = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status','package_products.id','package_products.category_id')
                    ->where('package__categories.id','4')
                    ->where('package_products.package_destination','0')
                    ->orderBy('package_products.id', 'DESC')
                    ->limit(6)
                    ->get();
                    //dd($domestic4);

        
        //dd($package);
       return view('front.packages',compact('package','product','inter1','domestic1','inter2','domestic2','domestic3','inter3','domestic4','inter4'));
    }

    public function packagedetails($id){
        $id = Crypt::decrypt($id);
        $faq_all = Faq::get();
        $data = DB::table('package_products')
                    ->select('package_products.*')
                    ->where('package_products.id',$id)
                    ->limit(1)
                    ->get();
                    //dd($data);
                    

            $image = DB::table('package_products')
                    ->leftjoin('images','package_products.id','images.package_id')
                    ->select('images.photos')
                    ->where('package_products.id',$id)
                    ->get();
                    //dd($image);

            
            $amenitie =   explode(',',$data[0]->package_amenitie);
            $amenitie_data =  DB::table('package_amenities as p')
                                ->select('p.aminite_name','p.aminite_image')
                                ->whereIn('p.id',$amenitie)
                                ->get();
                                //dd($amenitie_data);

//More Packages To Visit  
            $morepackage = DB::table('package_products as p')
                            ->select('p.*')
                            ->limit(5)
                            ->get();

            
           
            $user = auth('customer')->user(); 
            //print_r($user);
            //dd($user);
            $customizedata = [];
        //dd($user->id);
        if(!empty($user->id)){
             $a = PackageCustomize::where('user_id',$user->id)->where('package_id',$id)->get();
             //dd($a[0]->id);
            }
        
            if(!empty($user->id) && !empty($a[0]->id) ){
                
                $customizedata = DB::table('package_customizes as p')
                            ->select('p.*')
                            ->where('p.package_id',$id)
                            ->where('p.user_id', $user->id)
                            ->orderBy('p.id', 'DESC')
                            ->limit(1)
                            ->get();
                $customizedata =  $customizedata[0];
                //dd($customizedata);
            }

            
            $datat =  Session::get('newuserid');
           
            if(empty($user->id) && !empty($datat)){
             
              $customizedata = DB::table('package_customizes as p')
                            ->select('p.*')
                            ->where('p.package_id',$id)
                            ->where('p.user_id', $datat)
                            ->orderBy('p.id', 'DESC')
                            ->limit(1)
                            ->get();
                //dd($customizedata);
                $customizedata =  $customizedata[0];
            }
            
            $dataid = Session::get('userid');
            if(empty($user->id) && !empty($dataid)){
                
                //dd($dataid);
                $customizedata = DB::table('package_customizes as p')
                            ->select('p.*')
                            ->where('p.package_id',$id)
                            ->where('p.user_id', $dataid)
                            ->orderBy('p.id', 'DESC')
                            ->limit(1)
                            ->get();
                            
                //$customizedata =  $customizedata[0];
                
                if(empty($customizedata[0]->id)){
                    $customizedata = [];
                }else if(!empty($customizedata)){
                    $customizedata = $customizedata[0];
                    //dd($customizedata);
                }
               //
            }
                       
        $newdata = $data[0];
        
        return view('front.package_details',compact('newdata','data','faq_all','image','amenitie_data','morepackage','customizedata'));
    }

    public function packagesearch(Request $request,$category_id,$package_destination){
        $packagename = $request->package;
        $category_id = Crypt::decrypt($category_id);
        $package_destination = Crypt::decrypt($package_destination);

        $featchdata = DB::table('package_products as p')
                        ->leftjoin('package__categories as c','c.id','p.category_id') 
                        ->select('p.*','c.name')
                        ->where('p.category_id',$category_id)
                        ->where('p.package_destination',$package_destination)
                        ->where('p.package_name','LIKE','%'.$packagename.'%')
                        ->paginate(6);
                        //dd($featchdata);
       
        return view('front.packagelisting',compact('featchdata','category_id','package_destination'));          
    }


    public function packagelisting(Request $request,$category_id,$package_destination){

        $category_id = Crypt::decrypt($category_id);
        $package_destination = Crypt::decrypt($package_destination);
        //print_r($category_id);
       // dd($package_destination);

       
        $featchdata = DB::table('package_products as p')
                        ->leftjoin('package__categories as c','c.id','p.category_id') 
                        ->select('p.*','c.name')
                        ->where('p.category_id',$category_id)
                        ->where('p.package_destination',$package_destination)
                        ->paginate(6);
                        //->get();
                        //dd($featchdata);
        
        

        return view('front.packagelisting',compact('featchdata','category_id','package_destination'));

    }

    

    public function testing($id){
        $data = Package_Category::findorfail($id)->toarray();
        $user = DB::table('package__categories')
                    ->leftjoin('package_products','package__categories.id','=','package_products.category_id')
                    ->where('package__categories.id',$id)
                    ->select('package__categories.name','package_products.package_name','package_products.sort_description','package_products.description','package_products.image','package_products.package_destination','package_products.package_day','package_products.package_no_of_person','package_products.category_id','package_products.near_by_location','package_products.package_price','package_products.selling_price','package_products.address1','package_products.address2','package_products.city','package_products.country','package_products.state','package_products.zip','package_products.status')
                    ->get();
                    //dd($user);
        
        ///return response()->json($data);
        //$data = json_decode($data, TRUE);
        //$data = "King";
        return response($user);
        
    }
    

}

?>