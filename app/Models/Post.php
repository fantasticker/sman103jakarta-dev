<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;



class Post extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'title', 'author', 'image', 'body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
