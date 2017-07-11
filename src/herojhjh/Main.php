<?php

# Storm Nation Plugins ,Join Now :
# ip : pe.stormnation.us
# port : 19132
namespace herojhjh;
 
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\{TextFormat, Config};
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\ItemBlock;
use pocketmine\permission\Permission;
 
class Main extends PluginBase implements Listener{
        public function onEnable(){
            $this->getServer()->getPluginManager()->registerEvents($this, $this);
            @mkdir($this->getDataFolder());
            $this->saveDefaultConfig();
            $this->reloadConfig();
            $this->getLogger()->info("Enable Plugin");
        }
   
        public function onInteract(PlayerInteractEvent $ev){
         if($this->getConfig()->get("Limited.Creative") === true){
          if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $this->getConfig()->get("id"))){
           $ev->setCancelled(true);
          }
         }
        }
}
     
