<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workers; // Importing the Post model

class WorkersController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve search query from the request
        $search = $request->query('search');
        
        // Query workers with optional search filtering
        $workers = Workers::when($search, function ($query, $search) {
            return $query->where('surname', 'LIKE', "%{$search}%")
                         ->orWhere('firstname', 'LIKE', "%{$search}%");
        })->get();
        
    
        if ($request->ajax()) {
            // Return the filtered list of workers without pagination
            return view('workers-list', ['workers' => $workers]);
        }
    
        return view('index', ['workers' => $workers, 'search' => $search]);
    }
    
    
    public function welcome(Request $request)
    {
        return view('welcome');
    }
    public function detail($id)
    {
        // Fetch the worker by ID
        $worker = Workers::findOrFail($id);

        // Return the detail view with worker data
        return view('show', compact('worker'));
    }

    public function add(Request $request)
    {
        return view('add');
    }
    public function add0(Request $request)
    {
        return view('all0');
    }
    public function all(Request $request)
    {
        return view('all');
    }
    public function editpersonal($id)
    {
        $worker = Workers::findOrFail($id); // Assuming you're using Eloquent
        return view('editpersonal', compact('worker'));
    }
    public function editcontact($id)
    {
        $worker = Workers::findOrFail($id); // Assuming you're using Eloquent
        return view('editcontact', compact('worker'));
    }
    public function editjob($id)
    {
        $worker = Workers::findOrFail($id); // Assuming you're using Eloquent
        return view('editjob', compact('worker'));
    }
    public function edithealth($id)
    {
        $worker = Workers::findOrFail($id); // Assuming you're using Eloquent
        return view('edithealth', compact('worker'));
    }

    // START:: Delete a person
    public function delete($id)
    {
        $worker = Workers::find($id);
    
        if ($worker) {
            // Store a success message in the session
            session()->flash('message', 'Worker will be deleted in a few seconds...');
    
            // Use a delay for the deletion (simulate async with a job or other method)
            dispatch(function () use ($worker) {
                sleep(5); // Delay for 5 seconds
                $worker->delete();
            })->afterResponse();
    
            return view('all', ['workers' => Workers::all()]);
        }
    
        // If worker not found, return a response
        return redirect()->route('all')->with('error', 'Worker deleted.');
    }
    // END:: Delete a person

    
    
    
 // START:: Add new worker
public function sendadd(Request $request)
{
    // Validate incoming request data
    $validated = $request->validate([
        'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        'firstname' => '',
        'surname' => '',
        'dob' => '',
        'pob' => '',
        'marital_status' => '',
        'spouse' => '',
        'num_children' => '',
        'names_children' => '',
        'age' => '',
        'sex' => '',
        'qualification' => '',
        'courses' => '',
        'languages' => '',
        'contact' => '',
        'email' => '',
        'hometown' => '',
        'residential_address' => '',
        'kin_name' => '',
        'kin_phone' => '',
        'bank_name' => '',
        'bank_number' => '',
        'voters_id' => '',
        'national_id' => '',
        'rank' => '',
        'staff_id' => '',
        'date_of_enlishment' => '',
        'height' => '',
        'shirt_size' => '',
        'cap_beret_size' => '',
        'boot_size' => '',
        'shoe_size' => '',
        'disciplinary' => '',
        'station' => '',
        'previous_station' => '',
        'department' => '',
        'previous_department' => '',
        'retirement_date' => '',
        'medical_conditions' => '',
        'allergies' => '',
        'blood_type' => '',
    ]);

    // Handle the file upload
    if ($request->hasFile('profile_pic')) {
        try {
            $filePath = $request->file('profile_pic')->store('uploads', 'public');
            $validated['profile_pic'] = $filePath;
        } catch (\Exception $e) {
            return response()->json(['message' => 'File upload failed', 'error' => $e->getMessage()], 500);
        }
    }
    

    // Create a new worker record
    Workers::create($validated);

   // Redirect back with the success message
   return redirect()->route('index')->with('message', 'Worker added successfully!');
}
// END:: Add new worker



// START:: Edit ONLY personal info
public function sendeditpersonal(Request $request)
{
    // Validate incoming request data for personal information
    $validated = $request->validate([
        'id' => '', // Ensure the worker ID exists
        'firstname' => '',
        'surname' => '',
        'dob' => '',
        'pob' => '',
        'marital_status' => '',
        'spouse' => '',
        'num_children' => '',
        'names_children'=> '',
        'age' => '',
        'sex' => '',
        'qualification' => '',
        'courses' => '',
        'languages' => '',
    ]);

    // Find the worker by ID
    $worker = Workers::findOrFail($validated['id']);

    // Update the worker's personal information
    $worker->update([
        'firstname' => $validated['firstname'],
        'surname' => $validated['surname'],
        'dob' => $validated['dob'],
        'pob' => $validated['pob'],
        'marital_status' => $validated['marital_status'],
        'spouse' => $validated['spouse'],
        'num_children' => $validated['num_children'],
        'names_children' => $validated['names_children'],
        'age' => $validated['age'],
        'sex' => $validated['sex'],
        'qualification' => $validated['qualification'],
        'courses' => $validated['courses'],
        'languages' => $validated['languages'],
    ]);
    return redirect("/detail/{$validated['id']}")
    ->with('message', 'Personal information updated successfully!');
    
}
// END:: Edit ONLY personal info


// START:: Edit ONLY Contact info
public function sendeditcontact(Request $request)
{
    // Validate incoming request data for personal information
    $validated = $request->validate([
        'id' => '', // Ensure the worker ID exists
        'phone' => '',
        'email' => '',
        'hometown' => '',
        'residential_address' => '',
        'postal_address' => '',
        'kin_name' => '',
        'kin_phone'=> '',
        'bank_name' => '',
        'bank_number' => '',
        'voters_id' => '',
        'national_id' => '',
    ]);

    // Find the worker by ID
    $worker = Workers::findOrFail($validated['id']);

    // Update the worker's personal information
    $worker->update([
        'contact' => $validated['phone'],
        'email' => $validated['email'],
        'hometown' => $validated['hometown'],
        'residential_address' => $validated['residential_address'],
        'postal_address' => $validated['postal_address'],
        'kin_name' => $validated['kin_name'],
        'kin_phone' => $validated['kin_phone'],
        'bank_name' => $validated['bank_name'],
        'bank_number' => $validated['bank_number'],
        'voters_id' => $validated['voters_id'],
        'national_id' => $validated['national_id'],
    ]);

    // Redirect after editing
    return redirect("/detail/{$validated['id']}")
    ->with('message', 'Personal information updated successfully!');

    
}
// END:: Edit ONLY Contact info


// START:: Edit ONLY Job info
public function sendeditjob(Request $request)
{
    // Validate incoming request data for personal information
    $validated = $request->validate([
        'id' => '', // Ensure the worker ID exists
        'rank' => '',
        'staff_id' => '',
        'date_of_enlishment' => '',
        'height' => '',
        'shirt_size' => '',
        'cap_beret_size' => '',
        'boot_size'=> '',
        'shoe_size' => '',
        'disciplinary' => '',
        'station' => '',
        'previous_station' => '',
        'department' => '',
        'previous_department' => '',
        'retirement_date' => '',
    ]);

    // Find the worker by ID
    $worker = Workers::findOrFail($validated['id']);

    // Update the worker's personal information
    $worker->update([
        'rank' => $validated['rank'],
        'staff_id' => $validated['staff_id'],
        'date_of_enlishment' => $validated['date_of_enlishment'],
        'height' => $validated['height'],
        'shirt_size' => $validated['shirt_size'],
        'cap_beret_size' => $validated['cap_beret_size'],
        'boot_size' => $validated['boot_size'],
        'shoe_size' => $validated['shoe_size'],
        'disciplinary' => $validated['disciplinary'],
        'station' => $validated['station'],
        'previous_station' => $validated['previous_station'],
        'department' => $validated['department'],
        'previous_department' => $validated['previous_department'],
        'retirement_date' => $validated['retirement_date'],
    ]);

   // Redirect after editing
   return redirect("/detail/{$validated['id']}")
   ->with('message', 'Personal information updated successfully!');

    
}
// END:: Edit ONLY Job info


// START:: Edit ONLY Health info
public function sendedithealth(Request $request)
{
    // Validate incoming request data for personal information
    $validated = $request->validate([
        'id' => '', // Ensure the worker ID exists
        'medical_conditions' => '',
        'allergies' => '',
        'blood_type' => '',
    ]);

    // Find the worker by ID
    $worker = Workers::findOrFail($validated['id']);

    // Update the worker's personal information
    $worker->update([
        'medical_conditions' => $validated['medical_conditions'],
        'allergies' => $validated['allergies'],
        'blood_type' => $validated['blood_type'],
    ]);

   // Redirect after editing
   return redirect("/detail/{$validated['id']}")
   ->with('message', 'Personal information updated successfully!');

    
}
// END:: Edit ONLY Health info

    

// Get all workers
public function getAll(Request $request){
    $workers = Workers::all(); // Fetch all workers from the database
    return view('all', compact('workers')); // Pass $workers to the view
}

}

