<?php

namespace Droplister\EduCore\App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location_id',
        'ppin',
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

    /**
     * First or Create School
     *
     * @param  \Droplister\EduCore\App\Location  $city
     * @param  \Droplister\EduCore\App\Location  $state
     * @param  \Droplister\EduCore\App\PrivateSchoolSurvey  $data
     * @return \Droplister\EduCore\App\Location
     */
    public static function firstOrCreateSchool(Location $city, Location $state, PrivateSchoolSurvey $data)
    {
        $school_name = getSchoolName($data->pinst);
        $address = getSchoolAddress($data);
        $gender = $data->p335 === 1 ? 'Coed' : ($data->p335 === 2 ? 'All-Girl' : 'All-Boy');

        return static::firstOrCreate([
            'location_id' => $city->id,
            'ppin' => $data->ppin,
        ], [
            'name' => $school_name,
            'title' => "{$school_name} in {$city->name}",
            'meta' => [
                'address' => $address,
                'latitude' => $data->latitude16,
                'longitude' => $data->longitude16,
                'hours' => $data->tothrs,
                'students' => $data->numstuds,
                'teachers' => $data->p410,
                'equi_teachers' => $data->numteach,
                'full_teachers' => (($data->p385 / $data->p410) * 100),
                'part_teachers' => ((1 - ($data->p385 / $data->p410)) * 100),
                'males' => (($data->males / $data->numstuds) * 100),
                'females' => ((1 - ($data->males / $data->numstuds)) * 100),
                'gender' => $gender,
                'indian' => $data->p_indian,
                'asian' => $data->p_asian,
                'pacific' => $data->p_pacific,
                'hispanic' => $data->p_hisp,
                'white' => $data->p_white,
                'black' => $data->p_black,
                'two_plus' => $data->p_tr,
                'st_ratio' => $data->sttch_rt,
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
                'source' => 'title',
                'method' => function ($string, $separator) {
                    return $this->str_lreplace('-in-', '-', strtolower(preg_replace('/[^a-z0-9]+/i', $separator, $string)));
                },
            ]
        ];
    }

    public function str_lreplace($search, $replace, $subject)
    {
        $pos = strrpos($subject, $search);

        if($pos !== false)
        {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }

        return $subject;
    }
}