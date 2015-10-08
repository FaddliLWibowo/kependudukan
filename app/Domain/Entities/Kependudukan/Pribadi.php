<?php namespace App\Domain\Entities\Kependudukan;

use Illuminate\Database\Eloquent\Model;

class Pribadi extends Model
{
    /**
     * @var string
     */
    protected $table = 'pribadi';

    /**
     * @var array
     */
    protected $fillable = [
        'keluarga_id',
        'nik',
        'nama',
        'kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status_kawin',
        'status_keluarga',
    ];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    public static $tags = 'pribadi';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
