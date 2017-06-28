<?php
namespace herojhjh;
 
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\ItemBlock;
use pocketmine\permission\Permission;
use pocketmine\utils\TextFormat;
 
class Main extends PluginBase implements Listener{
        public function onEnable(){
            $this->getServer()->getPluginManager()->registerEvents($this, $this);
                    $this->getLogger()->info("Enabled Plugin");
        }
   
        public function onInteract(PlayerInteractEvent $ev){
        $IT = $this->getConfig()->get("ID"); 
        if(($ev->getPlayer()->getGamemode() === 1) && ($ev->getBlock()->getId() === $IT)) $ev->setCancelled();
