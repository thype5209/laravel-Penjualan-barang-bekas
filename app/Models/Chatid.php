<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Chatid
 *
 * @property int $id
 * @property int $user1_id
 * @property int $user2_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ChatidFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Chatid newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chatid newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chatid query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chatid whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chatid whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chatid whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chatid whereUser1Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chatid whereUser2Id($value)
 * @mixin \Eloquent
 */
class Chatid extends Model
{
    use HasFactory;
}
