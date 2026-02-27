<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    public function edit(User $user, Job $job): bool //[edit = تعريف صلاحية تعديل الوظيفة] [User $user = المستخدم الذي يحاول تعديل الوظيفة] [Job $job = الوظيفة التي يتم محاولة تعديلها]
    {
        return $job->employer->user->is($user);
    }
}
