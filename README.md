# yafir
Yafir - Yet Another Favicon Relayer

A favicon grabber/relayer that returns the favicon of a site and also uses that same favicon as it's own.

Useful for services that, from an url, uses favicon reference directly from what it's set in ```<link rel="icon" href="...">``` tag of the url.

## How to use

```
yafir.infinityfreeapp.com?site={hostname}
```

### Example

[yafir.infinityfreeapp.com?site=google.com](https://yafir.infinityfreeapp.com?site=google.com)

## For developers

Here is a list of some alternatives to the service that is used to retrieve the favicon:

- https://icons.duckduckgo.com/ip2/{hostname}.ico
- https://www.google.com/s2/favicons?domain_url={hostname}
- https://favicon.yandex.net/favicon/{hostname1}/{hostname2}/
- https://logo.clearbit.com/{hostname}
- https://f1.allesedv.com/16/{hostname}
