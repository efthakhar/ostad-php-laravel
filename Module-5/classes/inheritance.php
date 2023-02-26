<?php


class A{
    protected function showDeposit($deposit)
    {
        echo "deposit is $deposit";
    }
}

    
class B extends A{

    function getTotal($add)
    {
        $this->showDeposit($add);
    }
}

//(new B()->showDeposit(34));

(new B())->getTotal(456);

?>