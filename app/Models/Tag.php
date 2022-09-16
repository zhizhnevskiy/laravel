<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App
 * @mixin Builder
 */
class Tag extends Model
{
    use HasFactory;

    /**
     * Many to Many
     */
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
