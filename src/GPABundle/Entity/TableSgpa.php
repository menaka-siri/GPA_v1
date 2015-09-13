<?php

namespace GPABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableSgpa
 */
class TableSgpa
{
    /**
     * @var string
     */
    private $sgpa;

    /**
     * @var integer
     */
    private $semCredits;

    /**
     * @var string
     */
    private $studentId;

    /**
     * @var integer
     */
    private $semester;


    /**
     * Set sgpa
     *
     * @param string $sgpa
     * @return TableSgpa
     */
    public function setSgpa($sgpa)
    {
        $this->sgpa = $sgpa;

        return $this;
    }

    /**
     * Get sgpa
     *
     * @return string 
     */
    public function getSgpa()
    {
        return $this->sgpa;
    }

    /**
     * Set semCredits
     *
     * @param integer $semCredits
     * @return TableSgpa
     */
    public function setSemCredits($semCredits)
    {
        $this->semCredits = $semCredits;

        return $this;
    }

    /**
     * Get semCredits
     *
     * @return integer 
     */
    public function getSemCredits()
    {
        return $this->semCredits;
    }

    /**
     * Set studentId
     *
     * @param string $studentId
     * @return TableSgpa
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
     * Set semester
     *
     * @param integer $semester
     * @return TableSgpa
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
}
