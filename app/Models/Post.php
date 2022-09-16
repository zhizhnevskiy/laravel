<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['title','content'];
}
