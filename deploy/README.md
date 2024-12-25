# Deploy

You can use the webhook template `webhook.conf.template` and the `deploy.sh` script in `deploy/` for an automatic deployment from a (github) webhook.

For this to work follow these steps (using alpine):

```bash
apk add webhook
cp deploy/hooks.json.template deploy/hooks.json
vi deploy/hooks.json
# adjust content of deploy/hooks.json
# replace all variables accordingly

# copy webhook service file
cp deploy/webhook.template /etc/init.d/webhook
vi /etc/init.d/webhook
# adjust content of /etc/init.d/webhook
chmod +x /etc/init.d/webhook

service webhook start
rc-update add webhook boot

vi /etc/nginx/http.d/default.conf
# adjust the nginx config
# location /hooks/ {
#     proxy_http_version 1.1;
#     proxy_set_header   Upgrade $http_upgrade;
#     proxy_set_header   Connection 'upgrade';
#     proxy_set_header   X-Forwarded-For $remote_addr;
#     proxy_set_header   X-Real-IP  $remote_addr;
#     proxy_set_header   Host $host;
# 
#     proxy_pass         http://127.0.0.1:9001/hooks/;
#     proxy_redirect     off;
# 
#     #access_log $LOG_PATH/nginx-access.hooks.log hooks_log;
#     #error_log $LOG_PATH/nginx-error.backend.hook.log warn;
# }
```

For the github webhook configure the following:

| Field                                                | Value                                      |
|------------------------------------------------------|--------------------------------------------|
| Payload URL                                          | <https://nsosp.org.it4c.dev//hooks/github> |
| Content type                                         | application/json                           |
| Secret                                               | A SECRET                                   |
| SSL verification                                     | Enable SSL verification                    |
| Which events would you like to trigger this webhook? | Send me everything.                        |
| Active                                               | [x]                                        |

## On Problems with Deployment

If you merge into the `master` branch and the deployment is not working …

Check if the webhook is still running:

```bash
$ service webhook status
  * status: stopped 
```

In case it's not running just start it:

```bash
§ service webhook start
  * Starting webhook ... [ ok ]
```

Make sure that the webhook service will be restarted after reboot of the system, see above.
Check it like this:

```bash
$ rc-status boot
  Runlevel: boot
    webhook
    bootmisc
    networking
    syslog
    nginx
    php-fpm81
    devfs
```

To activate the webhook again and get the deployment from the actual code click on [Github redeliver](https://docs.github.com/en/webhooks/testing-and-troubleshooting-webhooks/redelivering-webhooks) like described.
