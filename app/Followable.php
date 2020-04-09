<?php

namespace App;

trait Followable
{
  public function follow(User $user)
  {
      // return $this->follows()->save($user);
      return $this->follows()->toggle($user);
  }

  public function following(User $user)
  {
    return $this->follows()->where('following_user_id', $user->id)->exists();
  }

  public function follows()
  {
      // Laravel is looking for a convetion and thinks the table is called user_user but we rewrite that in the second argument also adding both of the foreign keys
      
      return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
  }
}