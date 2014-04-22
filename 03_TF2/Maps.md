We do like to run *a lot* of custom maps on our servers. ☺

Custom maps need to be synchronised between the TF2 server hosting the map and the [web server which indexes all our maps](http://ag-aus.org/tf/maps/) while serving them to TF2 clients as needed (e.g. on map change when the server changes to a map the client doesn’t have locally).

## Automation baby

Goodness to come…

## Doin it by hand

### Map lists

Map files are stored in `/tf/maps/`. In addition we need to add the maps to a number of config files:

* `/tf/mapcycle.txt`

This is the “cycle” list that the server will rotate through end-of-map. We’ve configured it to be the list that populates the options for end-of-map voting nominations (via `!nominate`). The list is curated to contain no gimmick/event maps.

* `/tf/maplist.txt`

This is the full list of maps that the server knows of. It’s configured to populate `!rtv`. The list also contains no gimmick/event maps.

* `/tf/addons/sourcemod/configs/mapchooser_extended/maps/tf.txt`

This list is used by SourceMod mapchooser plugin and is our custom “cycle” list, again without gimmick/event maps.

Because we want to ensure staff can change to every available map on our server we need to create a fourth file, `adminmenu_maplist.ini` to list *all maps* uploaded to the server:

* `/tf/addons/sourcemod/configs/adminmenu_maplist.ini`

### SourceMod plugin

To direct our plugins to the correct map list(s) we need to edit another file:

- `/tf/addons/sourcemod/configs/maplist.cfg`

Prior to editing it’ll look something like this:

```
/**
 * Use this file to configure map lists.
 *
 * Each section is a map list that plugins can use.  For example, the Admin Menu
 * requests an "admin menu" map list, and you can control which maps appear via
 * this file.
 *
 * Each section must have a property that explains where to read the maps from.
 * There are two properties:
 *
 *    target         - Redirect the request to another section.
 *    file    - Read a file of map names, in mapcycle.txt format.
 *
 * There is one section by default, called "mapcyclefile" - it is mapped to the
 * mapcycle.txt file, or whatever the contents of your mapcyclefile cvar is.
 *
 * If a plugin requests a map list file which doesn't exist, or is empty, SourceMod
 * tries the "default" section, and then the "mapcyclefile" section.
 */

/
{
"MapLists"

  /**
   * Default requests go right to the mapcyclefile.
   */
  "default"
  {
    "target"    "mapcyclefile"
  }

  /* Admin menu, map menu */
  "sm_map menu"
  {
    "file"      "default"
  }

  /* Admin menu, map voting menu */
  "sm_votemap menu"
  {
    "file"      "default"
  }

  /* For the "randomcycle" plugin */
  "randomcycle"
  {
    "target"    "default"
  }

  /* For the "mapchooser" plugin */
  "mapchooser"
  {
    "target"    "default"
  }

  /* For the "nominations" plugin */
  "nominations"
  {
    "target"    "default"
  }
}
/
```

As seen above, `mapcyclefile` (`mapcycle.txt` in the `/tf/` folder) is the current target for all map lists. All other plugins default to this setting. By directing them to specified map lists we can customise each plugin as we wish.

We want to be able to restrain the `randomcycle` plugin — which handles end-of-round map voting — to the main cycle of maps we like, avoiding special event maps or gimmick maps. This map list is `tf.txt` from above, found in `/tf/addons/sourcemod/configs/mapchooser_extended/maps/`.

We also want to be able to nominate those fun gimmick maps sometimes, so we need to direct the nomination plugin to a different file. In this case the `maplist.txt` file in the `/tf/` folder.

The map list we created for server admins is chosen from the `sm_map` and `sm_votemap` menus so we will need to direct those plugins to the correct location: `/tf/addons/sourcemod/configs/adminmenu_maplist.ini`

When you've finished with your map config it should look like this:

```
/
"MapLists"
{
  /**
 * Default requests go right to the mapcyclefile.
 */
"default"
{
    "target"        "mapcyclefile"
}

/* Admin menu, map menu */
"sm_map menu"
{
    "file"          "addons/sourcemod/configs/adminmenu_maplist.ini"
}

/* Admin menu, map voting menu */
"sm_votemap menu"
{
    "file"          "addons/sourcemod/configs/adminmenu_maplist.ini"
}

/* For the "randomcycle" plugin */
"randomcycle"
{
    "file"      "tf.txt"
}

/* For the "mapchooser" plugin */
"mapchooser"
{
    "file"      "tf.txt"
}

/* For the "nominations" plugin */
"nominations"
{
    "file"      "maplist.txt"
}
}
```

This is how Server #1 is currently set up. It shows all **nominate-only** maps, in-game during the vote, by prefixing an asterisk (`*`) to them . By using the `!nominate` command you will see all the maps available on the server. If there are no nominations prior to the end-of-map vote, there will not be any 'gimmick' maps included in that vote.

## Pathing — `.nav` files

For bots or bosses to function properly on maps they require an accompanying `.nav` file for pathing. Spawning a boss or bot on any other map will result in them being stuck in the location where they were spawned.

The following is a list of all the maps on the Chill Out server that have respective nav files:

```
cp_dustbowl.nav
cp_gorge.nav
cp_manor_event.nav
ctf_ag_halloween_2012.nav
koth_badlands.nav
koth_haunted_fall_event.nav
koth_king.nav
koth_lakeside_event.nav
koth_lakeside_final.nav
koth_lighthouse_rc5.nav
koth_nucleus.nav
koth_sawmill.nav
koth_viaduct.nav
koth_viaduct_event.nav
koth_waste.nav
pl_badwater.nav
pl_barnblitz.nav
pl_cashworks_final1.nav
pl_curve.nav
pl_goldrush.nav
pl_hoodoo_final.nav
pl_minepit.nav
pl_swiftwater_final_rc.nav
pl_thundermountain.nav
pl_upward.nav
tr_dustbowl.nav
tr_target.nav
trade_clocktown_b2a.nav
```