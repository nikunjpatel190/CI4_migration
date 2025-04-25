<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventModel;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class EventController extends BaseController
{

    function __construct()
    {
        // For Validation include the required helper file
        helper(['form', 'url']);
    }

    public function list()
    {
        // Get all the list
        $model = new EventModel();
        $events = $model->findAll();

        return view('event/list', ['events' => $events]);
    }

    public function form()
    {
        return view('event/form');
    }

    public function create()
    {
        try {
            // Validation rules
            $validationRules = [
                'name' => 'required|min_length[3]|max_length[255]',
                'venue' => 'required|min_length[3]|max_length[255]',
                'date' => 'required|valid_date[Y-m-d]',
            ];

            // Check if the form passes validation
            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput();
            }

            // Get validated input values
            $eventData = [
                'name' => $this->request->getPost('name', FILTER_SANITIZE_STRING),
                'venue' => $this->request->getPost('venue', FILTER_SANITIZE_STRING),
                'date' => $this->request->getPost('date'),
            ];

            $model = new EventModel();

            if ($model->insert($eventData)) {
                return redirect()->to('/event/create')->with('success', 'Event created successfully.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create event. Please try again.');
            }
        } catch (Exception $e) {
            return redirect()->to('/event/create')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
