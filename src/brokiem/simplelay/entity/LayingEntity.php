<?php


namespace brokiem\simplelay\entity;


use pocketmine\entity\Human;
use pocketmine\event\entity\EntityDamageEvent;

class LayingEntity extends Human
{

	protected $gravity = 0.7;

	/*public function hasMovementUpdate(): bool
	{
		foreach (SimpleLay::getInstance()->getServer()->getOnlinePlayers() as $players){
			if ($this->getNameTag() === $players->getDisplayName()) {
				$players->teleport($this->getLocation());
			}
		}
		return parent::hasMovementUpdate(); // TODO: Change the autogenerated stub
	}*/

	public function attack(EntityDamageEvent $source): void
	{

	}

	public function applyGravity(): void
	{
		parent::applyGravity(); // TODO: Change the autogenerated stub
	}

}