<?php 

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table = 'komentar'; 

    protected $allowedFields = ['id_wisata','id_user','komentar','rating'];
}

?>