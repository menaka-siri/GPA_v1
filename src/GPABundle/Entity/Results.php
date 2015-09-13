<?php

namespace GPABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Results
 */
class Results
{
    /**
     * @var string
     */
    private $grade;

    /**
     * @var string
     */
    private $credits;

    /**
     * @var integer
     */
    private $semester;

    /**
     * @var string
     */
    private $studentId;

    /**
     * @var string
     */
    private $courseId;


    /**
     * Set grade
     *
     * @param string $grade
     * @return Results
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set credits
     *
     * @param string $credits
     * @return Results
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return string 
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set semester
     *
     * @param integer $semester
     * @return Results
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
     * Set studentId
     *
     * @param string $studentId
     * @return Results
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return string 
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set courseId
     *
     * @param string $courseId
     * @return Results
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return string 
     */
    public function getCourseId()
    {
        return $this->courseId;
    }
}
