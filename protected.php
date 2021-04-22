<?php
class Person 
{
		protected $fullName="nguyễn vẵn a";
		protected function getFullName()
		{
			  return $this->fullName;
		}
}  
class Employee extends Person    // khác với private là lớp con kế thừa vẫn có thể truy cập được
{
	public function getFullNameParent()
	{
		return $this->fullName; // Lấy thuộc tính cha
	}
}	
	$per = new Employee();
	echo $per->getFullNameParent();
 ?>   