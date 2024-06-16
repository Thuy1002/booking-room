<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\rooms;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatisticsController extends Controller
{
    //
    public function user()
    {
        $user = Auth::user();
        $dataUsers = User::with('booking')->paginate(5);
        return view('Admin.statistics.users', compact('user', 'dataUsers'));
    }
    public function deleUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'Xóa thành công');
    }
    public function rooms()
    {

        $user = Auth::user();
        $dataRooms = rooms::with(['services', 'type', 'booking']) // Load các dịch vụ, loại phòng và đặt phòng của mỗi phòng
            ->orderByDesc(function ($query) { // Sắp xếp theo số lượng đặt giảm dần
                $query->selectRaw('COUNT(*)')
                    ->from('booking')
                    ->whereColumn('rooms.id', 'booking.rooms_id');
            })
            ->paginate(8);

        return view('Admin.statistics.rooms', compact('user', 'dataRooms'));
    }
    public function income(Request $request)
    {
        // Lấy số ngày để hiển thị dữ liệu, mặc định là 30
        $days = $request->input('days', 30);

        // Lấy ngày đầu tiên của tháng hiện tại
        $startDate = Carbon::now()->subMonths(11)->startOfMonth();

        $stats = DB::table('payments')
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%Y-%m") as date'),
                DB::raw('SUM(vnp_Amount) as value')
            )
            ->where('created_at', '>=', $startDate)
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")')) // db::raw cho phép thực hiện trực tiếp tính toán trên sql
            ->orderBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'), 'ASC')
            ->get();

        // Tính tổng doanh thu
        $totalRevenue = $stats->sum('value');

        return view('Admin.statistics.income', ['stats' => $stats, 'totalRevenue' => $totalRevenue]);
    }
}
