<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GooglePlaces
{
    public function details(): array
    {
        $ttlHours = (int) env('GOOGLE_REVIEWS_CACHE_HOURS');

            $resp = Http::get('https://maps.googleapis.com/maps/api/place/details/json', [
                'place_id' => env('GOOGLE_PLACE_ID'),
                'fields'   => 'name,rating,user_ratings_total,reviews',
                'key'      => env('GOOGLE_PLACES_API_KEY'),
            ])->json();

            if (($resp['status'] ?? '') !== 'OK') {
                return ['name' => null, 'rating' => null, 'total' => 0, 'reviews' => []];
            }

            $r = $resp['result'];

            return [
                'name'   => $r['name'] ?? 'Google Reviews',
                'rating' => $r['rating'] ?? null,
                'total'  => $r['user_ratings_total'] ?? 0,
                'reviews'=> collect($r['reviews'] ?? [])->map(fn ($rev) => [
                    'author'  => $rev['author_name'] ?? 'Google user',
                    'profile' => $rev['author_url'] ?? null,
                    'rating'  => $rev['rating'] ?? null,
                    'text'    => $rev['text'] ?? '',
                    'time'    => $rev['relative_time_description'] ?? '',
                ])->sortByDesc('createTime')->take(10)->toArray(),
            ];
    }
}
