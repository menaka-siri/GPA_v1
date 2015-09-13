<?php

namespace GPABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enrolments
 */
class Enrolments
{
    /**
     * @var string
     */
    private $studentId;

    /**
     * @var string
     */
    private $courseId;


    /**
     * Set studentId
     *
     * @param string $studentId
     * @return Enrolments
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
     * @return Enrolments
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
