<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodPriceRequest;
use App\Models\FoodPrice;
use Illuminate\Http\Request;

class FoodPriceController extends Controller
{
    public function index()
    {
        $foodPrices = FoodPrice::paginate(10);
        $type_menu = 'settings';
        return view('pages.admin.food_prices.index', compact('foodPrices', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'settings';
        return view('pages.admin.food_prices.create', compact('type_menu'));
    }

    public function store(FoodPriceRequest $request)
    {
        FoodPrice::create($request->validated());
        return redirect()->route('food_prices.index')->with('success', 'Food price added successfully.');
    }

    public function edit($id)
    {
        $type_menu = 'settings';
        $foodPrice = FoodPrice::findOrFail($id);
        return view('pages.admin.food_prices.edit', compact('foodPrice', 'type_menu'));
    }

    public function update(FoodPriceRequest $request, FoodPrice $foodPrice)
    {
        $data = [
            'name' => $request->name,
            'unit' => $request->unit,
            'note' => $request->note,
            'current_price' => $request->new_price,
            'previous_price' => $foodPrice->current_price
        ];
        $foodPrice->update($data);
        return redirect()->route('food_prices.index')->with('success', 'Food price updated successfully.');
    }

    public function destroy($id)
    {
        $foodPrice = FoodPrice::findOrFail($id);
        $foodPrice->delete();
        return redirect()->route('food_prices.index')->with('success', 'Food price deleted successfully.');
    }
}
