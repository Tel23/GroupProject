<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        \Log::info('CheckAge middleware is invoked');
        $age = session('age', 0);
        \Log::info("Age in middleware: $age"); // Log the age value

        // Validate age
        if ($age < 18) {
            // Redirect to access denied page for users below 18
            return redirect()->route('accessDenied');
        } elseif ($age >= 18 && $age <= 24) {
            // Allow access to full page but not the restricted page
            if ($request->is('restricted')) {
                return redirect()->route('accessDenied'); // Redirect to access denied if trying to access restricted page
            }
        } elseif ($age >= 25) {
            // Allow access to all pages for users 25 and above
            // No action needed here; just continue to the next request
        }

        return $next($request); // Proceed to the requested page
    }
}