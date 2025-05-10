# Cache Memo Flexible bug reproduction

A small project to demonstrate an issue calling `Cache::memo()->flexible()`.

## Installation

1. Clone this repo
2. Run `composer install` and `npm install`

## Reproducing the issue

1. Run `composer run dev` to start the web server
2. Go to http://localhost:8000
3. You will see the text "Hello, world!" show up
4. Wait 2 seconds
5. Refresh the page, you will still see "Hello, world!"
6. Go to your terminal, you will see `Call to undefined method Illuminate\Cache\MemoizedStore::lock()`
