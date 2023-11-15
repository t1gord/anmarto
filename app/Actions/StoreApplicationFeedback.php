<?php

namespace App\Actions;

use App\Models\Feedback;

class StoreApplicationFeedback
{

    /**
     * @param array $inputs
     * @return Feedback
     */
    public function handle(array $inputs): Feedback
    {
        $data = [];

        foreach ($inputs as $key => $input) {
            switch ($key) {
                case 'projects':
                    $data['projects'] = json_encode($input);
                    break;
                case 'workingHours':
                    $data['working_hours'] = $input;
                    break;
                default:
                    $data[$key] = $input;
            }
        }

        return Feedback::create($data);
    }

}
