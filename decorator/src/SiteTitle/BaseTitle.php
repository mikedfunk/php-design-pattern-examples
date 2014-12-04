<?php
/**
 * Base service to get a site title
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace SiteTitle;

/**
 * BaseTitle
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class BaseTitle implements Title
{

    /**
     * get the title string
     *
     * @return string
     */
    public function getTitle()
    {
        return 'mycoolsite.com';
    }
}
