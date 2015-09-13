<?php

namespace GPABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 */
class Course
{
    /**
     * @var string
     */
    private $lecId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $credits;

    /**
     * @var integer
     */
    private $semester;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var string
     */
    private $classAvg;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var string
     */
    private $id;


    /**
     * Set lecId
     *
     * @param string $lecId
     * @return Course
     */
    public function setLecId($lecId)
    {
        $this->lecId = $lecId;

        return $this;
    }

    /**
     * Get lecId
     *
     * @return string 
     */
    public function getLecId()
    {
        return $this->lecId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Course
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set credits
     *
     * @param integer $credits
     * @return Course
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return integer 
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set semester
     *
     * @param integer $semester
     * @return Course
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return integer 
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Course
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set classAvg
     *
     * @param string $classAvg
     * @return Course
     */
    public function setClassAvg($classAvg)
    {
        $this->classAvg = $classAvg;

        return $this;
    }

    /**
     * Get classAvg
     *
     * @return string 
     */
    public function getClassAvg()
    {
        return $this->classAvg;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return Course
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string 
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
