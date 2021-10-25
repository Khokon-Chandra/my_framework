<?php


namespace app\core\menu;


class SingleItemMenu
{

    public function __toString()
    {
        return sprintf("<li class='nav-item active'><a class='nav-link' href='admin'><i class='fa fa-fw'></i>
                <span>Dashboard</span></a></li><hr class='sidebar-divider'>");
    }

}