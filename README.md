# mmhforensics-nowp


### htaccess for react router
`
RewriteEngine On
RewriteCond %{HTTPS}  !=on
RewriteRule ^/?(.*) https://%{SERVER_NAME}/$1 [R,L]

<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteBase /
  RewriteRule ^index\.html$ - [L]
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-l
  RewriteRule . /index.html [L]
</IfModule>`