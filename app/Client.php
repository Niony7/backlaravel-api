<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{   // error Add fillabe proprity name App/Client
    protected $fillable =['name','email','status','entreprise_id'];
    //or pour tout
    //protected $garded=[];

   //si active, afficher  $clients = Client::status();
   public function scopeStatus($query)
   {
      return $query->where('status', 1)->get();
   }

   public function entreprise()
   {
      return $this->belongsTo('App\Entreprise');
   }
   
   // public function getStatusAttribut($attribut)
   // {
   //    return[
   //       '0'=>'Inactif',
   //       '1'=>'Actif'
   //    ] [$attribut];
   // }

}
