<?php namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

/** @Entity */
class summaries extends Model {

    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;

    /** @Column(type="string") */
    private $g_code;

    /** @Column(type="string") */
    private $t_a_code;

    /** @Column(type="string") */
    private $t_b_code;

    /** @Column(type="string") */
    private $t_a_score;

    /** @Column(type="string") */
    private $t_b_score;

    /** @Column(type="string") */
    private $t_won;

    /** @Column(type="string") */
    private $heading;

    /** @Column(type="string") */
    private $summary;

    public $timestamps = false;

    /**
     * @return mixed
     */
    public function getGCode()
    {
        return $this->g_code;
    }

    /**
     * @param mixed $g_code
     */
    public function setGCode($g_code)
    {
        $this->g_code = $g_code;
    }

    /**
     * @return mixed
     */
    public function getTACode()
    {
        return $this->t_a_code;
    }

    /**
     * @param mixed $t_a_code
     */
    public function setTACode($t_a_code)
    {
        $this->t_a_code = $t_a_code;
    }

    /**
     * @return mixed
     */
    public function getTBCode()
    {
        return $this->t_b_code;
    }

    /**
     * @param mixed $t_b_code
     */
    public function setTBCode($t_b_code)
    {
        $this->t_b_code = $t_b_code;
    }

    /**
     * @return mixed
     */
    public function getTAScore()
    {
        return $this->t_a_score;
    }

    /**
     * @param mixed $t_a_score
     */
    public function setTAScore($t_a_score)
    {
        $this->t_a_score = $t_a_score;
    }

    /**
     * @return mixed
     */
    public function getTBScore()
    {
        return $this->t_b_score;
    }

    /**
     * @param mixed $t_b_score
     */
    public function setTBScore($t_b_score)
    {
        $this->t_b_score = $t_b_score;
    }

    /**
     * @return mixed
     */
    public function getTWon()
    {
        return $this->t_won;
    }

    /**
     * @param mixed $t_won
     */
    public function setTWon($t_won)
    {
        $this->t_won = $t_won;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * @param mixed $heading
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }



}
