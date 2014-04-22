
[Replays](wiki.teamfortress.com/wiki/Replay) allow players to record a life and retrieve a replay of it after their death. The TF2 server handles this by passing these files onto another server for temporary caching and serving.

Configuration files include `/tf/cfg/replay.cfg` and `replay_ftp.cfg`. The former turns replays on/off and selects which protocol between HTTP or FTP for use (sadface).

### replay_ftp.cfg

From `/tf/cfg/replay_ftp.cfg`:

```
// These are used to reconstruct a URL on the client.

replay_fileserver_host                  "ag-aus.org"
replay_fileserver_port                  "80"
replay_fileserver_path                  "/tf/replay"
```

Continuing, this section holds private login data that the TF2 server uses to send replays to:

```
// Your FTP info. This data is private and not shared with the client.

replay_fileserver_offload_protocol      "ftp"
replay_fileserver_offload_hostname      "ftp.domain.org"
replay_fileserver_offload_port          "21"
replay_fileserver_offload_remotepath    "/"
replay_fileserver_offload_login         "ftp-user@domain.org"
replay_fileserver_offload_password      "$password"
replay_fileserver_offload_maxuploads    "16"
```

Additionally, the server provider may also have to enable replays.