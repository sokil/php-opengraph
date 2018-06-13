<?php

namespace Sokil;

/**
 * @see http://ogp.me/
 */
class OpenGraph
{
    /**
     * @var array opengraph property list
     */
    private $propertyList = array(
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
    private $facebookAdminList = array();

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

    /**
     * @param array $propertyList
     *
     * @return self
     */
    public function setFromArray($propertyList)
    {
        $validPropertyList = array_intersect_key($propertyList, $this->propertyList);

        $this->propertyList = array_merge($validPropertyList, $this->propertyList);

        return $this;
    }

    /**
     * @param string $identity
     *
     * @return self
     */
    public function addFacebookAdmin($identity)
    {
        if(is_array($identity)) {
            $this->facebookAdminList += $identity;
        }
        else {
            $this->facebookAdminList[] = $identity;
        }

        return $this;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->propertyList['title'] = strip_tags($title);

        return $this;
    }

    /**
     * @param string $type One of self::TYPE_* constants or any string
     *
     * @return self
     */
    public function setType($type)
    {
        $this->propertyList['type'] = $type;

        return $this;
    }

    /**
     * @param string $image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->propertyList['image'] = $image;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->propertyList['url'] = $url;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->propertyList['description'] = strip_tags($description);

        return $this;
    }

    /**
     * @param string $siteName
     *
     * @return self
     */
    public function setSiteName($siteName)
    {
        $this->propertyList['site_name'] = $siteName;

        return $this;
    }

    /**
     * @param string $upc
     *
     * @return self
     */
    public function setUPC($upc)
    {
        $this->propertyList['upc'] = $upc;

        return $this;
    }

    /**
     * @param string $isbn
     *
     * @return self
     */
    public function setISBN($isbn)
    {
        $this->propertyList['isbn'] = $isbn;

        return $this;
    }

    /**
     * latitude
     *
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->propertyList['latitude'] = $latitude;

        return $this;
    }

    /**
     * longitude
     *
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->propertyList['longitude'] = $longitude;

        return $this;
    }

    /**
     * street-address
     *
     * @param string $streetAddress
     *
     * @return self
     */
    public function setStreetAddress($streetAddress)
    {
        $this->propertyList['street-address'] = $streetAddress;

        return $this;
    }

    /**
     * locality
     *
     * @param string $locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        $this->propertyList['locality'] = $locality;

        return $this;
    }

    /**
     * region
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->propertyList['region'] = $region;

        return $this;
    }

    /**
     * postal-code
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->propertyList['postal-code'] = $postalCode;

        return $this;
    }

    /**
     * country-name
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->propertyList['country-name'] = $countryName;

        return $this;
    }

    /**
     * email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->propertyList['email'] = $email;

        return $this;
    }

    /**
     * phone_number
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->propertyList['phone_number'] = $phoneNumber;

        return $this;
    }

    /**
     * fax_number
     *
     * @param string $faxNumber
     *
     * @return self
     */
    public function setFaxNumber($faxNumber)
    {
        $this->propertyList['fax_number'] = $faxNumber;

        return $this;
    }

    /**
     * video
     *
     * @param string $url
     *
     * @return self
     */
    public function setVideoUrl($url)
    {
        $this->propertyList['video'] = $url;

        return $this;
    }

    /**
     * video:type
     *
     * @param string $type
     *
     * @return string
     */
    public function setVideoType($type)
    {
        $this->propertyList['video:type'] = $type;

        return $this;
    }

    /**
     * video:height
     * video:width
     *
     * @param string $height
     * @param string $width
     *
     * @return self
     */
    public function setVideoDimension($height, $width)
    {
        $this->propertyList['video:height']    = $height;
        $this->propertyList['video:width']     = $width;

        return $this;
    }

    /**
     * @deprecated use self::setVideoDimension
     *
     * @param string $height
     * @param string $width
     *
     * @return self
     */
    public function setVideoDimensoin($height, $width)
    {
        return $this->setVideoDimensoin($height, $width);
    }

    /**
     * audio
     *
     * @param string $url
     *
     * @return self
     */
    public function setAudioUrl($url)
    {
        $this->propertyList['audio'] = $url;

        return $this;
    }

    /**
     * audio:title
     *
     * @param string $audioTitle
     *
     * @return self
     */
    public function setAudioTitle($audioTitle)
    {
        $this->propertyList['audio:title'] = $audioTitle;

        return $this;
    }

    /**
     * audio:artist
     *
     * @param string $audioArtist
     *
     * @return self
     */
    public function setAudioArtist($audioArtist)
    {
        $this->propertyList['audio:artist'] = $audioArtist;

        return $this;
    }

    /**
     * audio:album
     *
     * @param string $audioAlbum
     *
     * @return self
     */
    public function setAudioAlbum($audioAlbum)
    {
        $this->propertyList['audio:album'] = $audioAlbum;

        return $this;
    }

    /**
     * audio:type
     *
     * @param string $audioType
     *
     * @return self
     */
    public function setAudioType($audioType)
    {
        $this->propertyList['audio:type'] = $audioType;

        return $this;
    }

    /**
     * @return string
     *
     * @throws \Exception
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $tags = array();
        
        foreach(array_filter($this->propertyList) as $propertyName => $propertyValue) {
            $tags['og:' . $propertyName] = $propertyValue;
        }

        if(count($this->facebookAdminList)) {
            $tags['fb:admins'] = implode(';', $this->facebookAdminList);
        }
        
        return $tags;
    }

    /**
     * @return string
     *
     * @throws \Exception
     */
    public function render()
    {
        //test required fields
        if (empty($this->propertyList['title'])) {
            throw new \Exception('Open Graph page title not specified');
        }

        if (empty($this->propertyList['type'])) {
            throw new \Exception('Open Graph page type not specified');
        }

        if (empty($this->propertyList['image'])) {
            throw new \Exception('Open Graph page image not specified');
        }

        if (empty($this->propertyList['url'])) {
            throw new \Exception('Open Graph page URL not specified');
        }

        // render
        $tags = array();
        $metaTagPattern = '<meta property="%s" content="%s" />';
        
        foreach(array_filter($this->propertyList) as $propertyName => $propertyValue) {
            $tags[] = sprintf($metaTagPattern, 'og:' . $propertyName, $propertyValue);
        }

        if (count($this->facebookAdminList)) {
            $tags[] = sprintf($metaTagPattern, 'fb:admins', implode(';', $this->facebookAdminList));
        }

        return implode(PHP_EOL, $tags);
    }
}