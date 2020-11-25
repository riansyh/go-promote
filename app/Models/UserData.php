<?php
namespace App\Models;
use CodeIgniter\Model;
class UserData extends Model{
    protected $table = 'users_data';
    protected $allowedFields = ['username'];
}
