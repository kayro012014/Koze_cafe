<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;


class dashboardController extends Controller
{
    public function overview(): ViewContract|Factory
    {
        return view('admin.overview');
    }

    public function transaction(): ViewContract|Factory
    {
        
        $inventory = Inventory::all();
            return view('admin.transaction', )-> with ('inventory', $inventory); // Pass the variable correctly
    }

     public function inventory()
        {
            $inventory = Inventory::all();
            return view('admin.inventory', )-> with ('inventory', $inventory); // Pass the variable correctly
        }


    public function reports(): ViewContract|Factory
    {
        return view('admin.reports');
    }
    public function products(): ViewContract|Factory
    {
        return view('admin.products');
    }

    public function store_inventory(Request $request)
{
    // Validation for form data
    $validatedData = $request->validate([
        'category_name' => 'required|string|max:255',
        'ingredients' => 'required|string',
        'image' => 'required|mimes:png,jpg,jpeg,webp,svg|max:2048', // max file size: 2MB
        'stocks' => 'required|integer',
        'expiration_date' => 'required|date',
        'date_added' => 'required|date',
    ]);

    // Initialize variables for image storage
    $imagePath = null;

    if($request->hasFile('image')){
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension(); // Generate a unique name for the image

        // Move the uploaded image to the assets/pictures directory
        $image->move(public_path('assets/pictures'), $imageName);
        
        // Store the relative path to the image in the database
        $imagePath = 'assets/pictures/' . $imageName;
    }

    // Create a new Inventory record and save all the data to the database
    Inventory::create([
        'category_name' => $request->category_name,
        'ingredients' => $request->ingredients,
        'image' => $imagePath,  // Save the image path if the file is uploaded
        'stocks' => $request->stocks,
        'stocks_left' => $request->stocks_left, // Optional field, nullable in DB
        'expiration_date' => $request->expiration_date,
        'date_added' => $request->date_added,
    ]);

    // Redirect with success message
    return redirect()->back()->with('success', 'Inventory saved successfully!');
}

}

