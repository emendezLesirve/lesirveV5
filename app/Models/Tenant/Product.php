<?php

namespace App\Models\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   use UsesTenantConnection;

   protected $table='products';

   protected $primaryKey='id';

   public $timestamps=false;

   protected $fillable =[
       'name',
       'price'

   ];

   protected $guarded =[

   ];
}
