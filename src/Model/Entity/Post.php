<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Post extends Entity
{
    protected $_accessible = [
        'image_id' => true,
        'image' => true,
        'name' => true,

    ];
}