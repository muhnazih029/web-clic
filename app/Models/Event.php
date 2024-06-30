<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'image',
        'content',
        'date',
        'location',
        'locationUrl',
        'userId',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function discussions():HasMany
    {
        return $this->hasMany(Discussion::class);
    }
}
