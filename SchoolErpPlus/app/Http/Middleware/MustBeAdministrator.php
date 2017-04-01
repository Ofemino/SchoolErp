<?php

namespace App\Http\Middleware;

use App\UserProfile;
use Closure;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $getUser = $request->get(['id']);
        foreach ($getUser as $u) {
            $prof = DB::select('select role_id from userprofile where user_id = ?', [$u]);
            foreach ($prof as $rid) {
                if ($rid->role_id = 1) {
                    if ($getUser && $getUser->role_id = $u->id) {
                        return $next($request);
                    }
                }
            }
        }

        abort(404, "Un-Authorize attempt!");
    }
}