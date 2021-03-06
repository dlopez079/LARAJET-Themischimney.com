<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use \Database\Factories\UserFactory;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Create a new record seed for the comments table.
     */
    protected static function newFactory()
   {
      return UserFactory::new();    
   }

    /**
     * Get the comments from the user.
     * QUERY: SELECT * from Attachment WHERE user_id = the selected id.
     * Comment Table must have a column of 'user_id'. 
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the attachments for the User.
     * QUERY:  SELECT * FROM Attachment WHERE user_id = the selected id.
     * Attachment Table must have a column of 'user_id'. 
     */
    public function attachments()
    {
        return $this->hasMany(Attachment::class); 
    }

    /**
     * The project that belong to the user.
     * The name of this method 'project' will be searched using 'project_id'
     * QUERY: SELECT * FROM Project WHERE project_id = the selected id.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_user')->withTimestamps();
    }

    /**
     * Get the timesheets for the User.
     * QUERY:  SELECT * FROM Timesheet WHERE user_id = the selected id.
     * Timesheet Table must have a column of 'user_id'. 
     */
    public function timesheets()
    {
        return $this->hasMany(Timesheet::class);
    }
}
