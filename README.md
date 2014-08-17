php-social-opengraph
====================

Lib to render open graph.

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
