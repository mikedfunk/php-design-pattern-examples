<?php
/**
 * new line title decorator
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace SiteTitle;


/**
 * NewLineTitleDecorator
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class NewLineTitleDecorator implements Title
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
     * decorate the title with a new line at the end
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title->getTitle() . "\n";
    }
}
