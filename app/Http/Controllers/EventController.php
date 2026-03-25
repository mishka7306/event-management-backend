<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventItem;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $event = Event::create([
            'name' => $request->name,
            'total' => $request->total
        ]);

        foreach ($request->sections as $section) {
            foreach ($section['rows'] as $row) {
                EventItem::create([
                    'event_id' => $event->id,
                    'description' => $row['description'] ?? '',
                    'quantity' => $row['qty'] ?? 0,
                    'unit_price' => $row['rate'] ?? 0,
                    'cost' => $row['total'] ?? 0,
                ]);
            }
        }

        return response()->json([
            'message' => 'Saved successfully'
        ]);
    }
}