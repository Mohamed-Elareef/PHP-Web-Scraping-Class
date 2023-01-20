# Web Scraper

A simple PHP class for web scraping a specified URL.

## Installation

To use this class, you will need to have PHP installed on your system.

You can then include the class in your project by including the `webscraper.php` file.

## Usage

To use the class, first instantiate a new instance and pass in the URL you wish to scrape:
$scraper = new WebScraper('https://example.com');

Then, you can use the following methods to retrieve information from the URL:

- `get_html()`: Retrieves the HTML source code of the specified URL.
- `get_title()`: Retrieves the title of the specified URL.
- `get_description()`: Retrieves the meta description of the specified URL.
- `get_images()`: Retrieves all image URLs from the specified URL.
- `get_links()`: Retrieves all link URLs from the specified URL.


```php
$html = $scraper->get_html();
$title = $scraper->get_title();
$description = $scraper->get_description();
$images = $scraper->get_images();
$links = $scraper->get_links();
```


## Limitations

- This class does not handle errors or edge cases. If the website you're trying to scrape has anti-scraping measures in place, this class may not work as expected.
- Scraping a website can be against the website's terms of service, so it's important to check the website's policies before scraping.

## Support

For any questions or issues, please open an issue on this GitHub repository.

