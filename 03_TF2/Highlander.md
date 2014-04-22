## What James did

[UGC’s Highlander setup](http://www.ugcleague.com/forum/showthread.php?p=30412) is where I started with the Highlander Setup. The files sit in `/tf/cfg/` (same place as `server.cfg`). `ugc_HL_custom.cfg` has been changed for proper naming.

Instead of completely disabling sourcemod (because I couldn't rename the stupid folder) I just put a lot of the plugins in the disabled folder. This will avoid plugins lagging the server, and undesirable effects from certain plugins. **The plugins will need to be put back after the match.**

In `server.cfg`, `mp_timelimit` was increased to an arbitrary long time (50mins), `sv_use_steam_voice` has been set to `1` (this should theoretically improve performance as it's the newer codec; we were only setting it to `0` for HLDJ), and the overtime nag has been turned off.

### Usage

When the match is ready to start, you need to execute the corresponding highlander `.cfg` for the given map type, prior to changing the map. For standard, 5-CP maps:

    rcon exec ugc_HL_standard.cfg

For any payload or attack/defend maps (e.g. pl_upward or cp_gravelpit)

    rcon exec ugc_HL_stopwatch.cfg

And thus for for KOTH maps:

    rcon exec ugc_HL_KOTH.cfg

After you've loaded the config, you can now change to that level, ready to go.

When everything is over run the off config:

    rcon exec ugc_off.cfg

### All Talk

I think that the UGC config files will automatically turn all talk off. But you can always use `rcon sv_alltalk 0`/`1` to turn it off and on.

### Recording games

[SourceTV](https://developer.valvesoftware.com/wiki/SourceTV) is enabled by the UGC configs. This acts in a similar way to Replay, and takes up a slot in Spectator.

To spectate the match through SourceTV, prospective spectators simply type into console:

    connect host:27020

Which for our server will be:

    connect 203.33.121.205:27020

There is also a [Match Recorder Plugin](https://forums.alliedmods.net/showthread.php?t=92716) which uses SourceTV, and will automatically start when the match starts. Don't quite know where it puts the file though…