<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class digitalform extends Model
{
    //
    protected $table='main';  
    protected $fillable=['name_entity','contact_name','contact_person_type','contact_number','email_id','address','geo_location','geolocationtext','consumer_goods','industrial_goods','Commercial_goods','pan_india','dispatch_destination','delhi_mumbai','jaipur_ahmed_surat','existing_trans','interested_work','photo_shop','organization','photo_visiting_card','gst_by_client','promoter_name','created_at','updated_at'];
}
