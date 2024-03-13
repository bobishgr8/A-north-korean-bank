<?php
class transaction{
    private $to_acc_no;
    private $val;
    private $type;
    public function __construct($to_acc_no,$val,$type) {
        $this->to_acc_no = $to_acc_no;
        $this->val = $val;
        $this->type = $type;
    }
}

class transfers extends transaction{
    private $from_acc_no;
    public function __construct($to_acc_no,$val,$type,$from_acc_no) {
        parent :: __construct($to_acc_no,$val,$type);
        $this->from_acc_no = $from_acc_no;
    }
}
?>