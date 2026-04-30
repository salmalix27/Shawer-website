<?php
// app/Http/Middleware/TrackVisits.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;

class TrackVisits {
  public function handle(Request $request, Closure $next) {

    if (!$request->is('admin*')) {
      $ip = $request->ip();
      $today = now()->toDateString();

      Visit::firstOrCreate(
        ['ip' => $ip, 'visited_on' => $today],
        [
          'ip' => $ip,
          'user_agent' => substr((string)$request->userAgent(), 0, 255),
          'path' => substr((string)$request->path(), 0, 255),
          'referrer' => substr((string)$request->headers->get('referer'), 0, 255),
        ]
      );
    }

    return $next($request);
  }
}