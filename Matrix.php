<?php


class Matrix
{
    private $matrix=[];
    private $rows;
    private $cols;

    public function __construct($rows,$cols)
    {
        $this->cols=$cols;
        $this->rows=$rows;
        $this->matrix=$this->printMatrix($this->rows,$this->cols);
    }

    public function printMatrix($rows,$cols){
        for($i = 0; $i < $rows; $i++)
        {
            for($j = 0; $j < $cols; $j++)
            {
                $matrix[$i][$j] = rand(1, 10);
            }
        }
        return $matrix;
    }

    public function addMatrix($matrix){
        for($i=0;$i<$this->rows;$i++){
            for ($j=0;$j<$this->cols;$j++){
                $this->matrix[$i][$j]+=$matrix;
            }
        }
        return $this->matrix;

    }

    public function diffMatrix($matrix){
        for($i=0;$i<$this->rows;$i++){
            for ($j=0;$j<$this->cols;$j++){
                $this->matrix[$i][$j]-=$matrix;
            }
        }
        return $this->matrix;
    }

    public function multMatrix($matrix){
        for($i=0;$i<$this->rows;$i++){
            for ($j=0;$j<$this->cols;$j++){
                $this->matrix[$i][$j]*=$matrix;
            }
        }
        return $this->matrix;
    }

    function toArray()
    {
        return $this->matrix;
    }


}