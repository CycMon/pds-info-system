<?php

namespace App\Http\Controllers\Web\PDS;

use App\Http\Controllers\Controller;
use App\Http\Requests\PDS\UpdateSurveyRequest;
use App\Models\Survey\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateSurveyRequest $request, string $id)
    {
        $data = $request->validated();

        $survey = Survey::find($id);
        $survey->update($data);

        return back();
    }
}
