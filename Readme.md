# tiny-ssi-php

A minimal implementation of Apache SSI (server-side includes) for >= PHP 5.6


## Usage

Supports:
- include file
- include virtual
- set var
- echo var

```html

<!--#include virtual="ssi_test_header.html" -->

<!--#set var="title" value="My Title" -->

<div class="container">
    <h1><!--#echo var="title" --></h1>
    <p class="lead">
        contents
    </p>
</div>

<!--#include file="ssi_test_footer.html" -->

```

expecting that 'ssi_test_header.html' and 'ssi_test_footer.html' are in the same folder as the above html file,
you can then do:

```php

$parser = new Pastusiak\TinySSI();
$combined = $parser->parse('ssi_test_body.html');

```

## License

MIT
