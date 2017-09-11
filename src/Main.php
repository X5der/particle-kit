<?php

namespace Test;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\scheduler\CallbackTask;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\Item;
use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;
use pocketmine\level\particle\LavaDripParticle;
use pocketmine\level\particle\BubbleParticle;
use pocketmine\level\particle\AngryVillagerParticle;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;
class Main extends PluginBase implements Listener{
	public function onEnable(){ 
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
			$Logger = $this->getLogger();
		$Logger->info("§a!");
		$Logger->info("§c!");
                $this->getServer()->getScheduler()->scheduleRepeatingTask(
                new CallbackTask([$this,"armor"]), 10);
	if(!file_exists($this->getDataFolder())){
    mkdir($this->getDataFolder(), 0744, true);
	}
	$this->player = new Config($this->getDataFolder() . "player.yml", Config::YAML,
	array());
		}
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$name = $player->getName();
	if(!$this->player->exists($name)){
		$this->player->set($name, "off");
		$this->player->save();
		}
	}
public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		$name = $sender->getName();
	switch (strtolower($command->getName())){
		case"ca":
if ($sender instanceof Player){
			if(!isset($args[0])){
		$sender->sendMessage("§b~[CA]~§crezex: /ca <on/off>");
			return true;
			}
	$name = $sender->getName();
	$mode = strtolower($args[0]);
		if($mode == "on"){
	$this->player->set($name, "on");
	$this->player->save();
		$sender->sendMessage("§b[CA]§aColorArmor ON Armor");
		}else if($mode == "off"){
	$this->player->set($name, "off");
	$this->player->save();
		$sender->sendMessage("§b[CA]§aColorArmor Off armor");
	$sender->getInventory()->setArmorItem(0,Item::get(0,0,1));
	$sender->getInventory()->setArmorItem(1,Item::get(0,0,1));
	$sender->getInventory()->setArmorItem(2,Item::get(0,0,1));
	$sender->getInventory()->setArmorItem(3,Item::get(0,0,1));
	$sender->getInventory()->sendArmorContents($sender);
		}else{
		$sender->sendMessage("§b~[CA]~§cHow tow text: /ca <on/off>");
		}
	break;
		}else{
	$sender->sendMessage("§b[CA]§d??????");
		}
	}
}
  	public function armor(){
	$players = Server::getInstance()->getOnlinePlayers();
	foreach ($players as $playerA){
		$name = $playerA->getName();
	$player = $this->getServer()->getPlayer($name);
	if($this->player->get($name) == "on"){
		$color = mt_rand(1, 10);
			$item1 = Item::get(298, 0, 1);
			$item2 = Item::get(299, 0, 1);
			$item3 = Item::get(300, 0, 1);
			$item4 = Item::get(301, 0, 1);
	switch($color){
// Color:(Red,Green,Blue)
		case 1://Yellow
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(255,255,0));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(255,255,0));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(255,255,0));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(255,255,0));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 2://Red
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(255,0,0));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(255,0,0));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(255,0,0));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(255,0,0));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 3://Green
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(0,255,0));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(0,255,0));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(0,255,0));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(0,255,0));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 4://Blue+Green
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(0,255,255));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(0,255,255));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(0,255,255));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(0,255,255));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 5://Blue
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(0,0,255));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(0,0,255));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(0,0,255));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(0,0,255));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 6://Blue+Red
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(255,0,255));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(255,0,255));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(255,0,255));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(255,0,255));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 7://White
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(255,255,255));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(255,255,255));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(255,255,255));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(255,255,255));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 8://Black
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(0,0,0));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(0,0,0));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(0,0,0));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(0,0,0));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 9://Yellow+Green
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(150,235,0));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(150,235,0));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(150,235,0));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(150,235,0));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
		case 10://Pink
			$item1->setCustomColor(\pocketmine\utils\Color::getRGB(128,0,255));
			$item2->setCustomColor(\pocketmine\utils\Color::getRGB(128,0,255));
			$item3->setCustomColor(\pocketmine\utils\Color::getRGB(128,0,255));
			$item4->setCustomColor(\pocketmine\utils\Color::getRGB(128,0,255));
	$player->getInventory()->setArmorItem(0,$item1);
	$player->getInventory()->setArmorItem(1,$item2);
	$player->getInventory()->setArmorItem(2,$item3);
	$player->getInventory()->setArmorItem(3,$item4);
	$player->getInventory()->sendArmorContents($player);
		break;
class LavaDripParticle extends PluginBase{
  
  public function onEnable(){
  	
  	 public $use = array{}; 
  	  	
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on");       
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'particle':
        $sender->getLevel()->addParticle(new LavaDripParticle($sender));
        $sender->getLevel()->addParticle(new BubbleParticle($sender));
        $sender->getLevel()->addParticle(new AngryVillagerParticle($sender));
        
        public function onInteract(PlayerInteractEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        if($player->getItemInHand()->getId() == 1) {
            if (!in_array($name, $this->use)) {
                $player->sendMessage($this->prefix.C::GREEN."Particle is on");
                $this->use[] = $name;
            }elseif(in_array($name, $this->use)){
                $player->sendMessage($this->prefix.C::RED."Particle is Off");
                unset($this->use[array_search($name, $this->use)]);
        
        )
        
    }
  }
}
