
[Server Hop](https://www.sourcemod.net/showthread.php?t=113807) allows players to easily hop between servers you specify (while in-game).

There are other plugins that do this, but this one provides live server info and does not require anything other than the Socket extension (see below — where?). The plugin refreshes server info every minute. Servers that are unreachable will be omitted from the menu until they are reachable again. By default, servers will be advertised to the players every minute. All this is configurable.

The plugin is activated by typing `!hop` or `!servers`. The player will get a menu with the servers you configured, and for each displays the server name, map name and number of active players and number of maximum players.

## serverhop.cfg

From `/tf/addons/configs/`, straightforward:

```
"Servers"
{
    "#1 Chill Out Server"
    {
        "address"   "203.33.121.205"
        "port"      "27021"
    }
    "#2 Straight Up Server"
    {
        "address"   "203.33.121.205"
        "port"      "27058"
    }
    "#3 Aperture Test Chamber"
    {
        "address"   "203.33.121.205"
        "port"      "27082"
    }
//  "#4 MvM"
//  {
//      "address"   "203.33.121.205"
//      "port"      "27081"
//  }
}
```

## plugin.serverhop.cfg

From `/tf/cfg/sourcemod/`:

```
// Set to 1 to enable server advertisements
// -
// Default: "1"
sm_hop_advertise "1"

// Advertisement interval: advertise a server every x minute(s)
// -
// Default: "1"
sm_hop_advertisement_interval "2"

// Set to 1 if you want a broadcast message when a player hops to another server
// -
// Default: "1"
sm_hop_broadcasthops "1"

// Defines how the server info should be presented
// -
// Default: "%name - %map (%numplayers/%maxplayers)"
sm_hop_serverformat "%name - %map (%numplayers/%maxplayers)"

// What players have to type in chat to activate the plugin (besides !hop)
// -
// Default: "!servers"
sm_hop_trigger "!servers"
```