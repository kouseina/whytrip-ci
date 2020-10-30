<?php 

namespace App\Models;

use CodeIgniter\Model;

class DaerahModel extends Model
{
    protected $table = 'provinsi'; 

    public function search($keyword)
    {
        return $this->table('daerah')->like('nama', $keyword);
    }
}

?>