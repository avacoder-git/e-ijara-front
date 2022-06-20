<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandAuctionLot extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $connection = 'ijaradb';
    protected $table = "land_auction_lots";


//    protected $fillable = [
//        'order_id', 'lot_number', 'start_price', 'sold_price', 'auction_date',
//        'winner_name', 'winner_inn', 'winner_pinfl', 'winner_passport', 'winner_passport_date', 'winner_passport_issued_by', 'winner_subject_type',
//        'description', 'protocol_file_url', 'accept_state', 'customer_description', 'buyer_description', 'operator_description', 'bank_name',
//        'bank_mfo', 'bank_xr', 'order_statuses_id', 'land_id',
//        'file_url', 'contract_file_url', 'other_file_url', 'protocol_number', 'protocol_date', 'protocol_time', 'contract_number', 'contract_date'
//    ];
    protected $guarded;
}
