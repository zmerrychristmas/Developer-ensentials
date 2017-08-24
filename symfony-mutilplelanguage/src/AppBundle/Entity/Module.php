<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModuleRepository")
 */
class Module
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="language_key", type="string", length=255)
     */
    private $languageKey;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=50)
     */
    private $icon;

    /**
     * @var bool
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled = true;

    /**
    * @var int
    * @ORM\Column(name="open_in", type="integer", options={"default":0})
    */
    private $openIn;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Module
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set languageKey
     *
     * @param string $languageKey
     *
     * @return Module
     */
    public function setLanguageKey($languageKey)
    {
        $this->languageKey = $languageKey;

        return $this;
    }

    /**
     * Get languageKey
     *
     * @return string
     */
    public function getLanguageKey()
    {
        return $this->languageKey;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Module
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Module
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return int
     */
    public function getOpenIn()
    {
        return $this->openIn;
    }

    /**
     * @param int $openIn
     *
     * @return self
     */
    public function setOpenIn($openIn)
    {
        $this->openIn = $openIn;

        return $this;
    }
}

