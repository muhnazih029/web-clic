<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discussion extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'eventId',
        'content',
        'image',
        'userId',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'eventId');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'discussionId');
    }
}
