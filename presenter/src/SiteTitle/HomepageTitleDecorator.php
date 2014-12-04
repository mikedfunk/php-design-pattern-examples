<?php
/**
 * add the homepage in front
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace SiteTitle;

/**
 * HomepageTitleDecorator
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class HomepageTitleDecorator implements Title
{

    /**
     * passed in title instance
     *
     * @var Title
     */
    protected $title;

    /**
     * dependency injection
     *
     * @param Title $title
     * @return void
     */
    public function __construct(Title $title)
    {
        $this->title = $title;
    }

    /**
     * get the decorated title string
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Welcome to the homepage! | ' . $this->title->getTitle();
    }
}
