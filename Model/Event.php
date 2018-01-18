<?php

namespace DylanGD\FullCalendarBundle\Model;

class Event extends FullCalendarEvent
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="title",  nullable = true)
     */
    protected $title;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="allDay", nullable = true)
     */
    protected $allDay;
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="event_start")
     */
    protected $startDate;
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", name="event_end")
     */
    protected $endDate;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="url", nullable = true)
     */
    protected $url;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="className", nullable = true)
     */
    protected $className;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="editable", nullable = true)
     */
    protected $editable = true;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="startEditable", nullable = true)
     */
    protected $startEditable = true;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="durationEditable", nullable = true)
     */
    protected $durationEditable = true;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="rendering", nullable = true)
     */
    protected $rendering;
    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="overlap", nullable = true)
     */
    protected $overlap = true;
    /**
     * @var integer
     * @ORM\Column(type="integer", name="event_constraint", nullable = true)
     */
    protected $constraint;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="event_source", nullable = true)
     */
    protected $source;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="color", nullable = true)
     */
    protected $color;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="backgroundColor", nullable = true)
     */
    protected $backgroundColor;
    /**
     * @var string
     * @ORM\Column(type="string", length=255, name="textColor", nullable = true)
     */
    protected $textColor;
    /**
     * @var array
     * @ORM\Column(type="array", name="customFields", nullable = true)
     */
    protected $customFields = [];
    /**
     * @param string $title
     * @param \DateTime $start
     */
    public function __construct($title, \DateTime $start)
    {
        $this->title = $title;
        $this->startDate = $start;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * @return boolean
     */
    public function isAllDay()
    {
        return $this->allDay;
    }
    /**
     * @param boolean $allDay
     */
    public function setAllDay($allDay)
    {
        $this->allDay = $allDay;
    }
    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }
    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }
    /**
     * @param string $className
     */
    public function setClassName($className)
    {
        $this->className = $className;
    }
    /**
     * @return boolean
     */
    public function isEditable()
    {
        return $this->editable;
    }
    /**
     * @param boolean $editable
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;
    }
    /**
     * @return boolean
     */
    public function isStartEditable()
    {
        return $this->startEditable;
    }
    /**
     * @param boolean $startEditable
     */
    public function setStartEditable($startEditable)
    {
        $this->startEditable = $startEditable;
    }
    /**
     * @return boolean
     */
    public function isDurationEditable()
    {
        return $this->durationEditable;
    }
    /**
     * @param boolean $durationEditable
     */
    public function setDurationEditable($durationEditable)
    {
        $this->durationEditable = $durationEditable;
    }
    /**
     * @return string
     */
    public function getRendering()
    {
        return $this->rendering;
    }
    /**
     * @param string $rendering
     */
    public function setRendering($rendering)
    {
        $this->rendering = $rendering;
    }
    /**
     * @return boolean
     */
    public function isOverlap()
    {
        return $this->overlap;
    }
    /**
     * @param boolean $overlap
     */
    public function setOverlap($overlap)
    {
        $this->overlap = $overlap;
    }
    /**
     * @return int
     */
    public function getConstraint()
    {
        return $this->constraint;
    }
    /**
     * @param int $constraint
     */
    public function setConstraint($constraint)
    {
        $this->constraint = $constraint;
    }
    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }
    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }
    /**
     * @param string $backgroundColor
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }
    /**
     * @return string
     */
    public function getTextColor()
    {
        return $this->textColor;
    }
    /**
     * @param string $textColor
     */
    public function setTextColor($textColor)
    {
        $this->textColor = $textColor;
    }
    /**
     * @param $name
     * @param $value
     *
     * @return mixed
     */
    public function setCustomField($name, $value)
    {
        $this->customFields[$name] = $value;
    }
    /**
     * @param $name
     *
     * @return mixed
     */
    public function getCustomFieldValue($name)
    {
        return $this->customFields[$name];
    }
    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }
    /**
     * @param $name
     *
     * @return mixed
     */
    public function removeCustomField($name)
    {
        if (!isset($this->customFields[$name]) && !array_key_exists($name, $this->customFields)) {
            return null;
        }
        $removed = $this->customFields[$name];
        unset($this->customFields[$name]);
        return $removed;
    }
    /**
     * @return array
     */
    public function toArray()
    {
        $event = [];
        $event['title']             = $this->getTitle();
        $event['start']             = $this->getStartDate()->format("Y-m-d\TH:i:sP");
        $event['allDay']            = $this->isAllDay();
        $event['editable']          = $this->isEditable();
        $event['startEditable']     = $this->isStartEditable();
        $event['durationEditable']  = $this->isDurationEditable();
        $event['overlap']           = $this->isOverlap();
        if (null !== $this->getId()) {
            $event['id'] = $this->getId();
        }
        if (null !== $this->getUrl()) {
            $event['url'] = $this->getUrl();
        }
        if (null !== $this->getBackgroundColor()) {
            $event['backgroundColor'] = $this->getBackgroundColor();
        }
        if (null !== $this->getTextColor()) {
            $event['textColor'] = $this->getTextColor();
        }
        if (null !== $this->getClassName()) {
            $event['className'] = $this->getClassName();
        }
        if (null !== $this->getEndDate()) {
            $event['end'] = $this->getEndDate()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $this->getRendering()) {
            $event['rendering'] = $this->getRendering();
        }
        if (null !== $this->getConstraint()) {
            $event['constraint'] = $this->getConstraint();
        }
        if (null !== $this->getSource()) {
            $event['source'] = $this->getSource();
        }
        if (null !== $this->getColor()) {
            $event['color'] = $this->getColor();
        }
        if($this->getCustomFields()){
            foreach ($this->getCustomFields() as $field => $value) {
                $event[$field] = $value;
            }
        }
        return $event;
    }
}