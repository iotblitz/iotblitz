<?php

namespace App\Http\Controllers;

use App\Models\MdCitiesModel;
use App\Models\MdStatesModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function states_list(Request $request): JsonResponse
    {
        try {
            $countri_id = $request->countri_id;
            $data = MdStatesModel::where("country_id", $countri_id)->get();
            return response()->json($data,200);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    function cties_list(Request $request): JsonResponse
    {
        try {
            $state_id = $request->state_id;
            $data = MdCitiesModel::where("state_id", $state_id)->get();
            return response()->json($data,200);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
