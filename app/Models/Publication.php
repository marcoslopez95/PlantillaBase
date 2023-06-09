<?php

namespace App\Models;

use App\Models\Scopes\OrderByIdScope;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'content',
        'labels',
        'region_id',
        'publication_category_id',
        'user_id',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new OrderByIdScope);
    }

    protected function labels(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => explode(',', $value),
            set: fn (array $value) => implode(',', $value),
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function publicationCategory(): BelongsTo
    {
        return $this->belongsTo(PublicationCategory::class);
    }

    public function externalReferences(): BelongsToMany
    {
        return $this->belongsToMany(ExternalReference::class);
    }
}
