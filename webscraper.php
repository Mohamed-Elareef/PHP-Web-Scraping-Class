<?php

/**
 * WebScraper class
 *
 * This class allows for easy web scraping of a specified URL.
 *
 * @author John Doe
 * @copyright 2021
 *
 */
class WebScraper {
    /**
     * @var string $url The URL to scrape.
     */
    private $url;

    /**
     * Constructor
     *
     * @param string $url The URL to scrape.
     */
    public function __construct($url) {
        $this->url = $url;
    }

    /**
     * Get the HTML source code of the specified URL.
     *
     * @return string The HTML source code.
     */
    public function get_html() {
        $html = file_get_contents($this->url);
        return $html;
    }

    /**
     * Get the title of the specified URL.
     *
     * @return string The title of the webpage.
     */
    public function get_title() {
        $html = $this->get_html();
        preg_match('/<title>(.+)<\/title>/', $html, $matches);
        return $matches[1];
    }

    /**
     * Get the meta description of the specified URL.
     *
     * @return string The meta description of the webpage.
     */
    public function get_description() {
        $html = $this->get_html();
        preg_match('/<meta name="description" content="(.+)"/', $html, $matches);
        return $matches[1];
    }

    /**
     * Get all images URLs of the specified URL.
     *
     * @return array An array of image URLs.
     */
    public function get_images() {
        $html = $this->get_html();
        preg_match_all('/<img[^>]+src="([^">]+)"/', $html, $matches);
        return $matches[1];
    }

    /**
     * Get all links URLs of the specified URL.
     *
     * @return array An array of links URLs.
     */
    public function get_links() {
        $html = $this->get_html();
        preg_match_all('/<a[^>]+href="([^">]+)"/', $html, $matches);
        return $matches[1];
    }
}



?>
