<?php 

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'wisata'; 

    public function search($keyword)
    {
        return $this->table('wisata')->like('nama', $keyword);
    }
}

?>