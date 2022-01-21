<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSale extends Model
{
    use HasFactory;
    protected $table = 'contact_sales';
    
    protected $fillable = ['user_id', 'user_name','phone_number','message','status','notification'];
}
