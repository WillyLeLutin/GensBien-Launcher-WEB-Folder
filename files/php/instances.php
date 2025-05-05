<?php
$instance['GensBienVanillaV2'] = array_merge($instance['GensBienVanillaV2'], array(
    "loadder" => array(
        "minecraft_version" => "1.21.5",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => false,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "GensBienVanillaV2",
        "ip" => "82.64.129.187",
        "port" => 25564
    )
));

$instance['GensBienVanillaV3'] = array_merge($instance['GensBienVanillaV3'], array(
    "loadder" => array(
        "minecraft_version" => "1.21.5",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => false,
    "ignored" => array(),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "GensBienVanillaV3",
        "ip" => "82.64.129.187",
        "port" => 25565
    )
));
?>
