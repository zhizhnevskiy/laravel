<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */
class Post extends Model
{
    use HasFactory;

//    rename table
//    protected $table = 'posts';

//    rename id
//    protected $primaryKey = 'posts_id';

//    delete auto increment
//    public $incrementing = false;

//     change type
//     protected $keyType = 'string';

//     not set time
//     public $timestamps = false;

//     auto set data
//    protected $attributes = [
//        'content' => 'Lorem ipsum from Post Model',
//    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected string $title = 'title';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected string $content = 'content';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','rubric_id'];

    /**
     * One to One OR One to Many
     */
    public function rubric(){
        return $this->belongsTo(Rubric::class, 'rubric_id', 'id');
    }

    /**
     * Many to Many
     */
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    // mutator
    public function setTitleAttribute($value){
        $this->attributes['title'] = Str::title($value);
    }
    // accessor
    public function getTitleAttribute($value){
        return Str::upper($value);
    }
}
