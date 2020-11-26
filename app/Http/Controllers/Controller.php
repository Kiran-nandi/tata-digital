<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use DB;
use Redirect;
use App\digitalform;

session_start();

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request)
    {
        //admin login
        $request->validate([  
            'Username'=>'required',  
            'Password'=>'required',
        ]);  
        
        // $login = new User;

        $username = $request->get('Username');
        $password = $request->get('Password');
    
            $check = DB :: select('select * from admin where username=? and password = ?',[$username,$password]);
            if($check) {
                $_SESSION['user_name']=$username;
                return Redirect::to('/admin/list');
            }
            else {
                return Redirect::to('/admin');
            }

    }

    public function logout(Request $request) {
        session_unset();
        return Redirect::to('/admin');
    }
    public function list(Request $request) {
        if (!empty($_SESSION['user_name'])) {
            $fulllist = digitalform::paginate(10);
            return view('list',['list'=>$fulllist]);
        }
        else {
            return Redirect::to('/admin');
        }
    }
    public function admin(Request $request) {
        return view('admin');
    }
    

    public function home() {
        return view('home');
    }
    private function generate_token($num)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $num; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
    public function formsubmit(Request $request){
        // var_dump($_POST);
        // return 1;
// echo base64_decode($_POST['picutre']);exit;
$dat = substr( $_POST['picutre'] , 22 );
// var_dump($dat);exit;
$imageName = $this->generate_token(15).".png";
file_put_contents("geolocation_upload/".$imageName,base64_decode($dat));
// file_put_contents($file, $decoded);
// $myfile = fopen("geolocation_upload/newimg.png", "w") or die("Unable to open file!");
// $dat = substr( $_POST['picutre'] , 5 );
// // var_dump($dat);
// $txt = base64_decode($dat);
// fwrite($myfile, $txt);

// fclose($myfile);

        
        // $shopphoto = $request->file('shopphoto1');
        
        

        
        

        // $geolocation = $request->file('geolocation');
        // $destgeolocation = 'geolocation_upload';
        // $geolocation->move($destgeolocation,$geolocation->getClientOriginalName());

        $digitalform = new digitalform;
        

        $digitalform->name_entity = $request->get('name_of_entity');
        $digitalform->contact_name = $request->get('contact_name');
        $digitalform->contact_person_type = $request->get('contact_type');
        $digitalform->organization = $request->get('organization');
        $digitalform->contact_number = $request->get('contact_number');
        $digitalform->email_id = $request->get('emailid');
        $digitalform->address = $request->get('address');

        // $digitalform->geo_location = $geolocation->getClientOriginalName();
        $digitalform->geo_location = $imageName;

        $digitalform->consumer_goods = $request->get('consumer_goods');
        $digitalform->industrial_goods = $request->get('industrial_goods');
        $digitalform->Commercial_goods = $request->get('commercial_goods');
        $digitalform->pan_india = $request->get('panindia');
        $digitalform->dispatch_destination = $request->get('dispatch');
        $digitalform->delhi_mumbai = $request->get('mum_to_del');
        $digitalform->jaipur_ahmed_surat = $request->get('materials_sent');

        $existingtrans = $request->get('existing_trans');
        if(!empty($existingtrans))
        {
            $digitalform->existing_trans = implode(',',$existingtrans);
        }
        else {
            $digitalform->existing_trans = $request->get('existing_trans');
        }
        $digitalform->interested_work = $request->get('interest_work');
        $shopphoto = $request->file('shopphoto');
        if(empty($shopphoto)){
            $shopphoto = $request->file('shopphoto1');
        }
        $destpathshop = 'photo_shop_upload';
        if(!empty($shopphoto)) {
            $shopphoto->move($destpathshop,$shopphoto->getClientOriginalName());
            $digitalform->photo_shop = $shopphoto->getClientOriginalName();
        }
        else {
            $digitalform->photo_shop = "null";
        }

        $photo_visiting_card = $request->file('photo_visiting_card');
        if(empty($photo_visiting_card)){
            $photo_visiting_card = $request->file('photo_visiting_card1');
        }
        // $photo_visiting_card = $request->file('photo_visiting_card1');
        $destpathvisiting = 'visiting_card_upload';
        if(!empty($photo_visiting_card)) {
            $photo_visiting_card->move($destpathvisiting,$photo_visiting_card->getClientOriginalName());
            $digitalform->photo_visiting_card = $photo_visiting_card->getClientOriginalName();
        }
        else {
            $digitalform->photo_visiting_card="null";
        }
        
        
        $digitalform->gst_by_client = $request->get('gst_in');
        $digitalform->promoter_name = $request->get('promoter_name');
        $digitalform->dispatch_destination = $request->get('dispatch');
        if(!empty($digitalform->dispatch_destination)) {
            $digitalform->dispatch_destination = implode(',',$digitalform->dispatch_destination);
        }
        else {}
        $digitalform->geolocationtext = $request->get('geolocationtext');
        if(empty($digitalform->pan_india)) {
            $digitalform->pan_india = "Not applicable";
        }
        else {
            
        }

        // return  $digitalform->geo_location;


        
        if($digitalform->save()) {
            return Redirect::to('/');
        }
        else {
            return "Please try again";
        }

    }

    public function delete(Request $request, $id) {
        if (!empty($_SESSION['user_name'])) {
            $list = digitalform::find($id);
            if($list->delete()) {
                return Redirect::to('/admin/list');
            }
            else {
                return Redirect::to('/admin/list');
            }
        }
        else {
            return Redirect::to('/admin');
        }
    }

    public function exportfile() {
        if (!empty($_SESSION['user_name'])) {
            $fulllist = digitalform::all();

            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=contactlist.csv');
            $output = fopen('php://output', 'w');
            fputcsv($output, array('ID', 
            'Name of the entity', 
            'Name Contact Person',
            'Contact Person Type',
            'Type Of Organization',
            'Contact Number',
            'E-mail ID',
            'Address',
            'Geo Location (Latitude/Logitude)',
            'Geo LOaction In Text',
            'Consumer Goods',
            'Industrial Goods',
            'Commercial Goods',
            'Pan India monthly Dispatch Potential in Tonnes',
            'Top 3 Dispatch Destination',
            'Delhi to Mumbai/Mumbai to Delhi Potential',
            'Materials Being Sent to Jaipur/Ahmedabad/Surat',
            'Existing Transporter',
            'Interested to work with TATA digital logistics',
            'Photo of the shop',
            'Photo of Visiting Card',
            'GST In, If Provided by Client',
            'Promoter Name',
            'Date'));
            foreach($fulllist as $row) {
                fputcsv($output, array($row['id'],
                $row['name_entity'],
            $row['contact_name'],
            $row['contact_person_type'],
            $row['organization'],
            $row['contact_number'],
            $row['email_id'],
            $row['address'],
            $row['geo_location'],
            $row['geolocationtext'],
            $row['consumer_goods'],
            $row['industrial_goods'],
            $row['Commercial_goods'],
            $row['pan_india'],
            $row['dispatch_destination'],
            $row['delhi_mumbai'],
            $row['jaipur_ahmed_surat'],
            $row['existing_trans'],
            $row['interested_work'],
            $row['photo_shop'],
            $row['photo_visiting_card'],
            $row['gst_by_client'],
            $row['promoter_name'],
            $row['created_at'],
            ));
            }
            // <img src="{{ asset("photo_shop_upload/"'.$row["photo_shop"].') }}" style="width:100%;"/>
        }
        else {
            return Redirect::to('/admin');
        }
    }
    public function geo(Request $request) {
        // return "kiran";
        $val = $request->get('geolocate');
        // return $val;
        return $val;
    }


}
