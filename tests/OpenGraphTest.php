<?php

namespace Sokil;

class OpenGraphTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $expected = '<meta property="og:title" content="Title" /><meta property="og:type" content="website" /><meta property="og:image" content="http://example.com/image.png" /><meta property="og:url" content="http://example.com/" />';
        
        $og = new OpenGraph;
        $og
            ->setTitle('Title')
            ->setType(OpenGraph::TYPE_WEBSITES_WEBSITE)
            ->setImage('http://example.com/image.png')
            ->setUrl('http://example.com/');
        
        $this->assertEquals($expected, $og->render());
        
        $this->assertEquals($expected, (string) $og);
    }
    
    public function testToArray()
    {        
        $og = new OpenGraph;
        $og
            ->setTitle('Title')
            ->setType(OpenGraph::TYPE_WEBSITES_WEBSITE)
            ->setImage('http://example.com/image.png')
            ->setUrl('http://example.com/');
        
        $this->assertEquals(array(
            'og:title'  => 'Title',
            'og:type'   => 'website',
            'og:image'  => 'http://example.com/image.png',
            'og:url'    => 'http://example.com/'
        ), $og->toArray());
    }
    
    /**
     * @expectedException \Exception
     */
    public function testEmptyrequiredFields() {
        $og = new OpenGraph;
        $og->render();
    }
}