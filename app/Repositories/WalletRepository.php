<?php

namespace App\Repositories;

use App\Models\Wallet;
use App\Repositories\BaseRepository;

/**
 * Class WalletRepository
 * @package App\Repositories
 * @version April 10, 2020, 3:51 pm UTC
*/

class WalletRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'balance',
        'total_withdraw'
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
        return Wallet::class;
    }
}
