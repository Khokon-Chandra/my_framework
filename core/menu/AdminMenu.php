<?php


namespace app\core\menu;




class AdminMenu
{

   public function singleMenu()
   {
       return new SingleItemMenu();
   }

   public function dropDownMenu()
   {
       return new DropDownMenu();
   }


}