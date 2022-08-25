<?php

namespace App\Http\Controllers\Web\Backend\Achievement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Backend\Achievement\AchievementRequest;
use App\Models\Achievement;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use Yajra\DataTables\DataTables;

class AchievementController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Prestasi',
            'mods'  => 'achievement'
        ];

        return customView('achievement.index', $data, 'backend');
    }

    public function getData()
    {
        return DataTables::of(Achievement::query())->addColumn('hashid', function ($data) {
          return Hashids::encode($data->id);
        })->make(true);
    }

    public function show(Achievement $achievement)
    {
        try {
            return response()->json([
                'success' => true,
                'data' => $achievement
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ]);
        }
    }

    public function store(AchievementRequest $request)
    {
        try {
            Achievement::create($request->only(['name']));
            return response()->json([
                'message' => 'Data telah ditambahkan'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    public function update(AchievementRequest $request, Achievement $achievement)
    {
        try {
            $achievement->update($request->only(['name']));
            return response()->json([
                'message' => 'Data telah diubah'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }


    public function destroy(Achievement $achievement)
    {
        try {
            $achievement->delete();
            return response()->json([
                'message' => 'Data telah dihapus',
            ]);
        } catch (QueryException $e) {
            if ($e->getCode() == '23000') {
                return response()->json([
                    'message' => 'Data tidak dapat dihapus karena sudah digunakan',
                ], 500);
            } else {
                return response()->json([
                    'message' => $e->getMessage(),
                    'trace' => $e->getTrace()
                ], 500);
            }
        }
    }
}

