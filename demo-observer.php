<?php 
/**
 * 观察者模式
 * @author cc
 */
interface SplObserver
{
	public addObserver(){}

	public delObserver(){}

	public notice(){}
}
/**
 * 被观察者
 */
class Observer implements SplObserver
{
	protected $arrObserver = array();

	public function addObserver($observer)
	{
		if ( !in_array($observer, $this->arrObserver)) {
			$this->arrObserver[] = new $observer;
		}
	}

	public function delObserver($observer)
	{
		if ( !in_array($observer, $this->arrObserver)) {
			unset($this->arrObserver[$observer]);
		}
	}

	public function notice(){
		if( $this->arrObserver ) {
			foreach ($this->arrObserver as $obj) {
				$obj->update();
			}
		}
	}
}	


interface SplObserver{
    function update(SplSubject $subject);
}
/**
 * 观察者1
 */
class Observer1 implements SplObserver
{
	public function update(Observer $obj){
		$this->price();
	}

	public function price(){
		echo  '价格下调！';
	}
}
/**
 * 观察者2
 */
class Observer2 implements SplObserver
{
	public function update(Observer $obj){
		$this->price();
	}

	public function price(){
		echo  '买买买';
	}
}


$observer = new Observer();
$observer->addObserver(new Observer1);
$observer->addObserver(new Observer2);
$observer->notice();


 ?>