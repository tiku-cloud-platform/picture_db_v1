<?php
declare(strict_types = 1);

namespace App\Models\User;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmoGroup extends \App\Models\EmoGroup
{
   public function img(): HasMany
   {
       return $this->hasMany(EmoImage::class, "group_uid", "uid")
           ->where("is_show", "=", 1);
   }
}
