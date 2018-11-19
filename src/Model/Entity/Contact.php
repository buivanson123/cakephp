<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $fullname
 * @property string $phone
 * @property string $address
 * @property string $email
 * @property string $title
 * @property string $content
 * @property \Cake\I18n\FrozenTime $create
 * @property bool $readed
 */
class Contact extends Entity
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
        'fullname' => true,
        'phone' => true,
        'address' => true,
        'email' => true,
        'title' => true,
        'content' => true,
        'create' => true,
        'readed' => true
    ];
}
