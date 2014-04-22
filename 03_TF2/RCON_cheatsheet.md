RCON provides console command access via the developer console (`~`) to the TF2 servers (ensure it’s enabled in the *Advanced Tab* in TF2’s in-game options). SourceMod and other plugins allow server admin and moderation directly in-game — `rcon` is always a fallback.

## Authenticating

Use `rcon_address address:port` and `rcon_password password` respectively.

## Common commands

- `rcon say "foobar"` communicate foobar via console to all players
- `rcon changelevel pre_mapname` will force map change (immediately)
- `rcon mp_scrambleteams` will (unintelligently) randomise teams
- `rcon mp_restartgame X` will resume the game in X seconds
- `rcon mp_tournament 0`/`1` to disable/enable [Tournament Mode](http://wiki.teamfortress.com/wiki/Tournament_Mode)
- `rcon tf_weapon_criticals 0`/`1` disable/enable *random* weapon crits

## Map change conditions

- `rcon mp_timelimit X` sets the timelimit of the current map to X minutes
- `rcon mp_winlimit X` sets the win condition in rounds to end the map
- `rcon mp_maxrounds X` sets max rounds to end map

Whichever of these occurs first will trigger a map change.

## Resources

It’s worth noting some of the commands documented on the pages linked below include commands available to players to change local client behaviour (rather than server configuration via rcon).

- [Full list of console commands for Source engine games](https://developer.valvesoftware.com/wiki/Console_Command_List) on the Valve’s dev site.
- [List of useful console commands](http://wiki.teamfortress.com/wiki/List_of_useful_console_commands) on the Official TF2 Wiki.