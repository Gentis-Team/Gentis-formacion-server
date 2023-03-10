<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $guarded = []; 

    public function requirements()
    {
        return $this->belongsToMany(Requirement::class, 'courses_requirements', 'course_id','requirement_id');    
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'courses_categories', 'course_id','category_id');    
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'courses_groups', 'course_id','group_id');    
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'courses_users', 'course_id','user_id');    
    }
    
    public function center()
    {
        return $this->belongsTo(Center::class);
    }
    
    public function students()
    {
        return $this->belongsTo(Student::class, 'courses_students', 'course_id', 'student_id');
    }

    public function entities()
    {
        return $this->belongsToMany(Entity::class, 'course_entity');
    }
}
