<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Image extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'location',
        'exif',
        'camera_type',
        'lens_type',
        'date',
        'tags',
        'approved_at',
        'category_id',
        'user_id'
    ];

    protected $appends=['cover','approved'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'timestamp',
        'tags' => 'array',
        'approved_at' => 'timestamp',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return mixed
     */
    public function getCoverAttribute(){
        return $this->media->first()->getUrl();
    }

    /**
     * @return bool
     */
    public function getApprovedAttribute(): bool
    {
        return $this->approved_at!=null;
    }
}
