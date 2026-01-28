<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_day',
        'end_day',
        'cost',
        'image',
        'description',
        'address_id',
        'hotel_id',
        'vehicle_id',
        'tour_guide_id',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function tourGuide()
    {
        return $this->belongsTo(TourGuide::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Tổng doanh thu của tour nếu tour đã kết thúc
     * chỉ tính booking confirmed + paid
     */
    public function getTotalCostExpired(): float
    {
        // nếu tour chưa kết thúc => 0
        if (!$this->end_day || Carbon::parse($this->end_day)->greaterThanOrEqualTo(now())) {
            return 0;
        }

        // tổng số vé đã bán (confirmed + paid)
        $totalTickets = $this->bookings() // lấy tất cả booking của tour
            ->where('confirmation_status', 'confirmed') // lọc booking đã xác nhận
            ->where('payment_status', 'paid') // lọc booking đã thanh toán
            ->sum('quantity_ticket'); // tính tổng số vé đã bán

        // doanh thu = giá tour * tổng vé bán
        return (float) ($this->cost * $totalTickets);
    }
}
