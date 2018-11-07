<?php

namespace Droplister\EduCore\App;

use Droplister\EduCore\App\School;
use Droplister\EduCore\App\PrivateSchoolSurvey;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'type',
        'name',
        'slug',
        'title',
        'description',
        'content',
        'meta',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'meta' => 'array',
    ];

    public function schools()
    {
        if ($this->type === 'state') {
            return $this->hasManyThrough(School::class, Location::class, 'parent_id');
        }

        return $this->hasMany(School::class);
    }

    /**
     * First or Create State
     *
     * @param  \Droplister\EduCore\App\PrivateSchoolSurvey  $data
     * @return \Droplister\EduCore\App\Location
     */
    public static function firstOrCreateState(PrivateSchoolSurvey $data)
    {
        $state_abbr = $data->pstabb;
        $state_name = getStateName($state_abbr);

        return static::firstOrCreate([
            'type' => 'state',
            'name' => $state_name,
        ],[
            'title' => "Private Schools in {$state_name}",
            'meta' => [
                'abbr' => $state_abbr,
            ],
        ]);
    }

    /**
     * First or Create City
     *
     * @param  \Droplister\EduCore\App\Location  $state
     * @param  \Droplister\EduCore\App\PrivateSchoolSurvey  $data
     * @return \Droplister\EduCore\App\Location
     */
    public static function firstOrCreateCity(Location $state, PrivateSchoolSurvey $data)
    {
        $city_name = ucwords(strtolower($data->pcity));
        $city_name = "{$city_name}, {$state->meta['abbr']}";

        return static::firstOrCreate([
            'parent_id' => $state->id,
            'type' => 'city',
            'name' => $city_name,
        ],[
            'title' => "Private Schools in {$city_name}",
            'meta' => [
                'state_abbr' => $state->meta['abbr'],
                'state_name' => $state->name,
            ],
        ]);
    }

    /**
     * Return key for route model binding
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
