<?php

namespace App;

use App\Post;
use App\Target;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()   
    {
        return $this->belongsTo('App\User');  
    }
    
    public function target()   
    {
        return $this->belongsTo('App\Target');  
    }
    
    protected $fillable = [
        'body_comment',
        'body_time',
        'date',
        'target_id',
        'user_id',
    ];
    

    public function getByPost(int $limit_count = 5)
    {
        return $this->target()->with('post')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
