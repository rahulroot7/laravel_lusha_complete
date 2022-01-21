<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;

	   protected $table = 'apply_jobs';
	    
	   protected $fillable = ['position_id', 'apply_position','name','last_name','email','phone','resume','linkedin_url','web_url','coverletter','portfolio','description'];
}
