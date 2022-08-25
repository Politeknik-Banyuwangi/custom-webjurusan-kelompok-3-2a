<?php

namespace App\Http\Controllers\Web\Backend\Document;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Backend\Document\DocumentRequest;
use App\Models\Document;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use Yajra\DataTables\DataTables;

class DocumentController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dokumen',
            'mods' => 'document'
        ];

        return customView('document.index', $data, 'backend');
    }

    public function getData()
    {
        return DataTables::of(Document::with(['documentType'])->get())->addColumn('hashid', function ($data) {
            return Hashids::encode($data->id);
        })->addcolumn('documentType', function ($data) {
            return $data->documentType->name;
        })->make(true);
    }

    public function store(DocumentRequest $request)
    {
        try {
            DocumentType::create($request->only(['name']));
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

    public function update(DocumentRequest $request, Document $document)
    {
        try {
            $document->update($request->only(['name']));
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

    public function destroy(Document $document)
    {
        try {
            $document->delete();
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
