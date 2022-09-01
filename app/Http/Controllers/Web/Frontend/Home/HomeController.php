<?php

namespace App\Http\Controllers\Web\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Cooperation;
use App\Models\Document;
use App\Models\Employee;
use App\Models\EmployeeType;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
        ];

        return view('frontend.home.index', $data);
    }
    public function cooperation()
    {
        $data = [
            'title' => 'Kerjasama Industri',
            'cooperations' => Cooperation::with(['cooperationField', 'cooperationType', 'partner'])->where('is_publish', true)->get()
        ];

        return view('frontend.home.cooperation', $data);
    }
    public function employee()
    {
        $data = [
            'title' => 'Dosen dan Staff',
            'employees' => EmployeeType::with(['employee'])->get(),
        ];

        return view('frontend.home.employee', $data);
    }
    public function document()
    {
        $data = [
            'title' => 'Dokumen',
            'documents' => Document::with(['documentType'])->where('is_publish', true)->get(),
        ];

        return view('frontend.home.document', $data);
    }
    public function event($slug)
    {
        $event = Event::where(['slug' => $slug, 'is_publish' => true])->first();
        if ($event) {
            $data = [
                'title' => $event->title,
                'event' => $event,
            ];

            return view('frontend.home.event', $data);
        } else {
            abort(404);
        }
    }
}
