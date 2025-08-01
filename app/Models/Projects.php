<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projects extends Model
{
    use SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = ['image','projectname','clientname','status','description','category','location','startdate','completeddate'];
}
