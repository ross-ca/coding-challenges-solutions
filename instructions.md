# Instructions

---

### Requirements

- Symfony 6.3.*
- PHP 8.*
- Composer 2.6.*

### Running the Application

1. Clone this Git repository to your local machine using `git clone https://github.com/ross-ca/coding-challenges-solutions.git`
2. Create an environment specific `.env` file in the app's root directory (coding_challenges_app). The only required environment variables are `APP_ENV`, which should be set to `dev`, and `APP_SECRET`, which should be set to a unique random string.
3. Open command prompt and navigate to the coding_challenges_app directory.
4. Run `composer install` to install package dependencies.
5. Start the Symfony server by running `symfony server:start`.
*Note the address and port of the server, typically* `localhost:8000`

### Using the Application

Each of the application functions are accessed through a different route. Their parameters are passed in subsequent segments of the URL path, as below.

- `/is-palindrome/(word)`
- `/is-anagram/(word 1)/(word 2)`
- `/is-pangram/(phrase)`

E.g. To check whether the word 'radar' is a palindrome, you would access the below URL.

*URL*: `https://localhost:8000/is-palindrome/radar`
*Response*: `{ "service_response": true }`

In all cases, spaces should be denoted as a dash `-`, as below.

*URL*: `https://localhost:8000/is-pangram/the-quick-brown-fox-jumps-over-the-lazy-dog`
*Response*: `{ "service_response": true }`
