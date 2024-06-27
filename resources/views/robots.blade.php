User-agent: *
Disallow: /admin/
Disallow: /private/
Allow: /public/

# Block specific crawler
User-agent: BadBot
Disallow: /

# Allow another specific crawler to access everything
User-agent: GoodBot
Disallow:
