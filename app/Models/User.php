<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullname()
    {
        if (!$this->first_name && !$this->last_name) return 'non definie';
        return $this->first_name . ' ' . $this->last_name;
    }

    public function connected(): bool
    {
      return (!Carbon::now()->subMinutes(5)->gt(Carbon::parse($this->last_activity_at)));
    }


    public function app_level()
    {
        return $this->belongsTo(AppLevel::class,'app_level_id'); 
    }
    public function isDirectorLevel()
    {
        return !(!($this->app_level->name=='director'));
    }
    public function isSecretaryLevel()
    {
        return !(!($this->app_level->name=='secretary'));
    }
    public function isTeacherLevel()
    {
        return !(!($this->app_level->name=='teacher'));
    }
    public function isStudentLevel()
    {
        return !(!($this->app_level->name=='student'));
    }
    public function isParentLevel()
    {
        return !(!($this->app_level->name=='parent'));
    }
   
    public function photo(){
        if($this->attachment){
            return Storage::url($this->attachment->path);
        }else{
            return '/assets/media/avatars/blank.png';
        }

    }

    public static  function getTableInfo()
    {
        $table = Table::byName('users');
        if (!$table) {
            throw new \Exception("TABLE INFO NOT FOUND!");
        }

        return $table;
    }

    public function attachment()
    {
        return $this->hasOne(Attachment::class, 'fk_id')->where('table_id', Setting::getTableInfo()->id);
    }
    
    public function attachments()
    {
        return $this->hasMany(Attachment::class, 'fk_id')->where('table_id', User::getTableInfo()->id);
    }
   
   

    public function teacherSchoolLevels(){
        return $this->hasMany(TeacherSchoolLevel::class,'user_id');
    }

    public function skills(){
        return $this->hasMany(Skills::class);
    }
    

    public function school_level(){
        return $this->belongsTo(SchoolLevel::class,'school_level_id');
    }

    public function group(){
        return $this->belongsTo(SchoolLevelGroup::class,'school_level_group_id');
    }

    public function parent(){
        return $this->hasMany(StudentParent::class,'student_id');
    }

    public function child(){
        return $this->hasMany(StudentParent::class,'parent_id');
    }

  
}
