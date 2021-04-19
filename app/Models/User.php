<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, LogsActivity, HasRoles;

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'inactive' => 'datetime',
    ];

    protected static array $logAttributes = ['*'];
    protected static bool $logOnlyDirty = true;
    protected static bool $submitEmptyLogs = false;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Este registro foi {$eventName}";
    }

    public function isActive(): bool
    {
        return $this->inactive === null;
    }

    public function isNotActive(): bool
    {
        return $this->inactive !== null;
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updater_id');
    }

    public function excluder(): BelongsTo
    {
        return $this->belongsTo(User::class, 'excluder_id');
    }

    public function user_addresses(): HasMany
    {
        return $this->hasMany(UserAdress::class, 'owner_id');
    }

    public function user_contacts(): HasMany
    {
        return $this->hasMany(UserContact::class, 'owner_id');
    }
}
