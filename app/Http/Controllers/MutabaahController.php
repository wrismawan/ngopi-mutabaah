<?php

namespace App\Http\Controllers;

use App\IbadahItem;
use App\Report;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MutabaahController extends Controller
{
    public function __construct
    (
        IbadahItem $ibadahItem,
        Report $report,
        User $user
    )
    {
        $this->ibadahItem = $ibadahItem;
        $this->report = $report;
        $this->user = $user;
    }

    public function index()
    {
        $userId = Auth::user()->id;
        $today = Carbon::today()->toDateString();

        $userReport = $this->report
            ->with('ibadahItem')
            ->where('user_id', $userId)
            ->whereDate('created_at', '=', $today)
            ->get();

        return view('layouts.mutabaah',
            [
                "userReports" => $userReport
            ]
        );
    }
}
