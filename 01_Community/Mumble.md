

We host a community *Murmur* server for us to voice chat via [Mumble](http://mumble.sourceforge.net/) with one another. It’s supports low-latency, high quality voice chats and many more [features](http://mumble.sourceforge.net/Features).

> Mumble is an open source voice communication application that features a customisable in game overlay, application skins, conversation recording, and advanced voice activity detection.

Mumble connects to our Murmur server (client–server architecture), so to join you'll want to fetch a copy of the client from the Mumble wiki website, under the “Get Mumble” section. Mumble clients are available for:

- Windows
- Mac
- *nix
- iOS/iPhone

The wiki also has a [useful install guide](http://mumble.sourceforge.net/Installing_Mumble).

## Joining the server

Upon installing and opening you’ll receive two windows:

1. The main (inactive) Mumble window
2. (active) Mumble *Server Connect* window.

In the second dialogue click “Add New…” and the *Add Server* window will appear. This is where we add our server information:

- Label: arbitray — a label/descriptor for the server (e.g. AG-Aus Mumble)
- Address: `203.33.121.208`
- Port: `64740`
- Username: preferred username (we prefer Steam nicks to tell who is who)

OK on that and then select the server from the favourites list you just added, and connect.

## New users

New users will land in the in the root channel, unable to move or speak until an admin authorises/registers them (right click user, *Register*). New users can hear others in the room and use the text chat to chat to folks.

Note that text chat is separate for each room/channel.

## Configuring audio input

This is normally part of the install process, but you can (re)configure Mumble via the settings/preferences pane and also step through the *Audio Wizard* audio setup too. Read and follow the instructions carefully.

**Note:** plese select a *Push to Talk* button and don’t `V` (the default voice chat key within TF2).

## Access Control Lists (ACL)

We have applied a cascading set of access permissions (ACLs) across the channels. They cascade insofar as the channel are tiered with child rooms inhereting certain permission from parent rooms, alongisde user types/lists that assign user permissions across the channels.

The channels are organised thusly:

```
Alternative Gaming
|——AG Staff Channel
|——General Chat
|——Fortress of Solitude Mute Channel
|——Streaming Channel
|——Couch Potatoes
|——Gaming Channels
|  |——#1 TF2 Server
|  |——#2 TF2 Server
|     |——HL Away Team
|     |——HL Home Team
|  |——#3 TF2 Server
|  |——#4 TF2 MvM Server
|  |——Awesomenauts
|  |——Borderlands
|  |——…
|  |——Tropico
|——Temporary DIY Channels
```

Most of the ACLs provided are given in the root channel (*Alternative Gaming*).

Channel settings and permissions can be edited by right-clicking on a channel and selecting *Edit*, split amongst *Properties*, *Groups*, and *ACL*:

* Properties covers channel descriptions, password, and position amongst other channels.
* Groups covers… custom-defined groups of users alongside the inbuilt selector/ACL: *`@all`*.
* ACL defines permissions for those lists defined in Groups, ordered from least to most important (in priviledges)

Remember:

- *Inherited permissions*, that appear in main and sub channels, below the `root` channel, can not be changed from within those main and sub channels.
- The default ACL group (*`@all`*) contains some permissions that cannot be changed.

We have created a second “@all” group to tweak some of the permissions between users: the second “@all” group has had all but *Enter* and *Text* permissions removed (see below). As it occurs lower in the list, these are the permissions that Mumble will set when all (new) users join for the first time.

### Permission glossary

Write ACL
: This gives total control over the channel, including the ability to edit ACLs. This privilege implies all other privileges.

Traverse
: Without this privlege, a player will be unable to access the channel or any subchannels in any way, regardless of privileges in the subchannel. Don't deny this unless you really know what you're doing; you can probably achieve the effect you want by denying a player the Enter privlege.


Enter
: Allows player to enter channel. Even without this privilege, a player can be moved into the channel by a player with Move/Kick.

Speak
: Allows player to speak in channel. For linked channels, only players with Speak privilege in the destination channels will be heard. This can be used to set up a hierarchy of linked channels where all players can hear all the leader of each group, but normal players will not be propageated outside their channel. This way, players will hear someone else is talkig to the group leader and (hopefully) stop talking for a short while. If a player joins a channel he does not have Speak privilege in, he will be suppressed by the server, and will be unable to speak until someone unmutes him.

Mute / Deafen
: Allows a player to mute or deafen another player. Note that mute status will follow a player until he is either manually unmuted or reconnects to the server.

Move / Kick
: Allows a player to move another player to another channel or kick them off the server. Unless the target player has Enter privileges in the channel he's being moved to, Move privileges is required in both channels.

Make Channel
: Allows a player to make a subchannel in the current channel. The player will automatically be added to the admin group in the new channel, so make the inheritable ACLs give the privileges you desire.

Make Temporary Channel
: Allows a player to make a temporary subchannel in the current channel, which will automatically be deleted when the last user leaves it. The creator will automatically be moved into the channel after creating it.

Link Channel
: Allows a player to link or unlink, as well as push-to-link a channel. Unlinking requires Link privilege in either channel, and linking requires Link privilege in both.

AltSpeak
: Allows a player to speak in channel if he is holding the Alt Push-To-Talk key (can be configured in the Shortcuts tab of the options window). It works as Speak for linked channels, etc. This may be used to broadcast to a hierarchy of channels without having to link to them.

### Set permissions

The bulk of the permissions are set for the root channel as they cascade to their children.

#### Root channel

* *`@all`* (inbuilt): allow *traverse*, *enter*, *speak*, *whisper*, *text message*; deny else.
* `@all` (custom): allow *enter*, *text messsage*; deny else
* `@auth`: allow *traverse*, *enter*, *speak*, *whisper*, *text message*, *make temporary*; deny else.
* `@admin`: allow *write ACL*, *speak* — other fields left blank
* `@moderators`: deny *write ACL*, *link channel*, *register self*; allow all else.

#### Mute channel

Designed for idling. Only staff and mods can speak.

#### DIY temporary channels

Channels created herein will be temporary, that is, all members of `@auth` can make temporary channels and own those channels, but when the channel is empty is is automatically removed. This keeps the DIY channels nice and clean over time.

---

## Resources

- [SourceForge Mumble Wiki](http://mumble.sourceforge.net/Main_Page)
- [Mumle wiki FAQ](http://mumble.sourceforge.net/FAQ)
- [Mumble page on Wikipedia](https://en.wikipedia.org/wiki/Mumble_(software))

Tutorials:

- [ACL Tutorial](http://mumble.sourceforge.net/ACL_Tutorial)
- [Youtube ACL tutorial](http://www.youtube.com/watch?v=VOeMsMjQRoM)
- [AG Mumble tutorial on the Steam group](http://steamcommunity.com/groups/AG-Aus/discussions/0/846940247588755659/)

Related:

- [Murmur server guide](http://mumble.sourceforge.net/Murmurguide)