<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'project_manager',
        'expected_date_for_completion',
        'percentage_completion',
        'description',
        'budget',
        'timeline_start',
        'timeline_end',
        'scope',
        'objectives',
        'deliverables',
        'milestones',
        // '_token', // Include the _token field for mass assignment
    ];


    public function resources() {
        return $this->hasMany(Resource::class);
    }
    
    public function technologies() {
        return $this->hasMany(Technology::class);
    }
    
    public function processes() {
        return $this->hasMany(Process::class);
    }

}
