<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    
    public function course()   
    {
        return $this->belongsTo(Course::class);  
    }
    
    public function getByLimit(int $limit_count = 5)
    {
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

}
