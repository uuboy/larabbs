<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topic;
use Spatie\Permission\Models\Permission;

class TopicPolicy extends Policy
{
    public function update(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }

    public function destroy(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }

    public function create(User $user)
    {
        return false;
    }

}
