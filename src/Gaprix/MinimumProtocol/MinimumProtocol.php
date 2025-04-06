<?php

declare(strict_types=1);

namespace Gaprix\MinimumProtocol;

use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\plugin\PluginBase;

class MinimumProtocol extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function handleLogin(DataPacketReceiveEvent $event): void
    {
        $packet = $event->getPacket();
        if ($packet instanceof LoginPacket) {
            $minimumProtocol = $this->getConfig()->get("minimum-accepted-protocol", ProtocolInfo::CURRENT_PROTOCOL);
            if ($minimumProtocol === -1) {
                $minimumProtocol = ProtocolInfo::CURRENT_PROTOCOL;
            }
            if ($packet->protocol < $minimumProtocol) {
                $event->getOrigin()->disconnectIncompatibleProtocol($minimumProtocol);
            }
        }
    }
}
