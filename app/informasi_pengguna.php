<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informasi_pengguna extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'informasi_pengguna';

    /**
     * Override the default primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_informasi_pengguna';
}
