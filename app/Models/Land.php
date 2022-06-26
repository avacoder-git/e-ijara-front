<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\IsOchirilgan;


class Land extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'lands';

    protected $casts = [
        'area' => 'float'
    ];


    protected $fillable = [
        'regnum',
        'address',
        'status_id',
        'cad_number',
        'area',
        'fond_type_id',
        'land_type_id',
        'status_id',
        'local_status_id',
        'region_id',
        'district_id',
        'user_id',
        'is_epxired',
        'tries',
        'period',
        'real_status',
        'ball_bonitet',
        'area_specialization',
        'water_supply_level',
        'irrigation_status',
        'other_info',
        'purpose_id',
        'purpose_category_id',
        'salinity_level_id',
        'salt_anions',
        'salt_cations'
    ];

    public static function saltAnions()
    {
        return [
            'Мавжуд эмас',
            'Хлоридли',
            'Сульфатли',
            'Карбонатли'
        ];
    }

    public static function saltCations()
    {
        return [
            'Мавжуд эмас',
            'Натрийли',
            'Магнийли',
            'Кальцийли'
        ];
    }

    protected static function booted()
    {
        static::addGlobalScope(new IsOchirilgan());
    }
    /**
     * Relations
     */

    public function fond_type()
    {
        return $this->belongsTo(FondTypes::class, 'fond_type_id', 'id');
    }

    public function land_type()
    {
        return $this->belongsTo(LandType::class, 'land_type_id', 'id');
    }

    public function region()
    {
        return $this->belongsTo(Regions::class, 'region_id', 'regionid');
    }

    public function district()
    {
        return $this->belongsTo(Districts::class, 'district_id', 'areaid')->whereNotIn('areacode', [200, 400, 260]);
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function land_purposes()
    {
        return $this->belongsTo(LandPurposes::class, 'purpose_id');
    }

    public function auction_lot()
    {
        return $this->hasOne(LandAuctionLot::class);
    }


    /**
     * Accessors
     */
    public function getFormattedAddressAttribute()
    {
        return $this->region->nameuz . ", " . $this->district->nameuz;
    }

    public function geometries()
    {
        return $this->hasMany(LandGeometry::class, 'land_id', 'id')->selectRaw('ST_AsGeoJSON(geometry)::json as geom');
    }
    public function land_geometries()
    {
        return $this->belongsTo(LandGeometry::class, 'id', 'land_id')->selectRaw('ST_AsGeoJSON(geometry)::json as geom');
    }

    public function inventory()
    {
        return $this->hasOne(LandInventoryData::class, 'land_id', 'id');
    }

    public function review_organizations()
    {
        return $this->hasOne(ReviewOrganisations::class, 'land_id', 'id');
    }

    public function reviews()
    {
        return $this->hasOne(reviews::class, 'land_id', 'id');
    }

    public function land_files()
    {
        return $this->hasOne(LandFiles::class, 'land_id', 'id')->whereRelation('land_file_type','code','013')->latest();

    }
    public function children()
    {
        return $this->hasMany(Land::class,'parent_id','id');
    }


    public function land_merge_data()
    {
        return $this->hasMany(LandMergeData::class, 'merged_lot_id', 'id')->select('merged_part_id');
    }


}
