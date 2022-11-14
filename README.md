<!-- SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![License][license-shield]][license-url]

<p>
  <a href="https://github.com/helsingborg-stad/s3-uploads-custom-endpoint">
    <img src="docs/images/hbg-github-logo-combo.png" alt="Logo" width="300">
  </a>
</p>
<h1>S3 uploads custom endpoint</h1>
<p>
  Adds custom endpoint support in S3 Uploads Plugin.
  <br />
  <a href="https://github.com/helsingborg-stad/s3-uploads-custom-endpoint/issues">Report Bug</a>
  ·
  <a href="https://github.com/helsingborg-stad/s3-uploads-custom-endpoint/issues">Request Feature</a>
</p>

## Summary
Extends [Human made S3 Uploads](https://github.com/humanmade/S3-Uploads) to accept config constants set the regular WP way.

## Settings
Define the constants in you WP configuration file to point to new endpoint and enable debugging
```php
define('S3_UPLOADS_CUSTOM_ENDPOINT', 'https://custom-s3-endpoint.com');
define('S3_UPLOADS_DEBUG', true);
```

## License
Distributed under the [MIT License][license-url].


## Acknowledgements
- [othneildrew Best README Template](https://github.com/othneildrew/Best-README-Template)


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/helsingborg-stad/s3-uploads-custom-endpoint.svg?style=flat-square
[contributors-url]: https://github.com/helsingborg-stad/s3-uploads-custom-endpoint/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/helsingborg-stad/s3-uploads-custom-endpoint.svg?style=flat-square
[forks-url]: https://github.com/helsingborg-stad/s3-uploads-custom-endpoint/network/members
[stars-shield]: https://img.shields.io/github/stars/helsingborg-stad/s3-uploads-custom-endpoint.svg?style=flat-square
[stars-url]: https://github.com/helsingborg-stad/s3-uploads-custom-endpoint/stargazers
[issues-shield]: https://img.shields.io/github/issues/helsingborg-stad/s3-uploads-custom-endpoint.svg?style=flat-square
[issues-url]: https://github.com/helsingborg-stad/s3-uploads-custom-endpoint/issues
[license-shield]: https://img.shields.io/github/license/helsingborg-stad/s3-uploads-custom-endpoint.svg?style=flat-square
[license-url]: https://raw.githubusercontent.com/helsingborg-stad/s3-uploads-custom-endpoint/main/LICENSE
