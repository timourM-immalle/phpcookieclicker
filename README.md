# PHP Cookieclicker

This repo implements a very basic cookieclicker-application.

It contains two branches:

- `session` : using Php's `$_SESSION`
- `cookie` : using Php's `$_COOKIE`

# Get it up and running

Assuming apache (or another webserver) with Php is running
and configured with default configuration, try this:

```
cd /var/www/html
sudo mkdir cookieclicker
sudo chown imma cookieclicker
cd cookieclicker
git clone https://github.com/vbrh-immalle/phpcookieclicker.git .
```
bij: `no space left on device`: `sudo apt-get autoremove` (en u kan zien hoeveel ruimte er is met `df -h`).

(We also assume a user `imma` exists on the system.)

You can show all available (remote) branches with:

```
git branch -a
```

To switch between the 2 versions:

```
git checkout session
git checkout cookie
```

(If your shell has a nice prompt, it will show the current branch.)

# Experiment!

## Browser tools

Use your browser's developer tools to check the cookie-storage
while using the application.

Test it from different profiles (e.g. incognito modus)

## Curl

Use curl to have fine-grained control over the cookies.

Cookies are sent with a HTTP request.
This can be simulated with curl:

```
curl -b mycookie -c mycookie localhost/cookieclicker/click.php
curl -b mycookie -c mycookie localhost/cookieclicker/click.php
curl -b mycookie -c mycookie localhost/cookieclicker/click.php
curl -b mycookie -c mycookie localhost/cookieclicker/
cat mycookie
```

- `-b mycookie` uses the file `mycookie` and sends it with the HTTP request
- `-c mycookie` writes the file `mycookies` when the server sets any cookies

## To try

- Change the expiration time of the cookie (in branch `cookie`)
- Try to cheat the cookieclicker-app (in branch `cookie`)
- ...
