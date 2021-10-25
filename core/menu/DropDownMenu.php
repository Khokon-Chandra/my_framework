<?php


namespace app\core\menu;


class DropDownMenu
{
    public function __toString()
    {
        return sprintf("      <li class='nav-item active'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='true' aria-controls='collapseTwo'>
          <i class='fa fa-fw fa-cog'></i>
          <span>Post</span>
        </a>
        <div id='collapseTwo' class='collapse show' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
          <div class='bg-white py-2 collapse-inner rounded'>
            <h6 class='collapse-header'>Custom posts:</h6>
            <a class='collapse-item active' href='buttons.html'>Add new</a>
            <a class='collapse-item' href='cards.html'>All Post</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class='sidebar-divider d-none d-md-block'>");
    }
}