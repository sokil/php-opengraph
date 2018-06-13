php-opengraph
====================
[![Total Downloads](http://img.shields.io/packagist/dt/sokil/php-social-opengraph.svg)](https://packagist.org/packages/sokil/php-social-opengraph)
[![Build Status](https://travis-ci.org/sokil/php-opengraph.svg?branch=master&1)](https://travis-ci.org/sokil/php-opengraph)

Lib to render open graph.

Installation
------------
```
composer require sokil/php-social-opengraph
```

Basic Usage
-----------

```php
// Open Graph
$openGraph = new \Sokil\OpenGraph;
$openGraph
  ->setTitle('The Matrix Revolutions')
  ->setDescription('The human city of Zion ...')
  ->setType(\Sokil\OpenGraph::TYPE_PRODUCTS_MOVIE)
  ->setImage('https://server.com/Matrix_Revolutions_poster.jpg')
  ->setUrl('http://www.imdb.com/title/tt0242653/')
  ->setVideoUrl('https://server.com/3453245.torrent')
  ->setVideoType('application/x-bittorrent');
```

Then you can get opengraph as array. This may be useful to render meta tags in frameworks. Example for Yii:

```php
$cs = Yii::app()->getClientScript();
foreach($openGraph->toArray() as $property => $content) {
    $cs->registerMetaTag($content, null, null, array(
        'property'  => $property,
    ));
}
```

You can render meta tags directly:
```php
echo $openGraph->render();

// or just:
echo $openGraph;

```
