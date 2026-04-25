<?php

namespace App\Http\Controllers;

use App\Models\GearItem;
use Illuminate\Http\Request;

class GearItemController extends Controller
{
    public function index()
    {
        $gearItems = GearItem::all();
        return view('gear-items.index', compact('gearItems'));
    }

    public function create()
    {
        return view('gear-items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'condition' => 'required',
            'purchase_date' => 'required|date',
            'value' => 'required|numeric',
        ]);

        GearItem::create($request->all());
        return redirect()->route('gear-items.index')->with('success', 'Gear item created!');
    }

    public function edit(GearItem $gearItem)
    {
        return view('gear-items.edit', compact('gearItem'));
    }

    public function update(Request $request, GearItem $gearItem)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'condition' => 'required',
            'purchase_date' => 'required|date',
            'value' => 'required|numeric',
        ]);

        $gearItem->update($request->all());
        return redirect()->route('gear-items.index')->with('success', 'Gear item updated!');
    }

    public function destroy(GearItem $gearItem)
    {
        $gearItem->delete();
        return redirect()->route('gear-items.index')->with('success', 'Gear item deleted!');
    }
    public function show(GearItem $gearItem)
    {
        return view('gear-items.show', compact('gearItem'));
    }
}