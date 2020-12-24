<?php

namespace App\Repositories;

use App\Models\FAQ;
use App\Repositories\BaseRepository;

/**
 * Class FAQRepository
 * @package App\Repositories
 * @version May 18, 2020, 7:32 pm UTC
*/

class FAQRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'answer'
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
        return FAQ::class;
    }
}
