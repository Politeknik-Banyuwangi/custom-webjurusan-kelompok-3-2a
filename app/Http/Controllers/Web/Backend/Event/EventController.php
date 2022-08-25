<?php

namespace App\Http\Controllers\Web\Backend\Event;

use App\Http\Controllers\Controller;
use App\Http\Request\Web\Backend\Event\EventRequest;
use App\Models\Event;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use Yajra\DataTables\DataTables;

class EventController extends Controller
{
    public function index()
{
    $data = [
        'title' => 'Event',
        'mods'  => 'event'
    ];
    return customView('event.index', $data, 'backend');

}
    public function getData()
    {
    return DataTables::of(Event::query())->addColumn('hashid', function ($data) {
        return Hashids::encode($data->id);
    })->make(true);
    }

    public function show(Event $event)
    {
        try {
            return response()->json([
                'success' => true,
                'data'    => $event
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace'   => $e->getTrace()
            ]);
        }
    }

    public function store(EventRequest $request)
    {
        try {
            Event::create($create($request->only(['name'])));
            return response()->json([
                'message' => 'Data telah ditambahkan'
            ]);
        } catch(Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace'   => $e->getTrace()
            ], 500);
        }
    }

    public function update(EventRequest $request, Event $event)
    {
        try {
            $event->update($request->only(['name']));
            return response()->json([
                'message' => 'Data telah diubah'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace'   => $e->getTrace()
            ], 500);
        }
    }

    public function destroy(Event $event)
    {
        try {
            $event->delete();
            return response()->json([
                'message' => 'Data telah dihapus',
            ]);
        } catch(QueryException $e) {
            if ($e->getCode() == '23000') {
                return response()->json([
                    'message' => 'Data dapat dihapus karena sudah digunakan',
                ], 500);
            } else {
                return response()->json([
                    'message' => $e->getMessage(),
                    'trace'   => $e->getTrace()
                ], 500);
            } 
        }
    }
}
