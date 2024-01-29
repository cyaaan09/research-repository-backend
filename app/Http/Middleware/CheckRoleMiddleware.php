<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Category;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        $user = User::find(Auth::id());
        $user_role = UserRole::where('user_id', $user->id)
        ->with('category')
        ->with('category.type')
        ->first();

        $gate_pass = false;

        for ($i=0; $i < count($roles); $i++) { 
            if (in_array($user_role->category->name, $roles)) {
                $gate_pass = true;
            }
        }

        if ($gate_pass == true) {
            return $next($request);
        }else{
            return response([
                'user_type' => 'unauthorized',
                'status' => 401
            ], 401);
        }
    }
}
