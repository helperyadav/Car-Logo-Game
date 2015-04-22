<?php 

class Puzzle
{
	var $id, $src, $op1, $op2, $op3, $op4, $ans;
	function __construct()
	{
		$a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        }
	}
	
	function __construct7($id, $src, $op1, $op2, $op3, $op4, $ans)
	{
		$this->id = $id;
		$this->src = $src;
		$this->op1 = $op1;
		$this->op2 = $op2;
		$this->op3 = $op3;
		$this->op4 = $op4;
		$this->ans = $ans;
	}
};

?>