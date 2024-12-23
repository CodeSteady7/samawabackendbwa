<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\WeddingOrganizerResource;
use App\Models\WeddingOrganizer;
use Illuminate\Http\Request;

class WeddingOrganizerController extends Controller
{
    public function index()
    {
        $weddingOrganizers = WeddingOrganizer::withCount('weddingPackages')->get();
        // return $weddingOrganizers;
        return WeddingOrganizerResource::collection($weddingOrganizers);
    }

    public function show(WeddingOrganizer $weddingOrganizer)
    {

        try {
            $weddingOrganizer->load([
                'weddingPackages.photos',
                'weddingPackages.weddingOrganizer' => function ($query) {
                    $query->withCount('weddingPackages');
                }
            ])->loadCount('weddingPackages');


            // return response()->json($weddingOrganizer);
            return new WeddingOrganizerResource($weddingOrganizer);
        } catch (\Exception $error) {
            return response()->json($error->getMessage());
        }
    }
}
