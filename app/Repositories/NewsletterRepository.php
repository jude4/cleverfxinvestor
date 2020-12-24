<?php

namespace App\Repositories;

use App\Models\Newsletter;
use App\Repositories\BaseRepository;

/**
 * Class NewsletterRepository
 * @package App\Repositories
 * @version May 18, 2020, 7:39 pm UTC
*/

class NewsletterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Newsletter::class;
    }
}
