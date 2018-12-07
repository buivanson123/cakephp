<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Group Entity
 *
 * @property int $id
 * @property string $name
 * @property string $link_facebook
 * @property string $link_tw
 * @property string $link_google
 * @property string $image
 * @property string $des
 */
class Group extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'link_facebook' => true,
        'link_tw' => true,
        'link_google' => true,
        'image' => true,
        'des' => true
    ];
}
