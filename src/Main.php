<?php

namespace Particle-kit;

use pocketmine\plugin\PluginBase;
use pocketmine\level\particle\LavaDripParticle;
use pocketmine\level\particle\BubbleParticle;
use pocketmine\level\particle\AngryVillagerParticle;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;

class LavaDripParticle extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'particle':
        $sender->getLevel()->addParticle(new LavaDripParticle($sender));
        $sender->getLevel()->addParticle(new BubbleParticle($sender));
        $sender->getLevel()->addParticle(new AngryVillagerParticle($sender));
        
    }
  }
}
