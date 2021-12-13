<?php
class Bootkit_Nav_Walker extends Walker_Nav_Menu
{
    // public function start_lvl(&$output, $depth = 0, $args = [])
    // {
    //     $output .= '<ul class="dropdown-menu dropdown-menu-right">';
    // }

    // public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    // {
    //     $display_depth = ($depth + 1);
    //     $classes = array(
    //         'nav-item',

    //         ($display_depth >= 2 ? 'sub-sub-menu' : ''),
    //         'menu-depth-' . $display_depth,
    //     );
    //     $class_names = implode(' ', $classes);
    //     // $output .= '<li class="nav-item dropdown">';
    //     $output .= '<li class="' . $class_names . '">';
    //     $output .= $args->before;
    //     $output .= '<a class="nav-link dropdown-toggle" href="' . $item->url . '">';
    //     $output .= $args->link_before . $item->title . $args->Link_after;
    //     $output .= '</a>';
    //     $output .= $args->after;
    // }

    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '<ul class="dropdown-menu dropdown-menu-right">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $item_html = '';
        parent::start_el($item_html, $item, $depth, $args);

        if ($item->is_dropdown && $depth === 0) {
            $item_html = str_replace('<a', '<a class="nav-link dropdown-toggle" data-toggle="dropdown"', $item_html);
            $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html);
        } elseif ($depth === 0) {
            $item_html = str_replace('<a', '<a class="nav-link"', $item_html);
        } elseif ($depth === 1) {
            $item_html = str_replace('<a', '<a class="dropdown-item"', $item_html);
        }

        $output .= $item_html;
    }

    public function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        if ($element->current) {
            $element->classes[] = 'active';
        }

        $element->is_dropdown = !empty($children_elements[$element->ID]);

        if ($element->is_dropdown) {
            if ($depth === 0) {
                $element->classes[] = 'nav-item dropdown';
            } elseif ($depth === 1) {
                // Extra level of dropdown menu,
                // as seen in http://twitter.github.com/bootstrap/components.html#dropdowns
                $element->classes[] = 'dropdown-submenu';
            }
        } else {
            if ($depth === 0) {
                $element->classes[] = 'nav-item';
            }
        }

        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '</li>';
    }

    public function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
}