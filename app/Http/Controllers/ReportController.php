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
use Illuminate\Support\Facades\Log;

class ReportController extends Controller
{
    public function __construct
    (
        Report $report,
        User $user,
        IbadahItem $ibadahItem
    )
    {
        $this->report = $report;
        $this->user = $user;
        $this->ibadahItem = $ibadahItem;
    }

    public function update(Request $request)
    {
        $inputItems = $request->item;
        $today = Carbon::today()->toDateString();
        $reportItems = $this->report
            ->where('user_id', Auth::user()->id)
            ->whereDate('created_at', '=', $today)
            ->get();

        foreach ($reportItems as $reportItem) {
            $item = $this->report->find($reportItem->id);
            if (isset($inputItems[$reportItem->id])) {
                $item->value = true;
            } else {
                $item->value = false;
            }
            $item->save();
        }

        return back();
    }

    public function generateDaily()
    {
        $users = $this->user->lists('id')->toArray();
        $ibadahItems = $this->ibadahItem->lists('id')->toArray();

        $reports = [];
        foreach($users as $user) {
            foreach ($ibadahItems as $item) {
                $reports[] = [
                    "user_id" => $user,
                    "ibadah_item_id" => $item,
                    "value" => 0
                ];
            }
        }

        $this->report->insert($reports);
    }

    public function evaluate()
    {

    }
}
