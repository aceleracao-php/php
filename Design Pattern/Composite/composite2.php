<?php

/**
 * Interface IMenu
 */
interface IMenu
{
    public function render();
}
/**
 * Class MenuItem (Leaf)
 */
class MenuItem implements IMenu
{
    private $text;
    private $url;

    public function __construct($text, $url)
    {
        $this->text = $text;
        $this->url = $url;
    }

    public function render()
    {
        return '<a href="'.$this->url.'">'.$this->text.'</a>';
    }
}
/**
 * Class MenuGroup (Composite)
 */
class MenuGroup implements IMenu
{
    private $items = [];

    private $text;
    private $url;

    public function __construct($text = null, $url = null)
    {
        $this->text = $text;
        $this->url = $url;
    }

    public function addChildren(IMenu $item)
    {
        array_push($this->items, $item);
    }

    public function render()
    {
        $html = "";

        if($this->text && $this->url) {
            $html .= '<a href="'.$this->url.'">'.$this->text.'</a>';
        }

        $html .= "<ul class='menu'>";

        foreach($this->items as $item) {
            $html .= '<li>' . $item->render() . '</li>';
        }

        $html .= "</ul>";

        return $html;
    }

    public function getItems()
    {
        return $this->items;
    }
}

$items = [
        new MenuItem("Home", "#"),
        new MenuItem("About", "#"),
        [
            new MenuGroup("Services", "#"),
            'children' => [
                new MenuItem("Web Development", "#"),
                new MenuItem("Mobile App Development", "#")
            ]
        ],
        [
            new MenuGroup("Products", "#"),
            'children' => [
                new MenuItem("WebSites", "#"),
                [
                    new MenuGroup("Mobile Apps", "#"),
                    'children' => [
                        new MenuItem("Android", "#"),
                        new MenuItem("IOS", "#")
                    ]
                ]
            ]
        ],
        new MenuItem("Contact us", "#")
    ];
/**
 * recursive function to build the menu array
 */
function buildMenu(MenuGroup $menu, $items)
{
    foreach ($items as $item) {
        if(!is_array($item)) {
            $menu->addChildren($item);
        } else {
            $submenu = buildMenu($item[0], $item['children']);
            $menu->addChildren($submenu);
        }
    }
    return $menu;
}
$menu = buildMenu(new MenuGroup(), $items);
echo $menu->render();
