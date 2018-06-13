<?php

namespace Sokil;

/**
 * Documentation: http://ogp.me/
 */
class OpenGraph
{
    /**
     * @var array opengraph property list
     */
    private $_propertyList = array(
        // basic
        'title'             => null,
        'type'              => null,
        'image'             => null,
        'url'               => null,
        'description'       => null,
        'site_name'         => null,

        // products
        'upc'               => null,
        'isbn'              => null,

        // location
        'latitude'          => null,
        'longitude'         => null,
        'street-address'    => null,
        'locality'          => null,
        'region'            => null,
        'postal-code'       => null,
        'country-name'      => null,

        // contact
        'email'             => null,
        'phone_number'      => null,
        'fax_number'        => null,

        // video
        'video'             => null,
        'video:height'      => null,
        'video:width'       => null,
        'video:type'        => null,

        //audio
        'audio'             => null,
        'audio:title'       => null,
        'audio:artist'      => null,
        'audio:album'       => null,
        'audio:type'        => null,
    );

    /**
     * list of facebook admins
     * @var array
     */
    private $_facebookAdminList = array();


    const TYPE_ACTIVITIES_ACTIVITY      = 'activity';
    const TYPE_ACTIVITIES_SPORT         = 'sport';

    const TYPE_BUSINESSES_BAR           = 'bar';
    const TYPE_BUSINESSES_COMPANY       = 'company';
    const TYPE_BUSINESSES_CAFE          = 'cafe';
    const TYPE_BUSINESSES_HOTEL         = 'hotel';
    const TYPE_BUSINESSES_RESTAURANT    = 'restaurant'  ;

    const TYPE_GROUPS_CAUSE             = 'cause';
    const TYPE_GROUPS_SPORTS_LEAGUE     = 'sports_league';
    const TYPE_GROUPS_SPORTS_TEAM       = 'sports_league';

    const TYPE_ORGANIZATIONS_BAND       = 'band';
    const TYPE_ORGANIZATIONS_GOVERNMENT = 'government';
    const TYPE_ORGANIZATIONS_NON_PROFIT = 'non_profit';
    const TYPE_ORGANIZATIONS_SCHOOL     = 'school';
    const TYPE_ORGANIZATIONS_UNIVERSITY = 'university';

    const TYPE_PEOPLE_ACTOR             = 'actor';
    const TYPE_PEOPLE_ATHLETE           = 'athlete';
    const TYPE_PEOPLE_AUTHOR            = 'author';
    const TYPE_PEOPLE_DIRECTOR          = 'director';
    const TYPE_PEOPLE_MUSICIAN          = 'musician';
    const TYPE_PEOPLE_POLITICIAN        = 'politician';
    const TYPE_PEOPLE_PROFILE           = 'profile';
    const TYPE_PEOPLE_PUBLIC_FIGURE     = 'public_figure';

    const TYPE_PLACES_CITY              = 'city';
    const TYPE_PLACES_COUNTRY           = 'country';
    const TYPE_PLACES_LANDMARK          = 'landmark';
    const TYPE_PLACES_STATE_PROVINCE    = 'state_province';


    const TYPE_PRODUCTS_ALBUM           = 'album';
    const TYPE_PRODUCTS_BOOK            = 'book';
    const TYPE_PRODUCTS_DRINK           = 'drink';
    const TYPE_PRODUCTS_FOOD            = 'food';
    const TYPE_PRODUCTS_GAME            = 'game';
    const TYPE_PRODUCTS_MOVIE           = 'movie';
    const TYPE_PRODUCTS_PRODUCT         = 'product';
    const TYPE_PRODUCTS_SONG            = 'song';
    const TYPE_PRODUCTS_TV_SHOW         = 'tv_show';

    const TYPE_WEBSITES_ARTICLE         = 'article';
    const TYPE_WEBSITES_BLOG            = 'blog';
    const TYPE_WEBSITES_WEBSITE         = 'website';

    public function setFromArray($propertyList)
    {
        $validPropertyList = array_intersect_key($propertyList, $this->_propertyList);

        $this->_propertyList = array_merge($validPropertyList, $this->_propertyList);

        return $this;
    }

    public function addFacebookAdmin($identity)
    {
        if(is_array($identity)) {
            $this->_facebookAdminList += $identity;
        }
        else {
            $this->_facebookAdminList[] = $identity;
        }

        return $this;
    }

    public function setTitle($title)
    {
        $this->_propertyList['title'] = strip_tags($title);

        return $this;
    }

    public function setType($type)
    {
        $this->_propertyList['type'] = $type;

        return $this;
    }

    public function setImage($image)
    {
        $this->_propertyList['image'] = $image;

        return $this;
    }

    public function setUrl($url)
    {
        $this->_propertyList['url'] = $url;

        return $this;
    }

    public function setDescription($description)
    {
        $this->_propertyList['description'] = strip_tags($description);

        return $this;
    }

    public function setSiteName($siteName)
    {
        $this->_propertyList['site_name'] = $siteName;

        return $this;
    }

    public function setUPC($upc)
    {
        $this->_propertyList['upc'] = $upc;

        return $this;
    }

    public function setISBN($isbn)
    {
        $this->_propertyList['isbn'] = $isbn;

        return $this;
    }

    /**
     * latitude
     */
    public function setLatitude($latitude)
    {
        $this->_propertyList['latitude'] = $latitude;

        return $this;
    }

    /**
     * longitude
     */
    public function setLongitude($longitude)
    {
        $this->_propertyList['longitude'] = $longitude;

        return $this;
    }

    /**
     * street-address
     */
    public function setStreetAddress($streetAddress)
    {
        $this->_propertyList['street-address'] = $streetAddress;

        return $this;
    }

    /**
     * locality
     */
    public function setLocality($locality)
    {
        $this->_propertyList['locality'] = $locality;

        return $this;
    }

    /**
     * region
     */
    public function setRegion($region)
    {
        $this->_propertyList['region'] = $region;

        return $this;
    }

    /**
     * postal-code
     */
    public function setPostalCode($postalCode)
    {
        $this->_propertyList['postal-code'] = $postalCode;

        return $this;
    }

    /**
     * country-name
     */
    public function setCountryName($countryName)
    {
        $this->_propertyList['country-name'] = $countryName;

        return $this;
    }

    /**
     * email
     */
    public function setEmail($email)
    {
        $this->_propertyList['email'] = $email;

        return $this;
    }

    /**
     * phone_number
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->_propertyList['phone_number'] = $phoneNumber;

        return $this;
    }

    /**
     * fax_number
     */
    public function setFaxNumber($faxNumber)
    {
        $this->_propertyList['country-name'] = $countryName;

        return $this;
    }

    /**
     * video
     */
    public function setVideoUrl($url)
    {
        $this->_propertyList['video'] = $url;

        return $this;
    }

    /**
     * video:type
     */
    public function setVideoType($type)
    {
        $this->_propertyList['video:type'] = $type;

        return $this;
    }

    /**
     * video:height
     * video:width
     */
    public function setVideoDimensoin($height, $width)
    {
        $this->_propertyList['video:height']    = $height;
        $this->_propertyList['video:width']     = $width;

        return $this;
    }

    /**
     * audio
     */
    public function setAudioUrl($url)
    {
        $this->_propertyList['audio'] = $url;

        return $this;
    }

    /**
     * audio:title
     */
    public function setAudioTitle($audioTitle)
    {
        $this->_propertyList['audio:title'] = $audioTitle;

        return $this;
    }

    /**
     * audio:artist
     */
    public function setAudioArtist($audioArtist)
    {
        $this->_propertyList['country-name'] = $countryName;

        return $this;
    }

    /**
     * audio:album
     */
    public function setAudioAlbum($audioAlbum)
    {
        $this->_propertyList['audio:album'] = $audioAlbum;

        return $this;
    }

    /**
     * audio:type
     */
    public function setAudioType($audioType)
    {
        $this->_propertyList['audio:type'] = $audioType;

        return $this;
    }
    
    public function __toString()
    {
        return $this->render();
    }
    
    public function toArray()
    {
        $tags = array();
        
        foreach(array_filter($this->_propertyList) as $propertyName => $propertyValue) {
            $tags['og:' . $propertyName] = $propertyValue;
        }

        if(count($this->_facebookAdminList)) {
            $tags['fb:admins'] = implode(';', $this->_facebookAdminList);
        }
        
        return $tags;
    }
    
    public function render()
    {
        //test required fields
        if(empty($this->_propertyList['title'])) {
            throw new \Exception('Open Graph page title not specified');
        }

        if(empty($this->_propertyList['type'])) {
            throw new \Exception('Open Graph page type not specified');
        }

        if(empty($this->_propertyList['image'])) {
            throw new \Exception('Open Graph page image not specified');
        }

        if(empty($this->_propertyList['url'])) {
            throw new \Exception('Open Graph page URL not specified');
        }

        // render
        $tags = array();
        $metaTagPattern = '<meta property="%s" content="%s" />';
        
        foreach(array_filter($this->_propertyList) as $propertyName => $propertyValue) {
            $tags[] = sprintf($metaTagPattern, 'og:' . $propertyName, $propertyValue);
        }

        if(count($this->_facebookAdminList)) {
            $tags[] = sprintf($metaTagPattern, 'fb:admins', implode(';', $this->_facebookAdminList));
        }

        return implode(PHP_EOL, $tags);
    }
}