<?php

namespace GPABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableGpa
 */
class TableGpa
{
    /**
     * @var string
     */
    private $gpa;

    /**
     * @var integer
     */
    private $totCredit;

    /**
     * @var string
     */
    private $studentId;


    /**
     * Set gpa
     *
     * @param string $gpa
     * @return TableGpa
     */
    public function setGpa($gpa)
    {
        $this->gpa = $gpa;

        return $this;
    }

    /**
     * Get gpa
     *
     * @return string 
     */
    public function getGpa()
    {
        return $this->gpa;
    }

    /**
     * Set totCredit
     *
     * @param integer $totCredit
     * @return TableGpa
     */
    public function setTotCredit($totCredit)
    {
        $this->totCredit = $totCredit;

        return $this;
    }

    /**
     * Get totCredit
     *
     * @return integer 
     */
    public function getTotCredit()
    {
        return $this->totCredit;
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
}
