<?php

namespace App\Http\Controllers\Api;

use App\Actions\StoreApplicationFeedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationFeedbackRequest;
use App\Mail\ApplicationFeedbackMail;

class FeedbackController extends Controller
{
    public function store(ApplicationFeedbackRequest $request, StoreApplicationFeedback $storeApplicationFeedback)
    {
        $feedback = $storeApplicationFeedback->handle($request->all());

        try {
            \Mail::to('webokami@yandex.ru')->send(new ApplicationFeedbackMail($feedback));

            return response()->json(['success' => ['message' => 'the application was successfully sent']]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());

            return response()->json(['error' => ['message' => $e->getMessage()]], 400);
        }
    }
}
