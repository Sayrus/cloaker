# Cloaker
Generate `<meta>` tag on demand. This is useful create redirect links without
leaking the source website nor the website used for redirection.
Cloaker does not require any database and uses only a single PHP file.

## Usage

Cloaker will check for non-empty arguments in the following order:
- `url`: Encoded url
- `legacy_url`: Plain text url

Unlike `legacy_url`, `url` handles the fragment identifier (everything after the # sign) correctly. `legacy_url` can't handle it as your browser will not send the fragment identifier to the server.

### Example

| Example                             | Browsed URL                                          | Redirection                |
| ----------------------------------- | ---------------------------------------------------- | -------------------------- |
| url only                            | cloaker.php?url=https%3A%2F%2Fexample.com            | https://example.com        |
| legacy_url only                     | cloaker.php?legacy_url=https://example.com           | https://example.com        |
| url with fragment-identifier        | cloaker.php?url=https%3A%2F%2Fexample.com%2F%23my-id | https://example.com/#my-id |
| legacy_url with fragment-identifier | cloaker.php?legacy_url=https://example.com/#my-id    | https://example.com        |

## Testing Cloaker
* [What is my Referer](https://www.whatismyreferer.com/)

## What's next?

* [ ] Show GUI when URL is empty allowing users to create redirection links
* [ ] Configurable delay to show a redirecting page
* [ ] Option to show safe-zone warning before redirecting to another page

## Credits
* Sayrus
