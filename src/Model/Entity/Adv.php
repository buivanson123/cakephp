<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adv Entity
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $dir
 * @property bool $slide
 * @property bool $middle
 * @property bool $bottom
 */
class Adv extends Entity
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
        'id' => true,
        'name' => true,
        'image' => true,
        'dir' => true,
        'slide' => true,
        'middle' => true,
        'bottom' => true
    ];
}
