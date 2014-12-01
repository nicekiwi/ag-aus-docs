
Plugins are located in `/tf/addadons/sourcemod/plugins/` for each server.

Currently in-use:

**[TF2] Adaptive Respawn** - In TF2 default respawn times keep maps flowing, but waiting to spawn is boring. Fast respawn servers remove the waiting, but cause maps to get bogged down and deadlock; which is also boring. This plugin attempt to get a best of both worlds. Fast respawn as much as possible, but when the map stops flowing respawn times are gradually increased until the deadlock is broken.
[https://forums.alliedmods.net/showthread.php?t=147523&highlight=adaptive+respawn](https://forums.alliedmods.net/showthread.php?t=147523&highlight=adaptive+respawn)

**[TF2] Bonus Round Immunity** - Immunty to damage during the bonus round in TF2 [https://forums.alliedmods.net/showthread.php?p=703282](https://forums.alliedmods.net/showthread.php?p=703282)

**[TF2] Bonustime Autorespawn** - This plugin was requested on the forum by Chris-_-. At the end of every round in Team Fortress 2, a scorepanel will show the best 3 players, and everyone on the winning team gets a few seconds to beat the crap out of the losing team (who can't do anything back). This time is called the humiliation time. 
This plugin allows the serveradmin to force losing players (who were dead at the time of the roundend) to respawn or even keep respawning. 
[https://forums.alliedmods.net/showthread.php?p=754589](https://forums.alliedmods.net/showthread.php?p=754589)

**[TF2] gScramble Team Balancer/Scramble** - scramble when one team is over-powered, can trigger a vote instead of scrambling
[https://forums.alliedmods.net/showthread.php?t=89136]

**[TF2] Horseless Headless Horsemann** - Spawns the NPC "Horseless Headless Horsemann" where you are looking [https://forums.alliedmods.net/showthread.php?p=1335413](https://forums.alliedmods.net/showthread.php?p=1335413)

**[TF2] Merasmus Spawner** - This plugin simply spawns the Merasmus with some other neat features. [https://forums.alliedmods.net/showthread.php?p=1826858](https://forums.alliedmods.net/showthread.php?p=1826858)

**[TF2] Monoculus Spawner** - Spawns the new "Monoculus" 2011 Halloween boss where you're looking. [https://forums.alliedmods.net/showthread.php?p=1584688](https://forums.alliedmods.net/showthread.php?p=1584688)

**[TF2] Permanent Crit Vote** - The plugins will ask the player once for his Critvote preference and saves it. 30 Seconds after the map began it will calculate if Crits will be on or off. Players who don't have yet set a preference are not counted in the calculation. 
[https://forums.alliedmods.net/showthread.php?p=1215166](https://forums.alliedmods.net/showthread.php?p=1215166)

**[TF2] Pregame Slaughter** - This mod during the 'waiting for players' period in TF2 will enable friendly fire, and disable clipping through teammates. It will randomly choose melee weapons, mini crits, or full crits. It counts how many team-kills you get, and at the end displays a panel of the top 3 team killers for each team. [https://forums.alliedmods.net/showthread.php?p=1408685](https://forums.alliedmods.net/showthread.php?p=1408685)

**Advanced Advertisements** - This is an advanced advertisement system that takes advantage of TF2's new color system abilities and also has added many new features and bug fixes.
[https://forums.alliedmods.net/showthread.php?p=1718454]

**Custom Chat Colours** - Give particular Steam IDs and admin flags custom chat colors and name tags. Supports any color you can imagine, or team color, green, and olive. This is a rewrite of Simple Chat Colors (Redux). Requires Simple Chat Processor (Redux). Complete documentation is in the config file.
[https://forums.alliedmods.net/showthread.php?t=186695]

**FuncommandsX** - Description: Additional fun commands for SourceMod. Each fun command has full admin menu integration. Built and tested for SourceMod 1.4.6 using TF2, DOD:S and CS:S. Joint project, our first release. [https://forums.alliedmods.net/showthread.php?p=665771](https://forums.alliedmods.net/showthread.php?p=665771)

**MapChooser**, Rock the Vote & Map Votes Extended - As many people are looking or asking about additional features (on IRC and forums) for MapChooser. I decided to share with you my modified version. 
Below is a list of new features:
- Sounds at the start and end of the vote
- Players are warned before the vote (by countdown)
- Plugin displays progress of vote
- Custom maps are marked on the vote menu*
- You can lock slots in vote menu
- Additional vote when none map not reach the required number of votes
- Percentage calculation when to start voting 
[https://forums.alliedmods.net/showthread.php?t=156974](https://forums.alliedmods.net/showthread.php?t=156974)
**Note: Currently broken so its not installed

**Native Votes Basic Commands** - For clients wanting a transparent vote HUD for TF2, download tf2_transvote.zip and unzip it to your steamapps\common\team fortress 2\tf\custom\ folder. 
*** Note:** If you use a custom hud, it may already be using a different vote HUD. [https://forums.alliedmods.net/showthread.php?t=208008](https://forums.alliedmods.net/showthread.php?t=208008)
*Note: Not currently in use

**Simple Chat Processor (Redux)** - Provides global forward for chat messages allowing other plugins to manipulate the display of chat messages.  Currently this only supports SayText2 usermessage. [https://forums.alliedmods.net/showthread.php?p=1820365](https://forums.alliedmods.net/showthread.php?p=1820365)

**Spray Tracer** - This is a handy plugin for server admins to manipulate player sprays in a couple different ways.
1. Trace a player's spray on any surface
The plugin marks which spray is being looked at by a red glow and then displays a menu to deal out punishments.
2. Remove a player's spray from any surface [Not available in No Menu version]
The plugin removes the spray that is being looked at and displays a menu to deal out punishments
3. Spray any player's spray logo on command [Not available in No Menu version] Sprays the selected user's spray where the admin is looking.
The punishments including a text warning, a warning and a slap, a warning and burning the player, a warning and slaying the player, kick, temporary ban, or permanent ban. [https://forums.alliedmods.net/showthread.php?p=665448](https://forums.alliedmods.net/showthread.php?p=665448)

**TF2Items** - This extension allows the attributes, level and quality of items to be modified per player as they are given by the server. 
[https://forums.alliedmods.net/showthread.php?p=1050170?p=1050170](https://forums.alliedmods.net/showthread.php?p=1050170?p=1050170)

**Very Basic High Ping Kicker** - This is a very simple high ping kicker that kicks players based on their ping as reported by SourceMod. The ping is checked at a constant interval (default of 20 seconds) and if their ping exceeds the max ping given, they are internally given a warning. If a player exceeds the maximum number of warnings, they are kicked from the server. That's it.
The plugin does take admin level into account, players with the RESERVED (default) or ROOT flags are immune to ping balancing. The flag that grants immunity can be changed via cvar. You can also specify a grace period before a player will be warned to compensate for first connect ping when a player first joins, and also a minimum number of players in the server before it starts kicking them. 
It also waits 90 seconds after a map change before doing any ping checking, again to allow all players to fully join and pings to normalize. 
[https://forums.alliedmods.net/showthread.php?p=769939](https://forums.alliedmods.net/showthread.php?p=769939)

**Vote Mute/Vote Silence** - Mic spammers and chatty people can now be muted or silenced by popular demand.
There are two versions: votemute and votemute_p
- Votemute is the standard one, where admins can initiate votes.
- Votemute_p is a version where any player can initiate a vote.
[https://forums.alliedmods.net/showthread.php?p=647806](https://forums.alliedmods.net/showthread.php?p=647806)
**Note: Currently broken so its not installed
